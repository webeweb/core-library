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
 * Nb h jour3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour3Trait {

    /**
     * Nb h jour3.
     *
     * @var float
     */
    private $nbHJour3;

    /**
     * Get the nb h jour3.
     *
     * @return float Returns the nb h jour3.
     */
    public function getNbHJour3() {
        return $this->nbHJour3;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float $nbHJour3 The nb h jour3.
     */
    public function setNbHJour3($nbHJour3) {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }
}
