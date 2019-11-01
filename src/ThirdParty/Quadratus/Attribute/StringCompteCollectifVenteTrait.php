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
 * Compte collectif vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCollectifVenteTrait {

    /**
     * Compte collectif vente.
     *
     * @var string
     */
    private $compteCollectifVente;

    /**
     * Get the compte collectif vente.
     *
     * @return string Returns the compte collectif vente.
     */
    public function getCompteCollectifVente() {
        return $this->compteCollectifVente;
    }

    /**
     * Set the compte collectif vente.
     *
     * @param string $compteCollectifVente The compte collectif vente.
     */
    public function setCompteCollectifVente($compteCollectifVente) {
        $this->compteCollectifVente = $compteCollectifVente;
        return $this;
    }
}
