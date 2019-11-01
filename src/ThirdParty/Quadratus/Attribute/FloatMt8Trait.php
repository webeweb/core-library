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
 * Mt8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt8Trait {

    /**
     * Mt8.
     *
     * @var float
     */
    private $mt8;

    /**
     * Get the mt8.
     *
     * @return float Returns the mt8.
     */
    public function getMt8() {
        return $this->mt8;
    }

    /**
     * Set the mt8.
     *
     * @param float $mt8 The mt8.
     */
    public function setMt8($mt8) {
        $this->mt8 = $mt8;
        return $this;
    }
}
