<!DOCTYPE html>
<html lang="<?php 
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	echo($lang);;
?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="robots" content="noindex,nofollow" />
		<title>
            PassWeather
		</title>
		<link rel="shortcut icon" href="./src/imgs/favicon-icon.png">
		<?php
			/* LIBARY LOADER */
			require_once("./init.php");
			$init = new Initialisation();
			
			/* RUN LIBARY LOADER */
			$init->loadBS();
			
			/* LOAD CSS FILES */
			$init->loadCSSFiles();
			
			/* LOAD JS FILES */
			$init->loadJSFiles();
		?></head>
	<body id="container-background">
		<?php
			include_once("./src/tools/php/Session_Handler/SessionDealer.php");
			include_once("./API/GET/WeatherAPI.api.php");
			$sh = new SessionDealer();
			$wa = new WeatherAPI();
			$sh->start_session();
			$sh->setSessionValueOf("lang", $lang);
			if (isset($_POST)) {
				foreach ($_POST as $key => $value) {
					$sh->setSessionValueOf($key, $value);
				}
			}
			if (isset($_SESSION)) {
				foreach ($_SESSION as $key => $value) {
					switch ($key) {
						case "lang":
							$wa->setLanguage($value);
						break;
						case "city":
							$wa->setCity($value);
						break;
						case "zip":
							$wa->setZIP($value);
						break;
					}
				}
			}
		?>

		<div class="container">
			<div class="row">
				<div class="col-*-12">
					<div class="row">
						<div class="container">
							<form method="POST" action="./">
								<div class="row">
									<?php
										include_once("./src/tools/php/Pages/Menue/Menue.php");
										$menue = new Menue($wa->getLanguage());
										echo($menue->menuePrinter());
									?>
								</dvi>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-*-12 d-flex justify-content-center">
								<?php
									if ($wa->getCity() !== "" && $wa->getZIP() !== "") {
										include_once("./src/tools/php/Pages/WeatherData/WeatherPrinter.php");
										$wp = new WeatherPrinter();
										$wp->printHeadline($wa);
									}
								?>
							</div>
							<div class="col-*-12 d-flex justify-content-center">
								<?php
									if ($wa->getCity() !== "" && $wa->getZIP() !== "") {
										include_once("./src/tools/php/Pages/WeatherData/WeatherData.php");
										$wd = new WeatherData($wa->getWeatherAPIData(), $wa->getLanguage());
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
