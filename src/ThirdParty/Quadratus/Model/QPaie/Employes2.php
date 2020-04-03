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
 * Employes2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Employes2 {

    /**
     * A declarer cp.
     *
     * @var bool
     */
    private $aDeclarerCp;

    /**
     * Active sal min conv.
     *
     * @var bool
     */
    private $activeSalMinConv;

    /**
     * Active smic.
     *
     * @var bool
     */
    private $activeSmic;

    /**
     * Aen logement.
     *
     * @var bool
     */
    private $aenLogement;

    /**
     * Alleg particulier emp.
     *
     * @var string
     */
    private $allegParticulierEmp;

    /**
     * Arbitrage auto.
     *
     * @var string
     */
    private $arbitrageAuto;

    /**
     * Autre alleg emp.
     *
     * @var string
     */
    private $autreAllegEmp;

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Caisse cp.
     *
     * @var string
     */
    private $caisseCp;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Chef equipe.
     *
     * @var bool
     */
    private $chefEquipe;

    /**
     * Cie plus50.
     *
     * @var bool
     */
    private $ciePlus50;

    /**
     * Code analytique proprete.
     *
     * @var string
     */
    private $codeAnalytiqueProprete;

    /**
     * Code emp remplace.
     *
     * @var string
     */
    private $codeEmpRemplace;

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code motif rupture1.
     *
     * @var string
     */
    private $codeMotifRupture1;

    /**
     * Code motif rupture2.
     *
     * @var string
     */
    private $codeMotifRupture2;

    /**
     * Code pays residence.
     *
     * @var string
     */
    private $codePaysResidence;

    /**
     * Code tuteur.
     *
     * @var string
     */
    private $codeTuteur;

    /**
     * Coeff convention.
     *
     * @var string
     */
    private $coeffConvention;

    /**
     * Commercial.
     *
     * @var bool
     */
    private $commercial;

    /**
     * Complement pcs.
     *
     * @var string
     */
    private $complementPcs;

    /**
     * Conjoint exploitant.
     *
     * @var bool
     */
    private $conjointExploitant;

    /**
     * Contrat cne.
     *
     * @var bool
     */
    private $contratCne;

    /**
     * Cotis base penibilite.
     *
     * @var bool
     */
    private $cotisBasePenibilite;

    /**
     * Critere tri abs conges1.
     *
     * @var string
     */
    private $critereTriAbsConges1;

    /**
     * Critere tri abs conges2.
     *
     * @var string
     */
    private $critereTriAbsConges2;

    /**
     * Critere tri abs conges3.
     *
     * @var string
     */
    private $critereTriAbsConges3;

    /**
     * Cum base tr2.
     *
     * @var float
     */
    private $cumBaseTr2;

    /**
     * Cum base tr d.
     *
     * @var float
     */
    private $cumBaseTrD;

    /**
     * Cum base tr d1.
     *
     * @var float
     */
    private $cumBaseTrD1;

    /**
     * Cum base tr d1 caisse1.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse1;

    /**
     * Cum base tr d1 caisse2.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse2;

    /**
     * Cum base tr d1 caisse3.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse3;

    /**
     * Cum base tr d caisse1.
     *
     * @var float
     */
    private $cumBaseTrDCaisse1;

    /**
     * Cum base tr d caisse2.
     *
     * @var float
     */
    private $cumBaseTrDCaisse2;

    /**
     * Cum base tr d caisse3.
     *
     * @var float
     */
    private $cumBaseTrDCaisse3;

    /**
     * Cum brut al sans si.
     *
     * @var float
     */
    private $cumBrutAlSansSi;

    /**
     * Cum brut caisse1.
     *
     * @var float
     */
    private $cumBrutCaisse1;

    /**
     * Cum brut caisse2.
     *
     * @var float
     */
    private $cumBrutCaisse2;

    /**
     * Cum brut caisse3.
     *
     * @var float
     */
    private $cumBrutCaisse3;

    /**
     * Cum dif dus.
     *
     * @var float
     */
    private $cumDifDus;

    /**
     * Cum dif dus1.
     *
     * @var float
     */
    private $cumDifDus1;

    /**
     * Cum h bonifie.
     *
     * @var float
     */
    private $cumHBonifie;

    /**
     * Cum rtt dus.
     *
     * @var float
     */
    private $cumRttDus;

    /**
     * Cum rtt pris.
     *
     * @var float
     */
    private $cumRttPris;

    /**
     * Cum tot si.
     *
     * @var float
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float
     */
    private $cumTrancheDSansSi;

    /**
     * Dadsu conjoint salarie.
     *
     * @var string
     */
    private $dadsuConjointSalarie;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date fin exclure lfr2012.
     *
     * @var DateTime|null
     */
    private $dateFinExclureLfr2012;

    /**
     * Date fin portabilite.
     *
     * @var DateTime|null
     */
    private $dateFinPortabilite;

    /**
     * Date passage cdi.
     *
     * @var DateTime|null
     */
    private $datePassageCdi;

    /**
     * Date renouv cdd.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd;

    /**
     * Deduction anc.
     *
     * @var int
     */
    private $deductionAnc;

    /**
     * Echelon.
     *
     * @var string
     */
    private $echelon;

    /**
     * Ed h sup bonif que majo.
     *
     * @var string
     */
    private $edHSupBonifQueMajo;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Etat i paie.
     *
     * @var string
     */
    private $etatIPaie;

    /**
     * Exclure chom cdd.
     *
     * @var bool
     */
    private $exclureChomCdd;

    /**
     * Exclure cice.
     *
     * @var bool
     */
    private $exclureCice;

    /**
     * Exclure cospar.
     *
     * @var bool
     */
    private $exclureCospar;

    /**
     * Exclure cot assedic par urssaf.
     *
     * @var bool
     */
    private $exclureCotAssedicParUrssaf;

    /**
     * Exclure das.
     *
     * @var bool
     */
    private $exclureDas;

    /**
     * Exclure dsn.
     *
     * @var bool
     */
    private $exclureDsn;

    /**
     * Exclure lfr2012.
     *
     * @var string
     */
    private $exclureLfr2012;

    /**
     * Exclure loi tepa.
     *
     * @var bool
     */
    private $exclureLoiTepa;

    /**
     * Exclure loi tepa part p.
     *
     * @var bool
     */
    private $exclureLoiTepaPartP;

    /**
     * Exclure loi tepa part s.
     *
     * @var bool
     */
    private $exclureLoiTepaPartS;

    /**
     * Exclure qgc.
     *
     * @var bool
     */
    private $exclureQgc;

    /**
     * Exo accre17.
     *
     * @var bool
     */
    private $exoAccre17;

    /**
     * Exo agff.
     *
     * @var bool
     */
    private $exoAgff;

    /**
     * Exo occasionnel msa.
     *
     * @var bool
     */
    private $exoOccasionnelMsa;

    /**
     * Exo professionnalisation.
     *
     * @var bool
     */
    private $exoProfessionnalisation;

    /**
     * Exo specif.
     *
     * @var bool
     */
    private $exoSpecif;

    /**
     * Forfait heure.
     *
     * @var bool
     */
    private $forfaitHeure;

    /**
     * Forfait jour.
     *
     * @var bool
     */
    private $forfaitJour;

    /**
     * Gestion compteur h completer.
     *
     * @var bool
     */
    private $gestionCompteurHCompleter;

    /**
     * Gestion cp.
     *
     * @var string
     */
    private $gestionCp;

    /**
     * Gestion mail bulletin.
     *
     * @var bool
     */
    private $gestionMailBulletin;

    /**
     * Gestion repos comp.
     *
     * @var string
     */
    private $gestionReposComp;

    /**
     * Gestion repos recup.
     *
     * @var string
     */
    private $gestionReposRecup;

    /**
     * Gestion repos remplace.
     *
     * @var string
     */
    private $gestionReposRemplace;

    /**
     * Gestion rtt.
     *
     * @var string
     */
    private $gestionRtt;

    /**
     * Gestion sem type.
     *
     * @var string
     */
    private $gestionSemType;

    /**
     * Heures periode initial.
     *
     * @var float
     */
    private $heuresPeriodeInitial;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Indem cp msa.
     *
     * @var bool
     */
    private $indemCpMsa;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Inspecteur.
     *
     * @var bool
     */
    private $inspecteur;

    /**
     * Interim indem cp fillon.
     *
     * @var bool
     */
    private $interimIndemCpFillon;

    /**
     * Mail bulletin pwd.
     *
     * @var string
     */
    private $mailBulletinPwd;

    /**
     * Maintien intervient cp.
     *
     * @var string
     */
    private $maintienIntervientCp;

    /**
     * Maintien net deduc csgijss.
     *
     * @var bool
     */
    private $maintienNetDeducCsgijss;

    /**
     * Maintien salaire.
     *
     * @var string
     */
    private $maintienSalaire;

    /**
     * Maintien specifique.
     *
     * @var bool
     */
    private $maintienSpecifique;

    /**
     * Majo professionnalisation.
     *
     * @var bool
     */
    private $majoProfessionnalisation;

    /**
     * Mandataire social.
     *
     * @var bool
     */
    private $mandataireSocial;

    /**
     * Modele bulletin.
     *
     * @var string
     */
    private $modeleBulletin;

    /**
     * Mois cloture dif.
     *
     * @var string
     */
    private $moisClotureDif;

    /**
     * Motif cdd.
     *
     * @var string
     */
    private $motifCdd;

    /**
     * Motif exclusion dsn.
     *
     * @var string
     */
    private $motifExclusionDsn;

    /**
     * Multi employeur.
     *
     * @var bool
     */
    private $multiEmployeur;

    /**
     * Nature analytique.
     *
     * @var string
     */
    private $natureAnalytique;

    /**
     * Nb h bonifie.
     *
     * @var float
     */
    private $nbHBonifie;

    /**
     * Nb h contingent.
     *
     * @var float
     */
    private $nbHContingent;

    /**
     * Nb h jour1.
     *
     * @var float
     */
    private $nbHJour1;

    /**
     * Nb h jour2.
     *
     * @var float
     */
    private $nbHJour2;

    /**
     * Nb h jour3.
     *
     * @var float
     */
    private $nbHJour3;

    /**
     * Nb h jour4.
     *
     * @var float
     */
    private $nbHJour4;

    /**
     * Nb h jour5.
     *
     * @var float
     */
    private $nbHJour5;

    /**
     * Nb h jour6.
     *
     * @var float
     */
    private $nbHJour6;

    /**
     * Nb h jour7.
     *
     * @var float
     */
    private $nbHJour7;

    /**
     * Nb jour annee.
     *
     * @var float
     */
    private $nbJourAnnee;

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Nb jour cp sup.
     *
     * @var float
     */
    private $nbJourCpSup;

    /**
     * Nb piece logement.
     *
     * @var string
     */
    private $nbPieceLogement;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Nom ville insee.
     *
     * @var string
     */
    private $nomVilleInsee;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero abattement contrat msa.
     *
     * @var int
     */
    private $numeroAbattementContratMsa;

    /**
     * Numero contrat.
     *
     * @var int
     */
    private $numeroContrat;

    /**
     * Numero employe contrat.
     *
     * @var string
     */
    private $numeroEmployeContrat;

    /**
     * Pas gestion dif.
     *
     * @var bool
     */
    private $pasGestionDif;

    /**
     * Pays naissance.
     *
     * @var string
     */
    private $paysNaissance;

    /**
     * Pays nat.
     *
     * @var string
     */
    private $paysNat;

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime|null
     */
    private $periodePointageCloturee;

    /**
     * Position.
     *
     * @var string
     */
    private $position;

    /**
     * Pourcent exo.
     *
     * @var float
     */
    private $pourcentExo;

    /**
     * Rbt navigo non proratise.
     *
     * @var bool
     */
    private $rbtNavigoNonProratise;

    /**
     * Reduction fillon.
     *
     * @var string
     */
    private $reductionFillon;

    /**
     * Reduction mayotte.
     *
     * @var string
     */
    private $reductionMayotte;

    /**
     * Remun part fillon.
     *
     * @var bool
     */
    private $remunPartFillon;

    /**
     * Rtt1.
     *
     * @var float
     */
    private $rtt1;

    /**
     * Rtt10.
     *
     * @var float
     */
    private $rtt10;

    /**
     * Rtt11.
     *
     * @var float
     */
    private $rtt11;

    /**
     * Rtt12.
     *
     * @var float
     */
    private $rtt12;

    /**
     * Rtt2.
     *
     * @var float
     */
    private $rtt2;

    /**
     * Rtt3.
     *
     * @var float
     */
    private $rtt3;

    /**
     * Rtt4.
     *
     * @var float
     */
    private $rtt4;

    /**
     * Rtt5.
     *
     * @var float
     */
    private $rtt5;

    /**
     * Rtt6.
     *
     * @var float
     */
    private $rtt6;

    /**
     * Rtt7.
     *
     * @var float
     */
    private $rtt7;

    /**
     * Rtt8.
     *
     * @var float
     */
    private $rtt8;

    /**
     * Rtt9.
     *
     * @var float
     */
    private $rtt9;

    /**
     * Sans contrat.
     *
     * @var int
     */
    private $sansContrat;

    /**
     * Subrogation.
     *
     * @var string
     */
    private $subrogation;

    /**
     * Tds142.
     *
     * @var float
     */
    private $tds142;

    /**
     * Tds alloc chom.
     *
     * @var float
     */
    private $tdsAllocChom;

    /**
     * Tds alloc retraite.
     *
     * @var float
     */
    private $tdsAllocRetraite;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Travailleur de nuit.
     *
     * @var bool
     */
    private $travailleurDeNuit;

    /**
     * Type abo navigo.
     *
     * @var string
     */
    private $typeAboNavigo;

    /**
     * Type exo lodeom.
     *
     * @var string
     */
    private $typeExoLodeom;

    /**
     * Type intemperie btp.
     *
     * @var string
     */
    private $typeIntemperieBtp;

    /**
     * Type maintien brut net.
     *
     * @var string
     */
    private $typeMaintienBrutNet;

    /**
     * Type maintien salaire.
     *
     * @var string
     */
    private $typeMaintienSalaire;

    /**
     * Type saisie ab cp.
     *
     * @var string
     */
    private $typeSaisieAbCp;

    /**
     * Zone navigo.
     *
     * @var string
     */
    private $zoneNavigo;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a declarer cp.
     *
     * @return bool Returns the a declarer cp.
     */
    public function getADeclarerCp() {
        return $this->aDeclarerCp;
    }

    /**
     * Get the active sal min conv.
     *
     * @return bool Returns the active sal min conv.
     */
    public function getActiveSalMinConv() {
        return $this->activeSalMinConv;
    }

    /**
     * Get the active smic.
     *
     * @return bool Returns the active smic.
     */
    public function getActiveSmic() {
        return $this->activeSmic;
    }

    /**
     * Get the aen logement.
     *
     * @return bool Returns the aen logement.
     */
    public function getAenLogement() {
        return $this->aenLogement;
    }

    /**
     * Get the alleg particulier emp.
     *
     * @return string Returns the alleg particulier emp.
     */
    public function getAllegParticulierEmp() {
        return $this->allegParticulierEmp;
    }

    /**
     * Get the arbitrage auto.
     *
     * @return string Returns the arbitrage auto.
     */
    public function getArbitrageAuto() {
        return $this->arbitrageAuto;
    }

    /**
     * Get the autre alleg emp.
     *
     * @return string Returns the autre alleg emp.
     */
    public function getAutreAllegEmp() {
        return $this->autreAllegEmp;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
    }

    /**
     * Get the caisse cp.
     *
     * @return string Returns the caisse cp.
     */
    public function getCaisseCp() {
        return $this->caisseCp;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the chef equipe.
     *
     * @return bool Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
    }

    /**
     * Get the cie plus50.
     *
     * @return bool Returns the cie plus50.
     */
    public function getCiePlus50() {
        return $this->ciePlus50;
    }

    /**
     * Get the code analytique proprete.
     *
     * @return string Returns the code analytique proprete.
     */
    public function getCodeAnalytiqueProprete() {
        return $this->codeAnalytiqueProprete;
    }

    /**
     * Get the code emp remplace.
     *
     * @return string Returns the code emp remplace.
     */
    public function getCodeEmpRemplace() {
        return $this->codeEmpRemplace;
    }

    /**
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
    }

    /**
     * Get the code motif rupture1.
     *
     * @return string Returns the code motif rupture1.
     */
    public function getCodeMotifRupture1() {
        return $this->codeMotifRupture1;
    }

    /**
     * Get the code motif rupture2.
     *
     * @return string Returns the code motif rupture2.
     */
    public function getCodeMotifRupture2() {
        return $this->codeMotifRupture2;
    }

    /**
     * Get the code pays residence.
     *
     * @return string Returns the code pays residence.
     */
    public function getCodePaysResidence() {
        return $this->codePaysResidence;
    }

    /**
     * Get the code tuteur.
     *
     * @return string Returns the code tuteur.
     */
    public function getCodeTuteur() {
        return $this->codeTuteur;
    }

    /**
     * Get the coeff convention.
     *
     * @return string Returns the coeff convention.
     */
    public function getCoeffConvention() {
        return $this->coeffConvention;
    }

    /**
     * Get the commercial.
     *
     * @return bool Returns the commercial.
     */
    public function getCommercial() {
        return $this->commercial;
    }

    /**
     * Get the complement pcs.
     *
     * @return string Returns the complement pcs.
     */
    public function getComplementPcs() {
        return $this->complementPcs;
    }

    /**
     * Get the conjoint exploitant.
     *
     * @return bool Returns the conjoint exploitant.
     */
    public function getConjointExploitant() {
        return $this->conjointExploitant;
    }

    /**
     * Get the contrat cne.
     *
     * @return bool Returns the contrat cne.
     */
    public function getContratCne() {
        return $this->contratCne;
    }

    /**
     * Get the cotis base penibilite.
     *
     * @return bool Returns the cotis base penibilite.
     */
    public function getCotisBasePenibilite() {
        return $this->cotisBasePenibilite;
    }

    /**
     * Get the critere tri abs conges1.
     *
     * @return string Returns the critere tri abs conges1.
     */
    public function getCritereTriAbsConges1() {
        return $this->critereTriAbsConges1;
    }

    /**
     * Get the critere tri abs conges2.
     *
     * @return string Returns the critere tri abs conges2.
     */
    public function getCritereTriAbsConges2() {
        return $this->critereTriAbsConges2;
    }

    /**
     * Get the critere tri abs conges3.
     *
     * @return string Returns the critere tri abs conges3.
     */
    public function getCritereTriAbsConges3() {
        return $this->critereTriAbsConges3;
    }

    /**
     * Get the cum base tr2.
     *
     * @return float Returns the cum base tr2.
     */
    public function getCumBaseTr2() {
        return $this->cumBaseTr2;
    }

    /**
     * Get the cum base tr d.
     *
     * @return float Returns the cum base tr d.
     */
    public function getCumBaseTrD() {
        return $this->cumBaseTrD;
    }

    /**
     * Get the cum base tr d1.
     *
     * @return float Returns the cum base tr d1.
     */
    public function getCumBaseTrD1() {
        return $this->cumBaseTrD1;
    }

    /**
     * Get the cum base tr d1 caisse1.
     *
     * @return float Returns the cum base tr d1 caisse1.
     */
    public function getCumBaseTrD1Caisse1() {
        return $this->cumBaseTrD1Caisse1;
    }

    /**
     * Get the cum base tr d1 caisse2.
     *
     * @return float Returns the cum base tr d1 caisse2.
     */
    public function getCumBaseTrD1Caisse2() {
        return $this->cumBaseTrD1Caisse2;
    }

    /**
     * Get the cum base tr d1 caisse3.
     *
     * @return float Returns the cum base tr d1 caisse3.
     */
    public function getCumBaseTrD1Caisse3() {
        return $this->cumBaseTrD1Caisse3;
    }

    /**
     * Get the cum base tr d caisse1.
     *
     * @return float Returns the cum base tr d caisse1.
     */
    public function getCumBaseTrDCaisse1() {
        return $this->cumBaseTrDCaisse1;
    }

    /**
     * Get the cum base tr d caisse2.
     *
     * @return float Returns the cum base tr d caisse2.
     */
    public function getCumBaseTrDCaisse2() {
        return $this->cumBaseTrDCaisse2;
    }

    /**
     * Get the cum base tr d caisse3.
     *
     * @return float Returns the cum base tr d caisse3.
     */
    public function getCumBaseTrDCaisse3() {
        return $this->cumBaseTrDCaisse3;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi() {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum brut caisse1.
     *
     * @return float Returns the cum brut caisse1.
     */
    public function getCumBrutCaisse1() {
        return $this->cumBrutCaisse1;
    }

    /**
     * Get the cum brut caisse2.
     *
     * @return float Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2() {
        return $this->cumBrutCaisse2;
    }

    /**
     * Get the cum brut caisse3.
     *
     * @return float Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3() {
        return $this->cumBrutCaisse3;
    }

    /**
     * Get the cum dif dus.
     *
     * @return float Returns the cum dif dus.
     */
    public function getCumDifDus() {
        return $this->cumDifDus;
    }

    /**
     * Get the cum dif dus1.
     *
     * @return float Returns the cum dif dus1.
     */
    public function getCumDifDus1() {
        return $this->cumDifDus1;
    }

    /**
     * Get the cum h bonifie.
     *
     * @return float Returns the cum h bonifie.
     */
    public function getCumHBonifie() {
        return $this->cumHBonifie;
    }

    /**
     * Get the cum rtt dus.
     *
     * @return float Returns the cum rtt dus.
     */
    public function getCumRttDus() {
        return $this->cumRttDus;
    }

    /**
     * Get the cum rtt pris.
     *
     * @return float Returns the cum rtt pris.
     */
    public function getCumRttPris() {
        return $this->cumRttPris;
    }

    /**
     * Get the cum tot si.
     *
     * @return float Returns the cum tot si.
     */
    public function getCumTotSi() {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi() {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float Returns the cum tranche2 si.
     */
    public function getCumTranche2Si() {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi() {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float Returns the cum tranche asi.
     */
    public function getCumTrancheAsi() {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi() {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi() {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi() {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float Returns the cum tranche csi.
     */
    public function getCumTrancheCsi() {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi() {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi() {
        return $this->cumTrancheDSansSi;
    }

    /**
     * Get the dadsu conjoint salarie.
     *
     * @return string Returns the dadsu conjoint salarie.
     */
    public function getDadsuConjointSalarie() {
        return $this->dadsuConjointSalarie;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date fin exclure lfr2012.
     *
     * @return DateTime|null Returns the date fin exclure lfr2012.
     */
    public function getDateFinExclureLfr2012() {
        return $this->dateFinExclureLfr2012;
    }

    /**
     * Get the date fin portabilite.
     *
     * @return DateTime|null Returns the date fin portabilite.
     */
    public function getDateFinPortabilite() {
        return $this->dateFinPortabilite;
    }

    /**
     * Get the date passage cdi.
     *
     * @return DateTime|null Returns the date passage cdi.
     */
    public function getDatePassageCdi() {
        return $this->datePassageCdi;
    }

    /**
     * Get the date renouv cdd.
     *
     * @return DateTime|null Returns the date renouv cdd.
     */
    public function getDateRenouvCdd() {
        return $this->dateRenouvCdd;
    }

    /**
     * Get the deduction anc.
     *
     * @return int Returns the deduction anc.
     */
    public function getDeductionAnc() {
        return $this->deductionAnc;
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
     * Get the ed h sup bonif que majo.
     *
     * @return string Returns the ed h sup bonif que majo.
     */
    public function getEdHSupBonifQueMajo() {
        return $this->edHSupBonifQueMajo;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the etat i paie.
     *
     * @return string Returns the etat i paie.
     */
    public function getEtatIPaie() {
        return $this->etatIPaie;
    }

    /**
     * Get the exclure chom cdd.
     *
     * @return bool Returns the exclure chom cdd.
     */
    public function getExclureChomCdd() {
        return $this->exclureChomCdd;
    }

    /**
     * Get the exclure cice.
     *
     * @return bool Returns the exclure cice.
     */
    public function getExclureCice() {
        return $this->exclureCice;
    }

    /**
     * Get the exclure cospar.
     *
     * @return bool Returns the exclure cospar.
     */
    public function getExclureCospar() {
        return $this->exclureCospar;
    }

    /**
     * Get the exclure cot assedic par urssaf.
     *
     * @return bool Returns the exclure cot assedic par urssaf.
     */
    public function getExclureCotAssedicParUrssaf() {
        return $this->exclureCotAssedicParUrssaf;
    }

    /**
     * Get the exclure das.
     *
     * @return bool Returns the exclure das.
     */
    public function getExclureDas() {
        return $this->exclureDas;
    }

    /**
     * Get the exclure dsn.
     *
     * @return bool Returns the exclure dsn.
     */
    public function getExclureDsn() {
        return $this->exclureDsn;
    }

    /**
     * Get the exclure lfr2012.
     *
     * @return string Returns the exclure lfr2012.
     */
    public function getExclureLfr2012() {
        return $this->exclureLfr2012;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return bool Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa() {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the exclure loi tepa part p.
     *
     * @return bool Returns the exclure loi tepa part p.
     */
    public function getExclureLoiTepaPartP() {
        return $this->exclureLoiTepaPartP;
    }

    /**
     * Get the exclure loi tepa part s.
     *
     * @return bool Returns the exclure loi tepa part s.
     */
    public function getExclureLoiTepaPartS() {
        return $this->exclureLoiTepaPartS;
    }

    /**
     * Get the exclure qgc.
     *
     * @return bool Returns the exclure qgc.
     */
    public function getExclureQgc() {
        return $this->exclureQgc;
    }

    /**
     * Get the exo accre17.
     *
     * @return bool Returns the exo accre17.
     */
    public function getExoAccre17() {
        return $this->exoAccre17;
    }

    /**
     * Get the exo agff.
     *
     * @return bool Returns the exo agff.
     */
    public function getExoAgff() {
        return $this->exoAgff;
    }

    /**
     * Get the exo occasionnel msa.
     *
     * @return bool Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa() {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Get the exo professionnalisation.
     *
     * @return bool Returns the exo professionnalisation.
     */
    public function getExoProfessionnalisation() {
        return $this->exoProfessionnalisation;
    }

    /**
     * Get the exo specif.
     *
     * @return bool Returns the exo specif.
     */
    public function getExoSpecif() {
        return $this->exoSpecif;
    }

    /**
     * Get the forfait heure.
     *
     * @return bool Returns the forfait heure.
     */
    public function getForfaitHeure() {
        return $this->forfaitHeure;
    }

    /**
     * Get the forfait jour.
     *
     * @return bool Returns the forfait jour.
     */
    public function getForfaitJour() {
        return $this->forfaitJour;
    }

    /**
     * Get the gestion compteur h completer.
     *
     * @return bool Returns the gestion compteur h completer.
     */
    public function getGestionCompteurHCompleter() {
        return $this->gestionCompteurHCompleter;
    }

    /**
     * Get the gestion cp.
     *
     * @return string Returns the gestion cp.
     */
    public function getGestionCp() {
        return $this->gestionCp;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return bool Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin() {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the gestion repos comp.
     *
     * @return string Returns the gestion repos comp.
     */
    public function getGestionReposComp() {
        return $this->gestionReposComp;
    }

    /**
     * Get the gestion repos recup.
     *
     * @return string Returns the gestion repos recup.
     */
    public function getGestionReposRecup() {
        return $this->gestionReposRecup;
    }

    /**
     * Get the gestion repos remplace.
     *
     * @return string Returns the gestion repos remplace.
     */
    public function getGestionReposRemplace() {
        return $this->gestionReposRemplace;
    }

    /**
     * Get the gestion rtt.
     *
     * @return string Returns the gestion rtt.
     */
    public function getGestionRtt() {
        return $this->gestionRtt;
    }

    /**
     * Get the gestion sem type.
     *
     * @return string Returns the gestion sem type.
     */
    public function getGestionSemType() {
        return $this->gestionSemType;
    }

    /**
     * Get the heures periode initial.
     *
     * @return float Returns the heures periode initial.
     */
    public function getHeuresPeriodeInitial() {
        return $this->heuresPeriodeInitial;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the indem cp msa.
     *
     * @return bool Returns the indem cp msa.
     */
    public function getIndemCpMsa() {
        return $this->indemCpMsa;
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
     * Get the inspecteur.
     *
     * @return bool Returns the inspecteur.
     */
    public function getInspecteur() {
        return $this->inspecteur;
    }

    /**
     * Get the interim indem cp fillon.
     *
     * @return bool Returns the interim indem cp fillon.
     */
    public function getInterimIndemCpFillon() {
        return $this->interimIndemCpFillon;
    }

    /**
     * Get the mail bulletin pwd.
     *
     * @return string Returns the mail bulletin pwd.
     */
    public function getMailBulletinPwd() {
        return $this->mailBulletinPwd;
    }

    /**
     * Get the maintien intervient cp.
     *
     * @return string Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp() {
        return $this->maintienIntervientCp;
    }

    /**
     * Get the maintien net deduc csgijss.
     *
     * @return bool Returns the maintien net deduc csgijss.
     */
    public function getMaintienNetDeducCsgijss() {
        return $this->maintienNetDeducCsgijss;
    }

    /**
     * Get the maintien salaire.
     *
     * @return string Returns the maintien salaire.
     */
    public function getMaintienSalaire() {
        return $this->maintienSalaire;
    }

    /**
     * Get the maintien specifique.
     *
     * @return bool Returns the maintien specifique.
     */
    public function getMaintienSpecifique() {
        return $this->maintienSpecifique;
    }

    /**
     * Get the majo professionnalisation.
     *
     * @return bool Returns the majo professionnalisation.
     */
    public function getMajoProfessionnalisation() {
        return $this->majoProfessionnalisation;
    }

    /**
     * Get the mandataire social.
     *
     * @return bool Returns the mandataire social.
     */
    public function getMandataireSocial() {
        return $this->mandataireSocial;
    }

    /**
     * Get the modele bulletin.
     *
     * @return string Returns the modele bulletin.
     */
    public function getModeleBulletin() {
        return $this->modeleBulletin;
    }

    /**
     * Get the mois cloture dif.
     *
     * @return string Returns the mois cloture dif.
     */
    public function getMoisClotureDif() {
        return $this->moisClotureDif;
    }

    /**
     * Get the motif cdd.
     *
     * @return string Returns the motif cdd.
     */
    public function getMotifCdd() {
        return $this->motifCdd;
    }

    /**
     * Get the motif exclusion dsn.
     *
     * @return string Returns the motif exclusion dsn.
     */
    public function getMotifExclusionDsn() {
        return $this->motifExclusionDsn;
    }

    /**
     * Get the multi employeur.
     *
     * @return bool Returns the multi employeur.
     */
    public function getMultiEmployeur() {
        return $this->multiEmployeur;
    }

    /**
     * Get the nature analytique.
     *
     * @return string Returns the nature analytique.
     */
    public function getNatureAnalytique() {
        return $this->natureAnalytique;
    }

    /**
     * Get the nb h bonifie.
     *
     * @return float Returns the nb h bonifie.
     */
    public function getNbHBonifie() {
        return $this->nbHBonifie;
    }

    /**
     * Get the nb h contingent.
     *
     * @return float Returns the nb h contingent.
     */
    public function getNbHContingent() {
        return $this->nbHContingent;
    }

    /**
     * Get the nb h jour1.
     *
     * @return float Returns the nb h jour1.
     */
    public function getNbHJour1() {
        return $this->nbHJour1;
    }

    /**
     * Get the nb h jour2.
     *
     * @return float Returns the nb h jour2.
     */
    public function getNbHJour2() {
        return $this->nbHJour2;
    }

    /**
     * Get the nb h jour3.
     *
     * @return float Returns the nb h jour3.
     */
    public function getNbHJour3() {
        return $this->nbHJour3;
    }

    /**
     * Get the nb h jour4.
     *
     * @return float Returns the nb h jour4.
     */
    public function getNbHJour4() {
        return $this->nbHJour4;
    }

    /**
     * Get the nb h jour5.
     *
     * @return float Returns the nb h jour5.
     */
    public function getNbHJour5() {
        return $this->nbHJour5;
    }

    /**
     * Get the nb h jour6.
     *
     * @return float Returns the nb h jour6.
     */
    public function getNbHJour6() {
        return $this->nbHJour6;
    }

    /**
     * Get the nb h jour7.
     *
     * @return float Returns the nb h jour7.
     */
    public function getNbHJour7() {
        return $this->nbHJour7;
    }

    /**
     * Get the nb jour annee.
     *
     * @return float Returns the nb jour annee.
     */
    public function getNbJourAnnee() {
        return $this->nbJourAnnee;
    }

    /**
     * Get the nb jour cp acquis.
     *
     * @return float Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis() {
        return $this->nbJourCpAcquis;
    }

    /**
     * Get the nb jour cp sup.
     *
     * @return float Returns the nb jour cp sup.
     */
    public function getNbJourCpSup() {
        return $this->nbJourCpSup;
    }

    /**
     * Get the nb piece logement.
     *
     * @return string Returns the nb piece logement.
     */
    public function getNbPieceLogement() {
        return $this->nbPieceLogement;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete() {
        return $this->nePasActiverPrimeAnnuelleProprete;
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
     * Get the nom ville insee.
     *
     * @return string Returns the nom ville insee.
     */
    public function getNomVilleInsee() {
        return $this->nomVilleInsee;
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
     * Get the numero abattement contrat msa.
     *
     * @return int Returns the numero abattement contrat msa.
     */
    public function getNumeroAbattementContratMsa() {
        return $this->numeroAbattementContratMsa;
    }

    /**
     * Get the numero contrat.
     *
     * @return int Returns the numero contrat.
     */
    public function getNumeroContrat() {
        return $this->numeroContrat;
    }

    /**
     * Get the numero employe contrat.
     *
     * @return string Returns the numero employe contrat.
     */
    public function getNumeroEmployeContrat() {
        return $this->numeroEmployeContrat;
    }

    /**
     * Get the pas gestion dif.
     *
     * @return bool Returns the pas gestion dif.
     */
    public function getPasGestionDif() {
        return $this->pasGestionDif;
    }

    /**
     * Get the pays naissance.
     *
     * @return string Returns the pays naissance.
     */
    public function getPaysNaissance() {
        return $this->paysNaissance;
    }

    /**
     * Get the pays nat.
     *
     * @return string Returns the pays nat.
     */
    public function getPaysNat() {
        return $this->paysNat;
    }

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime|null Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee() {
        return $this->periodePointageCloturee;
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
     * Get the pourcent exo.
     *
     * @return float Returns the pourcent exo.
     */
    public function getPourcentExo() {
        return $this->pourcentExo;
    }

    /**
     * Get the rbt navigo non proratise.
     *
     * @return bool Returns the rbt navigo non proratise.
     */
    public function getRbtNavigoNonProratise() {
        return $this->rbtNavigoNonProratise;
    }

    /**
     * Get the reduction fillon.
     *
     * @return string Returns the reduction fillon.
     */
    public function getReductionFillon() {
        return $this->reductionFillon;
    }

    /**
     * Get the reduction mayotte.
     *
     * @return string Returns the reduction mayotte.
     */
    public function getReductionMayotte() {
        return $this->reductionMayotte;
    }

    /**
     * Get the remun part fillon.
     *
     * @return bool Returns the remun part fillon.
     */
    public function getRemunPartFillon() {
        return $this->remunPartFillon;
    }

    /**
     * Get the rtt1.
     *
     * @return float Returns the rtt1.
     */
    public function getRtt1() {
        return $this->rtt1;
    }

    /**
     * Get the rtt10.
     *
     * @return float Returns the rtt10.
     */
    public function getRtt10() {
        return $this->rtt10;
    }

    /**
     * Get the rtt11.
     *
     * @return float Returns the rtt11.
     */
    public function getRtt11() {
        return $this->rtt11;
    }

    /**
     * Get the rtt12.
     *
     * @return float Returns the rtt12.
     */
    public function getRtt12() {
        return $this->rtt12;
    }

    /**
     * Get the rtt2.
     *
     * @return float Returns the rtt2.
     */
    public function getRtt2() {
        return $this->rtt2;
    }

    /**
     * Get the rtt3.
     *
     * @return float Returns the rtt3.
     */
    public function getRtt3() {
        return $this->rtt3;
    }

    /**
     * Get the rtt4.
     *
     * @return float Returns the rtt4.
     */
    public function getRtt4() {
        return $this->rtt4;
    }

    /**
     * Get the rtt5.
     *
     * @return float Returns the rtt5.
     */
    public function getRtt5() {
        return $this->rtt5;
    }

    /**
     * Get the rtt6.
     *
     * @return float Returns the rtt6.
     */
    public function getRtt6() {
        return $this->rtt6;
    }

    /**
     * Get the rtt7.
     *
     * @return float Returns the rtt7.
     */
    public function getRtt7() {
        return $this->rtt7;
    }

    /**
     * Get the rtt8.
     *
     * @return float Returns the rtt8.
     */
    public function getRtt8() {
        return $this->rtt8;
    }

    /**
     * Get the rtt9.
     *
     * @return float Returns the rtt9.
     */
    public function getRtt9() {
        return $this->rtt9;
    }

    /**
     * Get the sans contrat.
     *
     * @return int Returns the sans contrat.
     */
    public function getSansContrat() {
        return $this->sansContrat;
    }

    /**
     * Get the subrogation.
     *
     * @return string Returns the subrogation.
     */
    public function getSubrogation() {
        return $this->subrogation;
    }

    /**
     * Get the tds142.
     *
     * @return float Returns the tds142.
     */
    public function getTds142() {
        return $this->tds142;
    }

    /**
     * Get the tds alloc chom.
     *
     * @return float Returns the tds alloc chom.
     */
    public function getTdsAllocChom() {
        return $this->tdsAllocChom;
    }

    /**
     * Get the tds alloc retraite.
     *
     * @return float Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite() {
        return $this->tdsAllocRetraite;
    }

    /**
     * Get the tel2.
     *
     * @return string Returns the tel2.
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * Get the travailleur de nuit.
     *
     * @return bool Returns the travailleur de nuit.
     */
    public function getTravailleurDeNuit() {
        return $this->travailleurDeNuit;
    }

    /**
     * Get the type abo navigo.
     *
     * @return string Returns the type abo navigo.
     */
    public function getTypeAboNavigo() {
        return $this->typeAboNavigo;
    }

    /**
     * Get the type exo lodeom.
     *
     * @return string Returns the type exo lodeom.
     */
    public function getTypeExoLodeom() {
        return $this->typeExoLodeom;
    }

    /**
     * Get the type intemperie btp.
     *
     * @return string Returns the type intemperie btp.
     */
    public function getTypeIntemperieBtp() {
        return $this->typeIntemperieBtp;
    }

    /**
     * Get the type maintien brut net.
     *
     * @return string Returns the type maintien brut net.
     */
    public function getTypeMaintienBrutNet() {
        return $this->typeMaintienBrutNet;
    }

    /**
     * Get the type maintien salaire.
     *
     * @return string Returns the type maintien salaire.
     */
    public function getTypeMaintienSalaire() {
        return $this->typeMaintienSalaire;
    }

    /**
     * Get the type saisie ab cp.
     *
     * @return string Returns the type saisie ab cp.
     */
    public function getTypeSaisieAbCp() {
        return $this->typeSaisieAbCp;
    }

    /**
     * Get the zone navigo.
     *
     * @return string Returns the zone navigo.
     */
    public function getZoneNavigo() {
        return $this->zoneNavigo;
    }

    /**
     * Set the a declarer cp.
     *
     * @param bool $aDeclarerCp The a declarer cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setADeclarerCp($aDeclarerCp) {
        $this->aDeclarerCp = $aDeclarerCp;
        return $this;
    }

    /**
     * Set the active sal min conv.
     *
     * @param bool $activeSalMinConv The active sal min conv.
     * @return Employes2 Returns this Employes2.
     */
    public function setActiveSalMinConv($activeSalMinConv) {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the active smic.
     *
     * @param bool $activeSmic The active smic.
     * @return Employes2 Returns this Employes2.
     */
    public function setActiveSmic($activeSmic) {
        $this->activeSmic = $activeSmic;
        return $this;
    }

    /**
     * Set the aen logement.
     *
     * @param bool $aenLogement The aen logement.
     * @return Employes2 Returns this Employes2.
     */
    public function setAenLogement($aenLogement) {
        $this->aenLogement = $aenLogement;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string $allegParticulierEmp The alleg particulier emp.
     * @return Employes2 Returns this Employes2.
     */
    public function setAllegParticulierEmp($allegParticulierEmp) {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     * @return Employes2 Returns this Employes2.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string $autreAllegEmp The autre alleg emp.
     * @return Employes2 Returns this Employes2.
     */
    public function setAutreAllegEmp($autreAllegEmp) {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     * @return Employes2 Returns this Employes2.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param string $caisseCp The caisse cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return Employes2 Returns this Employes2.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param bool $chefEquipe The chef equipe.
     * @return Employes2 Returns this Employes2.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the cie plus50.
     *
     * @param bool $ciePlus50 The cie plus50.
     * @return Employes2 Returns this Employes2.
     */
    public function setCiePlus50($ciePlus50) {
        $this->ciePlus50 = $ciePlus50;
        return $this;
    }

    /**
     * Set the code analytique proprete.
     *
     * @param string $codeAnalytiqueProprete The code analytique proprete.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeAnalytiqueProprete($codeAnalytiqueProprete) {
        $this->codeAnalytiqueProprete = $codeAnalytiqueProprete;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string $codeEmpRemplace The code emp remplace.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeEmpRemplace($codeEmpRemplace) {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code motif rupture1.
     *
     * @param string $codeMotifRupture1 The code motif rupture1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeMotifRupture1($codeMotifRupture1) {
        $this->codeMotifRupture1 = $codeMotifRupture1;
        return $this;
    }

    /**
     * Set the code motif rupture2.
     *
     * @param string $codeMotifRupture2 The code motif rupture2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeMotifRupture2($codeMotifRupture2) {
        $this->codeMotifRupture2 = $codeMotifRupture2;
        return $this;
    }

    /**
     * Set the code pays residence.
     *
     * @param string $codePaysResidence The code pays residence.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodePaysResidence($codePaysResidence) {
        $this->codePaysResidence = $codePaysResidence;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string $codeTuteur The code tuteur.
     * @return Employes2 Returns this Employes2.
     */
    public function setCodeTuteur($codeTuteur) {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string $coeffConvention The coeff convention.
     * @return Employes2 Returns this Employes2.
     */
    public function setCoeffConvention($coeffConvention) {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the commercial.
     *
     * @param bool $commercial The commercial.
     * @return Employes2 Returns this Employes2.
     */
    public function setCommercial($commercial) {
        $this->commercial = $commercial;
        return $this;
    }

    /**
     * Set the complement pcs.
     *
     * @param string $complementPcs The complement pcs.
     * @return Employes2 Returns this Employes2.
     */
    public function setComplementPcs($complementPcs) {
        $this->complementPcs = $complementPcs;
        return $this;
    }

    /**
     * Set the conjoint exploitant.
     *
     * @param bool $conjointExploitant The conjoint exploitant.
     * @return Employes2 Returns this Employes2.
     */
    public function setConjointExploitant($conjointExploitant) {
        $this->conjointExploitant = $conjointExploitant;
        return $this;
    }

    /**
     * Set the contrat cne.
     *
     * @param bool $contratCne The contrat cne.
     * @return Employes2 Returns this Employes2.
     */
    public function setContratCne($contratCne) {
        $this->contratCne = $contratCne;
        return $this;
    }

    /**
     * Set the cotis base penibilite.
     *
     * @param bool $cotisBasePenibilite The cotis base penibilite.
     * @return Employes2 Returns this Employes2.
     */
    public function setCotisBasePenibilite($cotisBasePenibilite) {
        $this->cotisBasePenibilite = $cotisBasePenibilite;
        return $this;
    }

    /**
     * Set the critere tri abs conges1.
     *
     * @param string $critereTriAbsConges1 The critere tri abs conges1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges1($critereTriAbsConges1) {
        $this->critereTriAbsConges1 = $critereTriAbsConges1;
        return $this;
    }

    /**
     * Set the critere tri abs conges2.
     *
     * @param string $critereTriAbsConges2 The critere tri abs conges2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges2($critereTriAbsConges2) {
        $this->critereTriAbsConges2 = $critereTriAbsConges2;
        return $this;
    }

    /**
     * Set the critere tri abs conges3.
     *
     * @param string $critereTriAbsConges3 The critere tri abs conges3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCritereTriAbsConges3($critereTriAbsConges3) {
        $this->critereTriAbsConges3 = $critereTriAbsConges3;
        return $this;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float $cumBaseTr2 The cum base tr2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTr2($cumBaseTr2) {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float $cumBaseTrD The cum base tr d.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD($cumBaseTrD) {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float $cumBaseTrD1 The cum base tr d1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1($cumBaseTrD1) {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse1($cumBaseTrD1Caisse1) {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse2($cumBaseTrD1Caisse2) {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse3.
     *
     * @param float $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrD1Caisse3($cumBaseTrD1Caisse3) {
        $this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
        return $this;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float $cumBaseTrDCaisse1 The cum base tr d caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse1($cumBaseTrDCaisse1) {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float $cumBaseTrDCaisse2 The cum base tr d caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse2($cumBaseTrDCaisse2) {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float $cumBaseTrDCaisse3 The cum base tr d caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBaseTrDCaisse3($cumBaseTrDCaisse3) {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float $cumBrutAlSansSi The cum brut al sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutAlSansSi($cumBrutAlSansSi) {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float $cumBrutCaisse1 The cum brut caisse1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse1($cumBrutCaisse1) {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float $cumBrutCaisse2 The cum brut caisse2.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse2($cumBrutCaisse2) {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float $cumBrutCaisse3 The cum brut caisse3.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumBrutCaisse3($cumBrutCaisse3) {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float $cumDifDus The cum dif dus.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumDifDus($cumDifDus) {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float $cumDifDus1 The cum dif dus1.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumDifDus1($cumDifDus1) {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float $cumHBonifie The cum h bonifie.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumHBonifie($cumHBonifie) {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float $cumRttDus The cum rtt dus.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumRttDus($cumRttDus) {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float $cumRttPris The cum rtt pris.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumRttPris($cumRttPris) {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float $cumTotSi The cum tot si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTotSi($cumTotSi) {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float $cumTranche2SansSi The cum tranche2 sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTranche2SansSi($cumTranche2SansSi) {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float $cumTranche2Si The cum tranche2 si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTranche2Si($cumTranche2Si) {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float $cumTrancheASansSi The cum tranche a sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheASansSi($cumTrancheASansSi) {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float $cumTrancheAsi The cum tranche asi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheAsi($cumTrancheAsi) {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float $cumTrancheBSansSi The cum tranche b sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheBSansSi($cumTrancheBSansSi) {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float $cumTrancheBsi The cum tranche bsi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheBsi($cumTrancheBsi) {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float $cumTrancheCSansSi The cum tranche c sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheCSansSi($cumTrancheCSansSi) {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float $cumTrancheCsi The cum tranche csi.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheCsi($cumTrancheCsi) {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float $cumTrancheD1SansSi The cum tranche d1 sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheD1SansSi($cumTrancheD1SansSi) {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float $cumTrancheDSansSi The cum tranche d sans si.
     * @return Employes2 Returns this Employes2.
     */
    public function setCumTrancheDSansSi($cumTrancheDSansSi) {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the dadsu conjoint salarie.
     *
     * @param string $dadsuConjointSalarie The dadsu conjoint salarie.
     * @return Employes2 Returns this Employes2.
     */
    public function setDadsuConjointSalarie($dadsuConjointSalarie) {
        $this->dadsuConjointSalarie = $dadsuConjointSalarie;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date fin exclure lfr2012.
     *
     * @param DateTime|null $dateFinExclureLfr2012 The date fin exclure lfr2012.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateFinExclureLfr2012(DateTime $dateFinExclureLfr2012 = null) {
        $this->dateFinExclureLfr2012 = $dateFinExclureLfr2012;
        return $this;
    }

    /**
     * Set the date fin portabilite.
     *
     * @param DateTime|null $dateFinPortabilite The date fin portabilite.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateFinPortabilite(DateTime $dateFinPortabilite = null) {
        $this->dateFinPortabilite = $dateFinPortabilite;
        return $this;
    }

    /**
     * Set the date passage cdi.
     *
     * @param DateTime|null $datePassageCdi The date passage cdi.
     * @return Employes2 Returns this Employes2.
     */
    public function setDatePassageCdi(DateTime $datePassageCdi = null) {
        $this->datePassageCdi = $datePassageCdi;
        return $this;
    }

    /**
     * Set the date renouv cdd.
     *
     * @param DateTime|null $dateRenouvCdd The date renouv cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setDateRenouvCdd(DateTime $dateRenouvCdd = null) {
        $this->dateRenouvCdd = $dateRenouvCdd;
        return $this;
    }

    /**
     * Set the deduction anc.
     *
     * @param int $deductionAnc The deduction anc.
     * @return Employes2 Returns this Employes2.
     */
    public function setDeductionAnc($deductionAnc) {
        $this->deductionAnc = $deductionAnc;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return Employes2 Returns this Employes2.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param string $edHSupBonifQueMajo The ed h sup bonif que majo.
     * @return Employes2 Returns this Employes2.
     */
    public function setEdHSupBonifQueMajo($edHSupBonifQueMajo) {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return Employes2 Returns this Employes2.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the etat i paie.
     *
     * @param string $etatIPaie The etat i paie.
     * @return Employes2 Returns this Employes2.
     */
    public function setEtatIPaie($etatIPaie) {
        $this->etatIPaie = $etatIPaie;
        return $this;
    }

    /**
     * Set the exclure chom cdd.
     *
     * @param bool $exclureChomCdd The exclure chom cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureChomCdd($exclureChomCdd) {
        $this->exclureChomCdd = $exclureChomCdd;
        return $this;
    }

    /**
     * Set the exclure cice.
     *
     * @param bool $exclureCice The exclure cice.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCice($exclureCice) {
        $this->exclureCice = $exclureCice;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool $exclureCospar The exclure cospar.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCospar($exclureCospar) {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure cot assedic par urssaf.
     *
     * @param bool $exclureCotAssedicParUrssaf The exclure cot assedic par urssaf.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureCotAssedicParUrssaf($exclureCotAssedicParUrssaf) {
        $this->exclureCotAssedicParUrssaf = $exclureCotAssedicParUrssaf;
        return $this;
    }

    /**
     * Set the exclure das.
     *
     * @param bool $exclureDas The exclure das.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureDas($exclureDas) {
        $this->exclureDas = $exclureDas;
        return $this;
    }

    /**
     * Set the exclure dsn.
     *
     * @param bool $exclureDsn The exclure dsn.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureDsn($exclureDsn) {
        $this->exclureDsn = $exclureDsn;
        return $this;
    }

    /**
     * Set the exclure lfr2012.
     *
     * @param string $exclureLfr2012 The exclure lfr2012.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLfr2012($exclureLfr2012) {
        $this->exclureLfr2012 = $exclureLfr2012;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool $exclureLoiTepa The exclure loi tepa.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepa($exclureLoiTepa) {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exclure loi tepa part p.
     *
     * @param bool $exclureLoiTepaPartP The exclure loi tepa part p.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepaPartP($exclureLoiTepaPartP) {
        $this->exclureLoiTepaPartP = $exclureLoiTepaPartP;
        return $this;
    }

    /**
     * Set the exclure loi tepa part s.
     *
     * @param bool $exclureLoiTepaPartS The exclure loi tepa part s.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureLoiTepaPartS($exclureLoiTepaPartS) {
        $this->exclureLoiTepaPartS = $exclureLoiTepaPartS;
        return $this;
    }

    /**
     * Set the exclure qgc.
     *
     * @param bool $exclureQgc The exclure qgc.
     * @return Employes2 Returns this Employes2.
     */
    public function setExclureQgc($exclureQgc) {
        $this->exclureQgc = $exclureQgc;
        return $this;
    }

    /**
     * Set the exo accre17.
     *
     * @param bool $exoAccre17 The exo accre17.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoAccre17($exoAccre17) {
        $this->exoAccre17 = $exoAccre17;
        return $this;
    }

    /**
     * Set the exo agff.
     *
     * @param bool $exoAgff The exo agff.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoAgff($exoAgff) {
        $this->exoAgff = $exoAgff;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool $exoOccasionnelMsa The exo occasionnel msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoOccasionnelMsa($exoOccasionnelMsa) {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool $exoProfessionnalisation The exo professionnalisation.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoProfessionnalisation($exoProfessionnalisation) {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param bool $exoSpecif The exo specif.
     * @return Employes2 Returns this Employes2.
     */
    public function setExoSpecif($exoSpecif) {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool $forfaitHeure The forfait heure.
     * @return Employes2 Returns this Employes2.
     */
    public function setForfaitHeure($forfaitHeure) {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the forfait jour.
     *
     * @param bool $forfaitJour The forfait jour.
     * @return Employes2 Returns this Employes2.
     */
    public function setForfaitJour($forfaitJour) {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }

    /**
     * Set the gestion compteur h completer.
     *
     * @param bool $gestionCompteurHCompleter The gestion compteur h completer.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionCompteurHCompleter($gestionCompteurHCompleter) {
        $this->gestionCompteurHCompleter = $gestionCompteurHCompleter;
        return $this;
    }

    /**
     * Set the gestion cp.
     *
     * @param string $gestionCp The gestion cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionCp($gestionCp) {
        $this->gestionCp = $gestionCp;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool $gestionMailBulletin The gestion mail bulletin.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param string $gestionReposComp The gestion repos comp.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposComp($gestionReposComp) {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param string $gestionReposRecup The gestion repos recup.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposRecup($gestionReposRecup) {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param string $gestionReposRemplace The gestion repos remplace.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionReposRemplace($gestionReposRemplace) {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param string $gestionRtt The gestion rtt.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionRtt($gestionRtt) {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the gestion sem type.
     *
     * @param string $gestionSemType The gestion sem type.
     * @return Employes2 Returns this Employes2.
     */
    public function setGestionSemType($gestionSemType) {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }

    /**
     * Set the heures periode initial.
     *
     * @param float $heuresPeriodeInitial The heures periode initial.
     * @return Employes2 Returns this Employes2.
     */
    public function setHeuresPeriodeInitial($heuresPeriodeInitial) {
        $this->heuresPeriodeInitial = $heuresPeriodeInitial;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     * @return Employes2 Returns this Employes2.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the indem cp msa.
     *
     * @param bool $indemCpMsa The indem cp msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setIndemCpMsa($indemCpMsa) {
        $this->indemCpMsa = $indemCpMsa;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return Employes2 Returns this Employes2.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the inspecteur.
     *
     * @param bool $inspecteur The inspecteur.
     * @return Employes2 Returns this Employes2.
     */
    public function setInspecteur($inspecteur) {
        $this->inspecteur = $inspecteur;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool $interimIndemCpFillon The interim indem cp fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setInterimIndemCpFillon($interimIndemCpFillon) {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the mail bulletin pwd.
     *
     * @param string $mailBulletinPwd The mail bulletin pwd.
     * @return Employes2 Returns this Employes2.
     */
    public function setMailBulletinPwd($mailBulletinPwd) {
        $this->mailBulletinPwd = $mailBulletinPwd;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param string $maintienIntervientCp The maintien intervient cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien net deduc csgijss.
     *
     * @param bool $maintienNetDeducCsgijss The maintien net deduc csgijss.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienNetDeducCsgijss($maintienNetDeducCsgijss) {
        $this->maintienNetDeducCsgijss = $maintienNetDeducCsgijss;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param string $maintienSalaire The maintien salaire.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the maintien specifique.
     *
     * @param bool $maintienSpecifique The maintien specifique.
     * @return Employes2 Returns this Employes2.
     */
    public function setMaintienSpecifique($maintienSpecifique) {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }

    /**
     * Set the majo professionnalisation.
     *
     * @param bool $majoProfessionnalisation The majo professionnalisation.
     * @return Employes2 Returns this Employes2.
     */
    public function setMajoProfessionnalisation($majoProfessionnalisation) {
        $this->majoProfessionnalisation = $majoProfessionnalisation;
        return $this;
    }

    /**
     * Set the mandataire social.
     *
     * @param bool $mandataireSocial The mandataire social.
     * @return Employes2 Returns this Employes2.
     */
    public function setMandataireSocial($mandataireSocial) {
        $this->mandataireSocial = $mandataireSocial;
        return $this;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string $modeleBulletin The modele bulletin.
     * @return Employes2 Returns this Employes2.
     */
    public function setModeleBulletin($modeleBulletin) {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }

    /**
     * Set the mois cloture dif.
     *
     * @param string $moisClotureDif The mois cloture dif.
     * @return Employes2 Returns this Employes2.
     */
    public function setMoisClotureDif($moisClotureDif) {
        $this->moisClotureDif = $moisClotureDif;
        return $this;
    }

    /**
     * Set the motif cdd.
     *
     * @param string $motifCdd The motif cdd.
     * @return Employes2 Returns this Employes2.
     */
    public function setMotifCdd($motifCdd) {
        $this->motifCdd = $motifCdd;
        return $this;
    }

    /**
     * Set the motif exclusion dsn.
     *
     * @param string $motifExclusionDsn The motif exclusion dsn.
     * @return Employes2 Returns this Employes2.
     */
    public function setMotifExclusionDsn($motifExclusionDsn) {
        $this->motifExclusionDsn = $motifExclusionDsn;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool $multiEmployeur The multi employeur.
     * @return Employes2 Returns this Employes2.
     */
    public function setMultiEmployeur($multiEmployeur) {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return Employes2 Returns this Employes2.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float $nbHBonifie The nb h bonifie.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHBonifie($nbHBonifie) {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float $nbHContingent The nb h contingent.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHContingent($nbHContingent) {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float $nbHJour1 The nb h jour1.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour1($nbHJour1) {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float $nbHJour2 The nb h jour2.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour2($nbHJour2) {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float $nbHJour3 The nb h jour3.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour3($nbHJour3) {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float $nbHJour4 The nb h jour4.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour4($nbHJour4) {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float $nbHJour5 The nb h jour5.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour5($nbHJour5) {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float $nbHJour6 The nb h jour6.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour6($nbHJour6) {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float $nbHJour7 The nb h jour7.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbHJour7($nbHJour7) {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float $nbJourAnnee The nb jour annee.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourAnnee($nbJourAnnee) {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float $nbJourCpSup The nb jour cp sup.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbJourCpSup($nbJourCpSup) {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string $nbPieceLogement The nb piece logement.
     * @return Employes2 Returns this Employes2.
     */
    public function setNbPieceLogement($nbPieceLogement) {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return Employes2 Returns this Employes2.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return Employes2 Returns this Employes2.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string $nomVilleInsee The nom ville insee.
     * @return Employes2 Returns this Employes2.
     */
    public function setNomVilleInsee($nomVilleInsee) {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat msa.
     *
     * @param int $numeroAbattementContratMsa The numero abattement contrat msa.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroAbattementContratMsa($numeroAbattementContratMsa) {
        $this->numeroAbattementContratMsa = $numeroAbattementContratMsa;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int $numeroContrat The numero contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroContrat($numeroContrat) {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero employe contrat.
     *
     * @param string $numeroEmployeContrat The numero employe contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setNumeroEmployeContrat($numeroEmployeContrat) {
        $this->numeroEmployeContrat = $numeroEmployeContrat;
        return $this;
    }

    /**
     * Set the pas gestion dif.
     *
     * @param bool $pasGestionDif The pas gestion dif.
     * @return Employes2 Returns this Employes2.
     */
    public function setPasGestionDif($pasGestionDif) {
        $this->pasGestionDif = $pasGestionDif;
        return $this;
    }

    /**
     * Set the pays naissance.
     *
     * @param string $paysNaissance The pays naissance.
     * @return Employes2 Returns this Employes2.
     */
    public function setPaysNaissance($paysNaissance) {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the pays nat.
     *
     * @param string $paysNat The pays nat.
     * @return Employes2 Returns this Employes2.
     */
    public function setPaysNat($paysNat) {
        $this->paysNat = $paysNat;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime|null $periodePointageCloturee The periode pointage cloturee.
     * @return Employes2 Returns this Employes2.
     */
    public function setPeriodePointageCloturee(DateTime $periodePointageCloturee = null) {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return Employes2 Returns this Employes2.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     * @return Employes2 Returns this Employes2.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the rbt navigo non proratise.
     *
     * @param bool $rbtNavigoNonProratise The rbt navigo non proratise.
     * @return Employes2 Returns this Employes2.
     */
    public function setRbtNavigoNonProratise($rbtNavigoNonProratise) {
        $this->rbtNavigoNonProratise = $rbtNavigoNonProratise;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param string $reductionFillon The reduction fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param string $reductionMayotte The reduction mayotte.
     * @return Employes2 Returns this Employes2.
     */
    public function setReductionMayotte($reductionMayotte) {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool $remunPartFillon The remun part fillon.
     * @return Employes2 Returns this Employes2.
     */
    public function setRemunPartFillon($remunPartFillon) {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float $rtt1 The rtt1.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt1($rtt1) {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float $rtt10 The rtt10.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt10($rtt10) {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float $rtt11 The rtt11.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt11($rtt11) {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float $rtt12 The rtt12.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt12($rtt12) {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float $rtt2 The rtt2.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt2($rtt2) {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float $rtt3 The rtt3.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt3($rtt3) {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float $rtt4 The rtt4.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt4($rtt4) {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float $rtt5 The rtt5.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt5($rtt5) {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float $rtt6 The rtt6.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt6($rtt6) {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float $rtt7 The rtt7.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt7($rtt7) {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float $rtt8 The rtt8.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt8($rtt8) {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float $rtt9 The rtt9.
     * @return Employes2 Returns this Employes2.
     */
    public function setRtt9($rtt9) {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int $sansContrat The sans contrat.
     * @return Employes2 Returns this Employes2.
     */
    public function setSansContrat($sansContrat) {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param string $subrogation The subrogation.
     * @return Employes2 Returns this Employes2.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     * @return Employes2 Returns this Employes2.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float $tdsAllocChom The tds alloc chom.
     * @return Employes2 Returns this Employes2.
     */
    public function setTdsAllocChom($tdsAllocChom) {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     * @return Employes2 Returns this Employes2.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return Employes2 Returns this Employes2.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the travailleur de nuit.
     *
     * @param bool $travailleurDeNuit The travailleur de nuit.
     * @return Employes2 Returns this Employes2.
     */
    public function setTravailleurDeNuit($travailleurDeNuit) {
        $this->travailleurDeNuit = $travailleurDeNuit;
        return $this;
    }

    /**
     * Set the type abo navigo.
     *
     * @param string $typeAboNavigo The type abo navigo.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeAboNavigo($typeAboNavigo) {
        $this->typeAboNavigo = $typeAboNavigo;
        return $this;
    }

    /**
     * Set the type exo lodeom.
     *
     * @param string $typeExoLodeom The type exo lodeom.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeExoLodeom($typeExoLodeom) {
        $this->typeExoLodeom = $typeExoLodeom;
        return $this;
    }

    /**
     * Set the type intemperie btp.
     *
     * @param string $typeIntemperieBtp The type intemperie btp.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeIntemperieBtp($typeIntemperieBtp) {
        $this->typeIntemperieBtp = $typeIntemperieBtp;
        return $this;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string $typeMaintienBrutNet The type maintien brut net.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeMaintienBrutNet($typeMaintienBrutNet) {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     * @return Employes2 Returns this Employes2.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the zone navigo.
     *
     * @param string $zoneNavigo The zone navigo.
     * @return Employes2 Returns this Employes2.
     */
    public function setZoneNavigo($zoneNavigo) {
        $this->zoneNavigo = $zoneNavigo;
        return $this;
    }
}
