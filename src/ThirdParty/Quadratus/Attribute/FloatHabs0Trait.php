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
 * Habs0 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs0Trait {

    /**
     * Habs0.
     *
     * @var float
     */
    private $habs0;

    /**
     * Get the habs0.
     *
     * @return float Returns the habs0.
     */
    public function getHabs0() {
        return $this->habs0;
    }

    /**
     * Set the habs0.
     *
     * @param float $habs0 The habs0.
     */
    public function setHabs0($habs0) {
        $this->habs0 = $habs0;
        return $this;
    }
}
