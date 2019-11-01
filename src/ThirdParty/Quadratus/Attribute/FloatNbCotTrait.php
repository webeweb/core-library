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
 * Nb cot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbCotTrait {

    /**
     * Nb cot.
     *
     * @var float
     */
    private $nbCot;

    /**
     * Get the nb cot.
     *
     * @return float Returns the nb cot.
     */
    public function getNbCot() {
        return $this->nbCot;
    }

    /**
     * Set the nb cot.
     *
     * @param float $nbCot The nb cot.
     */
    public function setNbCot($nbCot) {
        $this->nbCot = $nbCot;
        return $this;
    }
}
