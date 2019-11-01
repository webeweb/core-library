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
 * Valeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringValeurTrait {

    /**
     * Valeur.
     *
     * @var string
     */
    private $valeur;

    /**
     * Get the valeur.
     *
     * @return string Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Set the valeur.
     *
     * @param string $valeur The valeur.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }
}
