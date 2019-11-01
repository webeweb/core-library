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
 * Mt brut dads trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtBrutDadsTrait {

    /**
     * Mt brut dads.
     *
     * @var float
     */
    private $mtBrutDads;

    /**
     * Get the mt brut dads.
     *
     * @return float Returns the mt brut dads.
     */
    public function getMtBrutDads() {
        return $this->mtBrutDads;
    }

    /**
     * Set the mt brut dads.
     *
     * @param float $mtBrutDads The mt brut dads.
     */
    public function setMtBrutDads($mtBrutDads) {
        $this->mtBrutDads = $mtBrutDads;
        return $this;
    }
}
