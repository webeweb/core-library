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
 * 20 acompte ta1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float20AcompteTa1Trait {

    /**
     * 20 acompte ta1.
     *
     * @var float
     */
    private $_20AcompteTa1;

    /**
     * Get the 20 acompte ta1.
     *
     * @return float Returns the 20 acompte ta1.
     */
    public function get20AcompteTa1() {
        return $this->_20AcompteTa1;
    }

    /**
     * Set the 20 acompte ta1.
     *
     * @param float $_20AcompteTa1 The 20 acompte ta1.
     */
    public function set20AcompteTa1($_20AcompteTa1) {
        $this->_20AcompteTa1 = $_20AcompteTa1;
        return $this;
    }
}
