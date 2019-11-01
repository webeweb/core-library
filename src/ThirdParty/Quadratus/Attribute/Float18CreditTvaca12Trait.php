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
 * 18 credit tvaca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float18CreditTvaca12Trait {

    /**
     * 18 credit tvaca12.
     *
     * @var float
     */
    private $_18CreditTvaca12;

    /**
     * Get the 18 credit tvaca12.
     *
     * @return float Returns the 18 credit tvaca12.
     */
    public function get18CreditTvaca12() {
        return $this->_18CreditTvaca12;
    }

    /**
     * Set the 18 credit tvaca12.
     *
     * @param float $_18CreditTvaca12 The 18 credit tvaca12.
     */
    public function set18CreditTvaca12($_18CreditTvaca12) {
        $this->_18CreditTvaca12 = $_18CreditTvaca12;
        return $this;
    }
}
