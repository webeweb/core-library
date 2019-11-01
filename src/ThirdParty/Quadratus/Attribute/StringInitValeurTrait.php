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
 * Init valeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInitValeurTrait {

    /**
     * Init valeur.
     *
     * @var string
     */
    private $initValeur;

    /**
     * Get the init valeur.
     *
     * @return string Returns the init valeur.
     */
    public function getInitValeur() {
        return $this->initValeur;
    }

    /**
     * Set the init valeur.
     *
     * @param string $initValeur The init valeur.
     */
    public function setInitValeur($initValeur) {
        $this->initValeur = $initValeur;
        return $this;
    }
}
