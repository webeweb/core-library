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
 * Nb h jour1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour1Trait {

    /**
     * Nb h jour1.
     *
     * @var float
     */
    private $nbHJour1;

    /**
     * Get the nb h jour1.
     *
     * @return float Returns the nb h jour1.
     */
    public function getNbHJour1() {
        return $this->nbHJour1;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float $nbHJour1 The nb h jour1.
     */
    public function setNbHJour1($nbHJour1) {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }
}
