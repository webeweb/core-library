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
 * Mt13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt13Trait {

    /**
     * Mt13.
     *
     * @var float
     */
    private $mt13;

    /**
     * Get the mt13.
     *
     * @return float Returns the mt13.
     */
    public function getMt13() {
        return $this->mt13;
    }

    /**
     * Set the mt13.
     *
     * @param float $mt13 The mt13.
     */
    public function setMt13($mt13) {
        $this->mt13 = $mt13;
        return $this;
    }
}
