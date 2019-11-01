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
 * Conditionnement1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatConditionnement1Trait {

    /**
     * Conditionnement1.
     *
     * @var float
     */
    private $conditionnement1;

    /**
     * Get the conditionnement1.
     *
     * @return float Returns the conditionnement1.
     */
    public function getConditionnement1() {
        return $this->conditionnement1;
    }

    /**
     * Set the conditionnement1.
     *
     * @param float $conditionnement1 The conditionnement1.
     */
    public function setConditionnement1($conditionnement1) {
        $this->conditionnement1 = $conditionnement1;
        return $this;
    }
}
