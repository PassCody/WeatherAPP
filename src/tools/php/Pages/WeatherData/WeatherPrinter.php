<?php
    CLASS WeatherPrinter {

        PUBLIC FUNCTION printHeadline($wa) {
            echo('<h1>Wetter für ' . $wa->getCity() . '</h1>');
        }
        
    }
?>