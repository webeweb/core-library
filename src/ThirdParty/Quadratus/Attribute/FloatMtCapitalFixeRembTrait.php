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
 * Mt capital fixe remb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCapitalFixeRembTrait {

    /**
     * Mt capital fixe remb.
     *
     * @var float
     */
    private $mtCapitalFixeRemb;

    /**
     * Get the mt capital fixe remb.
     *
     * @return float Returns the mt capital fixe remb.
     */
    public function getMtCapitalFixeRemb() {
        return $this->mtCapitalFixeRemb;
    }

    /**
     * Set the mt capital fixe remb.
     *
     * @param float $mtCapitalFixeRemb The mt capital fixe remb.
     */
    public function setMtCapitalFixeRemb($mtCapitalFixeRemb) {
        $this->mtCapitalFixeRemb = $mtCapitalFixeRemb;
        return $this;
    }
}
