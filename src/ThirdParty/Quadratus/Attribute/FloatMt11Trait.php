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
 * Mt11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt11Trait {

    /**
     * Mt11.
     *
     * @var float
     */
    private $mt11;

    /**
     * Get the mt11.
     *
     * @return float Returns the mt11.
     */
    public function getMt11() {
        return $this->mt11;
    }

    /**
     * Set the mt11.
     *
     * @param float $mt11 The mt11.
     */
    public function setMt11($mt11) {
        $this->mt11 = $mt11;
        return $this;
    }
}
