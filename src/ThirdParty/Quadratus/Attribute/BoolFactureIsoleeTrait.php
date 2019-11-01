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
 * Facture isolee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFactureIsoleeTrait {

    /**
     * Facture isolee.
     *
     * @var bool
     */
    private $factureIsolee;

    /**
     * Get the facture isolee.
     *
     * @return bool Returns the facture isolee.
     */
    public function getFactureIsolee() {
        return $this->factureIsolee;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool $factureIsolee The facture isolee.
     */
    public function setFactureIsolee($factureIsolee) {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }
}
