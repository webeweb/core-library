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
 * Nb hjf6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf6Trait {

    /**
     * Nb hjf6.
     *
     * @var float
     */
    private $nbHjf6;

    /**
     * Get the nb hjf6.
     *
     * @return float Returns the nb hjf6.
     */
    public function getNbHjf6() {
        return $this->nbHjf6;
    }

    /**
     * Set the nb hjf6.
     *
     * @param float $nbHjf6 The nb hjf6.
     */
    public function setNbHjf6($nbHjf6) {
        $this->nbHjf6 = $nbHjf6;
        return $this;
    }
}
