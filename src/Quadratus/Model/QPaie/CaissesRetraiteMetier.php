<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

/**
 * Caisses retraite metier model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class CaissesRetraiteMetier {

    /**
     * Categ salarie.
     *
     * @var int
     */
    private $categSalarie;

    /**
     * Categ salarie equiv.
     *
     * @var string
     */
    private $categSalarieEquiv;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Code metier.
     *
     * @var string
     */
    private $codeMetier;

    /**
     * Code organisme agirc.
     *
     * @var string
     */
    private $codeOrganismeAgirc;

    /**
     * Code organisme arrco.
     *
     * @var string
     */
    private $codeOrganismeArrco;

    /**
     * Code organisme c c c a.
     *
     * @var string
     */
    private $codeOrganismeCCCA;

    /**
     * Code organisme frais sante.
     *
     * @var string
     */
    private $codeOrganismeFraisSante;

    /**
     * Code organisme prev.
     *
     * @var string
     */
    private $codeOrganismePrev;

    /**
     * Code organisme prev comp.
     *
     * @var string
     */
    private $codeOrganismePrevComp;

    /**
     * Id institution agirc.
     *
     * @var string
     */
    private $idInstitutionAgirc;

    /**
     * Id institution arrco.
     *
     * @var string
     */
    private $idInstitutionArrco;

    /**
     * Id institution c c c a.
     *
     * @var string
     */
    private $idInstitutionCCCA;

    /**
     * Id institution frais sante.
     *
     * @var string
     */
    private $idInstitutionFraisSante;

    /**
     * Id institution prev.
     *
     * @var string
     */
    private $idInstitutionPrev;

    /**
     * Id institution prev comp.
     *
     * @var string
     */
    private $idInstitutionPrevComp;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Pas active.
     *
     * @var boolean
     */
    private $pasActive;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the categ salarie.
     *
     * @return int Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the categ salarie equiv.
     *
     * @return string Returns the categ salarie equiv.
     */
    public function getCategSalarieEquiv() {
        return $this->categSalarieEquiv;
    }

    /**
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Get the code metier.
     *
     * @return string Returns the code metier.
     */
    public function getCodeMetier() {
        return $this->codeMetier;
    }

    /**
     * Get the code organisme agirc.
     *
     * @return string Returns the code organisme agirc.
     */
    public function getCodeOrganismeAgirc() {
        return $this->codeOrganismeAgirc;
    }

    /**
     * Get the code organisme arrco.
     *
     * @return string Returns the code organisme arrco.
     */
    public function getCodeOrganismeArrco() {
        return $this->codeOrganismeArrco;
    }

    /**
     * Get the code organisme c c c a.
     *
     * @return string Returns the code organisme c c c a.
     */
    public function getCodeOrganismeCCCA() {
        return $this->codeOrganismeCCCA;
    }

    /**
     * Get the code organisme frais sante.
     *
     * @return string Returns the code organisme frais sante.
     */
    public function getCodeOrganismeFraisSante() {
        return $this->codeOrganismeFraisSante;
    }

    /**
     * Get the code organisme prev.
     *
     * @return string Returns the code organisme prev.
     */
    public function getCodeOrganismePrev() {
        return $this->codeOrganismePrev;
    }

    /**
     * Get the code organisme prev comp.
     *
     * @return string Returns the code organisme prev comp.
     */
    public function getCodeOrganismePrevComp() {
        return $this->codeOrganismePrevComp;
    }

    /**
     * Get the id institution agirc.
     *
     * @return string Returns the id institution agirc.
     */
    public function getIdInstitutionAgirc() {
        return $this->idInstitutionAgirc;
    }

    /**
     * Get the id institution arrco.
     *
     * @return string Returns the id institution arrco.
     */
    public function getIdInstitutionArrco() {
        return $this->idInstitutionArrco;
    }

    /**
     * Get the id institution c c c a.
     *
     * @return string Returns the id institution c c c a.
     */
    public function getIdInstitutionCCCA() {
        return $this->idInstitutionCCCA;
    }

    /**
     * Get the id institution frais sante.
     *
     * @return string Returns the id institution frais sante.
     */
    public function getIdInstitutionFraisSante() {
        return $this->idInstitutionFraisSante;
    }

    /**
     * Get the id institution prev.
     *
     * @return string Returns the id institution prev.
     */
    public function getIdInstitutionPrev() {
        return $this->idInstitutionPrev;
    }

    /**
     * Get the id institution prev comp.
     *
     * @return string Returns the id institution prev comp.
     */
    public function getIdInstitutionPrevComp() {
        return $this->idInstitutionPrevComp;
    }

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the pas active.
     *
     * @return boolean Returns the pas active.
     */
    public function getPasActive() {
        return $this->pasActive;
    }

    /**
     * Set the categ salarie.
     *
     * @param int $categSalarie The categ salarie.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the categ salarie equiv.
     *
     * @param string $categSalarieEquiv The categ salarie equiv.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCategSalarieEquiv($categSalarieEquiv) {
        $this->categSalarieEquiv = $categSalarieEquiv;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string $codeMetier The code metier.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeMetier($codeMetier) {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the code organisme agirc.
     *
     * @param string $codeOrganismeAgirc The code organisme agirc.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismeAgirc($codeOrganismeAgirc) {
        $this->codeOrganismeAgirc = $codeOrganismeAgirc;
        return $this;
    }

    /**
     * Set the code organisme arrco.
     *
     * @param string $codeOrganismeArrco The code organisme arrco.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismeArrco($codeOrganismeArrco) {
        $this->codeOrganismeArrco = $codeOrganismeArrco;
        return $this;
    }

    /**
     * Set the code organisme c c c a.
     *
     * @param string $codeOrganismeCCCA The code organisme c c c a.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismeCCCA($codeOrganismeCCCA) {
        $this->codeOrganismeCCCA = $codeOrganismeCCCA;
        return $this;
    }

    /**
     * Set the code organisme frais sante.
     *
     * @param string $codeOrganismeFraisSante The code organisme frais sante.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismeFraisSante($codeOrganismeFraisSante) {
        $this->codeOrganismeFraisSante = $codeOrganismeFraisSante;
        return $this;
    }

    /**
     * Set the code organisme prev.
     *
     * @param string $codeOrganismePrev The code organisme prev.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismePrev($codeOrganismePrev) {
        $this->codeOrganismePrev = $codeOrganismePrev;
        return $this;
    }

    /**
     * Set the code organisme prev comp.
     *
     * @param string $codeOrganismePrevComp The code organisme prev comp.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setCodeOrganismePrevComp($codeOrganismePrevComp) {
        $this->codeOrganismePrevComp = $codeOrganismePrevComp;
        return $this;
    }

    /**
     * Set the id institution agirc.
     *
     * @param string $idInstitutionAgirc The id institution agirc.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionAgirc($idInstitutionAgirc) {
        $this->idInstitutionAgirc = $idInstitutionAgirc;
        return $this;
    }

    /**
     * Set the id institution arrco.
     *
     * @param string $idInstitutionArrco The id institution arrco.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionArrco($idInstitutionArrco) {
        $this->idInstitutionArrco = $idInstitutionArrco;
        return $this;
    }

    /**
     * Set the id institution c c c a.
     *
     * @param string $idInstitutionCCCA The id institution c c c a.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionCCCA($idInstitutionCCCA) {
        $this->idInstitutionCCCA = $idInstitutionCCCA;
        return $this;
    }

    /**
     * Set the id institution frais sante.
     *
     * @param string $idInstitutionFraisSante The id institution frais sante.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionFraisSante($idInstitutionFraisSante) {
        $this->idInstitutionFraisSante = $idInstitutionFraisSante;
        return $this;
    }

    /**
     * Set the id institution prev.
     *
     * @param string $idInstitutionPrev The id institution prev.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionPrev($idInstitutionPrev) {
        $this->idInstitutionPrev = $idInstitutionPrev;
        return $this;
    }

    /**
     * Set the id institution prev comp.
     *
     * @param string $idInstitutionPrevComp The id institution prev comp.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIdInstitutionPrevComp($idInstitutionPrevComp) {
        $this->idInstitutionPrevComp = $idInstitutionPrevComp;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the pas active.
     *
     * @param boolean $pasActive The pas active.
     * @return CaissesRetraiteMetier Returns this caisses retraite metier.
     */
    public function setPasActive($pasActive) {
        $this->pasActive = $pasActive;
        return $this;
    }

}
