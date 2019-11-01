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
 * Frais2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFrais2Trait {

    /**
     * Frais2.
     *
     * @var float
     */
    private $frais2;

    /**
     * Get the frais2.
     *
     * @return float Returns the frais2.
     */
    public function getFrais2() {
        return $this->frais2;
    }

    /**
     * Set the frais2.
     *
     * @param float $frais2 The frais2.
     */
    public function setFrais2($frais2) {
        $this->frais2 = $frais2;
        return $this;
    }
}
