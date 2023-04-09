<?php

namespace app\controllers;

use app\forms\NoteListForm;
use app\transfer\User;
use app\transfer\Result;

class NoteListCtrl{
	private $form;
	private $notes;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new NoteListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$user = unserialize($_SESSION['user']);
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
            
			$this->notes = getDB()->select('notes_view',"*",[
				"User_UserID" => $this->form->idUser,
				'AND' => ['Name[~]' => $this->form->searchBar]
			]);

        }

        $this->generateView();
    }

    public function action_NoteShowAll()
    {
        $this->getParams();

        if($this->validate()){

            $this->notes = getDB()->select('notes_view',"*");
        }

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('notes',$this->notes);
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('NoteListView.tpl');
	
    }

}