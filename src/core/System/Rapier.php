<?php
namespace Rapier\core\System;rm.
* User: matheus
* Date: 03/02/17
* Time: 12:59
*/
class Rapier {

    public function run() {
        $commandClass = "Rapier\commands" . date() . "Command";
        $console = new Console();
    }

}

use Rapier\core\System\Console;


/**
 * Created by PhpSto