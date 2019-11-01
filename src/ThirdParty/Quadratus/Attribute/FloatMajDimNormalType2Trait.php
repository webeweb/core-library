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
 * Maj dim normal type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajDimNormalType2Trait {

    /**
     * Maj dim normal type2.
     *
     * @var float
     */
    private $majDimNormalType2;

    /**
     * Get the maj dim normal type2.
     *
     * @return float Returns the maj dim normal type2.
     */
    public function getMajDimNormalType2() {
        return $this->majDimNormalType2;
    }

    /**
     * Set the maj dim normal type2.
     *
     * @param float $majDimNormalType2 The maj dim normal type2.
     */
    public function setMajDimNormalType2($majDimNormalType2) {
        $this->majDimNormalType2 = $majDimNormalType2;
        return $this;
    }
}
