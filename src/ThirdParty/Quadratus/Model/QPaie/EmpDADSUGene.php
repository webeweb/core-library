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
 * Emp d a d s u gene model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUGene {

    /**
     * Ancienn btp.
     *
     * @var DateTime
     */
    private $anciennBtp;

    /**
     * Annexe7 mutation.
     *
     * @var bool
     */
    private $annexe7Mutation;

    /**
     * Apprenti e t a m.
     *
     * @var bool
     */
    private $apprentiETAM;

    /**
     * B t q lieu trav.
     *
     * @var string
     */
    private $bTQLieuTrav;

    /**
     * Benef assedic.
     *
     * @var string
     */
    private $benefAssedic;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Code caisse c p.
     *
     * @var string
     */
    private $codeCaisseCP;

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
     * Code class b t p.
     *
     * @var string
     */
    private $codeClassBTP;

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
     * Code metier b t p.
     *
     * @var string
     */
    private $codeMetierBTP;

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
     * Code regime a t.
     *
     * @var string
     */
    private $codeRegimeAT;

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
     * @var DateTime
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
     * I d lieu travail.
     *
     * @var string
     */
    private $iDLieuTravail;

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
     * @return DateTime Returns the ancienn btp.
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
     * Get the apprenti e t a m.
     *
     * @return bool Returns the apprenti e t a m.
     */
    public function getApprentiETAM() {
        return $this->apprentiETAM;
    }

    /**
     * Get the b t q lieu trav.
     *
     * @return string Returns the b t q lieu trav.
     */
    public function getBTQLieuTrav() {
        return $this->bTQLieuTrav;
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
     * Get the bureau distributeur lieu trav.
     *
     * @return string Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav() {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Get the code caisse c p.
     *
     * @return string Returns the code caisse c p.
     */
    public function getCodeCaisseCP() {
        return $this->codeCaisseCP;
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
     * Get the code class b t p.
     *
     * @return string Returns the code class b t p.
     */
    public function getCodeClassBTP() {
        return $this->codeClassBTP;
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
     * Get the code metier b t p.
     *
     * @return string Returns the code metier b t p.
     */
    public function getCodeMetierBTP() {
        return $this->codeMetierBTP;
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
     * Get the code regime a t.
     *
     * @return string Returns the code regime a t.
     */
    public function getCodeRegimeAT() {
        return $this->codeRegimeAT;
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
     * @return DateTime Returns the date rachat.
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
     * Get the i d lieu travail.
     *
     * @return string Returns the i d lieu travail.
     */
    public function getIDLieuTravail() {
        return $this->iDLieuTravail;
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
     * @param DateTime $anciennBtp The ancienn btp.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setAnciennBtp(DateTime $anciennBtp = null) {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool $annexe7Mutation The annexe7 mutation.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setAnnexe7Mutation($annexe7Mutation) {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the apprenti e t a m.
     *
     * @param bool $apprentiETAM The apprenti e t a m.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setApprentiETAM($apprentiETAM) {
        $this->apprentiETAM = $apprentiETAM;
        return $this;
    }

    /**
     * Set the b t q lieu trav.
     *
     * @param string $bTQLieuTrav The b t q lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setBTQLieuTrav($bTQLieuTrav) {
        $this->bTQLieuTrav = $bTQLieuTrav;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string $benefAssedic The benef assedic.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setBenefAssedic($benefAssedic) {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setBureauDistributeurLieuTrav($bureauDistributeurLieuTrav) {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the code caisse c p.
     *
     * @param string $codeCaisseCP The code caisse c p.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeCaisseCP($codeCaisseCP) {
        $this->codeCaisseCP = $codeCaisseCP;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string $codeCategSalPourcentAbat The code categ sal pourcent abat.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeCategSalPourcentAbat($codeCategSalPourcentAbat) {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class b t p.
     *
     * @param string $codeClassBTP The code class b t p.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeClassBTP($codeClassBTP) {
        $this->codeClassBTP = $codeClassBTP;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code distri etranger.
     *
     * @param string $codeDistriEtranger The code distri etranger.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeDistriEtranger($codeDistriEtranger) {
        $this->codeDistriEtranger = $codeDistriEtranger;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string $codeExoTrav The code exo trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeExoTrav($codeExoTrav) {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string $codeInseeLieuTrav The code insee lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeInseeLieuTrav($codeInseeLieuTrav) {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string $codeIntitContratTrav The code intit contrat trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeIntitContratTrav($codeIntitContratTrav) {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier b t p.
     *
     * @param string $codeMetierBTP The code metier b t p.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeMetierBTP($codeMetierBTP) {
        $this->codeMetierBTP = $codeMetierBTP;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeOfficielCommuneLieuTrav($codeOfficielCommuneLieuTrav) {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code pays lieu trav.
     *
     * @param string $codePaysLieuTrav The code pays lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodePaysLieuTrav($codePaysLieuTrav) {
        $this->codePaysLieuTrav = $codePaysLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string $codePostalLieuTrav The code postal lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodePostalLieuTrav($codePostalLieuTrav) {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime a t.
     *
     * @param string $codeRegimeAT The code regime a t.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeRegimeAT($codeRegimeAT) {
        $this->codeRegimeAT = $codeRegimeAT;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string $codeRegimeVieillesse The code regime vieillesse.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeRegimeVieillesse($codeRegimeVieillesse) {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string $codeRetraiteComplementaire The code retraite complementaire.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeRetraiteComplementaire($codeRetraiteComplementaire) {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string $codeSituAdmin The code situ admin.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeSituAdmin($codeSituAdmin) {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string $codeStatutCategRetraite The code statut categ retraite.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeStatutCategRetraite($codeStatutCategRetraite) {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string $codeTypeExo1 The code type exo1.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeTypeExo1($codeTypeExo1) {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string $codeTypeExo2 The code type exo2.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeTypeExo2($codeTypeExo2) {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string $codeTypeExo3 The code type exo3.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeTypeExo3($codeTypeExo3) {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string $codeUniteTempsTravail The code unite temps travail.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeUniteTempsTravail($codeUniteTempsTravail) {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the code zone geo.
     *
     * @param string $codeZoneGeo The code zone geo.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setCodeZoneGeo($codeZoneGeo) {
        $this->codeZoneGeo = $codeZoneGeo;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string $complementLieuTrav The complement lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setComplementLieuTrav($complementLieuTrav) {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime $dateRachat The date rachat.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setDateRachat(DateTime $dateRachat = null) {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string $detacheExpatrie The detache expatrie.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setDetacheExpatrie($detacheExpatrie) {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string $etabLieuTravail The etab lieu travail.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setEtabLieuTravail($etabLieuTravail) {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the i d lieu travail.
     *
     * @param string $iDLieuTravail The i d lieu travail.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setIDLieuTravail($iDLieuTravail) {
        $this->iDLieuTravail = $iDLieuTravail;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNomVilleInseeLieuTrav($nomVilleInseeLieuTrav) {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string $nomVilleLieuTrav The nom ville lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNomVilleLieuTrav($nomVilleLieuTrav) {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string $nomVoieLieuTrav The nom voie lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNomVoieLieuTrav($nomVoieLieuTrav) {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string $numVoieLieuTrav The num voie lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNumVoieLieuTrav($numVoieLieuTrav) {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the raison soc lieu trav.
     *
     * @param string $raisonSocLieuTrav The raison soc lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setRaisonSocLieuTrav($raisonSocLieuTrav) {
        $this->raisonSocLieuTrav = $raisonSocLieuTrav;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     * @return EmpDADSUGene Returns this emp d a d s u gene.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }
}
