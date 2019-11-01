<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Machine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMachineTrait {

    /**
     * Machine.
     *
     * @var string
     */
    private $machine;

    /**
     * Get the machine.
     *
     * @return string Returns the machine.
     */
    public function getMachine() {
        return $this->machine;
    }

    /**
     * Set the machine.
     *
     * @param string $machine The machine.
     */
    public function setMachine($machine) {
        $this->machine = $machine;
        return $this;
    }
}
