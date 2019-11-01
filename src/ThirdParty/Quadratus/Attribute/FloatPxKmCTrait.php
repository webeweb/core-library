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
 * Px km c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxKmCTrait {

    /**
     * Px km c.
     *
     * @var float
     */
    private $pxKmC;

    /**
     * Get the px km c.
     *
     * @return float Returns the px km c.
     */
    public function getPxKmC() {
        return $this->pxKmC;
    }

    /**
     * Set the px km c.
     *
     * @param float $pxKmC The px km c.
     */
    public function setPxKmC($pxKmC) {
        $this->pxKmC = $pxKmC;
        return $this;
    }
}
