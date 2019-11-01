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
 * Habs8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs8Trait {

    /**
     * Habs8.
     *
     * @var float
     */
    private $habs8;

    /**
     * Get the habs8.
     *
     * @return float Returns the habs8.
     */
    public function getHabs8() {
        return $this->habs8;
    }

    /**
     * Set the habs8.
     *
     * @param float $habs8 The habs8.
     */
    public function setHabs8($habs8) {
        $this->habs8 = $habs8;
        return $this;
    }
}
