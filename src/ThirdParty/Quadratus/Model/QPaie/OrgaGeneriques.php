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
 * Orga generiques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class OrgaGeneriques {

    /**
     * A declarer d s n neant.
     *
     * @var bool
     */
    private $aDeclarerDSNNeant;

    /**
     * Agrement ministeriel.
     *
     * @var string
     */
    private $agrementMinisteriel;

    /**
     * Appliquer c p n220.
     *
     * @var bool
     */
    private $appliquerCPN220;

    /**
     * Arrondir base.
     *
     * @var string
     */
    private $arrondirBase;

    /**
     * Arrondir cotis.
     *
     * @var string
     */
    private $arrondirCotis;

    /**
     * Assiette specif a g f f.
     *
     * @var bool
     */
    private $assietteSpecifAGFF;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code assiette s i t2.
     *
     * @var string
     */
    private $codeAssietteSIT2;

    /**
     * Code assiette s i t2 a g f f.
     *
     * @var string
     */
    private $codeAssietteSIT2AGFF;

    /**
     * Code assiette s i t b.
     *
     * @var string
     */
    private $codeAssietteSITB;

    /**
     * Code assiette s i t b a g f f.
     *
     * @var string
     */
    private $codeAssietteSITBAGFF;

    /**
     * Code assiette s i t c.
     *
     * @var string
     */
    private $codeAssietteSITC;

    /**
     * Code caisse m s a.
     *
     * @var string
     */
    private $codeCaisseMSA;

    /**
     * Code organisme assurance d a d s u.
     *
     * @var string
     */
    private $codeOrganismeAssuranceDADSU;

    /**
     * Code organisme mutuelle d a d s u.
     *
     * @var string
     */
    private $codeOrganismeMutuelleDADSU;

    /**
     * Detail arrco.
     *
     * @var bool
     */
    private $detailArrco;

    /**
     * Groupe crc.
     *
     * @var string
     */
    private $groupeCrc;

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Intit sous total a g f f agirc.
     *
     * @var string
     */
    private $intitSousTotalAGFFAgirc;

    /**
     * Intit sous total a g f f arrco.
     *
     * @var string
     */
    private $intitSousTotalAGFFArrco;

    /**
     * Intit sous total apec.
     *
     * @var string
     */
    private $intitSousTotalApec;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Lien fic param d s n.
     *
     * @var string
     */
    private $lienFicParamDSN;

    /**
     * Regroupement s i.
     *
     * @var bool
     */
    private $regroupementSI;

    /**
     * Sous total a g f f.
     *
     * @var bool
     */
    private $sousTotalAGFF;

    /**
     * Sous total apec.
     *
     * @var bool
     */
    private $sousTotalApec;

    /**
     * Sous total caisse.
     *
     * @var bool
     */
    private $sousTotalCaisse;

    /**
     * Traitement d a d s u.
     *
     * @var bool
     */
    private $traitementDADSU;

    /**
     * Type declaration.
     *
     * @var string
     */
    private $typeDeclaration;

    /**
     * Type organisme.
     *
     * @var string
     */
    private $typeOrganisme;

    /**
     * Utilise.
     *
     * @var bool
     */
    private $utilise;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a declarer d s n neant.
     *
     * @return bool Returns the a declarer d s n neant.
     */
    public function getADeclarerDSNNeant() {
        return $this->aDeclarerDSNNeant;
    }

    /**
     * Get the agrement ministeriel.
     *
     * @return string Returns the agrement ministeriel.
     */
    public function getAgrementMinisteriel() {
        return $this->agrementMinisteriel;
    }

    /**
     * Get the appliquer c p n220.
     *
     * @return bool Returns the appliquer c p n220.
     */
    public function getAppliquerCPN220() {
        return $this->appliquerCPN220;
    }

    /**
     * Get the arrondir base.
     *
     * @return string Returns the arrondir base.
     */
    public function getArrondirBase() {
        return $this->arrondirBase;
    }

    /**
     * Get the arrondir cotis.
     *
     * @return string Returns the arrondir cotis.
     */
    public function getArrondirCotis() {
        return $this->arrondirCotis;
    }

    /**
     * Get the assiette specif a g f f.
     *
     * @return bool Returns the assiette specif a g f f.
     */
    public function getAssietteSpecifAGFF() {
        return $this->assietteSpecifAGFF;
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
     * Get the code assiette s i t2.
     *
     * @return string Returns the code assiette s i t2.
     */
    public function getCodeAssietteSIT2() {
        return $this->codeAssietteSIT2;
    }

    /**
     * Get the code assiette s i t2 a g f f.
     *
     * @return string Returns the code assiette s i t2 a g f f.
     */
    public function getCodeAssietteSIT2AGFF() {
        return $this->codeAssietteSIT2AGFF;
    }

    /**
     * Get the code assiette s i t b.
     *
     * @return string Returns the code assiette s i t b.
     */
    public function getCodeAssietteSITB() {
        return $this->codeAssietteSITB;
    }

    /**
     * Get the code assiette s i t b a g f f.
     *
     * @return string Returns the code assiette s i t b a g f f.
     */
    public function getCodeAssietteSITBAGFF() {
        return $this->codeAssietteSITBAGFF;
    }

    /**
     * Get the code assiette s i t c.
     *
     * @return string Returns the code assiette s i t c.
     */
    public function getCodeAssietteSITC() {
        return $this->codeAssietteSITC;
    }

    /**
     * Get the code caisse m s a.
     *
     * @return string Returns the code caisse m s a.
     */
    public function getCodeCaisseMSA() {
        return $this->codeCaisseMSA;
    }

    /**
     * Get the code organisme assurance d a d s u.
     *
     * @return string Returns the code organisme assurance d a d s u.
     */
    public function getCodeOrganismeAssuranceDADSU() {
        return $this->codeOrganismeAssuranceDADSU;
    }

    /**
     * Get the code organisme mutuelle d a d s u.
     *
     * @return string Returns the code organisme mutuelle d a d s u.
     */
    public function getCodeOrganismeMutuelleDADSU() {
        return $this->codeOrganismeMutuelleDADSU;
    }

    /**
     * Get the detail arrco.
     *
     * @return bool Returns the detail arrco.
     */
    public function getDetailArrco() {
        return $this->detailArrco;
    }

    /**
     * Get the groupe crc.
     *
     * @return string Returns the groupe crc.
     */
    public function getGroupeCrc() {
        return $this->groupeCrc;
    }

    /**
     * Get the id institution.
     *
     * @return string Returns the id institution.
     */
    public function getIdInstitution() {
        return $this->idInstitution;
    }

    /**
     * Get the intit sous total a g f f agirc.
     *
     * @return string Returns the intit sous total a g f f agirc.
     */
    public function getIntitSousTotalAGFFAgirc() {
        return $this->intitSousTotalAGFFAgirc;
    }

    /**
     * Get the intit sous total a g f f arrco.
     *
     * @return string Returns the intit sous total a g f f arrco.
     */
    public function getIntitSousTotalAGFFArrco() {
        return $this->intitSousTotalAGFFArrco;
    }

    /**
     * Get the intit sous total apec.
     *
     * @return string Returns the intit sous total apec.
     */
    public function getIntitSousTotalApec() {
        return $this->intitSousTotalApec;
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
     * Get the lien fic param d s n.
     *
     * @return string Returns the lien fic param d s n.
     */
    public function getLienFicParamDSN() {
        return $this->lienFicParamDSN;
    }

    /**
     * Get the regroupement s i.
     *
     * @return bool Returns the regroupement s i.
     */
    public function getRegroupementSI() {
        return $this->regroupementSI;
    }

    /**
     * Get the sous total a g f f.
     *
     * @return bool Returns the sous total a g f f.
     */
    public function getSousTotalAGFF() {
        return $this->sousTotalAGFF;
    }

    /**
     * Get the sous total apec.
     *
     * @return bool Returns the sous total apec.
     */
    public function getSousTotalApec() {
        return $this->sousTotalApec;
    }

    /**
     * Get the sous total caisse.
     *
     * @return bool Returns the sous total caisse.
     */
    public function getSousTotalCaisse() {
        return $this->sousTotalCaisse;
    }

    /**
     * Get the traitement d a d s u.
     *
     * @return bool Returns the traitement d a d s u.
     */
    public function getTraitementDADSU() {
        return $this->traitementDADSU;
    }

    /**
     * Get the type declaration.
     *
     * @return string Returns the type declaration.
     */
    public function getTypeDeclaration() {
        return $this->typeDeclaration;
    }

    /**
     * Get the type organisme.
     *
     * @return string Returns the type organisme.
     */
    public function getTypeOrganisme() {
        return $this->typeOrganisme;
    }

    /**
     * Get the utilise.
     *
     * @return bool Returns the utilise.
     */
    public function getUtilise() {
        return $this->utilise;
    }

    /**
     * Set the a declarer d s n neant.
     *
     * @param bool $aDeclarerDSNNeant The a declarer d s n neant.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setADeclarerDSNNeant($aDeclarerDSNNeant) {
        $this->aDeclarerDSNNeant = $aDeclarerDSNNeant;
        return $this;
    }

    /**
     * Set the agrement ministeriel.
     *
     * @param string $agrementMinisteriel The agrement ministeriel.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setAgrementMinisteriel($agrementMinisteriel) {
        $this->agrementMinisteriel = $agrementMinisteriel;
        return $this;
    }

    /**
     * Set the appliquer c p n220.
     *
     * @param bool $appliquerCPN220 The appliquer c p n220.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setAppliquerCPN220($appliquerCPN220) {
        $this->appliquerCPN220 = $appliquerCPN220;
        return $this;
    }

    /**
     * Set the arrondir base.
     *
     * @param string $arrondirBase The arrondir base.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setArrondirBase($arrondirBase) {
        $this->arrondirBase = $arrondirBase;
        return $this;
    }

    /**
     * Set the arrondir cotis.
     *
     * @param string $arrondirCotis The arrondir cotis.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setArrondirCotis($arrondirCotis) {
        $this->arrondirCotis = $arrondirCotis;
        return $this;
    }

    /**
     * Set the assiette specif a g f f.
     *
     * @param bool $assietteSpecifAGFF The assiette specif a g f f.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setAssietteSpecifAGFF($assietteSpecifAGFF) {
        $this->assietteSpecifAGFF = $assietteSpecifAGFF;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code assiette s i t2.
     *
     * @param string $codeAssietteSIT2 The code assiette s i t2.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeAssietteSIT2($codeAssietteSIT2) {
        $this->codeAssietteSIT2 = $codeAssietteSIT2;
        return $this;
    }

    /**
     * Set the code assiette s i t2 a g f f.
     *
     * @param string $codeAssietteSIT2AGFF The code assiette s i t2 a g f f.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeAssietteSIT2AGFF($codeAssietteSIT2AGFF) {
        $this->codeAssietteSIT2AGFF = $codeAssietteSIT2AGFF;
        return $this;
    }

    /**
     * Set the code assiette s i t b.
     *
     * @param string $codeAssietteSITB The code assiette s i t b.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeAssietteSITB($codeAssietteSITB) {
        $this->codeAssietteSITB = $codeAssietteSITB;
        return $this;
    }

    /**
     * Set the code assiette s i t b a g f f.
     *
     * @param string $codeAssietteSITBAGFF The code assiette s i t b a g f f.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeAssietteSITBAGFF($codeAssietteSITBAGFF) {
        $this->codeAssietteSITBAGFF = $codeAssietteSITBAGFF;
        return $this;
    }

    /**
     * Set the code assiette s i t c.
     *
     * @param string $codeAssietteSITC The code assiette s i t c.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeAssietteSITC($codeAssietteSITC) {
        $this->codeAssietteSITC = $codeAssietteSITC;
        return $this;
    }

    /**
     * Set the code caisse m s a.
     *
     * @param string $codeCaisseMSA The code caisse m s a.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeCaisseMSA($codeCaisseMSA) {
        $this->codeCaisseMSA = $codeCaisseMSA;
        return $this;
    }

    /**
     * Set the code organisme assurance d a d s u.
     *
     * @param string $codeOrganismeAssuranceDADSU The code organisme assurance d a d s u.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeOrganismeAssuranceDADSU($codeOrganismeAssuranceDADSU) {
        $this->codeOrganismeAssuranceDADSU = $codeOrganismeAssuranceDADSU;
        return $this;
    }

    /**
     * Set the code organisme mutuelle d a d s u.
     *
     * @param string $codeOrganismeMutuelleDADSU The code organisme mutuelle d a d s u.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setCodeOrganismeMutuelleDADSU($codeOrganismeMutuelleDADSU) {
        $this->codeOrganismeMutuelleDADSU = $codeOrganismeMutuelleDADSU;
        return $this;
    }

    /**
     * Set the detail arrco.
     *
     * @param bool $detailArrco The detail arrco.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setDetailArrco($detailArrco) {
        $this->detailArrco = $detailArrco;
        return $this;
    }

    /**
     * Set the groupe crc.
     *
     * @param string $groupeCrc The groupe crc.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setGroupeCrc($groupeCrc) {
        $this->groupeCrc = $groupeCrc;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intit sous total a g f f agirc.
     *
     * @param string $intitSousTotalAGFFAgirc The intit sous total a g f f agirc.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setIntitSousTotalAGFFAgirc($intitSousTotalAGFFAgirc) {
        $this->intitSousTotalAGFFAgirc = $intitSousTotalAGFFAgirc;
        return $this;
    }

    /**
     * Set the intit sous total a g f f arrco.
     *
     * @param string $intitSousTotalAGFFArrco The intit sous total a g f f arrco.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setIntitSousTotalAGFFArrco($intitSousTotalAGFFArrco) {
        $this->intitSousTotalAGFFArrco = $intitSousTotalAGFFArrco;
        return $this;
    }

    /**
     * Set the intit sous total apec.
     *
     * @param string $intitSousTotalApec The intit sous total apec.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setIntitSousTotalApec($intitSousTotalApec) {
        $this->intitSousTotalApec = $intitSousTotalApec;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the lien fic param d s n.
     *
     * @param string $lienFicParamDSN The lien fic param d s n.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setLienFicParamDSN($lienFicParamDSN) {
        $this->lienFicParamDSN = $lienFicParamDSN;
        return $this;
    }

    /**
     * Set the regroupement s i.
     *
     * @param bool $regroupementSI The regroupement s i.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setRegroupementSI($regroupementSI) {
        $this->regroupementSI = $regroupementSI;
        return $this;
    }

    /**
     * Set the sous total a g f f.
     *
     * @param bool $sousTotalAGFF The sous total a g f f.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setSousTotalAGFF($sousTotalAGFF) {
        $this->sousTotalAGFF = $sousTotalAGFF;
        return $this;
    }

    /**
     * Set the sous total apec.
     *
     * @param bool $sousTotalApec The sous total apec.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setSousTotalApec($sousTotalApec) {
        $this->sousTotalApec = $sousTotalApec;
        return $this;
    }

    /**
     * Set the sous total caisse.
     *
     * @param bool $sousTotalCaisse The sous total caisse.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setSousTotalCaisse($sousTotalCaisse) {
        $this->sousTotalCaisse = $sousTotalCaisse;
        return $this;
    }

    /**
     * Set the traitement d a d s u.
     *
     * @param bool $traitementDADSU The traitement d a d s u.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setTraitementDADSU($traitementDADSU) {
        $this->traitementDADSU = $traitementDADSU;
        return $this;
    }

    /**
     * Set the type declaration.
     *
     * @param string $typeDeclaration The type declaration.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setTypeDeclaration($typeDeclaration) {
        $this->typeDeclaration = $typeDeclaration;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string $typeOrganisme The type organisme.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setTypeOrganisme($typeOrganisme) {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }

    /**
     * Set the utilise.
     *
     * @param bool $utilise The utilise.
     * @return OrgaGeneriques Returns this orga generiques.
     */
    public function setUtilise($utilise) {
        $this->utilise = $utilise;
        return $this;
    }
}
