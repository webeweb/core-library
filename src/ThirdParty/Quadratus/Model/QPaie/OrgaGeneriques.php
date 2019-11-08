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
 * Orga generiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class OrgaGeneriques {

    /**
     * A declarer dsn neant.
     *
     * @var bool
     */
    private $aDeclarerDsnNeant;

    /**
     * Agrement ministeriel.
     *
     * @var string
     */
    private $agrementMinisteriel;

    /**
     * Appliquer cpn220.
     *
     * @var bool
     */
    private $appliquerCpn220;

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
     * Assiette specif agff.
     *
     * @var bool
     */
    private $assietteSpecifAgff;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code assiette sit2.
     *
     * @var string
     */
    private $codeAssietteSit2;

    /**
     * Code assiette sit2 agff.
     *
     * @var string
     */
    private $codeAssietteSit2Agff;

    /**
     * Code assiette sitb.
     *
     * @var string
     */
    private $codeAssietteSitb;

    /**
     * Code assiette sitbagff.
     *
     * @var string
     */
    private $codeAssietteSitbagff;

    /**
     * Code assiette sitc.
     *
     * @var string
     */
    private $codeAssietteSitc;

    /**
     * Code caisse msa.
     *
     * @var string
     */
    private $codeCaisseMsa;

    /**
     * Code organisme assurance dadsu.
     *
     * @var string
     */
    private $codeOrganismeAssuranceDadsu;

    /**
     * Code organisme mutuelle dadsu.
     *
     * @var string
     */
    private $codeOrganismeMutuelleDadsu;

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
     * Intit sous total agff agirc.
     *
     * @var string
     */
    private $intitSousTotalAgffAgirc;

    /**
     * Intit sous total agff arrco.
     *
     * @var string
     */
    private $intitSousTotalAgffArrco;

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
     * Lien fic param dsn.
     *
     * @var string
     */
    private $lienFicParamDsn;

    /**
     * Regroupement si.
     *
     * @var bool
     */
    private $regroupementSi;

    /**
     * Sous total agff.
     *
     * @var bool
     */
    private $sousTotalAgff;

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
     * Traitement dadsu.
     *
     * @var bool
     */
    private $traitementDadsu;

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
     * Get the a declarer dsn neant.
     *
     * @return bool Returns the a declarer dsn neant.
     */
    public function getADeclarerDsnNeant() {
        return $this->aDeclarerDsnNeant;
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
     * Get the appliquer cpn220.
     *
     * @return bool Returns the appliquer cpn220.
     */
    public function getAppliquerCpn220() {
        return $this->appliquerCpn220;
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
     * Get the assiette specif agff.
     *
     * @return bool Returns the assiette specif agff.
     */
    public function getAssietteSpecifAgff() {
        return $this->assietteSpecifAgff;
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
     * Get the code assiette sit2.
     *
     * @return string Returns the code assiette sit2.
     */
    public function getCodeAssietteSit2() {
        return $this->codeAssietteSit2;
    }

    /**
     * Get the code assiette sit2 agff.
     *
     * @return string Returns the code assiette sit2 agff.
     */
    public function getCodeAssietteSit2Agff() {
        return $this->codeAssietteSit2Agff;
    }

    /**
     * Get the code assiette sitb.
     *
     * @return string Returns the code assiette sitb.
     */
    public function getCodeAssietteSitb() {
        return $this->codeAssietteSitb;
    }

    /**
     * Get the code assiette sitbagff.
     *
     * @return string Returns the code assiette sitbagff.
     */
    public function getCodeAssietteSitbagff() {
        return $this->codeAssietteSitbagff;
    }

    /**
     * Get the code assiette sitc.
     *
     * @return string Returns the code assiette sitc.
     */
    public function getCodeAssietteSitc() {
        return $this->codeAssietteSitc;
    }

    /**
     * Get the code caisse msa.
     *
     * @return string Returns the code caisse msa.
     */
    public function getCodeCaisseMsa() {
        return $this->codeCaisseMsa;
    }

    /**
     * Get the code organisme assurance dadsu.
     *
     * @return string Returns the code organisme assurance dadsu.
     */
    public function getCodeOrganismeAssuranceDadsu() {
        return $this->codeOrganismeAssuranceDadsu;
    }

    /**
     * Get the code organisme mutuelle dadsu.
     *
     * @return string Returns the code organisme mutuelle dadsu.
     */
    public function getCodeOrganismeMutuelleDadsu() {
        return $this->codeOrganismeMutuelleDadsu;
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
     * Get the intit sous total agff agirc.
     *
     * @return string Returns the intit sous total agff agirc.
     */
    public function getIntitSousTotalAgffAgirc() {
        return $this->intitSousTotalAgffAgirc;
    }

    /**
     * Get the intit sous total agff arrco.
     *
     * @return string Returns the intit sous total agff arrco.
     */
    public function getIntitSousTotalAgffArrco() {
        return $this->intitSousTotalAgffArrco;
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
     * Get the lien fic param dsn.
     *
     * @return string Returns the lien fic param dsn.
     */
    public function getLienFicParamDsn() {
        return $this->lienFicParamDsn;
    }

    /**
     * Get the regroupement si.
     *
     * @return bool Returns the regroupement si.
     */
    public function getRegroupementSi() {
        return $this->regroupementSi;
    }

    /**
     * Get the sous total agff.
     *
     * @return bool Returns the sous total agff.
     */
    public function getSousTotalAgff() {
        return $this->sousTotalAgff;
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
     * Get the traitement dadsu.
     *
     * @return bool Returns the traitement dadsu.
     */
    public function getTraitementDadsu() {
        return $this->traitementDadsu;
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
     * Set the a declarer dsn neant.
     *
     * @param bool $aDeclarerDsnNeant The a declarer dsn neant.
     */
    public function setADeclarerDsnNeant($aDeclarerDsnNeant) {
        $this->aDeclarerDsnNeant = $aDeclarerDsnNeant;
        return $this;
    }

    /**
     * Set the agrement ministeriel.
     *
     * @param string $agrementMinisteriel The agrement ministeriel.
     */
    public function setAgrementMinisteriel($agrementMinisteriel) {
        $this->agrementMinisteriel = $agrementMinisteriel;
        return $this;
    }

    /**
     * Set the appliquer cpn220.
     *
     * @param bool $appliquerCpn220 The appliquer cpn220.
     */
    public function setAppliquerCpn220($appliquerCpn220) {
        $this->appliquerCpn220 = $appliquerCpn220;
        return $this;
    }

    /**
     * Set the arrondir base.
     *
     * @param string $arrondirBase The arrondir base.
     */
    public function setArrondirBase($arrondirBase) {
        $this->arrondirBase = $arrondirBase;
        return $this;
    }

    /**
     * Set the arrondir cotis.
     *
     * @param string $arrondirCotis The arrondir cotis.
     */
    public function setArrondirCotis($arrondirCotis) {
        $this->arrondirCotis = $arrondirCotis;
        return $this;
    }

    /**
     * Set the assiette specif agff.
     *
     * @param bool $assietteSpecifAgff The assiette specif agff.
     */
    public function setAssietteSpecifAgff($assietteSpecifAgff) {
        $this->assietteSpecifAgff = $assietteSpecifAgff;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code assiette sit2.
     *
     * @param string $codeAssietteSit2 The code assiette sit2.
     */
    public function setCodeAssietteSit2($codeAssietteSit2) {
        $this->codeAssietteSit2 = $codeAssietteSit2;
        return $this;
    }

    /**
     * Set the code assiette sit2 agff.
     *
     * @param string $codeAssietteSit2Agff The code assiette sit2 agff.
     */
    public function setCodeAssietteSit2Agff($codeAssietteSit2Agff) {
        $this->codeAssietteSit2Agff = $codeAssietteSit2Agff;
        return $this;
    }

    /**
     * Set the code assiette sitb.
     *
     * @param string $codeAssietteSitb The code assiette sitb.
     */
    public function setCodeAssietteSitb($codeAssietteSitb) {
        $this->codeAssietteSitb = $codeAssietteSitb;
        return $this;
    }

    /**
     * Set the code assiette sitbagff.
     *
     * @param string $codeAssietteSitbagff The code assiette sitbagff.
     */
    public function setCodeAssietteSitbagff($codeAssietteSitbagff) {
        $this->codeAssietteSitbagff = $codeAssietteSitbagff;
        return $this;
    }

    /**
     * Set the code assiette sitc.
     *
     * @param string $codeAssietteSitc The code assiette sitc.
     */
    public function setCodeAssietteSitc($codeAssietteSitc) {
        $this->codeAssietteSitc = $codeAssietteSitc;
        return $this;
    }

    /**
     * Set the code caisse msa.
     *
     * @param string $codeCaisseMsa The code caisse msa.
     */
    public function setCodeCaisseMsa($codeCaisseMsa) {
        $this->codeCaisseMsa = $codeCaisseMsa;
        return $this;
    }

    /**
     * Set the code organisme assurance dadsu.
     *
     * @param string $codeOrganismeAssuranceDadsu The code organisme assurance dadsu.
     */
    public function setCodeOrganismeAssuranceDadsu($codeOrganismeAssuranceDadsu) {
        $this->codeOrganismeAssuranceDadsu = $codeOrganismeAssuranceDadsu;
        return $this;
    }

    /**
     * Set the code organisme mutuelle dadsu.
     *
     * @param string $codeOrganismeMutuelleDadsu The code organisme mutuelle dadsu.
     */
    public function setCodeOrganismeMutuelleDadsu($codeOrganismeMutuelleDadsu) {
        $this->codeOrganismeMutuelleDadsu = $codeOrganismeMutuelleDadsu;
        return $this;
    }

    /**
     * Set the detail arrco.
     *
     * @param bool $detailArrco The detail arrco.
     */
    public function setDetailArrco($detailArrco) {
        $this->detailArrco = $detailArrco;
        return $this;
    }

    /**
     * Set the groupe crc.
     *
     * @param string $groupeCrc The groupe crc.
     */
    public function setGroupeCrc($groupeCrc) {
        $this->groupeCrc = $groupeCrc;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intit sous total agff agirc.
     *
     * @param string $intitSousTotalAgffAgirc The intit sous total agff agirc.
     */
    public function setIntitSousTotalAgffAgirc($intitSousTotalAgffAgirc) {
        $this->intitSousTotalAgffAgirc = $intitSousTotalAgffAgirc;
        return $this;
    }

    /**
     * Set the intit sous total agff arrco.
     *
     * @param string $intitSousTotalAgffArrco The intit sous total agff arrco.
     */
    public function setIntitSousTotalAgffArrco($intitSousTotalAgffArrco) {
        $this->intitSousTotalAgffArrco = $intitSousTotalAgffArrco;
        return $this;
    }

    /**
     * Set the intit sous total apec.
     *
     * @param string $intitSousTotalApec The intit sous total apec.
     */
    public function setIntitSousTotalApec($intitSousTotalApec) {
        $this->intitSousTotalApec = $intitSousTotalApec;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the lien fic param dsn.
     *
     * @param string $lienFicParamDsn The lien fic param dsn.
     */
    public function setLienFicParamDsn($lienFicParamDsn) {
        $this->lienFicParamDsn = $lienFicParamDsn;
        return $this;
    }

    /**
     * Set the regroupement si.
     *
     * @param bool $regroupementSi The regroupement si.
     */
    public function setRegroupementSi($regroupementSi) {
        $this->regroupementSi = $regroupementSi;
        return $this;
    }

    /**
     * Set the sous total agff.
     *
     * @param bool $sousTotalAgff The sous total agff.
     */
    public function setSousTotalAgff($sousTotalAgff) {
        $this->sousTotalAgff = $sousTotalAgff;
        return $this;
    }

    /**
     * Set the sous total apec.
     *
     * @param bool $sousTotalApec The sous total apec.
     */
    public function setSousTotalApec($sousTotalApec) {
        $this->sousTotalApec = $sousTotalApec;
        return $this;
    }

    /**
     * Set the sous total caisse.
     *
     * @param bool $sousTotalCaisse The sous total caisse.
     */
    public function setSousTotalCaisse($sousTotalCaisse) {
        $this->sousTotalCaisse = $sousTotalCaisse;
        return $this;
    }

    /**
     * Set the traitement dadsu.
     *
     * @param bool $traitementDadsu The traitement dadsu.
     */
    public function setTraitementDadsu($traitementDadsu) {
        $this->traitementDadsu = $traitementDadsu;
        return $this;
    }

    /**
     * Set the type declaration.
     *
     * @param string $typeDeclaration The type declaration.
     */
    public function setTypeDeclaration($typeDeclaration) {
        $this->typeDeclaration = $typeDeclaration;
        return $this;
    }

    /**
     * Set the type organisme.
     *
     * @param string $typeOrganisme The type organisme.
     */
    public function setTypeOrganisme($typeOrganisme) {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }

    /**
     * Set the utilise.
     *
     * @param bool $utilise The utilise.
     */
    public function setUtilise($utilise) {
        $this->utilise = $utilise;
        return $this;
    }
}
