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
 * Quantite liv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteLivTrait {

    /**
     * Quantite liv.
     *
     * @var float
     */
    private $quantiteLiv;

    /**
     * Get the quantite liv.
     *
     * @return float Returns the quantite liv.
     */
    public function getQuantiteLiv() {
        return $this->quantiteLiv;
    }

    /**
     * Set the quantite liv.
     *
     * @param float $quantiteLiv The quantite liv.
     */
    public function setQuantiteLiv($quantiteLiv) {
        $this->quantiteLiv = $quantiteLiv;
        return $this;
    }
}
