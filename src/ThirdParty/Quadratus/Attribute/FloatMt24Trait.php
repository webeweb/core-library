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
 * Mt24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt24Trait {

    /**
     * Mt24.
     *
     * @var float
     */
    private $mt24;

    /**
     * Get the mt24.
     *
     * @return float Returns the mt24.
     */
    public function getMt24() {
        return $this->mt24;
    }

    /**
     * Set the mt24.
     *
     * @param float $mt24 The mt24.
     */
    public function setMt24($mt24) {
        $this->mt24 = $mt24;
        return $this;
    }
}
