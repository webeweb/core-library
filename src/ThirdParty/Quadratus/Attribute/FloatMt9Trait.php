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
 * Mt9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt9Trait {

    /**
     * Mt9.
     *
     * @var float
     */
    private $mt9;

    /**
     * Get the mt9.
     *
     * @return float Returns the mt9.
     */
    public function getMt9() {
        return $this->mt9;
    }

    /**
     * Set the mt9.
     *
     * @param float $mt9 The mt9.
     */
    public function setMt9($mt9) {
        $this->mt9 = $mt9;
        return $this;
    }
}
