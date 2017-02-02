<?php
namespace Rapier\System;

use Rapier\Interfaces\Command;

/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 02/02/17
 * Time: 14:50
 */
class Console  {

    private $command;

    public function __construct(Command $command) {
        $this->command = new $command();
    }

    public function run()


}