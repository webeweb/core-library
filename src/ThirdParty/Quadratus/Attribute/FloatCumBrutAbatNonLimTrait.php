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
 * Cum brut abat non lim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutAbatNonLimTrait {

    /**
     * Cum brut abat non lim.
     *
     * @var float
     */
    private $cumBrutAbatNonLim;

    /**
     * Get the cum brut abat non lim.
     *
     * @return float Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim() {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }
}
