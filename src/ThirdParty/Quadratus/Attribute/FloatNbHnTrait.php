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
 * Nb hn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHnTrait {

    /**
     * Nb hn.
     *
     * @var float
     */
    private $nbHn;

    /**
     * Get the nb hn.
     *
     * @return float Returns the nb hn.
     */
    public function getNbHn() {
        return $this->nbHn;
    }

    /**
     * Set the nb hn.
     *
     * @param float $nbHn The nb hn.
     */
    public function setNbHn($nbHn) {
        $this->nbHn = $nbHn;
        return $this;
    }
}
