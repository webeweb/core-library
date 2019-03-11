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
 * Comptes lib quadra model.
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
     * Exclure loi t e p a.
     *
     * @var string
     */
    private $exclureLoiTEPA;

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
     * Soumis c r d s100.
     *
     * @var string
     */
    private $soumisCRDS100;

    /**
     * Soumis c s g100.
     *
     * @var string
     */
    private $soumisCSG100;

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
     * Get the exclure loi t e p a.
     *
     * @return string Returns the exclure loi t e p a.
     */
    public function getExclureLoiTEPA() {
        return $this->exclureLoiTEPA;
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
     * Get the soumis c r d s100.
     *
     * @return string Returns the soumis c r d s100.
     */
    public function getSoumisCRDS100() {
        return $this->soumisCRDS100;
    }

    /**
     * Get the soumis c s g100.
     *
     * @return string Returns the soumis c s g100.
     */
    public function getSoumisCSG100() {
        return $this->soumisCSG100;
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
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string $codeEditionHisto The code edition histo.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCodeEditionHisto($codeEditionHisto) {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code type b spec prev.
     *
     * @param string $codeTypeBSpecPrev The code type b spec prev.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCodeTypeBSpecPrev($codeTypeBSpecPrev) {
        $this->codeTypeBSpecPrev = $codeTypeBSpecPrev;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param string $editionForceeDs The edition forcee ds.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setEditionForceeDs($editionForceeDs) {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }

    /**
     * Set the exclure loi t e p a.
     *
     * @param string $exclureLoiTEPA The exclure loi t e p a.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setExclureLoiTEPA($exclureLoiTEPA) {
        $this->exclureLoiTEPA = $exclureLoiTEPA;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param string $fraisSante The frais sante.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setFraisSante($fraisSante) {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param string $prevoyanceComp The prevoyance comp.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setPrevoyanceComp($prevoyanceComp) {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param string $retraiteObligatoire The retraite obligatoire.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setRetraiteObligatoire($retraiteObligatoire) {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param string $retraiteSupp The retraite supp.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setRetraiteSupp($retraiteSupp) {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param string $sansReintegrationSociale The sans reintegration sociale.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setSansReintegrationSociale($sansReintegrationSociale) {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis c r d s100.
     *
     * @param string $soumisCRDS100 The soumis c r d s100.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setSoumisCRDS100($soumisCRDS100) {
        $this->soumisCRDS100 = $soumisCRDS100;
        return $this;
    }

    /**
     * Set the soumis c s g100.
     *
     * @param string $soumisCSG100 The soumis c s g100.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setSoumisCSG100($soumisCSG100) {
        $this->soumisCSG100 = $soumisCSG100;
        return $this;
    }

    /**
     * Set the taux forfait social20.
     *
     * @param string $tauxForfaitSocial20 The taux forfait social20.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setTauxForfaitSocial20($tauxForfaitSocial20) {
        $this->tauxForfaitSocial20 = $tauxForfaitSocial20;
        return $this;
    }

    /**
     * Set the taux forfait social8.
     *
     * @param string $tauxForfaitSocial8 The taux forfait social8.
     * @return ComptesLibQuadra Returns this comptes lib quadra.
     */
    public function setTauxForfaitSocial8($tauxForfaitSocial8) {
        $this->tauxForfaitSocial8 = $tauxForfaitSocial8;
        return $this;
    }
}
