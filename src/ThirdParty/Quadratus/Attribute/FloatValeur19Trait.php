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
 * Valeur19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur19Trait {

    /**
     * Valeur19.
     *
     * @var float
     */
    private $valeur19;

    /**
     * Get the valeur19.
     *
     * @return float Returns the valeur19.
     */
    public function getValeur19() {
        return $this->valeur19;
    }

    /**
     * Set the valeur19.
     *
     * @param float $valeur19 The valeur19.
     */
    public function setValeur19($valeur19) {
        $this->valeur19 = $valeur19;
        return $this;
    }
}
