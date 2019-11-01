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
 * Quantite cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteCdeTrait {

    /**
     * Quantite cde.
     *
     * @var float
     */
    private $quantiteCde;

    /**
     * Get the quantite cde.
     *
     * @return float Returns the quantite cde.
     */
    public function getQuantiteCde() {
        return $this->quantiteCde;
    }

    /**
     * Set the quantite cde.
     *
     * @param float $quantiteCde The quantite cde.
     */
    public function setQuantiteCde($quantiteCde) {
        $this->quantiteCde = $quantiteCde;
        return $this;
    }
}
