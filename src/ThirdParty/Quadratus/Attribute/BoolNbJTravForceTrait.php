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
 * Nb j trav force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNbJTravForceTrait {

    /**
     * Nb j trav force.
     *
     * @var bool
     */
    private $nbJTravForce;

    /**
     * Get the nb j trav force.
     *
     * @return bool Returns the nb j trav force.
     */
    public function getNbJTravForce() {
        return $this->nbJTravForce;
    }

    /**
     * Set the nb j trav force.
     *
     * @param bool $nbJTravForce The nb j trav force.
     */
    public function setNbJTravForce($nbJTravForce) {
        $this->nbJTravForce = $nbJTravForce;
        return $this;
    }
}
