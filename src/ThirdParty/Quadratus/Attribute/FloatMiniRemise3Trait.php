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
 * Mini remise3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniRemise3Trait {

    /**
     * Mini remise3.
     *
     * @var float
     */
    private $miniRemise3;

    /**
     * Get the mini remise3.
     *
     * @return float Returns the mini remise3.
     */
    public function getMiniRemise3() {
        return $this->miniRemise3;
    }

    /**
     * Set the mini remise3.
     *
     * @param float $miniRemise3 The mini remise3.
     */
    public function setMiniRemise3($miniRemise3) {
        $this->miniRemise3 = $miniRemise3;
        return $this;
    }
}
