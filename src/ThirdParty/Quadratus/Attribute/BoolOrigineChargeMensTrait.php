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
 * Origine charge mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOrigineChargeMensTrait {

    /**
     * Origine charge mens.
     *
     * @var bool
     */
    private $origineChargeMens;

    /**
     * Get the origine charge mens.
     *
     * @return bool Returns the origine charge mens.
     */
    public function getOrigineChargeMens() {
        return $this->origineChargeMens;
    }

    /**
     * Set the origine charge mens.
     *
     * @param bool $origineChargeMens The origine charge mens.
     */
    public function setOrigineChargeMens($origineChargeMens) {
        $this->origineChargeMens = $origineChargeMens;
        return $this;
    }
}
