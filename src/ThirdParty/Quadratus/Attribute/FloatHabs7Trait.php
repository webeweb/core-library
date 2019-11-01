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
 * Habs7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs7Trait {

    /**
     * Habs7.
     *
     * @var float
     */
    private $habs7;

    /**
     * Get the habs7.
     *
     * @return float Returns the habs7.
     */
    public function getHabs7() {
        return $this->habs7;
    }

    /**
     * Set the habs7.
     *
     * @param float $habs7 The habs7.
     */
    public function setHabs7($habs7) {
        $this->habs7 = $habs7;
        return $this;
    }
}
