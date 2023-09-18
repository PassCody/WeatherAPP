<?php
	CLASS WeatherAPI {
		//"https://api.openweathermap.org/data/2.5/weather?q=".$_SESSION['stadt'].",".$_SESSION['plz'].";&appid=".$api_key."&lang=de&units=metric";
		PRIVATE $api_key = "5e783b16fe0f8a291d3a713c961a1e72";
		PRIVATE $api_url = "https://api.openweathermap.org/data/2.5/weather?q=";
		PRIVATE $api_city;
		PRIVATE $api_zip;
		PRIVATE $api_language;

		PUBLIC FUNCTION getWeatherAPIData() {
			if($this->getCity() !== "" && $this->getZIP() !== "") {
				$this->concatURL($this->getCity().",");
				$this->concatURL($this->getZIP().";");
				$this->concatURL("&appid=".$this->getAPIKey());
				$this->concatURL("&lang=".$this->getLanguage()."&units=metric");
				return $this->getWeatherAPIJSON($this->getAPIContent());
			}
			elseif ($this->getCity() !== "") {
				echo('<script>alert("Bitte füllen sie die Postleitzahl auch aus.");</script>');
				
			}
			elseif ($this->getZIP() !== "") {
				echo('<script>alert("Bitte füllen sie die Stadt auch aus.");</script>');
			}
		}

		PUBLIC FUNCTION setCity($city) {
			$this->api_city = $city;
		}

		PUBLIC FUNCTION setZIP($zip) {
			$this->api_zip = $zip;
		}

		PUBLIC FUNCTION setLanguage($language) {
			$this->api_language = $language;
		}

		PUBLIC FUNCTION getCity():String {
			return $this->api_city;
		}

		PUBLIC FUNCTION getZIP():String {
			return $this->api_zip;
		}

		PUBLIC FUNCTION getLanguage():String {
			return $this->api_language;
		}

		PUBLIC FUNCTION getAPIKey():String {
			return $this->api_key;
		}

		PUBLIC FUNCTION concatURL($String) {
			$this->api_url = $this->api_url . $String;
		}

		PUBLIC FUNCTION getAPIURL() {
			return $this->api_url;
		}

		PUBLIC FUNCTION getAPIContent() {
			return file_get_contents($this->getAPIURL());
		}

		PUBLIC FUNCTION getWeatherAPIJSON($page) {
			return json_decode($page, true);
		}
	}
?>