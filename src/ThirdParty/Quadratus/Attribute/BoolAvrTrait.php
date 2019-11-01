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
 * Avr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvrTrait {

    /**
     * Avr.
     *
     * @var bool
     */
    private $avr;

    /**
     * Get the avr.
     *
     * @return bool Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
    }

    /**
     * Set the avr.
     *
     * @param bool $avr The avr.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }
}
