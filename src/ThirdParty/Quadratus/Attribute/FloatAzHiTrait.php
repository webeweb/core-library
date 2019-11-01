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
 * Az hi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzHiTrait {

    /**
     * Az hi.
     *
     * @var float
     */
    private $azHi;

    /**
     * Get the az hi.
     *
     * @return float Returns the az hi.
     */
    public function getAzHi() {
        return $this->azHi;
    }

    /**
     * Set the az hi.
     *
     * @param float $azHi The az hi.
     */
    public function setAzHi($azHi) {
        $this->azHi = $azHi;
        return $this;
    }
}
