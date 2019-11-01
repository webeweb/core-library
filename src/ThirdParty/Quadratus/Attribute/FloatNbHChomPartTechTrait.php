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
 * Nb h chom part tech trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHChomPartTechTrait {

    /**
     * Nb h chom part tech.
     *
     * @var float
     */
    private $nbHChomPartTech;

    /**
     * Get the nb h chom part tech.
     *
     * @return float Returns the nb h chom part tech.
     */
    public function getNbHChomPartTech() {
        return $this->nbHChomPartTech;
    }

    /**
     * Set the nb h chom part tech.
     *
     * @param float $nbHChomPartTech The nb h chom part tech.
     */
    public function setNbHChomPartTech($nbHChomPartTech) {
        $this->nbHChomPartTech = $nbHChomPartTech;
        return $this;
    }
}
