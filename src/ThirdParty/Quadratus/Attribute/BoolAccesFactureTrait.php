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
 * Acces facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesFactureTrait {

    /**
     * Acces facture.
     *
     * @var bool
     */
    private $accesFacture;

    /**
     * Get the acces facture.
     *
     * @return bool Returns the acces facture.
     */
    public function getAccesFacture() {
        return $this->accesFacture;
    }

    /**
     * Set the acces facture.
     *
     * @param bool $accesFacture The acces facture.
     */
    public function setAccesFacture($accesFacture) {
        $this->accesFacture = $accesFacture;
        return $this;
    }
}
