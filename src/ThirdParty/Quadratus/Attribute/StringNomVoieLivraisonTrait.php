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
 * Nom voie livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVoieLivraisonTrait {

    /**
     * Nom voie livraison.
     *
     * @var string
     */
    private $nomVoieLivraison;

    /**
     * Get the nom voie livraison.
     *
     * @return string Returns the nom voie livraison.
     */
    public function getNomVoieLivraison() {
        return $this->nomVoieLivraison;
    }

    /**
     * Set the nom voie livraison.
     *
     * @param string $nomVoieLivraison The nom voie livraison.
     */
    public function setNomVoieLivraison($nomVoieLivraison) {
        $this->nomVoieLivraison = $nomVoieLivraison;
        return $this;
    }
}
