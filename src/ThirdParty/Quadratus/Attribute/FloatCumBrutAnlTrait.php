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
 * Cum brut anl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutAnlTrait {

    /**
     * Cum brut anl.
     *
     * @var float
     */
    private $cumBrutAnl;

    /**
     * Get the cum brut anl.
     *
     * @return float Returns the cum brut anl.
     */
    public function getCumBrutAnl() {
        return $this->cumBrutAnl;
    }

    /**
     * Set the cum brut anl.
     *
     * @param float $cumBrutAnl The cum brut anl.
     */
    public function setCumBrutAnl($cumBrutAnl) {
        $this->cumBrutAnl = $cumBrutAnl;
        return $this;
    }
}
