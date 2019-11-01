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
 * Vente par colis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVenteParColisTrait {

    /**
     * Vente par colis.
     *
     * @var bool
     */
    private $venteParColis;

    /**
     * Get the vente par colis.
     *
     * @return bool Returns the vente par colis.
     */
    public function getVenteParColis() {
        return $this->venteParColis;
    }

    /**
     * Set the vente par colis.
     *
     * @param bool $venteParColis The vente par colis.
     */
    public function setVenteParColis($venteParColis) {
        $this->venteParColis = $venteParColis;
        return $this;
    }
}
