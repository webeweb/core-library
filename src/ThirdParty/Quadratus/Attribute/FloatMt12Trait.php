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
 * Mt12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt12Trait {

    /**
     * Mt12.
     *
     * @var float
     */
    private $mt12;

    /**
     * Get the mt12.
     *
     * @return float Returns the mt12.
     */
    public function getMt12() {
        return $this->mt12;
    }

    /**
     * Set the mt12.
     *
     * @param float $mt12 The mt12.
     */
    public function setMt12($mt12) {
        $this->mt12 = $mt12;
        return $this;
    }
}
