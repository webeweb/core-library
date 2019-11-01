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
 * Mt creance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCreanceTrait {

    /**
     * Mt creance.
     *
     * @var float
     */
    private $mtCreance;

    /**
     * Get the mt creance.
     *
     * @return float Returns the mt creance.
     */
    public function getMtCreance() {
        return $this->mtCreance;
    }

    /**
     * Set the mt creance.
     *
     * @param float $mtCreance The mt creance.
     */
    public function setMtCreance($mtCreance) {
        $this->mtCreance = $mtCreance;
        return $this;
    }
}
