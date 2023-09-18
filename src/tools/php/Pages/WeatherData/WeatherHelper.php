<?php
    CLASS WeatherHelper {

        PRIVATE $weather_helper_array;
        PRIVATE $wind_degrees;

        PUBLIC FUNCTION __construct($lang) {
            $this->setWeatherHelperArray($lang);
            $this->setWindDegrees($lang);
        }

        PRIVATE FUNCTION setWindDegrees($lang) {
            if ($lang === "de") {
                $this->setWindDegreesDE();
            }
            else {
                $this->setWindDegreesEN();
            }
        }

        PRIVATE FUNCTION setWindDegreesDE() {
            $this->wind_degrees = [
                0	=>	"Norden",
                1	=>	"Nordnordosten",
                2	=>	"Nordosten",
                3	=>	"Ostnordosten",
                4	=>	"Osten",
                5	=>	"Ostsüdosten",
                6	=>	"Südosten",
                7	=>	"Südsüdosten",
                8	=>	"Süden",
                9	=>	"Südsüdwesten",
                10	=>	"Südwesten",
                11	=>	"Westsüdwesten",
                12	=>	"Westen",
                13	=>	"Westnordwesten",
                14	=>	"Nordwesten",
                15	=>	"Nordnordwesten",
                16	=>	"Norden"
            ];
        }
        PRIVATE FUNCTION setWindDegreesEN() {
            $this->wind_degrees = [
                0	=>	"North",
                1	=>	"North-Northeast",
                2	=>	"Northeast",
                3	=>	"East-Northeast",
                4	=>	"East",
                5	=>	"East-southeast",
                6	=>	"Southeast",
                7	=>	"South-southeast",
                8	=>	"South",
                9	=>	"South-southwest",
                10	=>	"Southwest",
                11	=>	"West-southwest",
                12	=>	"West",
                13	=>	"West-Northwest",
                14	=>	"Northwest",
                15	=>	"North-Northwest",
                16	=>	"North"
            ];
        }

        PRIVATE FUNCTION setWeatherHelperArray($lang) {
            if ($lang === "de") {
                $this->setWeatherHelperArrayDE();
            }
            else {
                $this->setWeatherHelperArrayEN();
            }
        }

        PRIVATE FUNCTION setWeatherHelperArrayDE() {
            $this->weather_helper_array = [
                "lon"			=>	"Längengrad",
                "lat"			=>	"Breitengrad",
                "id"			=>	"Id",
                "main"			=>	"Wetter",
                "description"	=>	"Beschreibung",
                "icon"			=>	"Icon",
                "base"			=>	"Base",
                "temp"			=>	"Temperatur",
                "feels_like"	=>	"gefuehlte_Temperatur",
                "temp_min"		=>	"Temperatur_min",
                "temp_max"		=>	"Temperatur_max",
                "pressure"		=>	"Druck",
                "humidity"		=>	"Feuchtigkeit",
                "sea_level"		=>	"Meereshöhe",
                "grnd_level"	=>	"ebenerdig",
                "visibility"	=>	"Sichtweite",
                "speed"			=>	"Geschwindigkeit",
                "deg"			=>	"Grad",
                "gust"			=>	"Böe",
                "all"			=>	"alles",
                "dt"			=>	"dt",
                "type"			=>	"Typ",
                "country"		=>	"Land",
                "sunrise"		=>	"Sonnenaufgang",
                "sunset"		=>	"Sonnenuntergang",
                "timezone"		=>	"Zeitzone",
                "name"			=>	"Name",
            ];
        }

        PRIVATE FUNCTION setWeatherHelperArrayEN() {
            $this->weather_helper_array = [
                "lon"			=>	"longitude",
                "lat"			=>	"latitude",
                "id"			=>	"Id",
                "main"			=>	"Weather",
                "description"	=>	"Description",
                "icon"			=>	"Icon",
                "base"			=>	"Base",
                "temp"			=>	"temperature",
                "feels_like"	=>	"felt_temperature",
                "temp_min"		=>	"Temperature_min",
                "temp_max"		=>	"temperature_max",
                "pressure"		=>	"pressure",
                "humidity"		=>	"moisture",
                "sea_level"		=>	"Sea	level",
                "grnd_level"	=>	"ground	level",
                "visibility"	=>	"visibility",
                "speed"			=>	"Speed",
                "deg"			=>	"degree",
                "gust"			=>	"gust",
                "all"			=>	"everything",
                "dt"			=>	"dt",
                "type"			=>	"Type",
                "country"		=>	"Country",
                "sunrise"		=>	"sunrise",
                "sunset"		=>	"sunset",
                "timezone"		=>	"timezone",
                "name"			=>	"Name"
            ];
        }

        PRIVATE FUNCTION getWindDegrees():Array {
            return $this->wind_degrees;
        }

        PRIVATE FUNCTION getWeatherHelperArray():Array {
            return $this->weather_helper_array;
        }

        PRIVATE FUNCTION wind_direction($wind_degrees, $grad) {
            $result =  round($grad / 22.5);
            return $wind_degrees[$result];
        }

        PUBLIC FUNCTION getWindDirection($grad):String {
            return $this->wind_direction($this->getWindDegrees(), $grad);
        }
    }
?>