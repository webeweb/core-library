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
 * Crr suppl valeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrSupplValeurTrait {

    /**
     * Crr suppl valeur.
     *
     * @var float
     */
    private $crrSupplValeur;

    /**
     * Get the crr suppl valeur.
     *
     * @return float Returns the crr suppl valeur.
     */
    public function getCrrSupplValeur() {
        return $this->crrSupplValeur;
    }

    /**
     * Set the crr suppl valeur.
     *
     * @param float $crrSupplValeur The crr suppl valeur.
     */
    public function setCrrSupplValeur($crrSupplValeur) {
        $this->crrSupplValeur = $crrSupplValeur;
        return $this;
    }
}
