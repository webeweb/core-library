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
 * Px vente colis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPxVenteColisTrait {

    /**
     * Px vente colis.
     *
     * @var bool
     */
    private $pxVenteColis;

    /**
     * Get the px vente colis.
     *
     * @return bool Returns the px vente colis.
     */
    public function getPxVenteColis() {
        return $this->pxVenteColis;
    }

    /**
     * Set the px vente colis.
     *
     * @param bool $pxVenteColis The px vente colis.
     */
    public function setPxVenteColis($pxVenteColis) {
        $this->pxVenteColis = $pxVenteColis;
        return $this;
    }
}
