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
 * Type transfert vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransfertVenteTrait {

    /**
     * Type transfert vente.
     *
     * @var string
     */
    private $typeTransfertVente;

    /**
     * Get the type transfert vente.
     *
     * @return string Returns the type transfert vente.
     */
    public function getTypeTransfertVente() {
        return $this->typeTransfertVente;
    }

    /**
     * Set the type transfert vente.
     *
     * @param string $typeTransfertVente The type transfert vente.
     */
    public function setTypeTransfertVente($typeTransfertVente) {
        $this->typeTransfertVente = $typeTransfertVente;
        return $this;
    }
}
