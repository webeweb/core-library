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
 * Controler code reg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControlerCodeRegTrait {

    /**
     * Controler code reg.
     *
     * @var bool
     */
    private $controlerCodeReg;

    /**
     * Get the controler code reg.
     *
     * @return bool Returns the controler code reg.
     */
    public function getControlerCodeReg() {
        return $this->controlerCodeReg;
    }

    /**
     * Set the controler code reg.
     *
     * @param bool $controlerCodeReg The controler code reg.
     */
    public function setControlerCodeReg($controlerCodeReg) {
        $this->controlerCodeReg = $controlerCodeReg;
        return $this;
    }
}
