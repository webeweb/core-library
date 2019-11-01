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
 * Achat vente local tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAchatVenteLocalTvaTrait {

    /**
     * Achat vente local tva.
     *
     * @var string
     */
    private $achatVenteLocalTva;

    /**
     * Get the achat vente local tva.
     *
     * @return string Returns the achat vente local tva.
     */
    public function getAchatVenteLocalTva() {
        return $this->achatVenteLocalTva;
    }

    /**
     * Set the achat vente local tva.
     *
     * @param string $achatVenteLocalTva The achat vente local tva.
     */
    public function setAchatVenteLocalTva($achatVenteLocalTva) {
        $this->achatVenteLocalTva = $achatVenteLocalTva;
        return $this;
    }
}
