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
 * Gestion planning trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPlanningTrait {

    /**
     * Gestion planning.
     *
     * @var bool
     */
    private $gestionPlanning;

    /**
     * Get the gestion planning.
     *
     * @return bool Returns the gestion planning.
     */
    public function getGestionPlanning() {
        return $this->gestionPlanning;
    }

    /**
     * Set the gestion planning.
     *
     * @param bool $gestionPlanning The gestion planning.
     */
    public function setGestionPlanning($gestionPlanning) {
        $this->gestionPlanning = $gestionPlanning;
        return $this;
    }
}
