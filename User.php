<?php
    class User {
        public $nome;
        public $cognome;
        public $email;
        public $items = [];

        public function __construct($nome, $cognome, $email) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->email = $email;
        }

        // con questa funzione aggiungo il prodotto al "carrello" dell'utente 
        public function addItem($item) {
            $this->items[] = $item;
        }
    }
?>