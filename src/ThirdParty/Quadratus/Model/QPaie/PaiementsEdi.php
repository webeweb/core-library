<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Paiements edi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PaiementsEdi {

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Generer coupon paiement.
     *
     * @var bool
     */
    private $genererCouponPaiement;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Montant ducs annuelle.
     *
     * @var float
     */
    private $montantDucsAnnuelle;

    /**
     * Moyen paiement.
     *
     * @var string
     */
    private $moyenPaiement;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the dom banque.
     *
     * @return string Returns the dom banque.
     */
    public function getDomBanque() {
        return $this->domBanque;
    }

    /**
     * Get the generer coupon paiement.
     *
     * @return bool Returns the generer coupon paiement.
     */
    public function getGenererCouponPaiement() {
        return $this->genererCouponPaiement;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the montant ducs annuelle.
     *
     * @return float Returns the montant ducs annuelle.
     */
    public function getMontantDucsAnnuelle() {
        return $this->montantDucsAnnuelle;
    }

    /**
     * Get the moyen paiement.
     *
     * @return string Returns the moyen paiement.
     */
    public function getMoyenPaiement() {
        return $this->moyenPaiement;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the generer coupon paiement.
     *
     * @param bool $genererCouponPaiement The generer coupon paiement.
     */
    public function setGenererCouponPaiement($genererCouponPaiement) {
        $this->genererCouponPaiement = $genererCouponPaiement;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant ducs annuelle.
     *
     * @param float $montantDucsAnnuelle The montant ducs annuelle.
     */
    public function setMontantDucsAnnuelle($montantDucsAnnuelle) {
        $this->montantDucsAnnuelle = $montantDucsAnnuelle;
        return $this;
    }

    /**
     * Set the moyen paiement.
     *
     * @param string $moyenPaiement The moyen paiement.
     */
    public function setMoyenPaiement($moyenPaiement) {
        $this->moyenPaiement = $moyenPaiement;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }
}
