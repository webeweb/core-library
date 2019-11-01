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
 * Tranche c sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCSansSiTrait {

    /**
     * Tranche c sans si.
     *
     * @var float
     */
    private $trancheCSansSi;

    /**
     * Get the tranche c sans si.
     *
     * @return float Returns the tranche c sans si.
     */
    public function getTrancheCSansSi() {
        return $this->trancheCSansSi;
    }

    /**
     * Set the tranche c sans si.
     *
     * @param float $trancheCSansSi The tranche c sans si.
     */
    public function setTrancheCSansSi($trancheCSansSi) {
        $this->trancheCSansSi = $trancheCSansSi;
        return $this;
    }
}
