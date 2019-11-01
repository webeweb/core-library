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
 * Conditionnement2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatConditionnement2Trait {

    /**
     * Conditionnement2.
     *
     * @var float
     */
    private $conditionnement2;

    /**
     * Get the conditionnement2.
     *
     * @return float Returns the conditionnement2.
     */
    public function getConditionnement2() {
        return $this->conditionnement2;
    }

    /**
     * Set the conditionnement2.
     *
     * @param float $conditionnement2 The conditionnement2.
     */
    public function setConditionnement2($conditionnement2) {
        $this->conditionnement2 = $conditionnement2;
        return $this;
    }
}
