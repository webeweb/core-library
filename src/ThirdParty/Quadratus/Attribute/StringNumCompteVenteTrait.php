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
 * Num compte vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCompteVenteTrait {

    /**
     * Num compte vente.
     *
     * @var string
     */
    private $numCompteVente;

    /**
     * Get the num compte vente.
     *
     * @return string Returns the num compte vente.
     */
    public function getNumCompteVente() {
        return $this->numCompteVente;
    }

    /**
     * Set the num compte vente.
     *
     * @param string $numCompteVente The num compte vente.
     */
    public function setNumCompteVente($numCompteVente) {
        $this->numCompteVente = $numCompteVente;
        return $this;
    }
}
