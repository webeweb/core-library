<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Pointages employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointagesEmployes {

    /**
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Compteur heures.
     *
     * @var float
     */
    private $compteurHeures;

    /**
     * Date validation synchro.
     *
     * @var DateTime
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * H p theo non affectees.
     *
     * @var float
     */
    private $hPTheoNonAffectees;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the compteur heures.
     *
     * @return float Returns the compteur heures.
     */
    public function getCompteurHeures() {
        return $this->compteurHeures;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the h p theo non affectees.
     *
     * @return float Returns the h p theo non affectees.
     */
    public function getHPTheoNonAffectees() {
        return $this->hPTheoNonAffectees;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the compteur heures.
     *
     * @param float $compteurHeures The compteur heures.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setCompteurHeures($compteurHeures) {
        $this->compteurHeures = $compteurHeures;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h p theo non affectees.
     *
     * @param float $hPTheoNonAffectees The h p theo non affectees.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setHPTheoNonAffectees($hPTheoNonAffectees) {
        $this->hPTheoNonAffectees = $hPTheoNonAffectees;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return PointagesEmployes Returns this pointages employes.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }
}
