<?php
    CLASS SessionDealer {
        
        PUBLIC FUNCTION start_session() {
            if ($this->checkSession()) {
                session_start();
            }
        }

        PUBLIC FUNCTION stop_session() {
            unset($_SESSION);
            session_destroy();
        }

        PUBLIC FUNCTION setSessionValueOf($key, $value) {
            $_SESSION[$key] = $value;
        }

        PUBLIC FUNCTION getSessionValueOf($key) {
            return $_SESSION[$key];
        }
        
        PUBLIC FUNCTION checkSession() {
            if (!isset($_SESSION)) {
                return true;
            }
            return false;
        }
    }
?>