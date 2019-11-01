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
 * Nom suite livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSuiteLivraisonTrait {

    /**
     * Nom suite livraison.
     *
     * @var string
     */
    private $nomSuiteLivraison;

    /**
     * Get the nom suite livraison.
     *
     * @return string Returns the nom suite livraison.
     */
    public function getNomSuiteLivraison() {
        return $this->nomSuiteLivraison;
    }

    /**
     * Set the nom suite livraison.
     *
     * @param string $nomSuiteLivraison The nom suite livraison.
     */
    public function setNomSuiteLivraison($nomSuiteLivraison) {
        $this->nomSuiteLivraison = $nomSuiteLivraison;
        return $this;
    }
}
