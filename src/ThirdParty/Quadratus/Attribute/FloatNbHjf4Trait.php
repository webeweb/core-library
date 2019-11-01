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
 * Nb hjf4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf4Trait {

    /**
     * Nb hjf4.
     *
     * @var float
     */
    private $nbHjf4;

    /**
     * Get the nb hjf4.
     *
     * @return float Returns the nb hjf4.
     */
    public function getNbHjf4() {
        return $this->nbHjf4;
    }

    /**
     * Set the nb hjf4.
     *
     * @param float $nbHjf4 The nb hjf4.
     */
    public function setNbHjf4($nbHjf4) {
        $this->nbHjf4 = $nbHjf4;
        return $this;
    }
}
