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
 * Nb hjf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf2Trait {

    /**
     * Nb hjf2.
     *
     * @var float
     */
    private $nbHjf2;

    /**
     * Get the nb hjf2.
     *
     * @return float Returns the nb hjf2.
     */
    public function getNbHjf2() {
        return $this->nbHjf2;
    }

    /**
     * Set the nb hjf2.
     *
     * @param float $nbHjf2 The nb hjf2.
     */
    public function setNbHjf2($nbHjf2) {
        $this->nbHjf2 = $nbHjf2;
        return $this;
    }
}
