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
 * Mt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt1Trait {

    /**
     * Mt1.
     *
     * @var float
     */
    private $mt1;

    /**
     * Get the mt1.
     *
     * @return float Returns the mt1.
     */
    public function getMt1() {
        return $this->mt1;
    }

    /**
     * Set the mt1.
     *
     * @param float $mt1 The mt1.
     */
    public function setMt1($mt1) {
        $this->mt1 = $mt1;
        return $this;
    }
}
