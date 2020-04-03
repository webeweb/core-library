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
 * Emp dadsu gene.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuGene {

    /**
     * Ancienn btp.
     *
     * @var DateTime|null
     */
    private $anciennBtp;

    /**
     * Annexe7 mutation.
     *
     * @var bool
     */
    private $annexe7Mutation;

    /**
     * Apprenti etam.
     *
     * @var bool
     */
    private $apprentiEtam;

    /**
     * Benef assedic.
     *
     * @var string
     */
    private $benefAssedic;

    /**
     * Btq lieu trav.
     *
     * @var string
     */
    private $btqLieuTrav;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Code caisse cp.
     *
     * @var string
     */
    private $codeCaisseCp;

    /**
     * Code caract.
     *
     * @var string
     */
    private $codeCaract;

    /**
     * Code categ sal pourcent abat.
     *
     * @var string
     */
    private $codeCategSalPourcentAbat;

    /**
     * Code class btp.
     *
     * @var string
     */
    private $codeClassBtp;

    /**
     * Code contrat trav.
     *
     * @var string
     */
    private $codeContratTrav;

    /**
     * Code convention col.
     *
     * @var string
     */
    private $codeConventionCol;

    /**
     * Code distri etranger.
     *
     * @var string
     */
    private $codeDistriEtranger;

    /**
     * Code exo trav.
     *
     * @var string
     */
    private $codeExoTrav;

    /**
     * Code insee lieu trav.
     *
     * @var string
     */
    private $codeInseeLieuTrav;

    /**
     * Code intit contrat trav.
     *
     * @var string
     */
    private $codeIntitContratTrav;

    /**
     * Code metier btp.
     *
     * @var string
     */
    private $codeMetierBtp;

    /**
     * Code officiel commune lieu trav.
     *
     * @var string
     */
    private $codeOfficielCommuneLieuTrav;

    /**
     * Code pays lieu trav.
     *
     * @var string
     */
    private $codePaysLieuTrav;

    /**
     * Code postal lieu trav.
     *
     * @var string
     */
    private $codePostalLieuTrav;

    /**
     * Code regime at.
     *
     * @var string
     */
    private $codeRegimeAt;

    /**
     * Code regime base obl.
     *
     * @var string
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime vieillesse.
     *
     * @var string
     */
    private $codeRegimeVieillesse;

    /**
     * Code retraite complementaire.
     *
     * @var string
     */
    private $codeRetraiteComplementaire;

    /**
     * Code situ admin.
     *
     * @var string
     */
    private $codeSituAdmin;

    /**
     * Code statut categ.
     *
     * @var string
     */
    private $codeStatutCateg;

    /**
     * Code statut categ retraite.
     *
     * @var string
     */
    private $codeStatutCategRetraite;

    /**
     * Code statut pro.
     *
     * @var string
     */
    private $codeStatutPro;

    /**
     * Code type exo1.
     *
     * @var string
     */
    private $codeTypeExo1;

    /**
     * Code type exo2.
     *
     * @var string
     */
    private $codeTypeExo2;

    /**
     * Code type exo3.
     *
     * @var string
     */
    private $codeTypeExo3;

    /**
     * Code unite temps travail.
     *
     * @var string
     */
    private $codeUniteTempsTravail;

    /**
     * Code zone geo.
     *
     * @var string
     */
    private $codeZoneGeo;

    /**
     * Complement lieu trav.
     *
     * @var string
     */
    private $complementLieuTrav;

    /**
     * Date rachat.
     *
     * @var DateTime|null
     */
    private $dateRachat;

    /**
     * Detache expatrie.
     *
     * @var string
     */
    private $detacheExpatrie;

    /**
     * Echelon.
     *
     * @var string
     */
    private $echelon;

    /**
     * Etab lieu travail.
     *
     * @var string
     */
    private $etabLieuTravail;

    /**
     * Id lieu travail.
     *
     * @var string
     */
    private $idLieuTravail;

    /**
     * Indice.
     *
     * @var string
     */
    private $indice;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Nom ville insee lieu trav.
     *
     * @var string
     */
    private $nomVilleInseeLieuTrav;

    /**
     * Nom ville lieu trav.
     *
     * @var string
     */
    private $nomVilleLieuTrav;

    /**
     * Nom voie lieu trav.
     *
     * @var string
     */
    private $nomVoieLieuTrav;

    /**
     * Num voie lieu trav.
     *
     * @var string
     */
    private $numVoieLieuTrav;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Position.
     *
     * @var string
     */
    private $position;

    /**
     * Raison soc lieu trav.
     *
     * @var string
     */
    private $raisonSocLieuTrav;

    /**
     * Siret lieu trav.
     *
     * @var string
     */
    private $siretLieuTrav;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ancienn btp.
     *
     * @return DateTime|null Returns the ancienn btp.
     */
    public function getAnciennBtp() {
        return $this->anciennBtp;
    }

    /**
     * Get the annexe7 mutation.
     *
     * @return bool Returns the annexe7 mutation.
     */
    public function getAnnexe7Mutation() {
        return $this->annexe7Mutation;
    }

    /**
     * Get the apprenti etam.
     *
     * @return bool Returns the apprenti etam.
     */
    public function getApprentiEtam() {
        return $this->apprentiEtam;
    }

    /**
     * Get the benef assedic.
     *
     * @return string Returns the benef assedic.
     */
    public function getBenefAssedic() {
        return $this->benefAssedic;
    }

    /**
     * Get the btq lieu trav.
     *
     * @return string Returns the btq lieu trav.
     */
    public function getBtqLieuTrav() {
        return $this->btqLieuTrav;
    }

    /**
     * Get the bureau distributeur lieu trav.
     *
     * @return string Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav() {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Get the code caisse cp.
     *
     * @return string Returns the code caisse cp.
     */
    public function getCodeCaisseCp() {
        return $this->codeCaisseCp;
    }

    /**
     * Get the code caract.
     *
     * @return string Returns the code caract.
     */
    public function getCodeCaract() {
        return $this->codeCaract;
    }

    /**
     * Get the code categ sal pourcent abat.
     *
     * @return string Returns the code categ sal pourcent abat.
     */
    public function getCodeCategSalPourcentAbat() {
        return $this->codeCategSalPourcentAbat;
    }

    /**
     * Get the code class btp.
     *
     * @return string Returns the code class btp.
     */
    public function getCodeClassBtp() {
        return $this->codeClassBtp;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string Returns the code contrat trav.
     */
    public function getCodeContratTrav() {
        return $this->codeContratTrav;
    }

    /**
     * Get the code convention col.
     *
     * @return string Returns the code convention col.
     */
    public function getCodeConventionCol() {
        return $this->codeConventionCol;
    }

    /**
     * Get the code distri etranger.
     *
     * @return string Returns the code distri etranger.
     */
    public function getCodeDistriEtranger() {
        return $this->codeDistriEtranger;
    }

    /**
     * Get the code exo trav.
     *
     * @return string Returns the code exo trav.
     */
    public function getCodeExoTrav() {
        return $this->codeExoTrav;
    }

    /**
     * Get the code insee lieu trav.
     *
     * @return string Returns the code insee lieu trav.
     */
    public function getCodeInseeLieuTrav() {
        return $this->codeInseeLieuTrav;
    }

    /**
     * Get the code intit contrat trav.
     *
     * @return string Returns the code intit contrat trav.
     */
    public function getCodeIntitContratTrav() {
        return $this->codeIntitContratTrav;
    }

    /**
     * Get the code metier btp.
     *
     * @return string Returns the code metier btp.
     */
    public function getCodeMetierBtp() {
        return $this->codeMetierBtp;
    }

    /**
     * Get the code officiel commune lieu trav.
     *
     * @return string Returns the code officiel commune lieu trav.
     */
    public function getCodeOfficielCommuneLieuTrav() {
        return $this->codeOfficielCommuneLieuTrav;
    }

    /**
     * Get the code pays lieu trav.
     *
     * @return string Returns the code pays lieu trav.
     */
    public function getCodePaysLieuTrav() {
        return $this->codePaysLieuTrav;
    }

    /**
     * Get the code postal lieu trav.
     *
     * @return string Returns the code postal lieu trav.
     */
    public function getCodePostalLieuTrav() {
        return $this->codePostalLieuTrav;
    }

    /**
     * Get the code regime at.
     *
     * @return string Returns the code regime at.
     */
    public function getCodeRegimeAt() {
        return $this->codeRegimeAt;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl() {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime vieillesse.
     *
     * @return string Returns the code regime vieillesse.
     */
    public function getCodeRegimeVieillesse() {
        return $this->codeRegimeVieillesse;
    }

    /**
     * Get the code retraite complementaire.
     *
     * @return string Returns the code retraite complementaire.
     */
    public function getCodeRetraiteComplementaire() {
        return $this->codeRetraiteComplementaire;
    }

    /**
     * Get the code situ admin.
     *
     * @return string Returns the code situ admin.
     */
    public function getCodeSituAdmin() {
        return $this->codeSituAdmin;
    }

    /**
     * Get the code statut categ.
     *
     * @return string Returns the code statut categ.
     */
    public function getCodeStatutCateg() {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ retraite.
     *
     * @return string Returns the code statut categ retraite.
     */
    public function getCodeStatutCategRetraite() {
        return $this->codeStatutCategRetraite;
    }

    /**
     * Get the code statut pro.
     *
     * @return string Returns the code statut pro.
     */
    public function getCodeStatutPro() {
        return $this->codeStatutPro;
    }

    /**
     * Get the code type exo1.
     *
     * @return string Returns the code type exo1.
     */
    public function getCodeTypeExo1() {
        return $this->codeTypeExo1;
    }

    /**
     * Get the code type exo2.
     *
     * @return string Returns the code type exo2.
     */
    public function getCodeTypeExo2() {
        return $this->codeTypeExo2;
    }

    /**
     * Get the code type exo3.
     *
     * @return string Returns the code type exo3.
     */
    public function getCodeTypeExo3() {
        return $this->codeTypeExo3;
    }

    /**
     * Get the code unite temps travail.
     *
     * @return string Returns the code unite temps travail.
     */
    public function getCodeUniteTempsTravail() {
        return $this->codeUniteTempsTravail;
    }

    /**
     * Get the code zone geo.
     *
     * @return string Returns the code zone geo.
     */
    public function getCodeZoneGeo() {
        return $this->codeZoneGeo;
    }

    /**
     * Get the complement lieu trav.
     *
     * @return string Returns the complement lieu trav.
     */
    public function getComplementLieuTrav() {
        return $this->complementLieuTrav;
    }

    /**
     * Get the date rachat.
     *
     * @return DateTime|null Returns the date rachat.
     */
    public function getDateRachat() {
        return $this->dateRachat;
    }

    /**
     * Get the detache expatrie.
     *
     * @return string Returns the detache expatrie.
     */
    public function getDetacheExpatrie() {
        return $this->detacheExpatrie;
    }

    /**
     * Get the echelon.
     *
     * @return string Returns the echelon.
     */
    public function getEchelon() {
        return $this->echelon;
    }

    /**
     * Get the etab lieu travail.
     *
     * @return string Returns the etab lieu travail.
     */
    public function getEtabLieuTravail() {
        return $this->etabLieuTravail;
    }

    /**
     * Get the id lieu travail.
     *
     * @return string Returns the id lieu travail.
     */
    public function getIdLieuTravail() {
        return $this->idLieuTravail;
    }

    /**
     * Get the indice.
     *
     * @return string Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the nom ville insee lieu trav.
     *
     * @return string Returns the nom ville insee lieu trav.
     */
    public function getNomVilleInseeLieuTrav() {
        return $this->nomVilleInseeLieuTrav;
    }

    /**
     * Get the nom ville lieu trav.
     *
     * @return string Returns the nom ville lieu trav.
     */
    public function getNomVilleLieuTrav() {
        return $this->nomVilleLieuTrav;
    }

    /**
     * Get the nom voie lieu trav.
     *
     * @return string Returns the nom voie lieu trav.
     */
    public function getNomVoieLieuTrav() {
        return $this->nomVoieLieuTrav;
    }

    /**
     * Get the num voie lieu trav.
     *
     * @return string Returns the num voie lieu trav.
     */
    public function getNumVoieLieuTrav() {
        return $this->numVoieLieuTrav;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the position.
     *
     * @return string Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the raison soc lieu trav.
     *
     * @return string Returns the raison soc lieu trav.
     */
    public function getRaisonSocLieuTrav() {
        return $this->raisonSocLieuTrav;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string Returns the siret lieu trav.
     */
    public function getSiretLieuTrav() {
        return $this->siretLieuTrav;
    }

    /**
     * Set the ancienn btp.
     *
     * @param DateTime|null $anciennBtp The ancienn btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setAnciennBtp(DateTime $anciennBtp = null) {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool $annexe7Mutation The annexe7 mutation.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setAnnexe7Mutation($annexe7Mutation) {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the apprenti etam.
     *
     * @param bool $apprentiEtam The apprenti etam.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setApprentiEtam($apprentiEtam) {
        $this->apprentiEtam = $apprentiEtam;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string $benefAssedic The benef assedic.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBenefAssedic($benefAssedic) {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the btq lieu trav.
     *
     * @param string $btqLieuTrav The btq lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBtqLieuTrav($btqLieuTrav) {
        $this->btqLieuTrav = $btqLieuTrav;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setBureauDistributeurLieuTrav($bureauDistributeurLieuTrav) {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the code caisse cp.
     *
     * @param string $codeCaisseCp The code caisse cp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCaisseCp($codeCaisseCp) {
        $this->codeCaisseCp = $codeCaisseCp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string $codeCategSalPourcentAbat The code categ sal pourcent abat.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeCategSalPourcentAbat($codeCategSalPourcentAbat) {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string $codeClassBtp The code class btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeClassBtp($codeClassBtp) {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code distri etranger.
     *
     * @param string $codeDistriEtranger The code distri etranger.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeDistriEtranger($codeDistriEtranger) {
        $this->codeDistriEtranger = $codeDistriEtranger;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string $codeExoTrav The code exo trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeExoTrav($codeExoTrav) {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string $codeInseeLieuTrav The code insee lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeInseeLieuTrav($codeInseeLieuTrav) {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string $codeIntitContratTrav The code intit contrat trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeIntitContratTrav($codeIntitContratTrav) {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string $codeMetierBtp The code metier btp.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeMetierBtp($codeMetierBtp) {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeOfficielCommuneLieuTrav($codeOfficielCommuneLieuTrav) {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code pays lieu trav.
     *
     * @param string $codePaysLieuTrav The code pays lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodePaysLieuTrav($codePaysLieuTrav) {
        $this->codePaysLieuTrav = $codePaysLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string $codePostalLieuTrav The code postal lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodePostalLieuTrav($codePostalLieuTrav) {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime at.
     *
     * @param string $codeRegimeAt The code regime at.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeAt($codeRegimeAt) {
        $this->codeRegimeAt = $codeRegimeAt;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string $codeRegimeVieillesse The code regime vieillesse.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRegimeVieillesse($codeRegimeVieillesse) {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string $codeRetraiteComplementaire The code retraite complementaire.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeRetraiteComplementaire($codeRetraiteComplementaire) {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string $codeSituAdmin The code situ admin.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeSituAdmin($codeSituAdmin) {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string $codeStatutCategRetraite The code statut categ retraite.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutCategRetraite($codeStatutCategRetraite) {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string $codeTypeExo1 The code type exo1.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo1($codeTypeExo1) {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string $codeTypeExo2 The code type exo2.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo2($codeTypeExo2) {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string $codeTypeExo3 The code type exo3.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeTypeExo3($codeTypeExo3) {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string $codeUniteTempsTravail The code unite temps travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeUniteTempsTravail($codeUniteTempsTravail) {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the code zone geo.
     *
     * @param string $codeZoneGeo The code zone geo.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setCodeZoneGeo($codeZoneGeo) {
        $this->codeZoneGeo = $codeZoneGeo;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string $complementLieuTrav The complement lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setComplementLieuTrav($complementLieuTrav) {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime|null $dateRachat The date rachat.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setDateRachat(DateTime $dateRachat = null) {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string $detacheExpatrie The detache expatrie.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setDetacheExpatrie($detacheExpatrie) {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string $etabLieuTravail The etab lieu travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setEtabLieuTravail($etabLieuTravail) {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the id lieu travail.
     *
     * @param string $idLieuTravail The id lieu travail.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setIdLieuTravail($idLieuTravail) {
        $this->idLieuTravail = $idLieuTravail;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVilleInseeLieuTrav($nomVilleInseeLieuTrav) {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string $nomVilleLieuTrav The nom ville lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVilleLieuTrav($nomVilleLieuTrav) {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string $nomVoieLieuTrav The nom voie lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNomVoieLieuTrav($nomVoieLieuTrav) {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string $numVoieLieuTrav The num voie lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNumVoieLieuTrav($numVoieLieuTrav) {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the raison soc lieu trav.
     *
     * @param string $raisonSocLieuTrav The raison soc lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setRaisonSocLieuTrav($raisonSocLieuTrav) {
        $this->raisonSocLieuTrav = $raisonSocLieuTrav;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     * @return EmpDadsuGene Returns this Emp dadsu gene.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }
}
