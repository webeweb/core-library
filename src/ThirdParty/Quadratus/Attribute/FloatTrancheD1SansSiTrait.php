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
 * Tranche d1 sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheD1SansSiTrait {

    /**
     * Tranche d1 sans si.
     *
     * @var float
     */
    private $trancheD1SansSi;

    /**
     * Get the tranche d1 sans si.
     *
     * @return float Returns the tranche d1 sans si.
     */
    public function getTrancheD1SansSi() {
        return $this->trancheD1SansSi;
    }

    /**
     * Set the tranche d1 sans si.
     *
     * @param float $trancheD1SansSi The tranche d1 sans si.
     */
    public function setTrancheD1SansSi($trancheD1SansSi) {
        $this->trancheD1SansSi = $trancheD1SansSi;
        return $this;
    }
}
