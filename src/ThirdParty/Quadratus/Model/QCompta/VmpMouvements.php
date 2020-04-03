<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Vmp mouvements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class VmpMouvements {

    /**
     * Code vmp.
     *
     * @var string
     */
    private $codeVmp;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Francs euros.
     *
     * @var int
     */
    private $francsEuros;

    /**
     * Gratuit.
     *
     * @var bool
     */
    private $gratuit;

    /**
     * Montant comm.
     *
     * @var float
     */
    private $montantComm;

    /**
     * Montant coupon.
     *
     * @var float
     */
    private $montantCoupon;

    /**
     * Montant frais.
     *
     * @var float
     */
    private $montantFrais;

    /**
     * No lot ecr.
     *
     * @var int
     */
    private $noLotEcr;

    /**
     * No lot trace.
     *
     * @var string
     */
    private $noLotTrace;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num uniq ecr.
     *
     * @var int
     */
    private $numUniqEcr;

    /**
     * Prix unitaire.
     *
     * @var float
     */
    private $prixUnitaire;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Solde quantite.
     *
     * @var float
     */
    private $soldeQuantite;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code vmp.
     *
     * @return string Returns the code vmp.
     */
    public function getCodeVmp() {
        return $this->codeVmp;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the francs euros.
     *
     * @return int Returns the francs euros.
     */
    public function getFrancsEuros() {
        return $this->francsEuros;
    }

    /**
     * Get the gratuit.
     *
     * @return bool Returns the gratuit.
     */
    public function getGratuit() {
        return $this->gratuit;
    }

    /**
     * Get the montant comm.
     *
     * @return float Returns the montant comm.
     */
    public function getMontantComm() {
        return $this->montantComm;
    }

    /**
     * Get the montant coupon.
     *
     * @return float Returns the montant coupon.
     */
    public function getMontantCoupon() {
        return $this->montantCoupon;
    }

    /**
     * Get the montant frais.
     *
     * @return float Returns the montant frais.
     */
    public function getMontantFrais() {
        return $this->montantFrais;
    }

    /**
     * Get the no lot ecr.
     *
     * @return int Returns the no lot ecr.
     */
    public function getNoLotEcr() {
        return $this->noLotEcr;
    }

    /**
     * Get the no lot trace.
     *
     * @return string Returns the no lot trace.
     */
    public function getNoLotTrace() {
        return $this->noLotTrace;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num uniq ecr.
     *
     * @return int Returns the num uniq ecr.
     */
    public function getNumUniqEcr() {
        return $this->numUniqEcr;
    }

    /**
     * Get the prix unitaire.
     *
     * @return float Returns the prix unitaire.
     */
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the solde quantite.
     *
     * @return float Returns the solde quantite.
     */
    public function getSoldeQuantite() {
        return $this->soldeQuantite;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code vmp.
     *
     * @param string $codeVmp The code vmp.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setCodeVmp($codeVmp) {
        $this->codeVmp = $codeVmp;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the francs euros.
     *
     * @param int $francsEuros The francs euros.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setFrancsEuros($francsEuros) {
        $this->francsEuros = $francsEuros;
        return $this;
    }

    /**
     * Set the gratuit.
     *
     * @param bool $gratuit The gratuit.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setGratuit($gratuit) {
        $this->gratuit = $gratuit;
        return $this;
    }

    /**
     * Set the montant comm.
     *
     * @param float $montantComm The montant comm.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantComm($montantComm) {
        $this->montantComm = $montantComm;
        return $this;
    }

    /**
     * Set the montant coupon.
     *
     * @param float $montantCoupon The montant coupon.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantCoupon($montantCoupon) {
        $this->montantCoupon = $montantCoupon;
        return $this;
    }

    /**
     * Set the montant frais.
     *
     * @param float $montantFrais The montant frais.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantFrais($montantFrais) {
        $this->montantFrais = $montantFrais;
        return $this;
    }

    /**
     * Set the no lot ecr.
     *
     * @param int $noLotEcr The no lot ecr.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNoLotEcr($noLotEcr) {
        $this->noLotEcr = $noLotEcr;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string $noLotTrace The no lot trace.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNoLotTrace($noLotTrace) {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int $numUniqEcr The num uniq ecr.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNumUniqEcr($numUniqEcr) {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float $prixUnitaire The prix unitaire.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the solde quantite.
     *
     * @param float $soldeQuantite The solde quantite.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setSoldeQuantite($soldeQuantite) {
        $this->soldeQuantite = $soldeQuantite;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
