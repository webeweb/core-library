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
 * Valeur26 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur26Trait {

    /**
     * Valeur26.
     *
     * @var float
     */
    private $valeur26;

    /**
     * Get the valeur26.
     *
     * @return float Returns the valeur26.
     */
    public function getValeur26() {
        return $this->valeur26;
    }

    /**
     * Set the valeur26.
     *
     * @param float $valeur26 The valeur26.
     */
    public function setValeur26($valeur26) {
        $this->valeur26 = $valeur26;
        return $this;
    }
}
