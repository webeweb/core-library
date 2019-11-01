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
 * Nb facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbFactureTrait {

    /**
     * Nb facture.
     *
     * @var string
     */
    private $nbFacture;

    /**
     * Get the nb facture.
     *
     * @return string Returns the nb facture.
     */
    public function getNbFacture() {
        return $this->nbFacture;
    }

    /**
     * Set the nb facture.
     *
     * @param string $nbFacture The nb facture.
     */
    public function setNbFacture($nbFacture) {
        $this->nbFacture = $nbFacture;
        return $this;
    }
}
