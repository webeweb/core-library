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
 * Valeur euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurEurosTrait {

    /**
     * Valeur euros.
     *
     * @var float
     */
    private $valeurEuros;

    /**
     * Get the valeur euros.
     *
     * @return float Returns the valeur euros.
     */
    public function getValeurEuros() {
        return $this->valeurEuros;
    }

    /**
     * Set the valeur euros.
     *
     * @param float $valeurEuros The valeur euros.
     */
    public function setValeurEuros($valeurEuros) {
        $this->valeurEuros = $valeurEuros;
        return $this;
    }
}
