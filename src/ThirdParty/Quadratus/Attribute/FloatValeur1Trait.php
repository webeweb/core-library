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
 * Valeur1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur1Trait {

    /**
     * Valeur1.
     *
     * @var float
     */
    private $valeur1;

    /**
     * Get the valeur1.
     *
     * @return float Returns the valeur1.
     */
    public function getValeur1() {
        return $this->valeur1;
    }

    /**
     * Set the valeur1.
     *
     * @param float $valeur1 The valeur1.
     */
    public function setValeur1($valeur1) {
        $this->valeur1 = $valeur1;
        return $this;
    }
}
