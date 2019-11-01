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
 * Px facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPxFactureTrait {

    /**
     * Px facture.
     *
     * @var bool
     */
    private $pxFacture;

    /**
     * Get the px facture.
     *
     * @return bool Returns the px facture.
     */
    public function getPxFacture() {
        return $this->pxFacture;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }
}
