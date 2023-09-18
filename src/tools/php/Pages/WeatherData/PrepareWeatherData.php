<?php
    include_once("./src/tools/php/Pages/WeatherData/WeatherHelper.php");
    CLASS PrepareWeatherData EXTENDS WeatherHelper{
        PRIVATE $weatherdata, $weatherhelper;
        PUBLIC FUNCTION __construct($data, $lang) {
            foreach ($data as $key => $value) {
                parent::__construct($lang);
                print_r($key);
                echo(" => ");
                print_r($value);
                echo("<br>");
            }
        }

        PRIVATE FUNCTION setWeatherData () {

        }

        PRIVATE FUNCTION setWeatherHelper () {
            
        }
    }
?> 