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
 * Achat vente stop tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAchatVenteStopTvaTrait {

    /**
     * Achat vente stop tva.
     *
     * @var bool
     */
    private $achatVenteStopTva;

    /**
     * Get the achat vente stop tva.
     *
     * @return bool Returns the achat vente stop tva.
     */
    public function getAchatVenteStopTva() {
        return $this->achatVenteStopTva;
    }

    /**
     * Set the achat vente stop tva.
     *
     * @param bool $achatVenteStopTva The achat vente stop tva.
     */
    public function setAchatVenteStopTva($achatVenteStopTva) {
        $this->achatVenteStopTva = $achatVenteStopTva;
        return $this;
    }
}
