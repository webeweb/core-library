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
 * Valeur36 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur36Trait {

    /**
     * Valeur36.
     *
     * @var float
     */
    private $valeur36;

    /**
     * Get the valeur36.
     *
     * @return float Returns the valeur36.
     */
    public function getValeur36() {
        return $this->valeur36;
    }

    /**
     * Set the valeur36.
     *
     * @param float $valeur36 The valeur36.
     */
    public function setValeur36($valeur36) {
        $this->valeur36 = $valeur36;
        return $this;
    }
}
