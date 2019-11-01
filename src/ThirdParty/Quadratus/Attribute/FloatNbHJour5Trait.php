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
 * Nb h jour5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour5Trait {

    /**
     * Nb h jour5.
     *
     * @var float
     */
    private $nbHJour5;

    /**
     * Get the nb h jour5.
     *
     * @return float Returns the nb h jour5.
     */
    public function getNbHJour5() {
        return $this->nbHJour5;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float $nbHJour5 The nb h jour5.
     */
    public function setNbHJour5($nbHJour5) {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }
}
