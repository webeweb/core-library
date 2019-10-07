<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Assurances model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Assurances {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Compagnie.
     *
     * @var string
     */
    private $compagnie;

    /**
     * Courtier.
     *
     * @var string
     */
    private $courtier;

    /**
     * Date echeance.
     *
     * @var string
     */
    private $dateEcheance;

    /**
     * Date initiale.
     *
     * @var DateTime
     */
    private $dateInitiale;

    /**
     * Date signature1.
     *
     * @var DateTime
     */
    private $dateSignature1;

    /**
     * Date signature2.
     *
     * @var DateTime
     */
    private $dateSignature2;

    /**
     * Date signature3.
     *
     * @var DateTime
     */
    private $dateSignature3;

    /**
     * Date signature4.
     *
     * @var DateTime
     */
    private $dateSignature4;

    /**
     * Date signature5.
     *
     * @var DateTime
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
     * Montant annuel1.
     *
     * @var float
     */
    private $montantAnnuel1;

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
     * Montant fixe.
     *
     * @var bool
     */
    private $montantFixe;

    /**
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

    /**
     * Num cpt assurance.
     *
     * @var string
     */
    private $numCptAssurance;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

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
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the compagnie.
     *
     * @return string Returns the compagnie.
     */
    public function getCompagnie() {
        return $this->compagnie;
    }

    /**
     * Get the courtier.
     *
     * @return string Returns the courtier.
     */
    public function getCourtier() {
        return $this->courtier;
    }

    /**
     * Get the date echeance.
     *
     * @return string Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the date initiale.
     *
     * @return DateTime Returns the date initiale.
     */
    public function getDateInitiale() {
        return $this->dateInitiale;
    }

    /**
     * Get the date signature1.
     *
     * @return DateTime Returns the date signature1.
     */
    public function getDateSignature1() {
        return $this->dateSignature1;
    }

    /**
     * Get the date signature2.
     *
     * @return DateTime Returns the date signature2.
     */
    public function getDateSignature2() {
        return $this->dateSignature2;
    }

    /**
     * Get the date signature3.
     *
     * @return DateTime Returns the date signature3.
     */
    public function getDateSignature3() {
        return $this->dateSignature3;
    }

    /**
     * Get the date signature4.
     *
     * @return DateTime Returns the date signature4.
     */
    public function getDateSignature4() {
        return $this->dateSignature4;
    }

    /**
     * Get the date signature5.
     *
     * @return DateTime Returns the date signature5.
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
     * Get the montant annuel1.
     *
     * @return float Returns the montant annuel1.
     */
    public function getMontantAnnuel1() {
        return $this->montantAnnuel1;
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
     * Get the montant fixe.
     *
     * @return bool Returns the montant fixe.
     */
    public function getMontantFixe() {
        return $this->montantFixe;
    }

    /**
     * Get the num contrat.
     *
     * @return string Returns the num contrat.
     */
    public function getNumContrat() {
        return $this->numContrat;
    }

    /**
     * Get the num cpt assurance.
     *
     * @return string Returns the num cpt assurance.
     */
    public function getNumCptAssurance() {
        return $this->numCptAssurance;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
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
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return Assurances Returns this assurances.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return Assurances Returns this assurances.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the compagnie.
     *
     * @param string $compagnie The compagnie.
     * @return Assurances Returns this assurances.
     */
    public function setCompagnie($compagnie) {
        $this->compagnie = $compagnie;
        return $this;
    }

    /**
     * Set the courtier.
     *
     * @param string $courtier The courtier.
     * @return Assurances Returns this assurances.
     */
    public function setCourtier($courtier) {
        $this->courtier = $courtier;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param string $dateEcheance The date echeance.
     * @return Assurances Returns this assurances.
     */
    public function setDateEcheance($dateEcheance) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date initiale.
     *
     * @param DateTime $dateInitiale The date initiale.
     * @return Assurances Returns this assurances.
     */
    public function setDateInitiale(DateTime $dateInitiale = null) {
        $this->dateInitiale = $dateInitiale;
        return $this;
    }

    /**
     * Set the date signature1.
     *
     * @param DateTime $dateSignature1 The date signature1.
     * @return Assurances Returns this assurances.
     */
    public function setDateSignature1(DateTime $dateSignature1 = null) {
        $this->dateSignature1 = $dateSignature1;
        return $this;
    }

    /**
     * Set the date signature2.
     *
     * @param DateTime $dateSignature2 The date signature2.
     * @return Assurances Returns this assurances.
     */
    public function setDateSignature2(DateTime $dateSignature2 = null) {
        $this->dateSignature2 = $dateSignature2;
        return $this;
    }

    /**
     * Set the date signature3.
     *
     * @param DateTime $dateSignature3 The date signature3.
     * @return Assurances Returns this assurances.
     */
    public function setDateSignature3(DateTime $dateSignature3 = null) {
        $this->dateSignature3 = $dateSignature3;
        return $this;
    }

    /**
     * Set the date signature4.
     *
     * @param DateTime $dateSignature4 The date signature4.
     * @return Assurances Returns this assurances.
     */
    public function setDateSignature4(DateTime $dateSignature4 = null) {
        $this->dateSignature4 = $dateSignature4;
        return $this;
    }

    /**
     * Set the date signature5.
     *
     * @param DateTime $dateSignature5 The date signature5.
     * @return Assurances Returns this assurances.
     */
    public function setDateSignature5(DateTime $dateSignature5 = null) {
        $this->dateSignature5 = $dateSignature5;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return Assurances Returns this assurances.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the duree preavis.
     *
     * @param int $dureePreavis The duree preavis.
     * @return Assurances Returns this assurances.
     */
    public function setDureePreavis($dureePreavis) {
        $this->dureePreavis = $dureePreavis;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Assurances Returns this assurances.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant annuel1.
     *
     * @param float $montantAnnuel1 The montant annuel1.
     * @return Assurances Returns this assurances.
     */
    public function setMontantAnnuel1($montantAnnuel1) {
        $this->montantAnnuel1 = $montantAnnuel1;
        return $this;
    }

    /**
     * Set the montant annuel2.
     *
     * @param float $montantAnnuel2 The montant annuel2.
     * @return Assurances Returns this assurances.
     */
    public function setMontantAnnuel2($montantAnnuel2) {
        $this->montantAnnuel2 = $montantAnnuel2;
        return $this;
    }

    /**
     * Set the montant annuel3.
     *
     * @param float $montantAnnuel3 The montant annuel3.
     * @return Assurances Returns this assurances.
     */
    public function setMontantAnnuel3($montantAnnuel3) {
        $this->montantAnnuel3 = $montantAnnuel3;
        return $this;
    }

    /**
     * Set the montant annuel4.
     *
     * @param float $montantAnnuel4 The montant annuel4.
     * @return Assurances Returns this assurances.
     */
    public function setMontantAnnuel4($montantAnnuel4) {
        $this->montantAnnuel4 = $montantAnnuel4;
        return $this;
    }

    /**
     * Set the montant annuel5.
     *
     * @param float $montantAnnuel5 The montant annuel5.
     * @return Assurances Returns this assurances.
     */
    public function setMontantAnnuel5($montantAnnuel5) {
        $this->montantAnnuel5 = $montantAnnuel5;
        return $this;
    }

    /**
     * Set the montant fixe.
     *
     * @param bool $montantFixe The montant fixe.
     * @return Assurances Returns this assurances.
     */
    public function setMontantFixe($montantFixe) {
        $this->montantFixe = $montantFixe;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     * @return Assurances Returns this assurances.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt assurance.
     *
     * @param string $numCptAssurance The num cpt assurance.
     * @return Assurances Returns this assurances.
     */
    public function setNumCptAssurance($numCptAssurance) {
        $this->numCptAssurance = $numCptAssurance;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Assurances Returns this assurances.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the unite duree.
     *
     * @param string $uniteDuree The unite duree.
     * @return Assurances Returns this assurances.
     */
    public function setUniteDuree($uniteDuree) {
        $this->uniteDuree = $uniteDuree;
        return $this;
    }
}
