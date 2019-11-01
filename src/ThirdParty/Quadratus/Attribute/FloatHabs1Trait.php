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
 * Habs1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs1Trait {

    /**
     * Habs1.
     *
     * @var float
     */
    private $habs1;

    /**
     * Get the habs1.
     *
     * @return float Returns the habs1.
     */
    public function getHabs1() {
        return $this->habs1;
    }

    /**
     * Set the habs1.
     *
     * @param float $habs1 The habs1.
     */
    public function setHabs1($habs1) {
        $this->habs1 = $habs1;
        return $this;
    }
}
