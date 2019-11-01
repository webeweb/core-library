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
 * Maj jf normal type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajJfNormalType2Trait {

    /**
     * Maj jf normal type2.
     *
     * @var float
     */
    private $majJfNormalType2;

    /**
     * Get the maj jf normal type2.
     *
     * @return float Returns the maj jf normal type2.
     */
    public function getMajJfNormalType2() {
        return $this->majJfNormalType2;
    }

    /**
     * Set the maj jf normal type2.
     *
     * @param float $majJfNormalType2 The maj jf normal type2.
     */
    public function setMajJfNormalType2($majJfNormalType2) {
        $this->majJfNormalType2 = $majJfNormalType2;
        return $this;
    }
}
