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
 * Frais fixes1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFraisFixes1Trait {

    /**
     * Frais fixes1.
     *
     * @var float
     */
    private $fraisFixes1;

    /**
     * Get the frais fixes1.
     *
     * @return float Returns the frais fixes1.
     */
    public function getFraisFixes1() {
        return $this->fraisFixes1;
    }

    /**
     * Set the frais fixes1.
     *
     * @param float $fraisFixes1 The frais fixes1.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }
}
