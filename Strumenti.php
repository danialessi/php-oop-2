<?php
    class Strumenti {
        public $tipologia;
        public $marca;
        public $modello;
        public $prezzo;

        public function __construct($tipologia, $marca, $modello, $prezzo) {
            $this->tipologia = $tipologia;
            $this->marca = $marca;
            $this->modello = $modello;
            $this->prezzo = $prezzo;
        }

        //con questa funzione inserisco in un array i vari parametri dell'oggetto per poterli stampare più facilmente in pagina
        public function getItemInfo() {
            return [
                'tipologia' => $this->tipologia,
                'marca' => $this->marca,
                'modello' => $this->modello,
                'prezzo' => $this->prezzo
            ];
        }
    }
?>