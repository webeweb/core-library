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
 * Cum pp fisc ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPpFiscRetTrait {

    /**
     * Cum pp fisc ret.
     *
     * @var float
     */
    private $cumPpFiscRet;

    /**
     * Get the cum pp fisc ret.
     *
     * @return float Returns the cum pp fisc ret.
     */
    public function getCumPpFiscRet() {
        return $this->cumPpFiscRet;
    }

    /**
     * Set the cum pp fisc ret.
     *
     * @param float $cumPpFiscRet The cum pp fisc ret.
     */
    public function setCumPpFiscRet($cumPpFiscRet) {
        $this->cumPpFiscRet = $cumPpFiscRet;
        return $this;
    }
}
