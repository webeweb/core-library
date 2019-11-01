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
 * Cum ps fisc ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPsFiscRetTrait {

    /**
     * Cum ps fisc ret.
     *
     * @var float
     */
    private $cumPsFiscRet;

    /**
     * Get the cum ps fisc ret.
     *
     * @return float Returns the cum ps fisc ret.
     */
    public function getCumPsFiscRet() {
        return $this->cumPsFiscRet;
    }

    /**
     * Set the cum ps fisc ret.
     *
     * @param float $cumPsFiscRet The cum ps fisc ret.
     */
    public function setCumPsFiscRet($cumPsFiscRet) {
        $this->cumPsFiscRet = $cumPsFiscRet;
        return $this;
    }
}
