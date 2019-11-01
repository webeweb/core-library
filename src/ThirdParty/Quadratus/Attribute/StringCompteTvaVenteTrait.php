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
 * Compte tva vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvaVenteTrait {

    /**
     * Compte tva vente.
     *
     * @var string
     */
    private $compteTvaVente;

    /**
     * Get the compte tva vente.
     *
     * @return string Returns the compte tva vente.
     */
    public function getCompteTvaVente() {
        return $this->compteTvaVente;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string $compteTvaVente The compte tva vente.
     */
    public function setCompteTvaVente($compteTvaVente) {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }
}
