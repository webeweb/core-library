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
 * Px km b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxKmBTrait {

    /**
     * Px km b.
     *
     * @var float
     */
    private $pxKmB;

    /**
     * Get the px km b.
     *
     * @return float Returns the px km b.
     */
    public function getPxKmB() {
        return $this->pxKmB;
    }

    /**
     * Set the px km b.
     *
     * @param float $pxKmB The px km b.
     */
    public function setPxKmB($pxKmB) {
        $this->pxKmB = $pxKmB;
        return $this;
    }
}
