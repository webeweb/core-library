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
 * Mt10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt10Trait {

    /**
     * Mt10.
     *
     * @var float
     */
    private $mt10;

    /**
     * Get the mt10.
     *
     * @return float Returns the mt10.
     */
    public function getMt10() {
        return $this->mt10;
    }

    /**
     * Set the mt10.
     *
     * @param float $mt10 The mt10.
     */
    public function setMt10($mt10) {
        $this->mt10 = $mt10;
        return $this;
    }
}
