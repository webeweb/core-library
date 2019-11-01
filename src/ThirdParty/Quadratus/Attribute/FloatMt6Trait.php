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
 * Mt6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt6Trait {

    /**
     * Mt6.
     *
     * @var float
     */
    private $mt6;

    /**
     * Get the mt6.
     *
     * @return float Returns the mt6.
     */
    public function getMt6() {
        return $this->mt6;
    }

    /**
     * Set the mt6.
     *
     * @param float $mt6 The mt6.
     */
    public function setMt6($mt6) {
        $this->mt6 = $mt6;
        return $this;
    }
}
