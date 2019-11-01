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
 * Nb hjf1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf1Trait {

    /**
     * Nb hjf1.
     *
     * @var float
     */
    private $nbHjf1;

    /**
     * Get the nb hjf1.
     *
     * @return float Returns the nb hjf1.
     */
    public function getNbHjf1() {
        return $this->nbHjf1;
    }

    /**
     * Set the nb hjf1.
     *
     * @param float $nbHjf1 The nb hjf1.
     */
    public function setNbHjf1($nbHjf1) {
        $this->nbHjf1 = $nbHjf1;
        return $this;
    }
}
