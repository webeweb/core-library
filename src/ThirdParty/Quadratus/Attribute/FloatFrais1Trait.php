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
 * Frais1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFrais1Trait {

    /**
     * Frais1.
     *
     * @var float
     */
    private $frais1;

    /**
     * Get the frais1.
     *
     * @return float Returns the frais1.
     */
    public function getFrais1() {
        return $this->frais1;
    }

    /**
     * Set the frais1.
     *
     * @param float $frais1 The frais1.
     */
    public function setFrais1($frais1) {
        $this->frais1 = $frais1;
        return $this;
    }
}
