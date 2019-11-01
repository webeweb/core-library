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

use DateTime;

/**
 * Date facture fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFactureFournisseurTrait {

    /**
     * Date facture fournisseur.
     *
     * @var DateTime|null
     */
    private $dateFactureFournisseur;

    /**
     * Get the date facture fournisseur.
     *
     * @return DateTime|null Returns the date facture fournisseur.
     */
    public function getDateFactureFournisseur() {
        return $this->dateFactureFournisseur;
    }

    /**
     * Set the date facture fournisseur.
     *
     * @param DateTime|null $dateFactureFournisseur The date facture fournisseur.
     */
    public function setDateFactureFournisseur(DateTime $dateFactureFournisseur = null) {
        $this->dateFactureFournisseur = $dateFactureFournisseur;
        return $this;
    }
}
