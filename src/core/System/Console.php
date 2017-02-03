<?php
namespace Rapier\core\System;

use Rapier\core\System\ClientInterface;

/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 02/02/17
 * Time: 14:50
 */
class Console  extends ClientInterface {

    private $command;

    public function __construct(Command $command) {
        parent::__construct();
        $this->command = new $command();
    }

    public function run() {
    }


}