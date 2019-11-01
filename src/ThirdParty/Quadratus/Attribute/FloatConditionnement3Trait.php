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
 * Conditionnement3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatConditionnement3Trait {

    /**
     * Conditionnement3.
     *
     * @var float
     */
    private $conditionnement3;

    /**
     * Get the conditionnement3.
     *
     * @return float Returns the conditionnement3.
     */
    public function getConditionnement3() {
        return $this->conditionnement3;
    }

    /**
     * Set the conditionnement3.
     *
     * @param float $conditionnement3 The conditionnement3.
     */
    public function setConditionnement3($conditionnement3) {
        $this->conditionnement3 = $conditionnement3;
        return $this;
    }
}
