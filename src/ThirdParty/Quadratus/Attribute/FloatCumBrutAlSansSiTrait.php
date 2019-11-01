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
 * Cum brut al sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutAlSansSiTrait {

    /**
     * Cum brut al sans si.
     *
     * @var float
     */
    private $cumBrutAlSansSi;

    /**
     * Get the cum brut al sans si.
     *
     * @return float Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi() {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float $cumBrutAlSansSi The cum brut al sans si.
     */
    public function setCumBrutAlSansSi($cumBrutAlSansSi) {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }
}
