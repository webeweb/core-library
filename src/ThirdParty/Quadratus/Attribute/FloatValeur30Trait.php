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
 * Valeur30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur30Trait {

    /**
     * Valeur30.
     *
     * @var float
     */
    private $valeur30;

    /**
     * Get the valeur30.
     *
     * @return float Returns the valeur30.
     */
    public function getValeur30() {
        return $this->valeur30;
    }

    /**
     * Set the valeur30.
     *
     * @param float $valeur30 The valeur30.
     */
    public function setValeur30($valeur30) {
        $this->valeur30 = $valeur30;
        return $this;
    }
}
