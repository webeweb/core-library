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
 * Numero facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroFactureTrait {

    /**
     * Numero facture.
     *
     * @var string
     */
    private $numeroFacture;

    /**
     * Get the numero facture.
     *
     * @return string Returns the numero facture.
     */
    public function getNumeroFacture() {
        return $this->numeroFacture;
    }

    /**
     * Set the numero facture.
     *
     * @param string $numeroFacture The numero facture.
     */
    public function setNumeroFacture($numeroFacture) {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }
}
