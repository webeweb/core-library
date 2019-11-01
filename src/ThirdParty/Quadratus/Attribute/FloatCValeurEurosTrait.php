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
 * C valeur euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCValeurEurosTrait {

    /**
     * C valeur euros.
     *
     * @var float
     */
    private $cValeurEuros;

    /**
     * Get the c valeur euros.
     *
     * @return float Returns the c valeur euros.
     */
    public function getCValeurEuros() {
        return $this->cValeurEuros;
    }

    /**
     * Set the c valeur euros.
     *
     * @param float $cValeurEuros The c valeur euros.
     */
    public function setCValeurEuros($cValeurEuros) {
        $this->cValeurEuros = $cValeurEuros;
        return $this;
    }
}
