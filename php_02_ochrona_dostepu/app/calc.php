<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
$x = $_REQUEST ['x'] ?? " ";
$y = $_REQUEST ['y'] ?? " ";
$z = $_REQUEST ['z'] ?? " ";

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($z))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
}
if ( $z == "") {
	$messages [] = 'Nie podano liczby 1';
}
//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y, $z są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = ' ';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = ' ';
	}	
	if (! is_numeric( $z )) {
		$messages [] = ' ';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x); //kwota kredytu
	$y = intval($y); //oprocentowanie
	$z = intval($z); //ilosc lat
	//wykonanie operacji
	$result = ($x * (($y/100)/12) * ((1+(($y/100)/12))**($z*12)))/((((1+($y/12/100))**($z*12)))-1);
	
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';