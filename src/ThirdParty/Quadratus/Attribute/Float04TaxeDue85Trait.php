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
 * 04 taxe due85 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float04TaxeDue85Trait {

    /**
     * 04 taxe due85.
     *
     * @var float
     */
    private $_04TaxeDue85;

    /**
     * Get the 04 taxe due85.
     *
     * @return float Returns the 04 taxe due85.
     */
    public function get04TaxeDue85() {
        return $this->_04TaxeDue85;
    }

    /**
     * Set the 04 taxe due85.
     *
     * @param float $_04TaxeDue85 The 04 taxe due85.
     */
    public function set04TaxeDue85($_04TaxeDue85) {
        $this->_04TaxeDue85 = $_04TaxeDue85;
        return $this;
    }
}
