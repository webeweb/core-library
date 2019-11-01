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
 * Dont interet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDontInteretTrait {

    /**
     * Dont interet.
     *
     * @var float
     */
    private $dontInteret;

    /**
     * Get the dont interet.
     *
     * @return float Returns the dont interet.
     */
    public function getDontInteret() {
        return $this->dontInteret;
    }

    /**
     * Set the dont interet.
     *
     * @param float $dontInteret The dont interet.
     */
    public function setDontInteret($dontInteret) {
        $this->dontInteret = $dontInteret;
        return $this;
    }
}
