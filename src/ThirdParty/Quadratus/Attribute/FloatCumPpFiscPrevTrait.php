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
 * Cum pp fisc prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPpFiscPrevTrait {

    /**
     * Cum pp fisc prev.
     *
     * @var float
     */
    private $cumPpFiscPrev;

    /**
     * Get the cum pp fisc prev.
     *
     * @return float Returns the cum pp fisc prev.
     */
    public function getCumPpFiscPrev() {
        return $this->cumPpFiscPrev;
    }

    /**
     * Set the cum pp fisc prev.
     *
     * @param float $cumPpFiscPrev The cum pp fisc prev.
     */
    public function setCumPpFiscPrev($cumPpFiscPrev) {
        $this->cumPpFiscPrev = $cumPpFiscPrev;
        return $this;
    }
}
