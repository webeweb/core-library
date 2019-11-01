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
 * 09 total tva brute trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float09TotalTvaBruteTrait {

    /**
     * 09 total tva brute.
     *
     * @var float
     */
    private $_09TotalTvaBrute;

    /**
     * Get the 09 total tva brute.
     *
     * @return float Returns the 09 total tva brute.
     */
    public function get09TotalTvaBrute() {
        return $this->_09TotalTvaBrute;
    }

    /**
     * Set the 09 total tva brute.
     *
     * @param float $_09TotalTvaBrute The 09 total tva brute.
     */
    public function set09TotalTvaBrute($_09TotalTvaBrute) {
        $this->_09TotalTvaBrute = $_09TotalTvaBrute;
        return $this;
    }
}
