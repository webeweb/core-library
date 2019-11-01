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
 * Tdfc facturant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTdfcFacturantTrait {

    /**
     * Tdfc facturant.
     *
     * @var string
     */
    private $tdfcFacturant;

    /**
     * Get the tdfc facturant.
     *
     * @return string Returns the tdfc facturant.
     */
    public function getTdfcFacturant() {
        return $this->tdfcFacturant;
    }

    /**
     * Set the tdfc facturant.
     *
     * @param string $tdfcFacturant The tdfc facturant.
     */
    public function setTdfcFacturant($tdfcFacturant) {
        $this->tdfcFacturant = $tdfcFacturant;
        return $this;
    }
}
