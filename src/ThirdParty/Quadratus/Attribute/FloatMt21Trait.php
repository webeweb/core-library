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
 * Mt21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt21Trait {

    /**
     * Mt21.
     *
     * @var float
     */
    private $mt21;

    /**
     * Get the mt21.
     *
     * @return float Returns the mt21.
     */
    public function getMt21() {
        return $this->mt21;
    }

    /**
     * Set the mt21.
     *
     * @param float $mt21 The mt21.
     */
    public function setMt21($mt21) {
        $this->mt21 = $mt21;
        return $this;
    }
}
