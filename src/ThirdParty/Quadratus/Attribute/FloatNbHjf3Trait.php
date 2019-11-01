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
 * Nb hjf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf3Trait {

    /**
     * Nb hjf3.
     *
     * @var float
     */
    private $nbHjf3;

    /**
     * Get the nb hjf3.
     *
     * @return float Returns the nb hjf3.
     */
    public function getNbHjf3() {
        return $this->nbHjf3;
    }

    /**
     * Set the nb hjf3.
     *
     * @param float $nbHjf3 The nb hjf3.
     */
    public function setNbHjf3($nbHjf3) {
        $this->nbHjf3 = $nbHjf3;
        return $this;
    }
}
