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
 * Frais3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFrais3Trait {

    /**
     * Frais3.
     *
     * @var float
     */
    private $frais3;

    /**
     * Get the frais3.
     *
     * @return float Returns the frais3.
     */
    public function getFrais3() {
        return $this->frais3;
    }

    /**
     * Set the frais3.
     *
     * @param float $frais3 The frais3.
     */
    public function setFrais3($frais3) {
        $this->frais3 = $frais3;
        return $this;
    }
}
