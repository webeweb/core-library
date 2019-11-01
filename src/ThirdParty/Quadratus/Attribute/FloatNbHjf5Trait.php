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
 * Nb hjf5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf5Trait {

    /**
     * Nb hjf5.
     *
     * @var float
     */
    private $nbHjf5;

    /**
     * Get the nb hjf5.
     *
     * @return float Returns the nb hjf5.
     */
    public function getNbHjf5() {
        return $this->nbHjf5;
    }

    /**
     * Set the nb hjf5.
     *
     * @param float $nbHjf5 The nb hjf5.
     */
    public function setNbHjf5($nbHjf5) {
        $this->nbHjf5 = $nbHjf5;
        return $this;
    }
}
