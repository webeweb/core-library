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
 * Quantite cde cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteCdeCliTrait {

    /**
     * Quantite cde cli.
     *
     * @var float
     */
    private $quantiteCdeCli;

    /**
     * Get the quantite cde cli.
     *
     * @return float Returns the quantite cde cli.
     */
    public function getQuantiteCdeCli() {
        return $this->quantiteCdeCli;
    }

    /**
     * Set the quantite cde cli.
     *
     * @param float $quantiteCdeCli The quantite cde cli.
     */
    public function setQuantiteCdeCli($quantiteCdeCli) {
        $this->quantiteCdeCli = $quantiteCdeCli;
        return $this;
    }
}
