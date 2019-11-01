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
 * Maj nuit normal type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajNuitNormalType2Trait {

    /**
     * Maj nuit normal type2.
     *
     * @var float
     */
    private $majNuitNormalType2;

    /**
     * Get the maj nuit normal type2.
     *
     * @return float Returns the maj nuit normal type2.
     */
    public function getMajNuitNormalType2() {
        return $this->majNuitNormalType2;
    }

    /**
     * Set the maj nuit normal type2.
     *
     * @param float $majNuitNormalType2 The maj nuit normal type2.
     */
    public function setMajNuitNormalType2($majNuitNormalType2) {
        $this->majNuitNormalType2 = $majNuitNormalType2;
        return $this;
    }
}
