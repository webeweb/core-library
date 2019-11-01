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
 * Mt sal brut moins150 h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtSalBrutMoins150HTrait {

    /**
     * Mt sal brut moins150 h.
     *
     * @var float
     */
    private $mtSalBrutMoins150H;

    /**
     * Get the mt sal brut moins150 h.
     *
     * @return float Returns the mt sal brut moins150 h.
     */
    public function getMtSalBrutMoins150H() {
        return $this->mtSalBrutMoins150H;
    }

    /**
     * Set the mt sal brut moins150 h.
     *
     * @param float $mtSalBrutMoins150H The mt sal brut moins150 h.
     */
    public function setMtSalBrutMoins150H($mtSalBrutMoins150H) {
        $this->mtSalBrutMoins150H = $mtSalBrutMoins150H;
        return $this;
    }
}
