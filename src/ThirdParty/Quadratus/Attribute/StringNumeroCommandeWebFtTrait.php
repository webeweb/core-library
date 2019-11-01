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
 * Numero commande web ft trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCommandeWebFtTrait {

    /**
     * Numero commande web ft.
     *
     * @var string
     */
    private $numeroCommandeWebFt;

    /**
     * Get the numero commande web ft.
     *
     * @return string Returns the numero commande web ft.
     */
    public function getNumeroCommandeWebFt() {
        return $this->numeroCommandeWebFt;
    }

    /**
     * Set the numero commande web ft.
     *
     * @param string $numeroCommandeWebFt The numero commande web ft.
     */
    public function setNumeroCommandeWebFt($numeroCommandeWebFt) {
        $this->numeroCommandeWebFt = $numeroCommandeWebFt;
        return $this;
    }
}
