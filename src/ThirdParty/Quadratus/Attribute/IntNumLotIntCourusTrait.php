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
 * Num lot int courus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotIntCourusTrait {

    /**
     * Num lot int courus.
     *
     * @var int
     */
    private $numLotIntCourus;

    /**
     * Get the num lot int courus.
     *
     * @return int Returns the num lot int courus.
     */
    public function getNumLotIntCourus() {
        return $this->numLotIntCourus;
    }

    /**
     * Set the num lot int courus.
     *
     * @param int $numLotIntCourus The num lot int courus.
     */
    public function setNumLotIntCourus($numLotIntCourus) {
        $this->numLotIntCourus = $numLotIntCourus;
        return $this;
    }
}
