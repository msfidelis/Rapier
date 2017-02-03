<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/02/17
 * Time: 13:22
 */

namespace Rapier\core\System;


class ClientInterface {

    private $args;
    private $commandName;

    public function __construct() {
        $this->args = $GLOBALS['argv'];
    }

    public function getArgs() {
        return $this->args;
    }
}