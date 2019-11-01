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
 * Quantite1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantite1Trait {

    /**
     * Quantite1.
     *
     * @var float
     */
    private $quantite1;

    /**
     * Get the quantite1.
     *
     * @return float Returns the quantite1.
     */
    public function getQuantite1() {
        return $this->quantite1;
    }

    /**
     * Set the quantite1.
     *
     * @param float $quantite1 The quantite1.
     */
    public function setQuantite1($quantite1) {
        $this->quantite1 = $quantite1;
        return $this;
    }
}
