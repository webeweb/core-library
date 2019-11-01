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
 * Nom livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomLivraisonTrait {

    /**
     * Nom livraison.
     *
     * @var string
     */
    private $nomLivraison;

    /**
     * Get the nom livraison.
     *
     * @return string Returns the nom livraison.
     */
    public function getNomLivraison() {
        return $this->nomLivraison;
    }

    /**
     * Set the nom livraison.
     *
     * @param string $nomLivraison The nom livraison.
     */
    public function setNomLivraison($nomLivraison) {
        $this->nomLivraison = $nomLivraison;
        return $this;
    }
}
