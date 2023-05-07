<?php

namespace app\controllers;

use app\forms\NoteEditForm;
use app\transfer\User;
use app\transfer\Result;

class NoteEditCtrl{
	private $form;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new NoteEditForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$user = unserialize($_SESSION['user']);
		$this->form->idNote      = getFromRequest('idNote');
		$this->form->idUser      = $user->id;
		$this->form->nameNote    = getFromRequest('name');
		$this->form->description = getFromRequest('description');
	}
	
	public function validate() {
		
		if (! (
            isset ( $this->form->idUser     ) &&
            isset ( $this->form->nameNote   ) &&
            isset ( $this->form->description)
			)) {
			return ! getMessages()->isError ();// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		}
			
			// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->idUser      == "") { getMessages()->addError ( 'Nie podano nazwiska' ); }
			if ($this->form->nameNote    == "") { getMessages()->addError ( 'Nie podano maila' );	}
			if ($this->form->description == "") { getMessages()->addError ( 'Nie podano hasła' );	}
		}

		return ! getMessages()->isError ();
	}

    public function action_NoteNew()
    {
        $this->getParams();

        $this->generateView();
    }

    public function action_NoteEdit()
    {
        $this->getParams();

		$user = getDB()->get("user","*",[
			"UserID" => $this->form->idUser
		]);
		
		$this->form->idUser      = $user['UserID'];
		$this->form->nameUser    = $user['FirstName'];
		$this->form->surname     = $user['Surname'];
		
		$note = getDB()->get('notes',"*",[
			"NotesID" => $this->form->idNote 
		]);

		$this->form->idNote      = $note['NotesID'];
		$this->form->nameNote    = $note['Name'];
		$this->form->description = $note['Description'];

        $this->generateView();
    }
	
    public function action_NoteSave()
    {
        $this->getParams();

        if($this->validate()){
			
			try {

				if ($this->form->idNote == "") {

					getDB()->insert('notes',[
						"Name" => $this->form->nameNote,
						"Description" => $this->form->description,
						"User_UserID" => $this->form->idUser
					]);

				} else {

					getDB()->update('notes',[
						"Name" => $this->form->nameNote,
						"Description" => $this->form->description
					],[
						"NotesID" => $this->form->idNote
					]);

				}

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
				$this->notes = [];
			} 

			forwardTo('NoteShowAll');

        } else {

		}

        $this->generateView();
    }
	
    public function action_NoteDelete()
    {
        $this->getParams();

		try {
			
			getDB()->delete('notes',[
				"NotesID" => $this->form->idNote
			]);
			
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		} 

		forwardTo('NoteShowLike');

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Edycji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('NoteEditView.tpl');
	
    }

}