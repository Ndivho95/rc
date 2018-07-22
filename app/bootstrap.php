
<?php
//Load Config 
require_once 'config/config.php';
//url helper functions
require_once 'helpers/url_helper.php';

//session helper functions
require_once 'helpers/session_helper.php';

//Autoload Core libraries

//automatically loads libraries using their name
spl_autoload_register(function($className){
    require_once 'libraries/'. $className .'.php';
});