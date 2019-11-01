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
 * Mt fg1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtFg1Trait {

    /**
     * Mt fg1.
     *
     * @var float
     */
    private $mtFg1;

    /**
     * Get the mt fg1.
     *
     * @return float Returns the mt fg1.
     */
    public function getMtFg1() {
        return $this->mtFg1;
    }

    /**
     * Set the mt fg1.
     *
     * @param float $mtFg1 The mt fg1.
     */
    public function setMtFg1($mtFg1) {
        $this->mtFg1 = $mtFg1;
        return $this;
    }
}
