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
 * Nb h comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHCompTrait {

    /**
     * Nb h comp.
     *
     * @var float
     */
    private $nbHComp;

    /**
     * Get the nb h comp.
     *
     * @return float Returns the nb h comp.
     */
    public function getNbHComp() {
        return $this->nbHComp;
    }

    /**
     * Set the nb h comp.
     *
     * @param float $nbHComp The nb h comp.
     */
    public function setNbHComp($nbHComp) {
        $this->nbHComp = $nbHComp;
        return $this;
    }
}
