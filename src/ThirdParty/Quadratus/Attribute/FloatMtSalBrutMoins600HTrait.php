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
 * Mt sal brut moins600 h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtSalBrutMoins600HTrait {

    /**
     * Mt sal brut moins600 h.
     *
     * @var float
     */
    private $mtSalBrutMoins600H;

    /**
     * Get the mt sal brut moins600 h.
     *
     * @return float Returns the mt sal brut moins600 h.
     */
    public function getMtSalBrutMoins600H() {
        return $this->mtSalBrutMoins600H;
    }

    /**
     * Set the mt sal brut moins600 h.
     *
     * @param float $mtSalBrutMoins600H The mt sal brut moins600 h.
     */
    public function setMtSalBrutMoins600H($mtSalBrutMoins600H) {
        $this->mtSalBrutMoins600H = $mtSalBrutMoins600H;
        return $this;
    }
}
