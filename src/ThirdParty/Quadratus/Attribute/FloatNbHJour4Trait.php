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
 * Nb h jour4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour4Trait {

    /**
     * Nb h jour4.
     *
     * @var float
     */
    private $nbHJour4;

    /**
     * Get the nb h jour4.
     *
     * @return float Returns the nb h jour4.
     */
    public function getNbHJour4() {
        return $this->nbHJour4;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float $nbHJour4 The nb h jour4.
     */
    public function setNbHJour4($nbHJour4) {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }
}
