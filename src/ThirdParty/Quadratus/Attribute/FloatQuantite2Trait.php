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
 * Quantite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantite2Trait {

    /**
     * Quantite2.
     *
     * @var float
     */
    private $quantite2;

    /**
     * Get the quantite2.
     *
     * @return float Returns the quantite2.
     */
    public function getQuantite2() {
        return $this->quantite2;
    }

    /**
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }
}
