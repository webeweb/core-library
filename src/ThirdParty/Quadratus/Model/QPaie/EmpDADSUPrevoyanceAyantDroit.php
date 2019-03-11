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

use DateTime;

/**
 * Emp d a d s u prevoyance ayant droit model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceAyantDroit {

    /**
     * Code a charge.
     *
     * @var string
     */
    private $codeACharge;

    /**
     * Code affil secu.
     *
     * @var string
     */
    private $codeAffilSecu;

    /**
     * Code autre couverture.
     *
     * @var string
     */
    private $codeAutreCouverture;

    /**
     * Code extension secu.
     *
     * @var string
     */
    private $codeExtensionSecu;

    /**
     * Code scolarise.
     *
     * @var string
     */
    private $codeScolarise;

    /**
     * Code type.
     *
     * @var string
     */
    private $codeType;

    /**
     * Date naissance.
     *
     * @var DateTime
     */
    private $dateNaissance;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * N i r rattachement.
     *
     * @var string
     */
    private $nIRRattachement;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Numero ayant droit.
     *
     * @var int
     */
    private $numeroAyantDroit;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Rang naissance.
     *
     * @var string
     */
    private $rangNaissance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code a charge.
     *
     * @return string Returns the code a charge.
     */
    public function getCodeACharge() {
        return $this->codeACharge;
    }

    /**
     * Get the code affil secu.
     *
     * @return string Returns the code affil secu.
     */
    public function getCodeAffilSecu() {
        return $this->codeAffilSecu;
    }

    /**
     * Get the code autre couverture.
     *
     * @return string Returns the code autre couverture.
     */
    public function getCodeAutreCouverture() {
        return $this->codeAutreCouverture;
    }

    /**
     * Get the code extension secu.
     *
     * @return string Returns the code extension secu.
     */
    public function getCodeExtensionSecu() {
        return $this->codeExtensionSecu;
    }

    /**
     * Get the code scolarise.
     *
     * @return string Returns the code scolarise.
     */
    public function getCodeScolarise() {
        return $this->codeScolarise;
    }

    /**
     * Get the code type.
     *
     * @return string Returns the code type.
     */
    public function getCodeType() {
        return $this->codeType;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the n i r.
     *
     * @return string Returns the n i r.
     */
    public function getNIR() {
        return $this->nIR;
    }

    /**
     * Get the n i r rattachement.
     *
     * @return string Returns the n i r rattachement.
     */
    public function getNIRRattachement() {
        return $this->nIRRattachement;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the numero ayant droit.
     *
     * @return int Returns the numero ayant droit.
     */
    public function getNumeroAyantDroit() {
        return $this->numeroAyantDroit;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the rang naissance.
     *
     * @return string Returns the rang naissance.
     */
    public function getRangNaissance() {
        return $this->rangNaissance;
    }

    /**
     * Set the code a charge.
     *
     * @param string $codeACharge The code a charge.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeACharge($codeACharge) {
        $this->codeACharge = $codeACharge;
        return $this;
    }

    /**
     * Set the code affil secu.
     *
     * @param string $codeAffilSecu The code affil secu.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeAffilSecu($codeAffilSecu) {
        $this->codeAffilSecu = $codeAffilSecu;
        return $this;
    }

    /**
     * Set the code autre couverture.
     *
     * @param string $codeAutreCouverture The code autre couverture.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeAutreCouverture($codeAutreCouverture) {
        $this->codeAutreCouverture = $codeAutreCouverture;
        return $this;
    }

    /**
     * Set the code extension secu.
     *
     * @param string $codeExtensionSecu The code extension secu.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeExtensionSecu($codeExtensionSecu) {
        $this->codeExtensionSecu = $codeExtensionSecu;
        return $this;
    }

    /**
     * Set the code scolarise.
     *
     * @param string $codeScolarise The code scolarise.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeScolarise($codeScolarise) {
        $this->codeScolarise = $codeScolarise;
        return $this;
    }

    /**
     * Set the code type.
     *
     * @param string $codeType The code type.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setCodeType($codeType) {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime $dateNaissance The date naissance.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the n i r rattachement.
     *
     * @param string $nIRRattachement The n i r rattachement.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setNIRRattachement($nIRRattachement) {
        $this->nIRRattachement = $nIRRattachement;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the numero ayant droit.
     *
     * @param int $numeroAyantDroit The numero ayant droit.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setNumeroAyantDroit($numeroAyantDroit) {
        $this->numeroAyantDroit = $numeroAyantDroit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the rang naissance.
     *
     * @param string $rangNaissance The rang naissance.
     * @return EmpDADSUPrevoyanceAyantDroit Returns this emp d a d s u prevoyance ayant droit.
     */
    public function setRangNaissance($rangNaissance) {
        $this->rangNaissance = $rangNaissance;
        return $this;
    }
}
