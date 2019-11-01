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
 * Pv1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPv1Trait {

    /**
     * Pv1.
     *
     * @var float
     */
    private $pv1;

    /**
     * Get the pv1.
     *
     * @return float Returns the pv1.
     */
    public function getPv1() {
        return $this->pv1;
    }

    /**
     * Set the pv1.
     *
     * @param float $pv1 The pv1.
     */
    public function setPv1($pv1) {
        $this->pv1 = $pv1;
        return $this;
    }
}
