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
 * Nb h sup2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSup2Trait {

    /**
     * Nb h sup2.
     *
     * @var float
     */
    private $nbHSup2;

    /**
     * Get the nb h sup2.
     *
     * @return float Returns the nb h sup2.
     */
    public function getNbHSup2() {
        return $this->nbHSup2;
    }

    /**
     * Set the nb h sup2.
     *
     * @param float $nbHSup2 The nb h sup2.
     */
    public function setNbHSup2($nbHSup2) {
        $this->nbHSup2 = $nbHSup2;
        return $this;
    }
}
