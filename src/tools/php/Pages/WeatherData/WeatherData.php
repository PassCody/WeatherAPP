<?php
    include_once("./src/tools/php/Pages/WeatherData/PrepareWeatherData.php");
    CLASS WeatherData EXTENDS PrepareWeatherData {
        PUBLIC FUNCTION __construct($data, $lang) {
            parent::__construct($data, $lang);
        }
    }
?> 