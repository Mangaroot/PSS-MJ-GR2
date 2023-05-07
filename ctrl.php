<?php
require_once 'init.php';
// Rozszerzenia:
// Dodanie klasy Router oraz Route, które realizują idee przedstawione poprzednio, ale na wyższym poziomie i obiektowo.
// Po pierwsze rezygnujemy ze struktury 'switch' w kontrolerze głównym i zastępujemy ją tablicą ścieżek przechowywaną
// wewnątrz obiektu routera. Router powstaje w skrypcie init.php i jak inne ważne obekty jest dostępny przez getRouter().

// Odpowiednio nazwane metody routera realizują wszystkie zadania iplementowane uprzednio w funkcji control oraz strukturze 'switch'.

// Oczywiście tym samym znika funkcja 'control' - jest ona prywatną metodą routera.

getRouter()->setDefaultRoute('NoteShowLike'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('register',    'RegisterCtrl');
getRouter()->addRoute('logout',      'LoginCtrl');

// Nazwy do zmiany "Note"
getRouter()->addRoute('NoteShowAll', 'NoteListCtrl',  ['user','moderator','admin']);
getRouter()->addRoute('NoteShowLike','NoteListCtrl',  ['user','admin']);

getRouter()->addRoute('NoteNew',     'NoteEditCtrl',  ['user','admin']);
getRouter()->addRoute('NoteEdit',    'NoteEditCtrl',  ['user','admin']);
getRouter()->addRoute('NoteSave',    'NoteEditCtrl',  ['user','admin']);
getRouter()->addRoute('NoteDelete',  'NoteEditCtrl',  ['user','admin']);

// Nazwy do zmiany "person"
getRouter()->addRoute('personShowAll',  'PersonListCtrl',	['admin']);
getRouter()->addRoute('personShowLike',  'PersonListCtrl',	['admin']);

getRouter()->addRoute('personEdit',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personSave',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personDelete',	'PersonEditCtrl',	['admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';