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
 * Gestion multi depot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionMultiDepotTrait {

    /**
     * Gestion multi depot.
     *
     * @var bool
     */
    private $gestionMultiDepot;

    /**
     * Get the gestion multi depot.
     *
     * @return bool Returns the gestion multi depot.
     */
    public function getGestionMultiDepot() {
        return $this->gestionMultiDepot;
    }

    /**
     * Set the gestion multi depot.
     *
     * @param bool $gestionMultiDepot The gestion multi depot.
     */
    public function setGestionMultiDepot($gestionMultiDepot) {
        $this->gestionMultiDepot = $gestionMultiDepot;
        return $this;
    }
}
