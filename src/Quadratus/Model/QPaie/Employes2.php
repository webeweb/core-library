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

use DateTime;

/**
 * Employes2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Employes2 {

    /**
     * A declarer c p.
     *
     * @var boolean
     */
    private $aDeclarerCP;

    /**
     * A e n logement.
     *
     * @var boolean
     */
    private $aENLogement;

    /**
     * Active s m i c.
     *
     * @var boolean
     */
    private $activeSMIC;

    /**
     * Active sal min conv.
     *
     * @var boolean
     */
    private $activeSalMinConv;

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
     * B i c.
     *
     * @var string
     */
    private $bIC;

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
     * @var boolean
     */
    private $chefEquipe;

    /**
     * Cie plus50.
     *
     * @var boolean
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
     * @var boolean
     */
    private $commercial;

    /**
     * Complement p c s.
     *
     * @var string
     */
    private $complementPCS;

    /**
     * Conjoint exploitant.
     *
     * @var boolean
     */
    private $conjointExploitant;

    /**
     * Contrat c n e.
     *
     * @var boolean
     */
    private $contratCNE;

    /**
     * Cotis base penibilite.
     *
     * @var boolean
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
     * Cum brutal sans s i.
     *
     * @var float
     */
    private $cumBrutalSansSI;

    /**
     * Cum d i f dus.
     *
     * @var float
     */
    private $cumDIFDus;

    /**
     * Cum d i f dus_1.
     *
     * @var float
     */
    private $cumDIFDus_1;

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
     * Cum tot s i.
     *
     * @var float
     */
    private $cumTotSI;

    /**
     * Cum tranche2 s i.
     *
     * @var float
     */
    private $cumTranche2SI;

    /**
     * Cum tranche2 sans s i.
     *
     * @var float
     */
    private $cumTranche2SansSI;

    /**
     * Cum tranche a s i.
     *
     * @var float
     */
    private $cumTrancheASI;

    /**
     * Cum tranche a sans s i.
     *
     * @var float
     */
    private $cumTrancheASansSI;

    /**
     * Cum tranche b s i.
     *
     * @var float
     */
    private $cumTrancheBSI;

    /**
     * Cum tranche b sans s i.
     *
     * @var float
     */
    private $cumTrancheBSansSI;

    /**
     * Cum tranche c s i.
     *
     * @var float
     */
    private $cumTrancheCSI;

    /**
     * Cum tranche c sans s i.
     *
     * @var float
     */
    private $cumTrancheCSansSI;

    /**
     * Cum tranche d1 sans s i.
     *
     * @var float
     */
    private $cumTrancheD1SansSI;

    /**
     * Cum tranche d sans s i.
     *
     * @var float
     */
    private $cumTrancheDSansSI;

    /**
     * D a d s u conjoint salarie.
     *
     * @var string
     */
    private $dADSUConjointSalarie;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date fin exclure l f r2012.
     *
     * @var DateTime
     */
    private $dateFinExclureLFR2012;

    /**
     * Date fin portabilite.
     *
     * @var DateTime
     */
    private $dateFinPortabilite;

    /**
     * Date passage c d i.
     *
     * @var DateTime
     */
    private $datePassageCDI;

    /**
     * Date renouv c d d.
     *
     * @var DateTime
     */
    private $dateRenouvCDD;

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
     * Exclure c i c e.
     *
     * @var boolean
     */
    private $exclureCICE;

    /**
     * Exclure chom c d d.
     *
     * @var boolean
     */
    private $exclureChomCDD;

    /**
     * Exclure cospar.
     *
     * @var boolean
     */
    private $exclureCospar;

    /**
     * Exclure cot assedic par urssaf.
     *
     * @var boolean
     */
    private $exclureCotAssedicParUrssaf;

    /**
     * Exclure d a s.
     *
     * @var boolean
     */
    private $exclureDAS;

    /**
     * Exclure d s n.
     *
     * @var boolean
     */
    private $exclureDSN;

    /**
     * Exclure l f r2012.
     *
     * @var string
     */
    private $exclureLFR2012;

    /**
     * Exclure loi t e p a.
     *
     * @var boolean
     */
    private $exclureLoiTEPA;

    /**
     * Exclure loi t e p a part p.
     *
     * @var boolean
     */
    private $exclureLoiTEPAPartP;

    /**
     * Exclure loi t e p a part s.
     *
     * @var boolean
     */
    private $exclureLoiTEPAPartS;

    /**
     * Exclure q g c.
     *
     * @var boolean
     */
    private $exclureQGC;

    /**
     * Exo a c c r e17.
     *
     * @var boolean
     */
    private $exoACCRE17;

    /**
     * Exo a g f f.
     *
     * @var boolean
     */
    private $exoAGFF;

    /**
     * Exo occasionnel m s a.
     *
     * @var boolean
     */
    private $exoOccasionnelMSA;

    /**
     * Exo professionnalisation.
     *
     * @var boolean
     */
    private $exoProfessionnalisation;

    /**
     * Exo specif.
     *
     * @var boolean
     */
    private $exoSpecif;

    /**
     * Forfait heure.
     *
     * @var boolean
     */
    private $forfaitHeure;

    /**
     * Forfait jour.
     *
     * @var boolean
     */
    private $forfaitJour;

    /**
     * Gestion c p.
     *
     * @var string
     */
    private $gestionCP;

    /**
     * Gestion compteur h completer.
     *
     * @var boolean
     */
    private $gestionCompteurHCompleter;

    /**
     * Gestion mail bulletin.
     *
     * @var boolean
     */
    private $gestionMailBulletin;

    /**
     * Gestion r t t.
     *
     * @var string
     */
    private $gestionRTT;

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
     * I b a n.
     *
     * @var string
     */
    private $iBAN;

    /**
     * Indem cp m s a.
     *
     * @var boolean
     */
    private $indemCpMSA;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Inspecteur.
     *
     * @var boolean
     */
    private $inspecteur;

    /**
     * Interim indem cp fillon.
     *
     * @var boolean
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
     * Maintien net deduc c s g i j s s.
     *
     * @var boolean
     */
    private $maintienNetDeducCSGIJSS;

    /**
     * Maintien salaire.
     *
     * @var string
     */
    private $maintienSalaire;

    /**
     * Maintien specifique.
     *
     * @var boolean
     */
    private $maintienSpecifique;

    /**
     * Majo professionnalisation.
     *
     * @var boolean
     */
    private $majoProfessionnalisation;

    /**
     * Mandataire social.
     *
     * @var boolean
     */
    private $mandataireSocial;

    /**
     * Modele bulletin.
     *
     * @var string
     */
    private $modeleBulletin;

    /**
     * Mois cloture d i f.
     *
     * @var string
     */
    private $moisClotureDIF;

    /**
     * Motif c d d.
     *
     * @var string
     */
    private $motifCDD;

    /**
     * Motif exclusion d s n.
     *
     * @var string
     */
    private $motifExclusionDSN;

    /**
     * Multi employeur.
     *
     * @var boolean
     */
    private $multiEmployeur;

    /**
     * N b jour cp acquis.
     *
     * @var float
     */
    private $nBJourCpAcquis;

    /**
     * N b jour cp sup.
     *
     * @var float
     */
    private $nBJourCpSup;

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
     * Nb piece logement.
     *
     * @var string
     */
    private $nbPieceLogement;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var boolean
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
     * Numero abattement contrat m s a.
     *
     * @var int
     */
    private $numeroAbattementContratMSA;

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
     * Pas gestion d i f.
     *
     * @var boolean
     */
    private $pasGestionDIF;

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
     * @var DateTime
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
     * R t t1.
     *
     * @var float
     */
    private $rTT1;

    /**
     * R t t10.
     *
     * @var float
     */
    private $rTT10;

    /**
     * R t t11.
     *
     * @var float
     */
    private $rTT11;

    /**
     * R t t12.
     *
     * @var float
     */
    private $rTT12;

    /**
     * R t t2.
     *
     * @var float
     */
    private $rTT2;

    /**
     * R t t3.
     *
     * @var float
     */
    private $rTT3;

    /**
     * R t t4.
     *
     * @var float
     */
    private $rTT4;

    /**
     * R t t5.
     *
     * @var float
     */
    private $rTT5;

    /**
     * R t t6.
     *
     * @var float
     */
    private $rTT6;

    /**
     * R t t7.
     *
     * @var float
     */
    private $rTT7;

    /**
     * R t t8.
     *
     * @var float
     */
    private $rTT8;

    /**
     * R t t9.
     *
     * @var float
     */
    private $rTT9;

    /**
     * Rbt navigo non proratise.
     *
     * @var boolean
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
     * @var boolean
     */
    private $remunPartFillon;

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
     * @var boolean
     */
    private $travailleurDeNuit;

    /**
     * Type abo navigo.
     *
     * @var string
     */
    private $typeAboNavigo;

    /**
     * Type exo l o d e o m.
     *
     * @var string
     */
    private $typeExoLODEOM;

    /**
     * Type intemperie b t p.
     *
     * @var string
     */
    private $typeIntemperieBTP;

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
     * Get the a declarer c p.
     *
     * @return boolean Returns the a declarer c p.
     */
    public function getADeclarerCP() {
        return $this->aDeclarerCP;
    }

    /**
     * Get the a e n logement.
     *
     * @return boolean Returns the a e n logement.
     */
    public function getAENLogement() {
        return $this->aENLogement;
    }

    /**
     * Get the active s m i c.
     *
     * @return boolean Returns the active s m i c.
     */
    public function getActiveSMIC() {
        return $this->activeSMIC;
    }

    /**
     * Get the active sal min conv.
     *
     * @return boolean Returns the active sal min conv.
     */
    public function getActiveSalMinConv() {
        return $this->activeSalMinConv;
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
     * Get the b i c.
     *
     * @return string Returns the b i c.
     */
    public function getBIC() {
        return $this->bIC;
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
     * @return boolean Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
    }

    /**
     * Get the cie plus50.
     *
     * @return boolean Returns the cie plus50.
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
     * @return boolean Returns the commercial.
     */
    public function getCommercial() {
        return $this->commercial;
    }

    /**
     * Get the complement p c s.
     *
     * @return string Returns the complement p c s.
     */
    public function getComplementPCS() {
        return $this->complementPCS;
    }

    /**
     * Get the conjoint exploitant.
     *
     * @return boolean Returns the conjoint exploitant.
     */
    public function getConjointExploitant() {
        return $this->conjointExploitant;
    }

    /**
     * Get the contrat c n e.
     *
     * @return boolean Returns the contrat c n e.
     */
    public function getContratCNE() {
        return $this->contratCNE;
    }

    /**
     * Get the cotis base penibilite.
     *
     * @return boolean Returns the cotis base penibilite.
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
     * Get the cum brutal sans s i.
     *
     * @return float Returns the cum brutal sans s i.
     */
    public function getCumBrutalSansSI() {
        return $this->cumBrutalSansSI;
    }

    /**
     * Get the cum d i f dus.
     *
     * @return float Returns the cum d i f dus.
     */
    public function getCumDIFDus() {
        return $this->cumDIFDus;
    }

    /**
     * Get the cum d i f dus_1.
     *
     * @return float Returns the cum d i f dus_1.
     */
    public function getCumDIFDus_1() {
        return $this->cumDIFDus_1;
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
     * Get the cum tot s i.
     *
     * @return float Returns the cum tot s i.
     */
    public function getCumTotSI() {
        return $this->cumTotSI;
    }

    /**
     * Get the cum tranche2 s i.
     *
     * @return float Returns the cum tranche2 s i.
     */
    public function getCumTranche2SI() {
        return $this->cumTranche2SI;
    }

    /**
     * Get the cum tranche2 sans s i.
     *
     * @return float Returns the cum tranche2 sans s i.
     */
    public function getCumTranche2SansSI() {
        return $this->cumTranche2SansSI;
    }

    /**
     * Get the cum tranche a s i.
     *
     * @return float Returns the cum tranche a s i.
     */
    public function getCumTrancheASI() {
        return $this->cumTrancheASI;
    }

    /**
     * Get the cum tranche a sans s i.
     *
     * @return float Returns the cum tranche a sans s i.
     */
    public function getCumTrancheASansSI() {
        return $this->cumTrancheASansSI;
    }

    /**
     * Get the cum tranche b s i.
     *
     * @return float Returns the cum tranche b s i.
     */
    public function getCumTrancheBSI() {
        return $this->cumTrancheBSI;
    }

    /**
     * Get the cum tranche b sans s i.
     *
     * @return float Returns the cum tranche b sans s i.
     */
    public function getCumTrancheBSansSI() {
        return $this->cumTrancheBSansSI;
    }

    /**
     * Get the cum tranche c s i.
     *
     * @return float Returns the cum tranche c s i.
     */
    public function getCumTrancheCSI() {
        return $this->cumTrancheCSI;
    }

    /**
     * Get the cum tranche c sans s i.
     *
     * @return float Returns the cum tranche c sans s i.
     */
    public function getCumTrancheCSansSI() {
        return $this->cumTrancheCSansSI;
    }

    /**
     * Get the cum tranche d1 sans s i.
     *
     * @return float Returns the cum tranche d1 sans s i.
     */
    public function getCumTrancheD1SansSI() {
        return $this->cumTrancheD1SansSI;
    }

    /**
     * Get the cum tranche d sans s i.
     *
     * @return float Returns the cum tranche d sans s i.
     */
    public function getCumTrancheDSansSI() {
        return $this->cumTrancheDSansSI;
    }

    /**
     * Get the d a d s u conjoint salarie.
     *
     * @return string Returns the d a d s u conjoint salarie.
     */
    public function getDADSUConjointSalarie() {
        return $this->dADSUConjointSalarie;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date fin exclure l f r2012.
     *
     * @return DateTime Returns the date fin exclure l f r2012.
     */
    public function getDateFinExclureLFR2012() {
        return $this->dateFinExclureLFR2012;
    }

    /**
     * Get the date fin portabilite.
     *
     * @return DateTime Returns the date fin portabilite.
     */
    public function getDateFinPortabilite() {
        return $this->dateFinPortabilite;
    }

    /**
     * Get the date passage c d i.
     *
     * @return DateTime Returns the date passage c d i.
     */
    public function getDatePassageCDI() {
        return $this->datePassageCDI;
    }

    /**
     * Get the date renouv c d d.
     *
     * @return DateTime Returns the date renouv c d d.
     */
    public function getDateRenouvCDD() {
        return $this->dateRenouvCDD;
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
     * Get the exclure c i c e.
     *
     * @return boolean Returns the exclure c i c e.
     */
    public function getExclureCICE() {
        return $this->exclureCICE;
    }

    /**
     * Get the exclure chom c d d.
     *
     * @return boolean Returns the exclure chom c d d.
     */
    public function getExclureChomCDD() {
        return $this->exclureChomCDD;
    }

    /**
     * Get the exclure cospar.
     *
     * @return boolean Returns the exclure cospar.
     */
    public function getExclureCospar() {
        return $this->exclureCospar;
    }

    /**
     * Get the exclure cot assedic par urssaf.
     *
     * @return boolean Returns the exclure cot assedic par urssaf.
     */
    public function getExclureCotAssedicParUrssaf() {
        return $this->exclureCotAssedicParUrssaf;
    }

    /**
     * Get the exclure d a s.
     *
     * @return boolean Returns the exclure d a s.
     */
    public function getExclureDAS() {
        return $this->exclureDAS;
    }

    /**
     * Get the exclure d s n.
     *
     * @return boolean Returns the exclure d s n.
     */
    public function getExclureDSN() {
        return $this->exclureDSN;
    }

    /**
     * Get the exclure l f r2012.
     *
     * @return string Returns the exclure l f r2012.
     */
    public function getExclureLFR2012() {
        return $this->exclureLFR2012;
    }

    /**
     * Get the exclure loi t e p a.
     *
     * @return boolean Returns the exclure loi t e p a.
     */
    public function getExclureLoiTEPA() {
        return $this->exclureLoiTEPA;
    }

    /**
     * Get the exclure loi t e p a part p.
     *
     * @return boolean Returns the exclure loi t e p a part p.
     */
    public function getExclureLoiTEPAPartP() {
        return $this->exclureLoiTEPAPartP;
    }

    /**
     * Get the exclure loi t e p a part s.
     *
     * @return boolean Returns the exclure loi t e p a part s.
     */
    public function getExclureLoiTEPAPartS() {
        return $this->exclureLoiTEPAPartS;
    }

    /**
     * Get the exclure q g c.
     *
     * @return boolean Returns the exclure q g c.
     */
    public function getExclureQGC() {
        return $this->exclureQGC;
    }

    /**
     * Get the exo a c c r e17.
     *
     * @return boolean Returns the exo a c c r e17.
     */
    public function getExoACCRE17() {
        return $this->exoACCRE17;
    }

    /**
     * Get the exo a g f f.
     *
     * @return boolean Returns the exo a g f f.
     */
    public function getExoAGFF() {
        return $this->exoAGFF;
    }

    /**
     * Get the exo occasionnel m s a.
     *
     * @return boolean Returns the exo occasionnel m s a.
     */
    public function getExoOccasionnelMSA() {
        return $this->exoOccasionnelMSA;
    }

    /**
     * Get the exo professionnalisation.
     *
     * @return boolean Returns the exo professionnalisation.
     */
    public function getExoProfessionnalisation() {
        return $this->exoProfessionnalisation;
    }

    /**
     * Get the exo specif.
     *
     * @return boolean Returns the exo specif.
     */
    public function getExoSpecif() {
        return $this->exoSpecif;
    }

    /**
     * Get the forfait heure.
     *
     * @return boolean Returns the forfait heure.
     */
    public function getForfaitHeure() {
        return $this->forfaitHeure;
    }

    /**
     * Get the forfait jour.
     *
     * @return boolean Returns the forfait jour.
     */
    public function getForfaitJour() {
        return $this->forfaitJour;
    }

    /**
     * Get the gestion c p.
     *
     * @return string Returns the gestion c p.
     */
    public function getGestionCP() {
        return $this->gestionCP;
    }

    /**
     * Get the gestion compteur h completer.
     *
     * @return boolean Returns the gestion compteur h completer.
     */
    public function getGestionCompteurHCompleter() {
        return $this->gestionCompteurHCompleter;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return boolean Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin() {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the gestion r t t.
     *
     * @return string Returns the gestion r t t.
     */
    public function getGestionRTT() {
        return $this->gestionRTT;
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
     * Get the i b a n.
     *
     * @return string Returns the i b a n.
     */
    public function getIBAN() {
        return $this->iBAN;
    }

    /**
     * Get the indem cp m s a.
     *
     * @return boolean Returns the indem cp m s a.
     */
    public function getIndemCpMSA() {
        return $this->indemCpMSA;
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
     * @return boolean Returns the inspecteur.
     */
    public function getInspecteur() {
        return $this->inspecteur;
    }

    /**
     * Get the interim indem cp fillon.
     *
     * @return boolean Returns the interim indem cp fillon.
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
     * Get the maintien net deduc c s g i j s s.
     *
     * @return boolean Returns the maintien net deduc c s g i j s s.
     */
    public function getMaintienNetDeducCSGIJSS() {
        return $this->maintienNetDeducCSGIJSS;
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
     * @return boolean Returns the maintien specifique.
     */
    public function getMaintienSpecifique() {
        return $this->maintienSpecifique;
    }

    /**
     * Get the majo professionnalisation.
     *
     * @return boolean Returns the majo professionnalisation.
     */
    public function getMajoProfessionnalisation() {
        return $this->majoProfessionnalisation;
    }

    /**
     * Get the mandataire social.
     *
     * @return boolean Returns the mandataire social.
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
     * Get the mois cloture d i f.
     *
     * @return string Returns the mois cloture d i f.
     */
    public function getMoisClotureDIF() {
        return $this->moisClotureDIF;
    }

    /**
     * Get the motif c d d.
     *
     * @return string Returns the motif c d d.
     */
    public function getMotifCDD() {
        return $this->motifCDD;
    }

    /**
     * Get the motif exclusion d s n.
     *
     * @return string Returns the motif exclusion d s n.
     */
    public function getMotifExclusionDSN() {
        return $this->motifExclusionDSN;
    }

    /**
     * Get the multi employeur.
     *
     * @return boolean Returns the multi employeur.
     */
    public function getMultiEmployeur() {
        return $this->multiEmployeur;
    }

    /**
     * Get the n b jour cp acquis.
     *
     * @return float Returns the n b jour cp acquis.
     */
    public function getNBJourCpAcquis() {
        return $this->nBJourCpAcquis;
    }

    /**
     * Get the n b jour cp sup.
     *
     * @return float Returns the n b jour cp sup.
     */
    public function getNBJourCpSup() {
        return $this->nBJourCpSup;
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
     * @return boolean Returns the ne pas activer prime annuelle proprete.
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
     * Get the numero abattement contrat m s a.
     *
     * @return int Returns the numero abattement contrat m s a.
     */
    public function getNumeroAbattementContratMSA() {
        return $this->numeroAbattementContratMSA;
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
     * Get the pas gestion d i f.
     *
     * @return boolean Returns the pas gestion d i f.
     */
    public function getPasGestionDIF() {
        return $this->pasGestionDIF;
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
     * @return DateTime Returns the periode pointage cloturee.
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
     * Get the r t t1.
     *
     * @return float Returns the r t t1.
     */
    public function getRTT1() {
        return $this->rTT1;
    }

    /**
     * Get the r t t10.
     *
     * @return float Returns the r t t10.
     */
    public function getRTT10() {
        return $this->rTT10;
    }

    /**
     * Get the r t t11.
     *
     * @return float Returns the r t t11.
     */
    public function getRTT11() {
        return $this->rTT11;
    }

    /**
     * Get the r t t12.
     *
     * @return float Returns the r t t12.
     */
    public function getRTT12() {
        return $this->rTT12;
    }

    /**
     * Get the r t t2.
     *
     * @return float Returns the r t t2.
     */
    public function getRTT2() {
        return $this->rTT2;
    }

    /**
     * Get the r t t3.
     *
     * @return float Returns the r t t3.
     */
    public function getRTT3() {
        return $this->rTT3;
    }

    /**
     * Get the r t t4.
     *
     * @return float Returns the r t t4.
     */
    public function getRTT4() {
        return $this->rTT4;
    }

    /**
     * Get the r t t5.
     *
     * @return float Returns the r t t5.
     */
    public function getRTT5() {
        return $this->rTT5;
    }

    /**
     * Get the r t t6.
     *
     * @return float Returns the r t t6.
     */
    public function getRTT6() {
        return $this->rTT6;
    }

    /**
     * Get the r t t7.
     *
     * @return float Returns the r t t7.
     */
    public function getRTT7() {
        return $this->rTT7;
    }

    /**
     * Get the r t t8.
     *
     * @return float Returns the r t t8.
     */
    public function getRTT8() {
        return $this->rTT8;
    }

    /**
     * Get the r t t9.
     *
     * @return float Returns the r t t9.
     */
    public function getRTT9() {
        return $this->rTT9;
    }

    /**
     * Get the rbt navigo non proratise.
     *
     * @return boolean Returns the rbt navigo non proratise.
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
     * @return boolean Returns the remun part fillon.
     */
    public function getRemunPartFillon() {
        return $this->remunPartFillon;
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
     * @return boolean Returns the travailleur de nuit.
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
     * Get the type exo l o d e o m.
     *
     * @return string Returns the type exo l o d e o m.
     */
    public function getTypeExoLODEOM() {
        return $this->typeExoLODEOM;
    }

    /**
     * Get the type intemperie b t p.
     *
     * @return string Returns the type intemperie b t p.
     */
    public function getTypeIntemperieBTP() {
        return $this->typeIntemperieBTP;
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
     * Set the a declarer c p.
     *
     * @param boolean $aDeclarerCP The a declarer c p.
     * @return Employes2 Returns this employes2.
     */
    public function setADeclarerCP($aDeclarerCP) {
        $this->aDeclarerCP = $aDeclarerCP;
        return $this;
    }

    /**
     * Set the a e n logement.
     *
     * @param boolean $aENLogement The a e n logement.
     * @return Employes2 Returns this employes2.
     */
    public function setAENLogement($aENLogement) {
        $this->aENLogement = $aENLogement;
        return $this;
    }

    /**
     * Set the active s m i c.
     *
     * @param boolean $activeSMIC The active s m i c.
     * @return Employes2 Returns this employes2.
     */
    public function setActiveSMIC($activeSMIC) {
        $this->activeSMIC = $activeSMIC;
        return $this;
    }

    /**
     * Set the active sal min conv.
     *
     * @param boolean $activeSalMinConv The active sal min conv.
     * @return Employes2 Returns this employes2.
     */
    public function setActiveSalMinConv($activeSalMinConv) {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string $allegParticulierEmp The alleg particulier emp.
     * @return Employes2 Returns this employes2.
     */
    public function setAllegParticulierEmp($allegParticulierEmp) {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     * @return Employes2 Returns this employes2.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string $autreAllegEmp The autre alleg emp.
     * @return Employes2 Returns this employes2.
     */
    public function setAutreAllegEmp($autreAllegEmp) {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the b i c.
     *
     * @param string $bIC The b i c.
     * @return Employes2 Returns this employes2.
     */
    public function setBIC($bIC) {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param string $caisseCp The caisse cp.
     * @return Employes2 Returns this employes2.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return Employes2 Returns this employes2.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param boolean $chefEquipe The chef equipe.
     * @return Employes2 Returns this employes2.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the cie plus50.
     *
     * @param boolean $ciePlus50 The cie plus50.
     * @return Employes2 Returns this employes2.
     */
    public function setCiePlus50($ciePlus50) {
        $this->ciePlus50 = $ciePlus50;
        return $this;
    }

    /**
     * Set the code analytique proprete.
     *
     * @param string $codeAnalytiqueProprete The code analytique proprete.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeAnalytiqueProprete($codeAnalytiqueProprete) {
        $this->codeAnalytiqueProprete = $codeAnalytiqueProprete;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string $codeEmpRemplace The code emp remplace.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeEmpRemplace($codeEmpRemplace) {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code motif rupture1.
     *
     * @param string $codeMotifRupture1 The code motif rupture1.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeMotifRupture1($codeMotifRupture1) {
        $this->codeMotifRupture1 = $codeMotifRupture1;
        return $this;
    }

    /**
     * Set the code motif rupture2.
     *
     * @param string $codeMotifRupture2 The code motif rupture2.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeMotifRupture2($codeMotifRupture2) {
        $this->codeMotifRupture2 = $codeMotifRupture2;
        return $this;
    }

    /**
     * Set the code pays residence.
     *
     * @param string $codePaysResidence The code pays residence.
     * @return Employes2 Returns this employes2.
     */
    public function setCodePaysResidence($codePaysResidence) {
        $this->codePaysResidence = $codePaysResidence;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string $codeTuteur The code tuteur.
     * @return Employes2 Returns this employes2.
     */
    public function setCodeTuteur($codeTuteur) {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string $coeffConvention The coeff convention.
     * @return Employes2 Returns this employes2.
     */
    public function setCoeffConvention($coeffConvention) {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the commercial.
     *
     * @param boolean $commercial The commercial.
     * @return Employes2 Returns this employes2.
     */
    public function setCommercial($commercial) {
        $this->commercial = $commercial;
        return $this;
    }

    /**
     * Set the complement p c s.
     *
     * @param string $complementPCS The complement p c s.
     * @return Employes2 Returns this employes2.
     */
    public function setComplementPCS($complementPCS) {
        $this->complementPCS = $complementPCS;
        return $this;
    }

    /**
     * Set the conjoint exploitant.
     *
     * @param boolean $conjointExploitant The conjoint exploitant.
     * @return Employes2 Returns this employes2.
     */
    public function setConjointExploitant($conjointExploitant) {
        $this->conjointExploitant = $conjointExploitant;
        return $this;
    }

    /**
     * Set the contrat c n e.
     *
     * @param boolean $contratCNE The contrat c n e.
     * @return Employes2 Returns this employes2.
     */
    public function setContratCNE($contratCNE) {
        $this->contratCNE = $contratCNE;
        return $this;
    }

    /**
     * Set the cotis base penibilite.
     *
     * @param boolean $cotisBasePenibilite The cotis base penibilite.
     * @return Employes2 Returns this employes2.
     */
    public function setCotisBasePenibilite($cotisBasePenibilite) {
        $this->cotisBasePenibilite = $cotisBasePenibilite;
        return $this;
    }

    /**
     * Set the critere tri abs conges1.
     *
     * @param string $critereTriAbsConges1 The critere tri abs conges1.
     * @return Employes2 Returns this employes2.
     */
    public function setCritereTriAbsConges1($critereTriAbsConges1) {
        $this->critereTriAbsConges1 = $critereTriAbsConges1;
        return $this;
    }

    /**
     * Set the critere tri abs conges2.
     *
     * @param string $critereTriAbsConges2 The critere tri abs conges2.
     * @return Employes2 Returns this employes2.
     */
    public function setCritereTriAbsConges2($critereTriAbsConges2) {
        $this->critereTriAbsConges2 = $critereTriAbsConges2;
        return $this;
    }

    /**
     * Set the critere tri abs conges3.
     *
     * @param string $critereTriAbsConges3 The critere tri abs conges3.
     * @return Employes2 Returns this employes2.
     */
    public function setCritereTriAbsConges3($critereTriAbsConges3) {
        $this->critereTriAbsConges3 = $critereTriAbsConges3;
        return $this;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float $cumBaseTr2 The cum base tr2.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTr2($cumBaseTr2) {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float $cumBaseTrD The cum base tr d.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrD($cumBaseTrD) {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float $cumBaseTrD1 The cum base tr d1.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrD1($cumBaseTrD1) {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrD1Caisse1($cumBaseTrD1Caisse1) {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrD1Caisse2($cumBaseTrD1Caisse2) {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse3.
     *
     * @param float $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrD1Caisse3($cumBaseTrD1Caisse3) {
        $this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
        return $this;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float $cumBaseTrDCaisse1 The cum base tr d caisse1.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrDCaisse1($cumBaseTrDCaisse1) {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float $cumBaseTrDCaisse2 The cum base tr d caisse2.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrDCaisse2($cumBaseTrDCaisse2) {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float $cumBaseTrDCaisse3 The cum base tr d caisse3.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBaseTrDCaisse3($cumBaseTrDCaisse3) {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float $cumBrutCaisse1 The cum brut caisse1.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBrutCaisse1($cumBrutCaisse1) {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float $cumBrutCaisse2 The cum brut caisse2.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBrutCaisse2($cumBrutCaisse2) {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float $cumBrutCaisse3 The cum brut caisse3.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBrutCaisse3($cumBrutCaisse3) {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum brutal sans s i.
     *
     * @param float $cumBrutalSansSI The cum brutal sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumBrutalSansSI($cumBrutalSansSI) {
        $this->cumBrutalSansSI = $cumBrutalSansSI;
        return $this;
    }

    /**
     * Set the cum d i f dus.
     *
     * @param float $cumDIFDus The cum d i f dus.
     * @return Employes2 Returns this employes2.
     */
    public function setCumDIFDus($cumDIFDus) {
        $this->cumDIFDus = $cumDIFDus;
        return $this;
    }

    /**
     * Set the cum d i f dus_1.
     *
     * @param float $cumDIFDus_1 The cum d i f dus_1.
     * @return Employes2 Returns this employes2.
     */
    public function setCumDIFDus_1($cumDIFDus_1) {
        $this->cumDIFDus_1 = $cumDIFDus_1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float $cumHBonifie The cum h bonifie.
     * @return Employes2 Returns this employes2.
     */
    public function setCumHBonifie($cumHBonifie) {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float $cumRttDus The cum rtt dus.
     * @return Employes2 Returns this employes2.
     */
    public function setCumRttDus($cumRttDus) {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float $cumRttPris The cum rtt pris.
     * @return Employes2 Returns this employes2.
     */
    public function setCumRttPris($cumRttPris) {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tot s i.
     *
     * @param float $cumTotSI The cum tot s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTotSI($cumTotSI) {
        $this->cumTotSI = $cumTotSI;
        return $this;
    }

    /**
     * Set the cum tranche2 s i.
     *
     * @param float $cumTranche2SI The cum tranche2 s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTranche2SI($cumTranche2SI) {
        $this->cumTranche2SI = $cumTranche2SI;
        return $this;
    }

    /**
     * Set the cum tranche2 sans s i.
     *
     * @param float $cumTranche2SansSI The cum tranche2 sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTranche2SansSI($cumTranche2SansSI) {
        $this->cumTranche2SansSI = $cumTranche2SansSI;
        return $this;
    }

    /**
     * Set the cum tranche a s i.
     *
     * @param float $cumTrancheASI The cum tranche a s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheASI($cumTrancheASI) {
        $this->cumTrancheASI = $cumTrancheASI;
        return $this;
    }

    /**
     * Set the cum tranche a sans s i.
     *
     * @param float $cumTrancheASansSI The cum tranche a sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheASansSI($cumTrancheASansSI) {
        $this->cumTrancheASansSI = $cumTrancheASansSI;
        return $this;
    }

    /**
     * Set the cum tranche b s i.
     *
     * @param float $cumTrancheBSI The cum tranche b s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheBSI($cumTrancheBSI) {
        $this->cumTrancheBSI = $cumTrancheBSI;
        return $this;
    }

    /**
     * Set the cum tranche b sans s i.
     *
     * @param float $cumTrancheBSansSI The cum tranche b sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheBSansSI($cumTrancheBSansSI) {
        $this->cumTrancheBSansSI = $cumTrancheBSansSI;
        return $this;
    }

    /**
     * Set the cum tranche c s i.
     *
     * @param float $cumTrancheCSI The cum tranche c s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheCSI($cumTrancheCSI) {
        $this->cumTrancheCSI = $cumTrancheCSI;
        return $this;
    }

    /**
     * Set the cum tranche c sans s i.
     *
     * @param float $cumTrancheCSansSI The cum tranche c sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheCSansSI($cumTrancheCSansSI) {
        $this->cumTrancheCSansSI = $cumTrancheCSansSI;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans s i.
     *
     * @param float $cumTrancheD1SansSI The cum tranche d1 sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheD1SansSI($cumTrancheD1SansSI) {
        $this->cumTrancheD1SansSI = $cumTrancheD1SansSI;
        return $this;
    }

    /**
     * Set the cum tranche d sans s i.
     *
     * @param float $cumTrancheDSansSI The cum tranche d sans s i.
     * @return Employes2 Returns this employes2.
     */
    public function setCumTrancheDSansSI($cumTrancheDSansSI) {
        $this->cumTrancheDSansSI = $cumTrancheDSansSI;
        return $this;
    }

    /**
     * Set the d a d s u conjoint salarie.
     *
     * @param string $dADSUConjointSalarie The d a d s u conjoint salarie.
     * @return Employes2 Returns this employes2.
     */
    public function setDADSUConjointSalarie($dADSUConjointSalarie) {
        $this->dADSUConjointSalarie = $dADSUConjointSalarie;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Employes2 Returns this employes2.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date fin exclure l f r2012.
     *
     * @param DateTime $dateFinExclureLFR2012 The date fin exclure l f r2012.
     * @return Employes2 Returns this employes2.
     */
    public function setDateFinExclureLFR2012(DateTime $dateFinExclureLFR2012 = null) {
        $this->dateFinExclureLFR2012 = $dateFinExclureLFR2012;
        return $this;
    }

    /**
     * Set the date fin portabilite.
     *
     * @param DateTime $dateFinPortabilite The date fin portabilite.
     * @return Employes2 Returns this employes2.
     */
    public function setDateFinPortabilite(DateTime $dateFinPortabilite = null) {
        $this->dateFinPortabilite = $dateFinPortabilite;
        return $this;
    }

    /**
     * Set the date passage c d i.
     *
     * @param DateTime $datePassageCDI The date passage c d i.
     * @return Employes2 Returns this employes2.
     */
    public function setDatePassageCDI(DateTime $datePassageCDI = null) {
        $this->datePassageCDI = $datePassageCDI;
        return $this;
    }

    /**
     * Set the date renouv c d d.
     *
     * @param DateTime $dateRenouvCDD The date renouv c d d.
     * @return Employes2 Returns this employes2.
     */
    public function setDateRenouvCDD(DateTime $dateRenouvCDD = null) {
        $this->dateRenouvCDD = $dateRenouvCDD;
        return $this;
    }

    /**
     * Set the deduction anc.
     *
     * @param int $deductionAnc The deduction anc.
     * @return Employes2 Returns this employes2.
     */
    public function setDeductionAnc($deductionAnc) {
        $this->deductionAnc = $deductionAnc;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return Employes2 Returns this employes2.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param string $edHSupBonifQueMajo The ed h sup bonif que majo.
     * @return Employes2 Returns this employes2.
     */
    public function setEdHSupBonifQueMajo($edHSupBonifQueMajo) {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return Employes2 Returns this employes2.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the etat i paie.
     *
     * @param string $etatIPaie The etat i paie.
     * @return Employes2 Returns this employes2.
     */
    public function setEtatIPaie($etatIPaie) {
        $this->etatIPaie = $etatIPaie;
        return $this;
    }

    /**
     * Set the exclure c i c e.
     *
     * @param boolean $exclureCICE The exclure c i c e.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureCICE($exclureCICE) {
        $this->exclureCICE = $exclureCICE;
        return $this;
    }

    /**
     * Set the exclure chom c d d.
     *
     * @param boolean $exclureChomCDD The exclure chom c d d.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureChomCDD($exclureChomCDD) {
        $this->exclureChomCDD = $exclureChomCDD;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param boolean $exclureCospar The exclure cospar.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureCospar($exclureCospar) {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure cot assedic par urssaf.
     *
     * @param boolean $exclureCotAssedicParUrssaf The exclure cot assedic par urssaf.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureCotAssedicParUrssaf($exclureCotAssedicParUrssaf) {
        $this->exclureCotAssedicParUrssaf = $exclureCotAssedicParUrssaf;
        return $this;
    }

    /**
     * Set the exclure d a s.
     *
     * @param boolean $exclureDAS The exclure d a s.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureDAS($exclureDAS) {
        $this->exclureDAS = $exclureDAS;
        return $this;
    }

    /**
     * Set the exclure d s n.
     *
     * @param boolean $exclureDSN The exclure d s n.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureDSN($exclureDSN) {
        $this->exclureDSN = $exclureDSN;
        return $this;
    }

    /**
     * Set the exclure l f r2012.
     *
     * @param string $exclureLFR2012 The exclure l f r2012.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureLFR2012($exclureLFR2012) {
        $this->exclureLFR2012 = $exclureLFR2012;
        return $this;
    }

    /**
     * Set the exclure loi t e p a.
     *
     * @param boolean $exclureLoiTEPA The exclure loi t e p a.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureLoiTEPA($exclureLoiTEPA) {
        $this->exclureLoiTEPA = $exclureLoiTEPA;
        return $this;
    }

    /**
     * Set the exclure loi t e p a part p.
     *
     * @param boolean $exclureLoiTEPAPartP The exclure loi t e p a part p.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureLoiTEPAPartP($exclureLoiTEPAPartP) {
        $this->exclureLoiTEPAPartP = $exclureLoiTEPAPartP;
        return $this;
    }

    /**
     * Set the exclure loi t e p a part s.
     *
     * @param boolean $exclureLoiTEPAPartS The exclure loi t e p a part s.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureLoiTEPAPartS($exclureLoiTEPAPartS) {
        $this->exclureLoiTEPAPartS = $exclureLoiTEPAPartS;
        return $this;
    }

    /**
     * Set the exclure q g c.
     *
     * @param boolean $exclureQGC The exclure q g c.
     * @return Employes2 Returns this employes2.
     */
    public function setExclureQGC($exclureQGC) {
        $this->exclureQGC = $exclureQGC;
        return $this;
    }

    /**
     * Set the exo a c c r e17.
     *
     * @param boolean $exoACCRE17 The exo a c c r e17.
     * @return Employes2 Returns this employes2.
     */
    public function setExoACCRE17($exoACCRE17) {
        $this->exoACCRE17 = $exoACCRE17;
        return $this;
    }

    /**
     * Set the exo a g f f.
     *
     * @param boolean $exoAGFF The exo a g f f.
     * @return Employes2 Returns this employes2.
     */
    public function setExoAGFF($exoAGFF) {
        $this->exoAGFF = $exoAGFF;
        return $this;
    }

    /**
     * Set the exo occasionnel m s a.
     *
     * @param boolean $exoOccasionnelMSA The exo occasionnel m s a.
     * @return Employes2 Returns this employes2.
     */
    public function setExoOccasionnelMSA($exoOccasionnelMSA) {
        $this->exoOccasionnelMSA = $exoOccasionnelMSA;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param boolean $exoProfessionnalisation The exo professionnalisation.
     * @return Employes2 Returns this employes2.
     */
    public function setExoProfessionnalisation($exoProfessionnalisation) {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param boolean $exoSpecif The exo specif.
     * @return Employes2 Returns this employes2.
     */
    public function setExoSpecif($exoSpecif) {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param boolean $forfaitHeure The forfait heure.
     * @return Employes2 Returns this employes2.
     */
    public function setForfaitHeure($forfaitHeure) {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the forfait jour.
     *
     * @param boolean $forfaitJour The forfait jour.
     * @return Employes2 Returns this employes2.
     */
    public function setForfaitJour($forfaitJour) {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }

    /**
     * Set the gestion c p.
     *
     * @param string $gestionCP The gestion c p.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionCP($gestionCP) {
        $this->gestionCP = $gestionCP;
        return $this;
    }

    /**
     * Set the gestion compteur h completer.
     *
     * @param boolean $gestionCompteurHCompleter The gestion compteur h completer.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionCompteurHCompleter($gestionCompteurHCompleter) {
        $this->gestionCompteurHCompleter = $gestionCompteurHCompleter;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param boolean $gestionMailBulletin The gestion mail bulletin.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion r t t.
     *
     * @param string $gestionRTT The gestion r t t.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionRTT($gestionRTT) {
        $this->gestionRTT = $gestionRTT;
        return $this;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param string $gestionReposComp The gestion repos comp.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionReposComp($gestionReposComp) {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param string $gestionReposRecup The gestion repos recup.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionReposRecup($gestionReposRecup) {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param string $gestionReposRemplace The gestion repos remplace.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionReposRemplace($gestionReposRemplace) {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }

    /**
     * Set the gestion sem type.
     *
     * @param string $gestionSemType The gestion sem type.
     * @return Employes2 Returns this employes2.
     */
    public function setGestionSemType($gestionSemType) {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }

    /**
     * Set the heures periode initial.
     *
     * @param float $heuresPeriodeInitial The heures periode initial.
     * @return Employes2 Returns this employes2.
     */
    public function setHeuresPeriodeInitial($heuresPeriodeInitial) {
        $this->heuresPeriodeInitial = $heuresPeriodeInitial;
        return $this;
    }

    /**
     * Set the i b a n.
     *
     * @param string $iBAN The i b a n.
     * @return Employes2 Returns this employes2.
     */
    public function setIBAN($iBAN) {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Set the indem cp m s a.
     *
     * @param boolean $indemCpMSA The indem cp m s a.
     * @return Employes2 Returns this employes2.
     */
    public function setIndemCpMSA($indemCpMSA) {
        $this->indemCpMSA = $indemCpMSA;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return Employes2 Returns this employes2.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the inspecteur.
     *
     * @param boolean $inspecteur The inspecteur.
     * @return Employes2 Returns this employes2.
     */
    public function setInspecteur($inspecteur) {
        $this->inspecteur = $inspecteur;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param boolean $interimIndemCpFillon The interim indem cp fillon.
     * @return Employes2 Returns this employes2.
     */
    public function setInterimIndemCpFillon($interimIndemCpFillon) {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the mail bulletin pwd.
     *
     * @param string $mailBulletinPwd The mail bulletin pwd.
     * @return Employes2 Returns this employes2.
     */
    public function setMailBulletinPwd($mailBulletinPwd) {
        $this->mailBulletinPwd = $mailBulletinPwd;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param string $maintienIntervientCp The maintien intervient cp.
     * @return Employes2 Returns this employes2.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien net deduc c s g i j s s.
     *
     * @param boolean $maintienNetDeducCSGIJSS The maintien net deduc c s g i j s s.
     * @return Employes2 Returns this employes2.
     */
    public function setMaintienNetDeducCSGIJSS($maintienNetDeducCSGIJSS) {
        $this->maintienNetDeducCSGIJSS = $maintienNetDeducCSGIJSS;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param string $maintienSalaire The maintien salaire.
     * @return Employes2 Returns this employes2.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the maintien specifique.
     *
     * @param boolean $maintienSpecifique The maintien specifique.
     * @return Employes2 Returns this employes2.
     */
    public function setMaintienSpecifique($maintienSpecifique) {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }

    /**
     * Set the majo professionnalisation.
     *
     * @param boolean $majoProfessionnalisation The majo professionnalisation.
     * @return Employes2 Returns this employes2.
     */
    public function setMajoProfessionnalisation($majoProfessionnalisation) {
        $this->majoProfessionnalisation = $majoProfessionnalisation;
        return $this;
    }

    /**
     * Set the mandataire social.
     *
     * @param boolean $mandataireSocial The mandataire social.
     * @return Employes2 Returns this employes2.
     */
    public function setMandataireSocial($mandataireSocial) {
        $this->mandataireSocial = $mandataireSocial;
        return $this;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string $modeleBulletin The modele bulletin.
     * @return Employes2 Returns this employes2.
     */
    public function setModeleBulletin($modeleBulletin) {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }

    /**
     * Set the mois cloture d i f.
     *
     * @param string $moisClotureDIF The mois cloture d i f.
     * @return Employes2 Returns this employes2.
     */
    public function setMoisClotureDIF($moisClotureDIF) {
        $this->moisClotureDIF = $moisClotureDIF;
        return $this;
    }

    /**
     * Set the motif c d d.
     *
     * @param string $motifCDD The motif c d d.
     * @return Employes2 Returns this employes2.
     */
    public function setMotifCDD($motifCDD) {
        $this->motifCDD = $motifCDD;
        return $this;
    }

    /**
     * Set the motif exclusion d s n.
     *
     * @param string $motifExclusionDSN The motif exclusion d s n.
     * @return Employes2 Returns this employes2.
     */
    public function setMotifExclusionDSN($motifExclusionDSN) {
        $this->motifExclusionDSN = $motifExclusionDSN;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param boolean $multiEmployeur The multi employeur.
     * @return Employes2 Returns this employes2.
     */
    public function setMultiEmployeur($multiEmployeur) {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the n b jour cp acquis.
     *
     * @param float $nBJourCpAcquis The n b jour cp acquis.
     * @return Employes2 Returns this employes2.
     */
    public function setNBJourCpAcquis($nBJourCpAcquis) {
        $this->nBJourCpAcquis = $nBJourCpAcquis;
        return $this;
    }

    /**
     * Set the n b jour cp sup.
     *
     * @param float $nBJourCpSup The n b jour cp sup.
     * @return Employes2 Returns this employes2.
     */
    public function setNBJourCpSup($nBJourCpSup) {
        $this->nBJourCpSup = $nBJourCpSup;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return Employes2 Returns this employes2.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float $nbHBonifie The nb h bonifie.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHBonifie($nbHBonifie) {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float $nbHContingent The nb h contingent.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHContingent($nbHContingent) {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float $nbHJour1 The nb h jour1.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour1($nbHJour1) {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float $nbHJour2 The nb h jour2.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour2($nbHJour2) {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float $nbHJour3 The nb h jour3.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour3($nbHJour3) {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float $nbHJour4 The nb h jour4.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour4($nbHJour4) {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float $nbHJour5 The nb h jour5.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour5($nbHJour5) {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float $nbHJour6 The nb h jour6.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour6($nbHJour6) {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float $nbHJour7 The nb h jour7.
     * @return Employes2 Returns this employes2.
     */
    public function setNbHJour7($nbHJour7) {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float $nbJourAnnee The nb jour annee.
     * @return Employes2 Returns this employes2.
     */
    public function setNbJourAnnee($nbJourAnnee) {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string $nbPieceLogement The nb piece logement.
     * @return Employes2 Returns this employes2.
     */
    public function setNbPieceLogement($nbPieceLogement) {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param boolean $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return Employes2 Returns this employes2.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return Employes2 Returns this employes2.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string $nomVilleInsee The nom ville insee.
     * @return Employes2 Returns this employes2.
     */
    public function setNomVilleInsee($nomVilleInsee) {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return Employes2 Returns this employes2.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat m s a.
     *
     * @param int $numeroAbattementContratMSA The numero abattement contrat m s a.
     * @return Employes2 Returns this employes2.
     */
    public function setNumeroAbattementContratMSA($numeroAbattementContratMSA) {
        $this->numeroAbattementContratMSA = $numeroAbattementContratMSA;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int $numeroContrat The numero contrat.
     * @return Employes2 Returns this employes2.
     */
    public function setNumeroContrat($numeroContrat) {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero employe contrat.
     *
     * @param string $numeroEmployeContrat The numero employe contrat.
     * @return Employes2 Returns this employes2.
     */
    public function setNumeroEmployeContrat($numeroEmployeContrat) {
        $this->numeroEmployeContrat = $numeroEmployeContrat;
        return $this;
    }

    /**
     * Set the pas gestion d i f.
     *
     * @param boolean $pasGestionDIF The pas gestion d i f.
     * @return Employes2 Returns this employes2.
     */
    public function setPasGestionDIF($pasGestionDIF) {
        $this->pasGestionDIF = $pasGestionDIF;
        return $this;
    }

    /**
     * Set the pays naissance.
     *
     * @param string $paysNaissance The pays naissance.
     * @return Employes2 Returns this employes2.
     */
    public function setPaysNaissance($paysNaissance) {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the pays nat.
     *
     * @param string $paysNat The pays nat.
     * @return Employes2 Returns this employes2.
     */
    public function setPaysNat($paysNat) {
        $this->paysNat = $paysNat;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime $periodePointageCloturee The periode pointage cloturee.
     * @return Employes2 Returns this employes2.
     */
    public function setPeriodePointageCloturee(DateTime $periodePointageCloturee = null) {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return Employes2 Returns this employes2.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     * @return Employes2 Returns this employes2.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the r t t1.
     *
     * @param float $rTT1 The r t t1.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT1($rTT1) {
        $this->rTT1 = $rTT1;
        return $this;
    }

    /**
     * Set the r t t10.
     *
     * @param float $rTT10 The r t t10.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT10($rTT10) {
        $this->rTT10 = $rTT10;
        return $this;
    }

    /**
     * Set the r t t11.
     *
     * @param float $rTT11 The r t t11.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT11($rTT11) {
        $this->rTT11 = $rTT11;
        return $this;
    }

    /**
     * Set the r t t12.
     *
     * @param float $rTT12 The r t t12.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT12($rTT12) {
        $this->rTT12 = $rTT12;
        return $this;
    }

    /**
     * Set the r t t2.
     *
     * @param float $rTT2 The r t t2.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT2($rTT2) {
        $this->rTT2 = $rTT2;
        return $this;
    }

    /**
     * Set the r t t3.
     *
     * @param float $rTT3 The r t t3.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT3($rTT3) {
        $this->rTT3 = $rTT3;
        return $this;
    }

    /**
     * Set the r t t4.
     *
     * @param float $rTT4 The r t t4.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT4($rTT4) {
        $this->rTT4 = $rTT4;
        return $this;
    }

    /**
     * Set the r t t5.
     *
     * @param float $rTT5 The r t t5.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT5($rTT5) {
        $this->rTT5 = $rTT5;
        return $this;
    }

    /**
     * Set the r t t6.
     *
     * @param float $rTT6 The r t t6.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT6($rTT6) {
        $this->rTT6 = $rTT6;
        return $this;
    }

    /**
     * Set the r t t7.
     *
     * @param float $rTT7 The r t t7.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT7($rTT7) {
        $this->rTT7 = $rTT7;
        return $this;
    }

    /**
     * Set the r t t8.
     *
     * @param float $rTT8 The r t t8.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT8($rTT8) {
        $this->rTT8 = $rTT8;
        return $this;
    }

    /**
     * Set the r t t9.
     *
     * @param float $rTT9 The r t t9.
     * @return Employes2 Returns this employes2.
     */
    public function setRTT9($rTT9) {
        $this->rTT9 = $rTT9;
        return $this;
    }

    /**
     * Set the rbt navigo non proratise.
     *
     * @param boolean $rbtNavigoNonProratise The rbt navigo non proratise.
     * @return Employes2 Returns this employes2.
     */
    public function setRbtNavigoNonProratise($rbtNavigoNonProratise) {
        $this->rbtNavigoNonProratise = $rbtNavigoNonProratise;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param string $reductionFillon The reduction fillon.
     * @return Employes2 Returns this employes2.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param string $reductionMayotte The reduction mayotte.
     * @return Employes2 Returns this employes2.
     */
    public function setReductionMayotte($reductionMayotte) {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param boolean $remunPartFillon The remun part fillon.
     * @return Employes2 Returns this employes2.
     */
    public function setRemunPartFillon($remunPartFillon) {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int $sansContrat The sans contrat.
     * @return Employes2 Returns this employes2.
     */
    public function setSansContrat($sansContrat) {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param string $subrogation The subrogation.
     * @return Employes2 Returns this employes2.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     * @return Employes2 Returns this employes2.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float $tdsAllocChom The tds alloc chom.
     * @return Employes2 Returns this employes2.
     */
    public function setTdsAllocChom($tdsAllocChom) {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     * @return Employes2 Returns this employes2.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return Employes2 Returns this employes2.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the travailleur de nuit.
     *
     * @param boolean $travailleurDeNuit The travailleur de nuit.
     * @return Employes2 Returns this employes2.
     */
    public function setTravailleurDeNuit($travailleurDeNuit) {
        $this->travailleurDeNuit = $travailleurDeNuit;
        return $this;
    }

    /**
     * Set the type abo navigo.
     *
     * @param string $typeAboNavigo The type abo navigo.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeAboNavigo($typeAboNavigo) {
        $this->typeAboNavigo = $typeAboNavigo;
        return $this;
    }

    /**
     * Set the type exo l o d e o m.
     *
     * @param string $typeExoLODEOM The type exo l o d e o m.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeExoLODEOM($typeExoLODEOM) {
        $this->typeExoLODEOM = $typeExoLODEOM;
        return $this;
    }

    /**
     * Set the type intemperie b t p.
     *
     * @param string $typeIntemperieBTP The type intemperie b t p.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeIntemperieBTP($typeIntemperieBTP) {
        $this->typeIntemperieBTP = $typeIntemperieBTP;
        return $this;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string $typeMaintienBrutNet The type maintien brut net.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeMaintienBrutNet($typeMaintienBrutNet) {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     * @return Employes2 Returns this employes2.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the zone navigo.
     *
     * @param string $zoneNavigo The zone navigo.
     * @return Employes2 Returns this employes2.
     */
    public function setZoneNavigo($zoneNavigo) {
        $this->zoneNavigo = $zoneNavigo;
        return $this;
    }

}
