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
 * Nb patronal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbPatronalTrait {

    /**
     * Nb patronal.
     *
     * @var float
     */
    private $nbPatronal;

    /**
     * Get the nb patronal.
     *
     * @return float Returns the nb patronal.
     */
    public function getNbPatronal() {
        return $this->nbPatronal;
    }

    /**
     * Set the nb patronal.
     *
     * @param float $nbPatronal The nb patronal.
     */
    public function setNbPatronal($nbPatronal) {
        $this->nbPatronal = $nbPatronal;
        return $this;
    }
}
