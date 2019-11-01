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
 * Habs5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs5Trait {

    /**
     * Habs5.
     *
     * @var float
     */
    private $habs5;

    /**
     * Get the habs5.
     *
     * @return float Returns the habs5.
     */
    public function getHabs5() {
        return $this->habs5;
    }

    /**
     * Set the habs5.
     *
     * @param float $habs5 The habs5.
     */
    public function setHabs5($habs5) {
        $this->habs5 = $habs5;
        return $this;
    }
}
