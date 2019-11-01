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
 * Mt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt3Trait {

    /**
     * Mt3.
     *
     * @var float
     */
    private $mt3;

    /**
     * Get the mt3.
     *
     * @return float Returns the mt3.
     */
    public function getMt3() {
        return $this->mt3;
    }

    /**
     * Set the mt3.
     *
     * @param float $mt3 The mt3.
     */
    public function setMt3($mt3) {
        $this->mt3 = $mt3;
        return $this;
    }
}
