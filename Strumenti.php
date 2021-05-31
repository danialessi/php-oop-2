<?php
    class Strumenti {
        public $tipologia;
        public $marca;
        public $modello;

        public function __construct($tipologia, $marca, $modello) {
            $this->tipologia = $tipologia;
            $this->marca = $marca;
            $this->modello = $modello;
        }

        //con questa funzione inserisco in un array i vari parametri dell'oggetto per poterli stampare più facilmente in pagina
        public function getItemInfo() {
            return [
                'tipologia' => $this->tipologia,
                'marca' => $this->marca,
                'modello' => $this->modello
            ];
        }
    }
?>