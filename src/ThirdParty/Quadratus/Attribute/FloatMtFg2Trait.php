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
 * Mt fg2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtFg2Trait {

    /**
     * Mt fg2.
     *
     * @var float
     */
    private $mtFg2;

    /**
     * Get the mt fg2.
     *
     * @return float Returns the mt fg2.
     */
    public function getMtFg2() {
        return $this->mtFg2;
    }

    /**
     * Set the mt fg2.
     *
     * @param float $mtFg2 The mt fg2.
     */
    public function setMtFg2($mtFg2) {
        $this->mtFg2 = $mtFg2;
        return $this;
    }
}
