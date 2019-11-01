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
 * Tranche2 sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTranche2SansSiTrait {

    /**
     * Tranche2 sans si.
     *
     * @var float
     */
    private $tranche2SansSi;

    /**
     * Get the tranche2 sans si.
     *
     * @return float Returns the tranche2 sans si.
     */
    public function getTranche2SansSi() {
        return $this->tranche2SansSi;
    }

    /**
     * Set the tranche2 sans si.
     *
     * @param float $tranche2SansSi The tranche2 sans si.
     */
    public function setTranche2SansSi($tranche2SansSi) {
        $this->tranche2SansSi = $tranche2SansSi;
        return $this;
    }
}
