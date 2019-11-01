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
 * Az total b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzTotalBTrait {

    /**
     * Az total b.
     *
     * @var float
     */
    private $azTotalB;

    /**
     * Get the az total b.
     *
     * @return float Returns the az total b.
     */
    public function getAzTotalB() {
        return $this->azTotalB;
    }

    /**
     * Set the az total b.
     *
     * @param float $azTotalB The az total b.
     */
    public function setAzTotalB($azTotalB) {
        $this->azTotalB = $azTotalB;
        return $this;
    }
}
