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
 * Habs3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs3Trait {

    /**
     * Habs3.
     *
     * @var float
     */
    private $habs3;

    /**
     * Get the habs3.
     *
     * @return float Returns the habs3.
     */
    public function getHabs3() {
        return $this->habs3;
    }

    /**
     * Set the habs3.
     *
     * @param float $habs3 The habs3.
     */
    public function setHabs3($habs3) {
        $this->habs3 = $habs3;
        return $this;
    }
}
