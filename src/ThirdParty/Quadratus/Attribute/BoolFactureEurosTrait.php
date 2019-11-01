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
 * Facture euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFactureEurosTrait {

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Get the facture euros.
     *
     * @return bool Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Set the facture euros.
     *
     * @param bool $factureEuros The facture euros.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }
}
