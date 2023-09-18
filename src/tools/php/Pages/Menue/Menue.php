<?php
    include_once("./src/tools/php/Pages/Menue/MenueTranslator.php");
    CLASS Menue EXTENDS MenueTranslator {
        PRIVATE $paramI;
        PRIVATE $paramII;
        PRIVATE $paramIII;

        PUBLIC FUNCTION __construct($lang) {
            if ($lang !== "de") {
                $lang = "en";
            }
            $lang = "get".strtoupper($lang);
            $this->setParams(parent::{$lang}(), "paramI", "paramII", "paramII");
        }

        PRIVATE FUNCTION setParams($array, $paramI, $paramII, $paramIII) {
            $this->setParamI($array[$paramI]);
            $this->setParamII($array[$paramII]);
            $this->setParamIII($array[$paramIII]);
        }

        PRIVATE FUNCTION setParamI($paramI) {
            $this->paramI = $paramI;
        }  
        PRIVATE FUNCTION setParamII($paramII) {
            $this->paramII = $paramII;
        }
        PRIVATE FUNCTION setParamIII($paramIII) {
            $this->paramIII = $paramIII;
        }  

        PRIVATE FUNCTION getParamI():String {
            return $this->paramI;
        }  
        PRIVATE FUNCTION getParamII():String {
            return $this->paramII;
        }
        PRIVATE FUNCTION getParamIII():String {
            return $this->paramIII;
        }  

        PUBLIC FUNCTION menuePrinter():String {
            $string = ('
            <div class="col-5">
                <input type="city" class="form-control" id="city" placeholder="'.$this->getParamI().': Berlin" name="city">
            </div>
            <div class="col-5">
                <input type="zip" class="form-control" id="zip" placeholder="'.$this->getParamII().': 10115" name="zip">
			</div>
			<div class="col-2">
			    <button type="submit" class="btn btn-primary">'.$this->getParamIII().'</button>
			</div>
            ');
            return $string;
        }
    }
?>