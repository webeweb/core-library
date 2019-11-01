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
 * Mini remise2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniRemise2Trait {

    /**
     * Mini remise2.
     *
     * @var float
     */
    private $miniRemise2;

    /**
     * Get the mini remise2.
     *
     * @return float Returns the mini remise2.
     */
    public function getMiniRemise2() {
        return $this->miniRemise2;
    }

    /**
     * Set the mini remise2.
     *
     * @param float $miniRemise2 The mini remise2.
     */
    public function setMiniRemise2($miniRemise2) {
        $this->miniRemise2 = $miniRemise2;
        return $this;
    }
}
