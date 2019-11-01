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
 * Mini remise1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniRemise1Trait {

    /**
     * Mini remise1.
     *
     * @var float
     */
    private $miniRemise1;

    /**
     * Get the mini remise1.
     *
     * @return float Returns the mini remise1.
     */
    public function getMiniRemise1() {
        return $this->miniRemise1;
    }

    /**
     * Set the mini remise1.
     *
     * @param float $miniRemise1 The mini remise1.
     */
    public function setMiniRemise1($miniRemise1) {
        $this->miniRemise1 = $miniRemise1;
        return $this;
    }
}
