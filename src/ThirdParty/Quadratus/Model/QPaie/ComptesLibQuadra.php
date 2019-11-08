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
 * Comptes lib quadra.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ComptesLibQuadra {

    /**
     * Code ducs.
     *
     * @var string
     */
    private $codeDucs;

    /**
     * Code edition histo.
     *
     * @var string
     */
    private $codeEditionHisto;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code type b spec prev.
     *
     * @var string
     */
    private $codeTypeBSpecPrev;

    /**
     * Compte charge.
     *
     * @var string
     */
    private $compteCharge;

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Edition forcee ds.
     *
     * @var string
     */
    private $editionForceeDs;

    /**
     * Exclure loi tepa.
     *
     * @var string
     */
    private $exclureLoiTepa;

    /**
     * Frais sante.
     *
     * @var string
     */
    private $fraisSante;

    /**
     * Prevoyance comp.
     *
     * @var string
     */
    private $prevoyanceComp;

    /**
     * Qualifiant cotis.
     *
     * @var string
     */
    private $qualifiantCotis;

    /**
     * Retraite obligatoire.
     *
     * @var string
     */
    private $retraiteObligatoire;

    /**
     * Retraite supp.
     *
     * @var string
     */
    private $retraiteSupp;

    /**
     * Sans reintegration sociale.
     *
     * @var string
     */
    private $sansReintegrationSociale;

    /**
     * Soumis crds100.
     *
     * @var string
     */
    private $soumisCrds100;

    /**
     * Soumis csg100.
     *
     * @var string
     */
    private $soumisCsg100;

    /**
     * Taux forfait social20.
     *
     * @var string
     */
    private $tauxForfaitSocial20;

    /**
     * Taux forfait social8.
     *
     * @var string
     */
    private $tauxForfaitSocial8;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code ducs.
     *
     * @return string Returns the code ducs.
     */
    public function getCodeDucs() {
        return $this->codeDucs;
    }

    /**
     * Get the code edition histo.
     *
     * @return string Returns the code edition histo.
     */
    public function getCodeEditionHisto() {
        return $this->codeEditionHisto;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
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
     * Get the code type b spec prev.
     *
     * @return string Returns the code type b spec prev.
     */
    public function getCodeTypeBSpecPrev() {
        return $this->codeTypeBSpecPrev;
    }

    /**
     * Get the compte charge.
     *
     * @return string Returns the compte charge.
     */
    public function getCompteCharge() {
        return $this->compteCharge;
    }

    /**
     * Get the condition spec.
     *
     * @return string Returns the condition spec.
     */
    public function getConditionSpec() {
        return $this->conditionSpec;
    }

    /**
     * Get the edition forcee ds.
     *
     * @return string Returns the edition forcee ds.
     */
    public function getEditionForceeDs() {
        return $this->editionForceeDs;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return string Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa() {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the frais sante.
     *
     * @return string Returns the frais sante.
     */
    public function getFraisSante() {
        return $this->fraisSante;
    }

    /**
     * Get the prevoyance comp.
     *
     * @return string Returns the prevoyance comp.
     */
    public function getPrevoyanceComp() {
        return $this->prevoyanceComp;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string Returns the qualifiant cotis.
     */
    public function getQualifiantCotis() {
        return $this->qualifiantCotis;
    }

    /**
     * Get the retraite obligatoire.
     *
     * @return string Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire() {
        return $this->retraiteObligatoire;
    }

    /**
     * Get the retraite supp.
     *
     * @return string Returns the retraite supp.
     */
    public function getRetraiteSupp() {
        return $this->retraiteSupp;
    }

    /**
     * Get the sans reintegration sociale.
     *
     * @return string Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale() {
        return $this->sansReintegrationSociale;
    }

    /**
     * Get the soumis crds100.
     *
     * @return string Returns the soumis crds100.
     */
    public function getSoumisCrds100() {
        return $this->soumisCrds100;
    }

    /**
     * Get the soumis csg100.
     *
     * @return string Returns the soumis csg100.
     */
    public function getSoumisCsg100() {
        return $this->soumisCsg100;
    }

    /**
     * Get the taux forfait social20.
     *
     * @return string Returns the taux forfait social20.
     */
    public function getTauxForfaitSocial20() {
        return $this->tauxForfaitSocial20;
    }

    /**
     * Get the taux forfait social8.
     *
     * @return string Returns the taux forfait social8.
     */
    public function getTauxForfaitSocial8() {
        return $this->tauxForfaitSocial8;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string $codeEditionHisto The code edition histo.
     */
    public function setCodeEditionHisto($codeEditionHisto) {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
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
     * Set the code type b spec prev.
     *
     * @param string $codeTypeBSpecPrev The code type b spec prev.
     */
    public function setCodeTypeBSpecPrev($codeTypeBSpecPrev) {
        $this->codeTypeBSpecPrev = $codeTypeBSpecPrev;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param string $editionForceeDs The edition forcee ds.
     */
    public function setEditionForceeDs($editionForceeDs) {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param string $exclureLoiTepa The exclure loi tepa.
     */
    public function setExclureLoiTepa($exclureLoiTepa) {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param string $fraisSante The frais sante.
     */
    public function setFraisSante($fraisSante) {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param string $prevoyanceComp The prevoyance comp.
     */
    public function setPrevoyanceComp($prevoyanceComp) {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param string $retraiteObligatoire The retraite obligatoire.
     */
    public function setRetraiteObligatoire($retraiteObligatoire) {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param string $retraiteSupp The retraite supp.
     */
    public function setRetraiteSupp($retraiteSupp) {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param string $sansReintegrationSociale The sans reintegration sociale.
     */
    public function setSansReintegrationSociale($sansReintegrationSociale) {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis crds100.
     *
     * @param string $soumisCrds100 The soumis crds100.
     */
    public function setSoumisCrds100($soumisCrds100) {
        $this->soumisCrds100 = $soumisCrds100;
        return $this;
    }

    /**
     * Set the soumis csg100.
     *
     * @param string $soumisCsg100 The soumis csg100.
     */
    public function setSoumisCsg100($soumisCsg100) {
        $this->soumisCsg100 = $soumisCsg100;
        return $this;
    }

    /**
     * Set the taux forfait social20.
     *
     * @param string $tauxForfaitSocial20 The taux forfait social20.
     */
    public function setTauxForfaitSocial20($tauxForfaitSocial20) {
        $this->tauxForfaitSocial20 = $tauxForfaitSocial20;
        return $this;
    }

    /**
     * Set the taux forfait social8.
     *
     * @param string $tauxForfaitSocial8 The taux forfait social8.
     */
    public function setTauxForfaitSocial8($tauxForfaitSocial8) {
        $this->tauxForfaitSocial8 = $tauxForfaitSocial8;
        return $this;
    }
}
