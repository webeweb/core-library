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
 * Achat vente automate trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAchatVenteAutomateTrait {

    /**
     * Achat vente automate.
     *
     * @var bool
     */
    private $achatVenteAutomate;

    /**
     * Get the achat vente automate.
     *
     * @return bool Returns the achat vente automate.
     */
    public function getAchatVenteAutomate() {
        return $this->achatVenteAutomate;
    }

    /**
     * Set the achat vente automate.
     *
     * @param bool $achatVenteAutomate The achat vente automate.
     */
    public function setAchatVenteAutomate($achatVenteAutomate) {
        $this->achatVenteAutomate = $achatVenteAutomate;
        return $this;
    }
}
