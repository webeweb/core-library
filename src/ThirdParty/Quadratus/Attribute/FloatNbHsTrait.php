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
 * Nb hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHsTrait {

    /**
     * Nb hs.
     *
     * @var float
     */
    private $nbHs;

    /**
     * Get the nb hs.
     *
     * @return float Returns the nb hs.
     */
    public function getNbHs() {
        return $this->nbHs;
    }

    /**
     * Set the nb hs.
     *
     * @param float $nbHs The nb hs.
     */
    public function setNbHs($nbHs) {
        $this->nbHs = $nbHs;
        return $this;
    }
}
