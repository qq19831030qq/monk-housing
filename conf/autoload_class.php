<?php
if (!defined('MONK_VERSION')) exit('Access is no allowed.');

return array(
    'controller'  => MONK_LIB.'core'.DS.'controller.php',
    'model'       => MONK_LIB.'core'.DS.'model.php',
    'view'        => MONK_LIB.'core'.DS.'view.php',
    'mysql'       => MONK_LIB.'core'.DS.'db'.DS.'mysql.php',
    'block'       => MONK_LIB.'core'.DS.'block.php',
);
