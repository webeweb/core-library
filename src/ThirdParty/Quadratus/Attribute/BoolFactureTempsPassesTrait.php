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
 * Facture temps passes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFactureTempsPassesTrait {

    /**
     * Facture temps passes.
     *
     * @var bool
     */
    private $factureTempsPasses;

    /**
     * Get the facture temps passes.
     *
     * @return bool Returns the facture temps passes.
     */
    public function getFactureTempsPasses() {
        return $this->factureTempsPasses;
    }

    /**
     * Set the facture temps passes.
     *
     * @param bool $factureTempsPasses The facture temps passes.
     */
    public function setFactureTempsPasses($factureTempsPasses) {
        $this->factureTempsPasses = $factureTempsPasses;
        return $this;
    }
}
