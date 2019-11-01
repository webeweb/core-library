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
 * Nb hjf7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjf7Trait {

    /**
     * Nb hjf7.
     *
     * @var float
     */
    private $nbHjf7;

    /**
     * Get the nb hjf7.
     *
     * @return float Returns the nb hjf7.
     */
    public function getNbHjf7() {
        return $this->nbHjf7;
    }

    /**
     * Set the nb hjf7.
     *
     * @param float $nbHjf7 The nb hjf7.
     */
    public function setNbHjf7($nbHjf7) {
        $this->nbHjf7 = $nbHjf7;
        return $this;
    }
}
