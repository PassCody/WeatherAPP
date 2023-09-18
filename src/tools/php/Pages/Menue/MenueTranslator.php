<?php 
    CLASS MenueTranslator {
        PRIVATE $de = [
            "paramI" => "Stadt",
            "paramII" => "PLZ",
            "paramIII" => "Suche"
        ];
        PRIVATE $en = [
            "paramI" => "City",
            "paramII" => "ZIP Code",
            "paramIII" => "Search"
        ];

        PUBLIC FUNCTION getDE():Array {
            return $this->de;
        }

        PUBLIC FUNCTION getEN():Array {
            return $this->en;
        }
    }
?>