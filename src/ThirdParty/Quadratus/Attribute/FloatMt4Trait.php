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
 * Mt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt4Trait {

    /**
     * Mt4.
     *
     * @var float
     */
    private $mt4;

    /**
     * Get the mt4.
     *
     * @return float Returns the mt4.
     */
    public function getMt4() {
        return $this->mt4;
    }

    /**
     * Set the mt4.
     *
     * @param float $mt4 The mt4.
     */
    public function setMt4($mt4) {
        $this->mt4 = $mt4;
        return $this;
    }
}
