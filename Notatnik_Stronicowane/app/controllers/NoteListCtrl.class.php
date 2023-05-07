<?php

namespace app\controllers;

use app\forms\NoteListForm;
use app\transfer\User;
use app\transfer\Result;

class NoteListCtrl{
	private $form;
	private $notes;
	private $items = 3;
	private $limit;
	private $page = 0;
	private $counter = 0;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new NoteListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$user = unserialize($_SESSION['user']);
		$this->form->searchbar = getFromRequest('searchbar');
		$this->page = getFromRequest('page');
		$this->form->searchbar = getFromRequest('searchbar');
		$this->form->privilege = $user->privilege;
		$this->form->idUser = $user->id;
	}
	
	public function validate() {
		
		return true;

	}

    public function action_NoteShowLike()
    {
        $this->getParams();

        if($this->validate()){
            
			try {

				$this->counter = getDB()->count('notes',[
					"User_UserID" => $this->form->idUser,
					'AND' => ['Name[~]' => $this->form->searchBar]
				]);

				$this->limit = [ $this->items * $this->page, $this->items];

				$this->notes = getDB()->select('notes',"*",[
					"User_UserID" => $this->form->idUser,
					'AND' => ['Name[~]' => $this->form->searchBar],
					'LIMIT' => $this->limit
				]);  
			
			}catch(Throwable $th) {

				$this->notes = [];
				
			}

        }

        $this->generateView();
    }

    public function action_NoteShowAll()
    {
        $this->getParams();

        if($this->validate()){

			try {

				$this->counter = getDB()->count('notes');

				$this->limit = [ $this->items * $page, $this->items];

				$this->dogs = getDB()->select("notes","*",[
            	    'LIMIT' => $this->limit
            	]);

			} catch (Throwable $th) {

				$this->notes = [];

			}
			
        }

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('notes',$this->notes);
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('counter',$this->counter);
		getSmarty()->display('NoteListView.tpl');
	
    }

}