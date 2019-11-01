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
 * 20 acompte ta2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float20AcompteTa2Trait {

    /**
     * 20 acompte ta2.
     *
     * @var float
     */
    private $_20AcompteTa2;

    /**
     * Get the 20 acompte ta2.
     *
     * @return float Returns the 20 acompte ta2.
     */
    public function get20AcompteTa2() {
        return $this->_20AcompteTa2;
    }

    /**
     * Set the 20 acompte ta2.
     *
     * @param float $_20AcompteTa2 The 20 acompte ta2.
     */
    public function set20AcompteTa2($_20AcompteTa2) {
        $this->_20AcompteTa2 = $_20AcompteTa2;
        return $this;
    }
}
