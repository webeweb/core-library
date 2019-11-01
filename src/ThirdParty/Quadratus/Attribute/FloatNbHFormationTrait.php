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
 * Nb h formation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHFormationTrait {

    /**
     * Nb h formation.
     *
     * @var float
     */
    private $nbHFormation;

    /**
     * Get the nb h formation.
     *
     * @return float Returns the nb h formation.
     */
    public function getNbHFormation() {
        return $this->nbHFormation;
    }

    /**
     * Set the nb h formation.
     *
     * @param float $nbHFormation The nb h formation.
     */
    public function setNbHFormation($nbHFormation) {
        $this->nbHFormation = $nbHFormation;
        return $this;
    }
}
