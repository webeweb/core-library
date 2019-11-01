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
 * Saisir adresse livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirAdresseLivraisonTrait {

    /**
     * Saisir adresse livraison.
     *
     * @var bool
     */
    private $saisirAdresseLivraison;

    /**
     * Get the saisir adresse livraison.
     *
     * @return bool Returns the saisir adresse livraison.
     */
    public function getSaisirAdresseLivraison() {
        return $this->saisirAdresseLivraison;
    }

    /**
     * Set the saisir adresse livraison.
     *
     * @param bool $saisirAdresseLivraison The saisir adresse livraison.
     */
    public function setSaisirAdresseLivraison($saisirAdresseLivraison) {
        $this->saisirAdresseLivraison = $saisirAdresseLivraison;
        return $this;
    }
}
