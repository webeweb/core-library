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
 * Cr valeur euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrValeurEurosTrait {

    /**
     * Cr valeur euros.
     *
     * @var float
     */
    private $crValeurEuros;

    /**
     * Get the cr valeur euros.
     *
     * @return float Returns the cr valeur euros.
     */
    public function getCrValeurEuros() {
        return $this->crValeurEuros;
    }

    /**
     * Set the cr valeur euros.
     *
     * @param float $crValeurEuros The cr valeur euros.
     */
    public function setCrValeurEuros($crValeurEuros) {
        $this->crValeurEuros = $crValeurEuros;
        return $this;
    }
}
