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
 * Compte de vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompteDeVenteTrait {

    /**
     * Compte de vente.
     *
     * @var bool
     */
    private $compteDeVente;

    /**
     * Get the compte de vente.
     *
     * @return bool Returns the compte de vente.
     */
    public function getCompteDeVente() {
        return $this->compteDeVente;
    }

    /**
     * Set the compte de vente.
     *
     * @param bool $compteDeVente The compte de vente.
     */
    public function setCompteDeVente($compteDeVente) {
        $this->compteDeVente = $compteDeVente;
        return $this;
    }
}
