<?php
    require_once __DIR__ . '/Strumenti.php';

    class Basses extends Strumenti {
        public $corde;

        // override
        //con questa funzione richiamo la funzione principale di getItemInfo da Strumenti e aggiungo all'array la chiave corde
        public function getItemInfo() {
            $parent_array = parent::getItemInfo();
            $parent_array['corde'] = $this->corde;
            return $parent_array;
        }
    }
?>