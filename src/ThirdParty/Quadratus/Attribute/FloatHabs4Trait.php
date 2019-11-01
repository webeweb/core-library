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
 * Habs4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs4Trait {

    /**
     * Habs4.
     *
     * @var float
     */
    private $habs4;

    /**
     * Get the habs4.
     *
     * @return float Returns the habs4.
     */
    public function getHabs4() {
        return $this->habs4;
    }

    /**
     * Set the habs4.
     *
     * @param float $habs4 The habs4.
     */
    public function setHabs4($habs4) {
        $this->habs4 = $habs4;
        return $this;
    }
}
