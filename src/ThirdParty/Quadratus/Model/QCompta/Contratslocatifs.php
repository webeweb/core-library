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
 * Contratslocatifs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Contratslocatifs {

    /**
     * Caution.
     *
     * @var float
     */
    private $caution;

    /**
     * Caution2.
     *
     * @var float
     */
    private $caution2;

    /**
     * Caution3.
     *
     * @var float
     */
    private $caution3;

    /**
     * Caution4.
     *
     * @var float
     */
    private $caution4;

    /**
     * Caution5.
     *
     * @var float
     */
    private $caution5;

    /**
     * Clausespeciale.
     *
     * @var string
     */
    private $clausespeciale;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Date anniversaire.
     *
     * @var string
     */
    private $dateAnniversaire;

    /**
     * Date caution.
     *
     * @var DateTime|null
     */
    private $dateCaution;

    /**
     * Date caution2.
     *
     * @var DateTime|null
     */
    private $dateCaution2;

    /**
     * Date caution3.
     *
     * @var DateTime|null
     */
    private $dateCaution3;

    /**
     * Date caution4.
     *
     * @var DateTime|null
     */
    private $dateCaution4;

    /**
     * Date caution5.
     *
     * @var DateTime|null
     */
    private $dateCaution5;

    /**
     * Date signature.
     *
     * @var DateTime|null
     */
    private $dateSignature;

    /**
     * Date signature2.
     *
     * @var DateTime|null
     */
    private $dateSignature2;

    /**
     * Date signature3.
     *
     * @var DateTime|null
     */
    private $dateSignature3;

    /**
     * Date signature4.
     *
     * @var DateTime|null
     */
    private $dateSignature4;

    /**
     * Date signature5.
     *
     * @var DateTime|null
     */
    private $dateSignature5;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * Duree preavis.
     *
     * @var int
     */
    private $dureePreavis;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Monnaie caution.
     *
     * @var string
     */
    private $monnaieCaution;

    /**
     * Monnaie loyer.
     *
     * @var string
     */
    private $monnaieLoyer;

    /**
     * Montant annuel.
     *
     * @var float
     */
    private $montantAnnuel;

    /**
     * Montant annuel2.
     *
     * @var float
     */
    private $montantAnnuel2;

    /**
     * Montant annuel3.
     *
     * @var float
     */
    private $montantAnnuel3;

    /**
     * Montant annuel4.
     *
     * @var float
     */
    private $montantAnnuel4;

    /**
     * Montant annuel5.
     *
     * @var float
     */
    private $montantAnnuel5;

    /**
     * Montant charges.
     *
     * @var float
     */
    private $montantCharges;

    /**
     * Montant charges2.
     *
     * @var float
     */
    private $montantCharges2;

    /**
     * Montant charges3.
     *
     * @var float
     */
    private $montantCharges3;

    /**
     * Montant charges4.
     *
     * @var float
     */
    private $montantCharges4;

    /**
     * Montant charges5.
     *
     * @var float
     */
    private $montantCharges5;

    /**
     * Num cpt caution.
     *
     * @var string
     */
    private $numCptCaution;

    /**
     * Num cpt charges.
     *
     * @var string
     */
    private $numCptCharges;

    /**
     * Num cpt loyer.
     *
     * @var string
     */
    private $numCptLoyer;

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

    /**
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Unite duree.
     *
     * @var string
     */
    private $uniteDuree;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the caution.
     *
     * @return float Returns the caution.
     */
    public function getCaution() {
        return $this->caution;
    }

    /**
     * Get the caution2.
     *
     * @return float Returns the caution2.
     */
    public function getCaution2() {
        return $this->caution2;
    }

    /**
     * Get the caution3.
     *
     * @return float Returns the caution3.
     */
    public function getCaution3() {
        return $this->caution3;
    }

    /**
     * Get the caution4.
     *
     * @return float Returns the caution4.
     */
    public function getCaution4() {
        return $this->caution4;
    }

    /**
     * Get the caution5.
     *
     * @return float Returns the caution5.
     */
    public function getCaution5() {
        return $this->caution5;
    }

    /**
     * Get the clausespeciale.
     *
     * @return string Returns the clausespeciale.
     */
    public function getClausespeciale() {
        return $this->clausespeciale;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the date anniversaire.
     *
     * @return string Returns the date anniversaire.
     */
    public function getDateAnniversaire() {
        return $this->dateAnniversaire;
    }

    /**
     * Get the date caution.
     *
     * @return DateTime|null Returns the date caution.
     */
    public function getDateCaution() {
        return $this->dateCaution;
    }

    /**
     * Get the date caution2.
     *
     * @return DateTime|null Returns the date caution2.
     */
    public function getDateCaution2() {
        return $this->dateCaution2;
    }

    /**
     * Get the date caution3.
     *
     * @return DateTime|null Returns the date caution3.
     */
    public function getDateCaution3() {
        return $this->dateCaution3;
    }

    /**
     * Get the date caution4.
     *
     * @return DateTime|null Returns the date caution4.
     */
    public function getDateCaution4() {
        return $this->dateCaution4;
    }

    /**
     * Get the date caution5.
     *
     * @return DateTime|null Returns the date caution5.
     */
    public function getDateCaution5() {
        return $this->dateCaution5;
    }

    /**
     * Get the date signature.
     *
     * @return DateTime|null Returns the date signature.
     */
    public function getDateSignature() {
        return $this->dateSignature;
    }

    /**
     * Get the date signature2.
     *
     * @return DateTime|null Returns the date signature2.
     */
    public function getDateSignature2() {
        return $this->dateSignature2;
    }

    /**
     * Get the date signature3.
     *
     * @return DateTime|null Returns the date signature3.
     */
    public function getDateSignature3() {
        return $this->dateSignature3;
    }

    /**
     * Get the date signature4.
     *
     * @return DateTime|null Returns the date signature4.
     */
    public function getDateSignature4() {
        return $this->dateSignature4;
    }

    /**
     * Get the date signature5.
     *
     * @return DateTime|null Returns the date signature5.
     */
    public function getDateSignature5() {
        return $this->dateSignature5;
    }

    /**
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the duree preavis.
     *
     * @return int Returns the duree preavis.
     */
    public function getDureePreavis() {
        return $this->dureePreavis;
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
     * Get the monnaie caution.
     *
     * @return string Returns the monnaie caution.
     */
    public function getMonnaieCaution() {
        return $this->monnaieCaution;
    }

    /**
     * Get the monnaie loyer.
     *
     * @return string Returns the monnaie loyer.
     */
    public function getMonnaieLoyer() {
        return $this->monnaieLoyer;
    }

    /**
     * Get the montant annuel.
     *
     * @return float Returns the montant annuel.
     */
    public function getMontantAnnuel() {
        return $this->montantAnnuel;
    }

    /**
     * Get the montant annuel2.
     *
     * @return float Returns the montant annuel2.
     */
    public function getMontantAnnuel2() {
        return $this->montantAnnuel2;
    }

    /**
     * Get the montant annuel3.
     *
     * @return float Returns the montant annuel3.
     */
    public function getMontantAnnuel3() {
        return $this->montantAnnuel3;
    }

    /**
     * Get the montant annuel4.
     *
     * @return float Returns the montant annuel4.
     */
    public function getMontantAnnuel4() {
        return $this->montantAnnuel4;
    }

    /**
     * Get the montant annuel5.
     *
     * @return float Returns the montant annuel5.
     */
    public function getMontantAnnuel5() {
        return $this->montantAnnuel5;
    }

    /**
     * Get the montant charges.
     *
     * @return float Returns the montant charges.
     */
    public function getMontantCharges() {
        return $this->montantCharges;
    }

    /**
     * Get the montant charges2.
     *
     * @return float Returns the montant charges2.
     */
    public function getMontantCharges2() {
        return $this->montantCharges2;
    }

    /**
     * Get the montant charges3.
     *
     * @return float Returns the montant charges3.
     */
    public function getMontantCharges3() {
        return $this->montantCharges3;
    }

    /**
     * Get the montant charges4.
     *
     * @return float Returns the montant charges4.
     */
    public function getMontantCharges4() {
        return $this->montantCharges4;
    }

    /**
     * Get the montant charges5.
     *
     * @return float Returns the montant charges5.
     */
    public function getMontantCharges5() {
        return $this->montantCharges5;
    }

    /**
     * Get the num cpt caution.
     *
     * @return string Returns the num cpt caution.
     */
    public function getNumCptCaution() {
        return $this->numCptCaution;
    }

    /**
     * Get the num cpt charges.
     *
     * @return string Returns the num cpt charges.
     */
    public function getNumCptCharges() {
        return $this->numCptCharges;
    }

    /**
     * Get the num cpt loyer.
     *
     * @return string Returns the num cpt loyer.
     */
    public function getNumCptLoyer() {
        return $this->numCptLoyer;
    }

    /**
     * Get the num ordre.
     *
     * @return int Returns the num ordre.
     */
    public function getNumOrdre() {
        return $this->numOrdre;
    }

    /**
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the unite duree.
     *
     * @return string Returns the unite duree.
     */
    public function getUniteDuree() {
        return $this->uniteDuree;
    }

    /**
     * Set the caution.
     *
     * @param float $caution The caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution($caution) {
        $this->caution = $caution;
        return $this;
    }

    /**
     * Set the caution2.
     *
     * @param float $caution2 The caution2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution2($caution2) {
        $this->caution2 = $caution2;
        return $this;
    }

    /**
     * Set the caution3.
     *
     * @param float $caution3 The caution3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution3($caution3) {
        $this->caution3 = $caution3;
        return $this;
    }

    /**
     * Set the caution4.
     *
     * @param float $caution4 The caution4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution4($caution4) {
        $this->caution4 = $caution4;
        return $this;
    }

    /**
     * Set the caution5.
     *
     * @param float $caution5 The caution5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCaution5($caution5) {
        $this->caution5 = $caution5;
        return $this;
    }

    /**
     * Set the clausespeciale.
     *
     * @param string $clausespeciale The clausespeciale.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setClausespeciale($clausespeciale) {
        $this->clausespeciale = $clausespeciale;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the date anniversaire.
     *
     * @param string $dateAnniversaire The date anniversaire.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateAnniversaire($dateAnniversaire) {
        $this->dateAnniversaire = $dateAnniversaire;
        return $this;
    }

    /**
     * Set the date caution.
     *
     * @param DateTime|null $dateCaution The date caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution(DateTime $dateCaution = null) {
        $this->dateCaution = $dateCaution;
        return $this;
    }

    /**
     * Set the date caution2.
     *
     * @param DateTime|null $dateCaution2 The date caution2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution2(DateTime $dateCaution2 = null) {
        $this->dateCaution2 = $dateCaution2;
        return $this;
    }

    /**
     * Set the date caution3.
     *
     * @param DateTime|null $dateCaution3 The date caution3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution3(DateTime $dateCaution3 = null) {
        $this->dateCaution3 = $dateCaution3;
        return $this;
    }

    /**
     * Set the date caution4.
     *
     * @param DateTime|null $dateCaution4 The date caution4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution4(DateTime $dateCaution4 = null) {
        $this->dateCaution4 = $dateCaution4;
        return $this;
    }

    /**
     * Set the date caution5.
     *
     * @param DateTime|null $dateCaution5 The date caution5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateCaution5(DateTime $dateCaution5 = null) {
        $this->dateCaution5 = $dateCaution5;
        return $this;
    }

    /**
     * Set the date signature.
     *
     * @param DateTime|null $dateSignature The date signature.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature(DateTime $dateSignature = null) {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    /**
     * Set the date signature2.
     *
     * @param DateTime|null $dateSignature2 The date signature2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature2(DateTime $dateSignature2 = null) {
        $this->dateSignature2 = $dateSignature2;
        return $this;
    }

    /**
     * Set the date signature3.
     *
     * @param DateTime|null $dateSignature3 The date signature3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature3(DateTime $dateSignature3 = null) {
        $this->dateSignature3 = $dateSignature3;
        return $this;
    }

    /**
     * Set the date signature4.
     *
     * @param DateTime|null $dateSignature4 The date signature4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature4(DateTime $dateSignature4 = null) {
        $this->dateSignature4 = $dateSignature4;
        return $this;
    }

    /**
     * Set the date signature5.
     *
     * @param DateTime|null $dateSignature5 The date signature5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDateSignature5(DateTime $dateSignature5 = null) {
        $this->dateSignature5 = $dateSignature5;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the duree preavis.
     *
     * @param int $dureePreavis The duree preavis.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setDureePreavis($dureePreavis) {
        $this->dureePreavis = $dureePreavis;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie caution.
     *
     * @param string $monnaieCaution The monnaie caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMonnaieCaution($monnaieCaution) {
        $this->monnaieCaution = $monnaieCaution;
        return $this;
    }

    /**
     * Set the monnaie loyer.
     *
     * @param string $monnaieLoyer The monnaie loyer.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMonnaieLoyer($monnaieLoyer) {
        $this->monnaieLoyer = $monnaieLoyer;
        return $this;
    }

    /**
     * Set the montant annuel.
     *
     * @param float $montantAnnuel The montant annuel.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel($montantAnnuel) {
        $this->montantAnnuel = $montantAnnuel;
        return $this;
    }

    /**
     * Set the montant annuel2.
     *
     * @param float $montantAnnuel2 The montant annuel2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel2($montantAnnuel2) {
        $this->montantAnnuel2 = $montantAnnuel2;
        return $this;
    }

    /**
     * Set the montant annuel3.
     *
     * @param float $montantAnnuel3 The montant annuel3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel3($montantAnnuel3) {
        $this->montantAnnuel3 = $montantAnnuel3;
        return $this;
    }

    /**
     * Set the montant annuel4.
     *
     * @param float $montantAnnuel4 The montant annuel4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel4($montantAnnuel4) {
        $this->montantAnnuel4 = $montantAnnuel4;
        return $this;
    }

    /**
     * Set the montant annuel5.
     *
     * @param float $montantAnnuel5 The montant annuel5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantAnnuel5($montantAnnuel5) {
        $this->montantAnnuel5 = $montantAnnuel5;
        return $this;
    }

    /**
     * Set the montant charges.
     *
     * @param float $montantCharges The montant charges.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges($montantCharges) {
        $this->montantCharges = $montantCharges;
        return $this;
    }

    /**
     * Set the montant charges2.
     *
     * @param float $montantCharges2 The montant charges2.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges2($montantCharges2) {
        $this->montantCharges2 = $montantCharges2;
        return $this;
    }

    /**
     * Set the montant charges3.
     *
     * @param float $montantCharges3 The montant charges3.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges3($montantCharges3) {
        $this->montantCharges3 = $montantCharges3;
        return $this;
    }

    /**
     * Set the montant charges4.
     *
     * @param float $montantCharges4 The montant charges4.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges4($montantCharges4) {
        $this->montantCharges4 = $montantCharges4;
        return $this;
    }

    /**
     * Set the montant charges5.
     *
     * @param float $montantCharges5 The montant charges5.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setMontantCharges5($montantCharges5) {
        $this->montantCharges5 = $montantCharges5;
        return $this;
    }

    /**
     * Set the num cpt caution.
     *
     * @param string $numCptCaution The num cpt caution.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptCaution($numCptCaution) {
        $this->numCptCaution = $numCptCaution;
        return $this;
    }

    /**
     * Set the num cpt charges.
     *
     * @param string $numCptCharges The num cpt charges.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptCharges($numCptCharges) {
        $this->numCptCharges = $numCptCharges;
        return $this;
    }

    /**
     * Set the num cpt loyer.
     *
     * @param string $numCptLoyer The num cpt loyer.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumCptLoyer($numCptLoyer) {
        $this->numCptLoyer = $numCptLoyer;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the unite duree.
     *
     * @param string $uniteDuree The unite duree.
     * @return Contratslocatifs Returns this Contratslocatifs.
     */
    public function setUniteDuree($uniteDuree) {
        $this->uniteDuree = $uniteDuree;
        return $this;
    }
}
