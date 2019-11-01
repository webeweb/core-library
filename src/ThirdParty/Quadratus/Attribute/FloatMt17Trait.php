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
 * Mt17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt17Trait {

    /**
     * Mt17.
     *
     * @var float
     */
    private $mt17;

    /**
     * Get the mt17.
     *
     * @return float Returns the mt17.
     */
    public function getMt17() {
        return $this->mt17;
    }

    /**
     * Set the mt17.
     *
     * @param float $mt17 The mt17.
     */
    public function setMt17($mt17) {
        $this->mt17 = $mt17;
        return $this;
    }
}
