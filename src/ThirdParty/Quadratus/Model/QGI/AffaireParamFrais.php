<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Affaire param frais.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AffaireParamFrais {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string
     */
    private $codeAvenant;

    /**
     * Code frais fixe.
     *
     * @var string
     */
    private $codeFraisFixe;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Comptes comptables.
     *
     * @var string
     */
    private $comptesComptables;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Mt fg1.
     *
     * @var float
     */
    private $mtFg1;

    /**
     * Mt fg2.
     *
     * @var float
     */
    private $mtFg2;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pourcentage.
     *
     * @var bool
     */
    private $pourcentage;

    /**
     * Prct fg1.
     *
     * @var float
     */
    private $prctFg1;

    /**
     * Prct fg2.
     *
     * @var float
     */
    private $prctFg2;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code avenant.
     *
     * @return string Returns the code avenant.
     */
    public function getCodeAvenant() {
        return $this->codeAvenant;
    }

    /**
     * Get the code frais fixe.
     *
     * @return string Returns the code frais fixe.
     */
    public function getCodeFraisFixe() {
        return $this->codeFraisFixe;
    }

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Get the comptes comptables.
     *
     * @return string Returns the comptes comptables.
     */
    public function getComptesComptables() {
        return $this->comptesComptables;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the mt fg1.
     *
     * @return float Returns the mt fg1.
     */
    public function getMtFg1() {
        return $this->mtFg1;
    }

    /**
     * Get the mt fg2.
     *
     * @return float Returns the mt fg2.
     */
    public function getMtFg2() {
        return $this->mtFg2;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the pourcentage.
     *
     * @return bool Returns the pourcentage.
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Get the prct fg1.
     *
     * @return float Returns the prct fg1.
     */
    public function getPrctFg1() {
        return $this->prctFg1;
    }

    /**
     * Get the prct fg2.
     *
     * @return float Returns the prct fg2.
     */
    public function getPrctFg2() {
        return $this->prctFg2;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string $codeAvenant The code avenant.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeAvenant($codeAvenant) {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code frais fixe.
     *
     * @param string $codeFraisFixe The code frais fixe.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodeFraisFixe($codeFraisFixe) {
        $this->codeFraisFixe = $codeFraisFixe;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the comptes comptables.
     *
     * @param string $comptesComptables The comptes comptables.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setComptesComptables($comptesComptables) {
        $this->comptesComptables = $comptesComptables;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt fg1.
     *
     * @param float $mtFg1 The mt fg1.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMtFg1($mtFg1) {
        $this->mtFg1 = $mtFg1;
        return $this;
    }

    /**
     * Set the mt fg2.
     *
     * @param float $mtFg2 The mt fg2.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setMtFg2($mtFg2) {
        $this->mtFg2 = $mtFg2;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param bool $pourcentage The pourcentage.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the prct fg1.
     *
     * @param float $prctFg1 The prct fg1.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPrctFg1($prctFg1) {
        $this->prctFg1 = $prctFg1;
        return $this;
    }

    /**
     * Set the prct fg2.
     *
     * @param float $prctFg2 The prct fg2.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setPrctFg2($prctFg2) {
        $this->prctFg2 = $prctFg2;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return AffaireParamFrais Returns this Affaire param frais.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
