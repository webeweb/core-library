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
 * Mt16 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt16Trait {

    /**
     * Mt16.
     *
     * @var float
     */
    private $mt16;

    /**
     * Get the mt16.
     *
     * @return float Returns the mt16.
     */
    public function getMt16() {
        return $this->mt16;
    }

    /**
     * Set the mt16.
     *
     * @param float $mt16 The mt16.
     */
    public function setMt16($mt16) {
        $this->mt16 = $mt16;
        return $this;
    }
}
