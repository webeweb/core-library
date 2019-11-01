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
 * Type suivi autre valeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTypeSuiviAutreValeurTrait {

    /**
     * Type suivi autre valeur.
     *
     * @var float
     */
    private $typeSuiviAutreValeur;

    /**
     * Get the type suivi autre valeur.
     *
     * @return float Returns the type suivi autre valeur.
     */
    public function getTypeSuiviAutreValeur() {
        return $this->typeSuiviAutreValeur;
    }

    /**
     * Set the type suivi autre valeur.
     *
     * @param float $typeSuiviAutreValeur The type suivi autre valeur.
     */
    public function setTypeSuiviAutreValeur($typeSuiviAutreValeur) {
        $this->typeSuiviAutreValeur = $typeSuiviAutreValeur;
        return $this;
    }
}
