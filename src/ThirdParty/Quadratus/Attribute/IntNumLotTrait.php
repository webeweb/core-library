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
 * Num lot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotTrait {

    /**
     * Num lot.
     *
     * @var int
     */
    private $numLot;

    /**
     * Get the num lot.
     *
     * @return int Returns the num lot.
     */
    public function getNumLot() {
        return $this->numLot;
    }

    /**
     * Set the num lot.
     *
     * @param int $numLot The num lot.
     */
    public function setNumLot($numLot) {
        $this->numLot = $numLot;
        return $this;
    }
}
