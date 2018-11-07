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
 * Libelles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Libelles {

    /**
     * A compter heures assedic.
     *
     * @var boolean
     */
    private $aCompterHeuresAssedic;

    /**
     * A conserver s e t p.
     *
     * @var boolean
     */
    private $aConserverSETP;

    /**
     * A cumuler base c p.
     *
     * @var boolean
     */
    private $aCumulerBaseCP;

    /**
     * A cumuler base caisse1.
     *
     * @var boolean
     */
    private $aCumulerBaseCaisse1;

    /**
     * A cumuler base caisse2.
     *
     * @var boolean
     */
    private $aCumulerBaseCaisse2;

    /**
     * A cumuler base caisse3.
     *
     * @var boolean
     */
    private $aCumulerBaseCaisse3;

    /**
     * A cumuler base secu.
     *
     * @var boolean
     */
    private $aCumulerBaseSecu;

    /**
     * A e n lien presence effective.
     *
     * @var boolean
     */
    private $aENLienPresenceEffective;

    /**
     * A reintegrer s e t p.
     *
     * @var boolean
     */
    private $aReintegrerSETP;

    /**
     * Active variables emp.
     *
     * @var boolean
     */
    private $activeVariablesEmp;

    /**
     * Agff.
     *
     * @var boolean
     */
    private $agff;

    /**
     * Avantage nature prime.
     *
     * @var boolean
     */
    private $avantageNaturePrime;

    /**
     * Avantage nature t d s.
     *
     * @var boolean
     */
    private $avantageNatureTDS;

    /**
     * Avec retro act.
     *
     * @var boolean
     */
    private $avecRetroAct;

    /**
     * Base exoneree.
     *
     * @var boolean
     */
    private $baseExoneree;

    /**
     * Base non exoneree.
     *
     * @var boolean
     */
    private $baseNonExoneree;

    /**
     * Categ salarie.
     *
     * @var string
     */
    private $categSalarie;

    /**
     * Cheque vacance.
     *
     * @var boolean
     */
    private $chequeVacance;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code c s g taux.
     *
     * @var string
     */
    private $codeCSGTaux;

    /**
     * Code calcul.
     *
     * @var string
     */
    private $codeCalcul;

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
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code rds.
     *
     * @var string
     */
    private $codeRds;

    /**
     * Code type assurance.
     *
     * @var string
     */
    private $codeTypeAssurance;

    /**
     * Code type b plaf.
     *
     * @var string
     */
    private $codeTypeBPlaf;

    /**
     * Code type b spec prev.
     *
     * @var string
     */
    private $codeTypeBSpecPrev;

    /**
     * Code type brut.
     *
     * @var string
     */
    private $codeTypeBrut;

    /**
     * Code type prev.
     *
     * @var string
     */
    private $codeTypePrev;

    /**
     * Code type somme.
     *
     * @var string
     */
    private $codeTypeSomme;

    /**
     * Compte charge.
     *
     * @var string
     */
    private $compteCharge;

    /**
     * Condition.
     *
     * @var string
     */
    private $condition;

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Conge paye.
     *
     * @var boolean
     */
    private $congePaye;

    /**
     * Cotis normal dues.
     *
     * @var boolean
     */
    private $cotisNormalDues;

    /**
     * Cotis normal dues a c c r e.
     *
     * @var boolean
     */
    private $cotisNormalDuesACCRE;

    /**
     * Cotis normal dues z f u.
     *
     * @var boolean
     */
    private $cotisNormalDuesZFU;

    /**
     * Cotis normal dues z r d.
     *
     * @var boolean
     */
    private $cotisNormalDuesZRD;

    /**
     * Cotis normal dues z r r z r u.
     *
     * @var boolean
     */
    private $cotisNormalDuesZRRZRU;

    /**
     * Cotisation c s g.
     *
     * @var boolean
     */
    private $cotisationCSG;

    /**
     * Cout global.
     *
     * @var boolean
     */
    private $coutGlobal;

    /**
     * Deb per application.
     *
     * @var DateTime
     */
    private $debPerApplication;

    /**
     * Determine allegement.
     *
     * @var boolean
     */
    private $determineAllegement;

    /**
     * Determine base secu.
     *
     * @var boolean
     */
    private $determineBaseSecu;

    /**
     * Diminue net.
     *
     * @var boolean
     */
    private $diminueNet;

    /**
     * Edition base.
     *
     * @var boolean
     */
    private $editionBase;

    /**
     * Edition bulletin.
     *
     * @var boolean
     */
    private $editionBulletin;

    /**
     * Edition cot patronale.
     *
     * @var boolean
     */
    private $editionCotPatronale;

    /**
     * Edition forcee d s.
     *
     * @var boolean
     */
    private $editionForceeDS;

    /**
     * Edition resultat.
     *
     * @var boolean
     */
    private $editionResultat;

    /**
     * Edition taux.
     *
     * @var boolean
     */
    private $editionTaux;

    /**
     * Exclure loi t e p a.
     *
     * @var boolean
     */
    private $exclureLoiTEPA;

    /**
     * Exo occasionnel m s a.
     *
     * @var boolean
     */
    private $exoOccasionnelMSA;

    /**
     * Exo taux patronal.
     *
     * @var boolean
     */
    private $exoTauxPatronal;

    /**
     * Expatriation.
     *
     * @var boolean
     */
    private $expatriation;

    /**
     * Fillon a d o m.
     *
     * @var boolean
     */
    private $fillonADOM;

    /**
     * Fillon s a p.
     *
     * @var boolean
     */
    private $fillonSAP;

    /**
     * Fin per application.
     *
     * @var DateTime
     */
    private $finPerApplication;

    /**
     * Frais professionnel.
     *
     * @var boolean
     */
    private $fraisProfessionnel;

    /**
     * Frais sante.
     *
     * @var boolean
     */
    private $fraisSante;

    /**
     * Freq1.
     *
     * @var boolean
     */
    private $freq1;

    /**
     * Freq10.
     *
     * @var boolean
     */
    private $freq10;

    /**
     * Freq11.
     *
     * @var boolean
     */
    private $freq11;

    /**
     * Freq12.
     *
     * @var boolean
     */
    private $freq12;

    /**
     * Freq2.
     *
     * @var boolean
     */
    private $freq2;

    /**
     * Freq3.
     *
     * @var boolean
     */
    private $freq3;

    /**
     * Freq4.
     *
     * @var boolean
     */
    private $freq4;

    /**
     * Freq5.
     *
     * @var boolean
     */
    private $freq5;

    /**
     * Freq6.
     *
     * @var boolean
     */
    private $freq6;

    /**
     * Freq7.
     *
     * @var boolean
     */
    private $freq7;

    /**
     * Freq8.
     *
     * @var boolean
     */
    private $freq8;

    /**
     * Freq9.
     *
     * @var boolean
     */
    private $freq9;

    /**
     * H sup loi t e p a.
     *
     * @var boolean
     */
    private $hSupLoiTEPA;

    /**
     * H sup structurelle.
     *
     * @var boolean
     */
    private $hSupStructurelle;

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Ijss.
     *
     * @var boolean
     */
    private $ijss;

    /**
     * Imput epargne ret.
     *
     * @var boolean
     */
    private $imputEpargneRet;

    /**
     * Indemnite non imposable.
     *
     * @var boolean
     */
    private $indemniteNonImposable;

    /**
     * Intervient brutal.
     *
     * @var boolean
     */
    private $intervientBrutal;

    /**
     * Intervient indem preca.
     *
     * @var boolean
     */
    private $intervientIndemPreca;

    /**
     * Intervient taux h ab cp.
     *
     * @var string
     */
    private $intervientTauxHAbCp;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule ducs.
     *
     * @var string
     */
    private $intituleDucs;

    /**
     * Maintien salaire.
     *
     * @var boolean
     */
    private $maintienSalaire;

    /**
     * Mois deb fixe.
     *
     * @var string
     */
    private $moisDebFixe;

    /**
     * Mois echu.
     *
     * @var boolean
     */
    private $moisEchu;

    /**
     * Mois fin fixe.
     *
     * @var string
     */
    private $moisFinFixe;

    /**
     * Montant global.
     *
     * @var float
     */
    private $montantGlobal;

    /**
     * Montant salarial.
     *
     * @var float
     */
    private $montantSalarial;

    /**
     * Nb h contract.
     *
     * @var float
     */
    private $nbHContract;

    /**
     * Nb mois applic.
     *
     * @var int
     */
    private $nbMoisApplic;

    /**
     * Neutre.
     *
     * @var boolean
     */
    private $neutre;

    /**
     * Num col acbs.
     *
     * @var string
     */
    private $numColAcbs;

    /**
     * Num col allege35h.
     *
     * @var string
     */
    private $numColAllege35h;

    /**
     * Num col charges cafe.
     *
     * @var string
     */
    private $numColChargesCafe;

    /**
     * Num cumul bulletin.
     *
     * @var int
     */
    private $numCumulBulletin;

    /**
     * Num cumul patron.
     *
     * @var int
     */
    private $numCumulPatron;

    /**
     * Num taux const nat.
     *
     * @var int
     */
    private $numTauxConstNat;

    /**
     * Part patron prevoyance.
     *
     * @var boolean
     */
    private $partPatronPrevoyance;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Pourboire.
     *
     * @var boolean
     */
    private $pourboire;

    /**
     * Prevoyance.
     *
     * @var boolean
     */
    private $prevoyance;

    /**
     * Prevoyance comp.
     *
     * @var boolean
     */
    private $prevoyanceComp;

    /**
     * Prime non proratisee.
     *
     * @var boolean
     */
    private $primeNonProratisee;

    /**
     * Prime servitude travail.
     *
     * @var boolean
     */
    private $primeServitudeTravail;

    /**
     * Qualifiant cotis.
     *
     * @var string
     */
    private $qualifiantCotis;

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Regle taux.
     *
     * @var string
     */
    private $regleTaux;

    /**
     * Remise a zero.
     *
     * @var boolean
     */
    private $remiseAZero;

    /**
     * Result mt.
     *
     * @var boolean
     */
    private $resultMt;

    /**
     * Resultat ducs.
     *
     * @var boolean
     */
    private $resultatDucs;

    /**
     * Retenue salaire.
     *
     * @var boolean
     */
    private $retenueSalaire;

    /**
     * Retenue source.
     *
     * @var boolean
     */
    private $retenueSource;

    /**
     * Retraite obligatoire.
     *
     * @var boolean
     */
    private $retraiteObligatoire;

    /**
     * Retraite supp.
     *
     * @var boolean
     */
    private $retraiteSupp;

    /**
     * Salaire c p.
     *
     * @var boolean
     */
    private $salaireCP;

    /**
     * Sans reintegration sociale.
     *
     * @var boolean
     */
    private $sansReintegrationSociale;

    /**
     * Soumis abattement.
     *
     * @var boolean
     */
    private $soumisAbattement;

    /**
     * Soumis c r d s100.
     *
     * @var boolean
     */
    private $soumisCRDS100;

    /**
     * Soumis c s g.
     *
     * @var boolean
     */
    private $soumisCSG;

    /**
     * Soumis c s g100.
     *
     * @var boolean
     */
    private $soumisCSG100;

    /**
     * Soumis forfait social.
     *
     * @var boolean
     */
    private $soumisForfaitSocial;

    /**
     * Soumis r d s.
     *
     * @var boolean
     */
    private $soumisRDS;

    /**
     * Taux du libelle.
     *
     * @var boolean
     */
    private $tauxDuLibelle;

    /**
     * Taux forfait social.
     *
     * @var string
     */
    private $tauxForfaitSocial;

    /**
     * Taux patronal d a d s u.
     *
     * @var float
     */
    private $tauxPatronalDADSU;

    /**
     * Taux salarial d a d s u.
     *
     * @var float
     */
    private $tauxSalarialDADSU;

    /**
     * Type absence h sup.
     *
     * @var string
     */
    private $typeAbsenceHSup;

    /**
     * Type avantage.
     *
     * @var string
     */
    private $typeAvantage;

    /**
     * Type base cotisation.
     *
     * @var string
     */
    private $typeBaseCotisation;

    /**
     * Type cotis.
     *
     * @var string
     */
    private $typeCotis;

    /**
     * Type date anc.
     *
     * @var int
     */
    private $typeDateAnc;

    /**
     * Type donnee d a d s u.
     *
     * @var string
     */
    private $typeDonneeDADSU;

    /**
     * Type frais.
     *
     * @var string
     */
    private $typeFrais;

    /**
     * Type h e fillon.
     *
     * @var string
     */
    private $typeHEFillon;

    /**
     * Type h sup loi t e p a.
     *
     * @var string
     */
    private $typeHSupLoiTEPA;

    /**
     * Type heure.
     *
     * @var string
     */
    private $typeHeure;

    /**
     * Type heure sup.
     *
     * @var string
     */
    private $typeHeureSup;

    /**
     * Type orga.
     *
     * @var string
     */
    private $typeOrga;

    /**
     * Type proratisation prime.
     *
     * @var string
     */
    private $typeProratisationPrime;

    /**
     * Type tranche.
     *
     * @var string
     */
    private $typeTranche;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a compter heures assedic.
     *
     * @return boolean Returns the a compter heures assedic.
     */
    public function getACompterHeuresAssedic() {
        return $this->aCompterHeuresAssedic;
    }

    /**
     * Get the a conserver s e t p.
     *
     * @return boolean Returns the a conserver s e t p.
     */
    public function getAConserverSETP() {
        return $this->aConserverSETP;
    }

    /**
     * Get the a cumuler base c p.
     *
     * @return boolean Returns the a cumuler base c p.
     */
    public function getACumulerBaseCP() {
        return $this->aCumulerBaseCP;
    }

    /**
     * Get the a cumuler base caisse1.
     *
     * @return boolean Returns the a cumuler base caisse1.
     */
    public function getACumulerBaseCaisse1() {
        return $this->aCumulerBaseCaisse1;
    }

    /**
     * Get the a cumuler base caisse2.
     *
     * @return boolean Returns the a cumuler base caisse2.
     */
    public function getACumulerBaseCaisse2() {
        return $this->aCumulerBaseCaisse2;
    }

    /**
     * Get the a cumuler base caisse3.
     *
     * @return boolean Returns the a cumuler base caisse3.
     */
    public function getACumulerBaseCaisse3() {
        return $this->aCumulerBaseCaisse3;
    }

    /**
     * Get the a cumuler base secu.
     *
     * @return boolean Returns the a cumuler base secu.
     */
    public function getACumulerBaseSecu() {
        return $this->aCumulerBaseSecu;
    }

    /**
     * Get the a e n lien presence effective.
     *
     * @return boolean Returns the a e n lien presence effective.
     */
    public function getAENLienPresenceEffective() {
        return $this->aENLienPresenceEffective;
    }

    /**
     * Get the a reintegrer s e t p.
     *
     * @return boolean Returns the a reintegrer s e t p.
     */
    public function getAReintegrerSETP() {
        return $this->aReintegrerSETP;
    }

    /**
     * Get the active variables emp.
     *
     * @return boolean Returns the active variables emp.
     */
    public function getActiveVariablesEmp() {
        return $this->activeVariablesEmp;
    }

    /**
     * Get the agff.
     *
     * @return boolean Returns the agff.
     */
    public function getAgff() {
        return $this->agff;
    }

    /**
     * Get the avantage nature prime.
     *
     * @return boolean Returns the avantage nature prime.
     */
    public function getAvantageNaturePrime() {
        return $this->avantageNaturePrime;
    }

    /**
     * Get the avantage nature t d s.
     *
     * @return boolean Returns the avantage nature t d s.
     */
    public function getAvantageNatureTDS() {
        return $this->avantageNatureTDS;
    }

    /**
     * Get the avec retro act.
     *
     * @return boolean Returns the avec retro act.
     */
    public function getAvecRetroAct() {
        return $this->avecRetroAct;
    }

    /**
     * Get the base exoneree.
     *
     * @return boolean Returns the base exoneree.
     */
    public function getBaseExoneree() {
        return $this->baseExoneree;
    }

    /**
     * Get the base non exoneree.
     *
     * @return boolean Returns the base non exoneree.
     */
    public function getBaseNonExoneree() {
        return $this->baseNonExoneree;
    }

    /**
     * Get the categ salarie.
     *
     * @return string Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the cheque vacance.
     *
     * @return boolean Returns the cheque vacance.
     */
    public function getChequeVacance() {
        return $this->chequeVacance;
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
     * Get the code c s g taux.
     *
     * @return string Returns the code c s g taux.
     */
    public function getCodeCSGTaux() {
        return $this->codeCSGTaux;
    }

    /**
     * Get the code calcul.
     *
     * @return string Returns the code calcul.
     */
    public function getCodeCalcul() {
        return $this->codeCalcul;
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
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
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
     * Get the code rds.
     *
     * @return string Returns the code rds.
     */
    public function getCodeRds() {
        return $this->codeRds;
    }

    /**
     * Get the code type assurance.
     *
     * @return string Returns the code type assurance.
     */
    public function getCodeTypeAssurance() {
        return $this->codeTypeAssurance;
    }

    /**
     * Get the code type b plaf.
     *
     * @return string Returns the code type b plaf.
     */
    public function getCodeTypeBPlaf() {
        return $this->codeTypeBPlaf;
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
     * Get the code type brut.
     *
     * @return string Returns the code type brut.
     */
    public function getCodeTypeBrut() {
        return $this->codeTypeBrut;
    }

    /**
     * Get the code type prev.
     *
     * @return string Returns the code type prev.
     */
    public function getCodeTypePrev() {
        return $this->codeTypePrev;
    }

    /**
     * Get the code type somme.
     *
     * @return string Returns the code type somme.
     */
    public function getCodeTypeSomme() {
        return $this->codeTypeSomme;
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
     * Get the condition.
     *
     * @return string Returns the condition.
     */
    public function getCondition() {
        return $this->condition;
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
     * Get the conge paye.
     *
     * @return boolean Returns the conge paye.
     */
    public function getCongePaye() {
        return $this->congePaye;
    }

    /**
     * Get the cotis normal dues.
     *
     * @return boolean Returns the cotis normal dues.
     */
    public function getCotisNormalDues() {
        return $this->cotisNormalDues;
    }

    /**
     * Get the cotis normal dues a c c r e.
     *
     * @return boolean Returns the cotis normal dues a c c r e.
     */
    public function getCotisNormalDuesACCRE() {
        return $this->cotisNormalDuesACCRE;
    }

    /**
     * Get the cotis normal dues z f u.
     *
     * @return boolean Returns the cotis normal dues z f u.
     */
    public function getCotisNormalDuesZFU() {
        return $this->cotisNormalDuesZFU;
    }

    /**
     * Get the cotis normal dues z r d.
     *
     * @return boolean Returns the cotis normal dues z r d.
     */
    public function getCotisNormalDuesZRD() {
        return $this->cotisNormalDuesZRD;
    }

    /**
     * Get the cotis normal dues z r r z r u.
     *
     * @return boolean Returns the cotis normal dues z r r z r u.
     */
    public function getCotisNormalDuesZRRZRU() {
        return $this->cotisNormalDuesZRRZRU;
    }

    /**
     * Get the cotisation c s g.
     *
     * @return boolean Returns the cotisation c s g.
     */
    public function getCotisationCSG() {
        return $this->cotisationCSG;
    }

    /**
     * Get the cout global.
     *
     * @return boolean Returns the cout global.
     */
    public function getCoutGlobal() {
        return $this->coutGlobal;
    }

    /**
     * Get the deb per application.
     *
     * @return DateTime Returns the deb per application.
     */
    public function getDebPerApplication() {
        return $this->debPerApplication;
    }

    /**
     * Get the determine allegement.
     *
     * @return boolean Returns the determine allegement.
     */
    public function getDetermineAllegement() {
        return $this->determineAllegement;
    }

    /**
     * Get the determine base secu.
     *
     * @return boolean Returns the determine base secu.
     */
    public function getDetermineBaseSecu() {
        return $this->determineBaseSecu;
    }

    /**
     * Get the diminue net.
     *
     * @return boolean Returns the diminue net.
     */
    public function getDiminueNet() {
        return $this->diminueNet;
    }

    /**
     * Get the edition base.
     *
     * @return boolean Returns the edition base.
     */
    public function getEditionBase() {
        return $this->editionBase;
    }

    /**
     * Get the edition bulletin.
     *
     * @return boolean Returns the edition bulletin.
     */
    public function getEditionBulletin() {
        return $this->editionBulletin;
    }

    /**
     * Get the edition cot patronale.
     *
     * @return boolean Returns the edition cot patronale.
     */
    public function getEditionCotPatronale() {
        return $this->editionCotPatronale;
    }

    /**
     * Get the edition forcee d s.
     *
     * @return boolean Returns the edition forcee d s.
     */
    public function getEditionForceeDS() {
        return $this->editionForceeDS;
    }

    /**
     * Get the edition resultat.
     *
     * @return boolean Returns the edition resultat.
     */
    public function getEditionResultat() {
        return $this->editionResultat;
    }

    /**
     * Get the edition taux.
     *
     * @return boolean Returns the edition taux.
     */
    public function getEditionTaux() {
        return $this->editionTaux;
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
     * Get the exo occasionnel m s a.
     *
     * @return boolean Returns the exo occasionnel m s a.
     */
    public function getExoOccasionnelMSA() {
        return $this->exoOccasionnelMSA;
    }

    /**
     * Get the exo taux patronal.
     *
     * @return boolean Returns the exo taux patronal.
     */
    public function getExoTauxPatronal() {
        return $this->exoTauxPatronal;
    }

    /**
     * Get the expatriation.
     *
     * @return boolean Returns the expatriation.
     */
    public function getExpatriation() {
        return $this->expatriation;
    }

    /**
     * Get the fillon a d o m.
     *
     * @return boolean Returns the fillon a d o m.
     */
    public function getFillonADOM() {
        return $this->fillonADOM;
    }

    /**
     * Get the fillon s a p.
     *
     * @return boolean Returns the fillon s a p.
     */
    public function getFillonSAP() {
        return $this->fillonSAP;
    }

    /**
     * Get the fin per application.
     *
     * @return DateTime Returns the fin per application.
     */
    public function getFinPerApplication() {
        return $this->finPerApplication;
    }

    /**
     * Get the frais professionnel.
     *
     * @return boolean Returns the frais professionnel.
     */
    public function getFraisProfessionnel() {
        return $this->fraisProfessionnel;
    }

    /**
     * Get the frais sante.
     *
     * @return boolean Returns the frais sante.
     */
    public function getFraisSante() {
        return $this->fraisSante;
    }

    /**
     * Get the freq1.
     *
     * @return boolean Returns the freq1.
     */
    public function getFreq1() {
        return $this->freq1;
    }

    /**
     * Get the freq10.
     *
     * @return boolean Returns the freq10.
     */
    public function getFreq10() {
        return $this->freq10;
    }

    /**
     * Get the freq11.
     *
     * @return boolean Returns the freq11.
     */
    public function getFreq11() {
        return $this->freq11;
    }

    /**
     * Get the freq12.
     *
     * @return boolean Returns the freq12.
     */
    public function getFreq12() {
        return $this->freq12;
    }

    /**
     * Get the freq2.
     *
     * @return boolean Returns the freq2.
     */
    public function getFreq2() {
        return $this->freq2;
    }

    /**
     * Get the freq3.
     *
     * @return boolean Returns the freq3.
     */
    public function getFreq3() {
        return $this->freq3;
    }

    /**
     * Get the freq4.
     *
     * @return boolean Returns the freq4.
     */
    public function getFreq4() {
        return $this->freq4;
    }

    /**
     * Get the freq5.
     *
     * @return boolean Returns the freq5.
     */
    public function getFreq5() {
        return $this->freq5;
    }

    /**
     * Get the freq6.
     *
     * @return boolean Returns the freq6.
     */
    public function getFreq6() {
        return $this->freq6;
    }

    /**
     * Get the freq7.
     *
     * @return boolean Returns the freq7.
     */
    public function getFreq7() {
        return $this->freq7;
    }

    /**
     * Get the freq8.
     *
     * @return boolean Returns the freq8.
     */
    public function getFreq8() {
        return $this->freq8;
    }

    /**
     * Get the freq9.
     *
     * @return boolean Returns the freq9.
     */
    public function getFreq9() {
        return $this->freq9;
    }

    /**
     * Get the h sup loi t e p a.
     *
     * @return boolean Returns the h sup loi t e p a.
     */
    public function getHSupLoiTEPA() {
        return $this->hSupLoiTEPA;
    }

    /**
     * Get the h sup structurelle.
     *
     * @return boolean Returns the h sup structurelle.
     */
    public function getHSupStructurelle() {
        return $this->hSupStructurelle;
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
     * Get the ijss.
     *
     * @return boolean Returns the ijss.
     */
    public function getIjss() {
        return $this->ijss;
    }

    /**
     * Get the imput epargne ret.
     *
     * @return boolean Returns the imput epargne ret.
     */
    public function getImputEpargneRet() {
        return $this->imputEpargneRet;
    }

    /**
     * Get the indemnite non imposable.
     *
     * @return boolean Returns the indemnite non imposable.
     */
    public function getIndemniteNonImposable() {
        return $this->indemniteNonImposable;
    }

    /**
     * Get the intervient brutal.
     *
     * @return boolean Returns the intervient brutal.
     */
    public function getIntervientBrutal() {
        return $this->intervientBrutal;
    }

    /**
     * Get the intervient indem preca.
     *
     * @return boolean Returns the intervient indem preca.
     */
    public function getIntervientIndemPreca() {
        return $this->intervientIndemPreca;
    }

    /**
     * Get the intervient taux h ab cp.
     *
     * @return string Returns the intervient taux h ab cp.
     */
    public function getIntervientTauxHAbCp() {
        return $this->intervientTauxHAbCp;
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
     * Get the intitule ducs.
     *
     * @return string Returns the intitule ducs.
     */
    public function getIntituleDucs() {
        return $this->intituleDucs;
    }

    /**
     * Get the maintien salaire.
     *
     * @return boolean Returns the maintien salaire.
     */
    public function getMaintienSalaire() {
        return $this->maintienSalaire;
    }

    /**
     * Get the mois deb fixe.
     *
     * @return string Returns the mois deb fixe.
     */
    public function getMoisDebFixe() {
        return $this->moisDebFixe;
    }

    /**
     * Get the mois echu.
     *
     * @return boolean Returns the mois echu.
     */
    public function getMoisEchu() {
        return $this->moisEchu;
    }

    /**
     * Get the mois fin fixe.
     *
     * @return string Returns the mois fin fixe.
     */
    public function getMoisFinFixe() {
        return $this->moisFinFixe;
    }

    /**
     * Get the montant global.
     *
     * @return float Returns the montant global.
     */
    public function getMontantGlobal() {
        return $this->montantGlobal;
    }

    /**
     * Get the montant salarial.
     *
     * @return float Returns the montant salarial.
     */
    public function getMontantSalarial() {
        return $this->montantSalarial;
    }

    /**
     * Get the nb h contract.
     *
     * @return float Returns the nb h contract.
     */
    public function getNbHContract() {
        return $this->nbHContract;
    }

    /**
     * Get the nb mois applic.
     *
     * @return int Returns the nb mois applic.
     */
    public function getNbMoisApplic() {
        return $this->nbMoisApplic;
    }

    /**
     * Get the neutre.
     *
     * @return boolean Returns the neutre.
     */
    public function getNeutre() {
        return $this->neutre;
    }

    /**
     * Get the num col acbs.
     *
     * @return string Returns the num col acbs.
     */
    public function getNumColAcbs() {
        return $this->numColAcbs;
    }

    /**
     * Get the num col allege35h.
     *
     * @return string Returns the num col allege35h.
     */
    public function getNumColAllege35h() {
        return $this->numColAllege35h;
    }

    /**
     * Get the num col charges cafe.
     *
     * @return string Returns the num col charges cafe.
     */
    public function getNumColChargesCafe() {
        return $this->numColChargesCafe;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin() {
        return $this->numCumulBulletin;
    }

    /**
     * Get the num cumul patron.
     *
     * @return int Returns the num cumul patron.
     */
    public function getNumCumulPatron() {
        return $this->numCumulPatron;
    }

    /**
     * Get the num taux const nat.
     *
     * @return int Returns the num taux const nat.
     */
    public function getNumTauxConstNat() {
        return $this->numTauxConstNat;
    }

    /**
     * Get the part patron prevoyance.
     *
     * @return boolean Returns the part patron prevoyance.
     */
    public function getPartPatronPrevoyance() {
        return $this->partPatronPrevoyance;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the pourboire.
     *
     * @return boolean Returns the pourboire.
     */
    public function getPourboire() {
        return $this->pourboire;
    }

    /**
     * Get the prevoyance.
     *
     * @return boolean Returns the prevoyance.
     */
    public function getPrevoyance() {
        return $this->prevoyance;
    }

    /**
     * Get the prevoyance comp.
     *
     * @return boolean Returns the prevoyance comp.
     */
    public function getPrevoyanceComp() {
        return $this->prevoyanceComp;
    }

    /**
     * Get the prime non proratisee.
     *
     * @return boolean Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee() {
        return $this->primeNonProratisee;
    }

    /**
     * Get the prime servitude travail.
     *
     * @return boolean Returns the prime servitude travail.
     */
    public function getPrimeServitudeTravail() {
        return $this->primeServitudeTravail;
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
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Get the regle taux.
     *
     * @return string Returns the regle taux.
     */
    public function getRegleTaux() {
        return $this->regleTaux;
    }

    /**
     * Get the remise a zero.
     *
     * @return boolean Returns the remise a zero.
     */
    public function getRemiseAZero() {
        return $this->remiseAZero;
    }

    /**
     * Get the result mt.
     *
     * @return boolean Returns the result mt.
     */
    public function getResultMt() {
        return $this->resultMt;
    }

    /**
     * Get the resultat ducs.
     *
     * @return boolean Returns the resultat ducs.
     */
    public function getResultatDucs() {
        return $this->resultatDucs;
    }

    /**
     * Get the retenue salaire.
     *
     * @return boolean Returns the retenue salaire.
     */
    public function getRetenueSalaire() {
        return $this->retenueSalaire;
    }

    /**
     * Get the retenue source.
     *
     * @return boolean Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Get the retraite obligatoire.
     *
     * @return boolean Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire() {
        return $this->retraiteObligatoire;
    }

    /**
     * Get the retraite supp.
     *
     * @return boolean Returns the retraite supp.
     */
    public function getRetraiteSupp() {
        return $this->retraiteSupp;
    }

    /**
     * Get the salaire c p.
     *
     * @return boolean Returns the salaire c p.
     */
    public function getSalaireCP() {
        return $this->salaireCP;
    }

    /**
     * Get the sans reintegration sociale.
     *
     * @return boolean Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale() {
        return $this->sansReintegrationSociale;
    }

    /**
     * Get the soumis abattement.
     *
     * @return boolean Returns the soumis abattement.
     */
    public function getSoumisAbattement() {
        return $this->soumisAbattement;
    }

    /**
     * Get the soumis c r d s100.
     *
     * @return boolean Returns the soumis c r d s100.
     */
    public function getSoumisCRDS100() {
        return $this->soumisCRDS100;
    }

    /**
     * Get the soumis c s g.
     *
     * @return boolean Returns the soumis c s g.
     */
    public function getSoumisCSG() {
        return $this->soumisCSG;
    }

    /**
     * Get the soumis c s g100.
     *
     * @return boolean Returns the soumis c s g100.
     */
    public function getSoumisCSG100() {
        return $this->soumisCSG100;
    }

    /**
     * Get the soumis forfait social.
     *
     * @return boolean Returns the soumis forfait social.
     */
    public function getSoumisForfaitSocial() {
        return $this->soumisForfaitSocial;
    }

    /**
     * Get the soumis r d s.
     *
     * @return boolean Returns the soumis r d s.
     */
    public function getSoumisRDS() {
        return $this->soumisRDS;
    }

    /**
     * Get the taux du libelle.
     *
     * @return boolean Returns the taux du libelle.
     */
    public function getTauxDuLibelle() {
        return $this->tauxDuLibelle;
    }

    /**
     * Get the taux forfait social.
     *
     * @return string Returns the taux forfait social.
     */
    public function getTauxForfaitSocial() {
        return $this->tauxForfaitSocial;
    }

    /**
     * Get the taux patronal d a d s u.
     *
     * @return float Returns the taux patronal d a d s u.
     */
    public function getTauxPatronalDADSU() {
        return $this->tauxPatronalDADSU;
    }

    /**
     * Get the taux salarial d a d s u.
     *
     * @return float Returns the taux salarial d a d s u.
     */
    public function getTauxSalarialDADSU() {
        return $this->tauxSalarialDADSU;
    }

    /**
     * Get the type absence h sup.
     *
     * @return string Returns the type absence h sup.
     */
    public function getTypeAbsenceHSup() {
        return $this->typeAbsenceHSup;
    }

    /**
     * Get the type avantage.
     *
     * @return string Returns the type avantage.
     */
    public function getTypeAvantage() {
        return $this->typeAvantage;
    }

    /**
     * Get the type base cotisation.
     *
     * @return string Returns the type base cotisation.
     */
    public function getTypeBaseCotisation() {
        return $this->typeBaseCotisation;
    }

    /**
     * Get the type cotis.
     *
     * @return string Returns the type cotis.
     */
    public function getTypeCotis() {
        return $this->typeCotis;
    }

    /**
     * Get the type date anc.
     *
     * @return int Returns the type date anc.
     */
    public function getTypeDateAnc() {
        return $this->typeDateAnc;
    }

    /**
     * Get the type donnee d a d s u.
     *
     * @return string Returns the type donnee d a d s u.
     */
    public function getTypeDonneeDADSU() {
        return $this->typeDonneeDADSU;
    }

    /**
     * Get the type frais.
     *
     * @return string Returns the type frais.
     */
    public function getTypeFrais() {
        return $this->typeFrais;
    }

    /**
     * Get the type h e fillon.
     *
     * @return string Returns the type h e fillon.
     */
    public function getTypeHEFillon() {
        return $this->typeHEFillon;
    }

    /**
     * Get the type h sup loi t e p a.
     *
     * @return string Returns the type h sup loi t e p a.
     */
    public function getTypeHSupLoiTEPA() {
        return $this->typeHSupLoiTEPA;
    }

    /**
     * Get the type heure.
     *
     * @return string Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Get the type heure sup.
     *
     * @return string Returns the type heure sup.
     */
    public function getTypeHeureSup() {
        return $this->typeHeureSup;
    }

    /**
     * Get the type orga.
     *
     * @return string Returns the type orga.
     */
    public function getTypeOrga() {
        return $this->typeOrga;
    }

    /**
     * Get the type proratisation prime.
     *
     * @return string Returns the type proratisation prime.
     */
    public function getTypeProratisationPrime() {
        return $this->typeProratisationPrime;
    }

    /**
     * Get the type tranche.
     *
     * @return string Returns the type tranche.
     */
    public function getTypeTranche() {
        return $this->typeTranche;
    }

    /**
     * Set the a compter heures assedic.
     *
     * @param boolean $aCompterHeuresAssedic The a compter heures assedic.
     * @return Libelles Returns this libelles.
     */
    public function setACompterHeuresAssedic($aCompterHeuresAssedic) {
        $this->aCompterHeuresAssedic = $aCompterHeuresAssedic;
        return $this;
    }

    /**
     * Set the a conserver s e t p.
     *
     * @param boolean $aConserverSETP The a conserver s e t p.
     * @return Libelles Returns this libelles.
     */
    public function setAConserverSETP($aConserverSETP) {
        $this->aConserverSETP = $aConserverSETP;
        return $this;
    }

    /**
     * Set the a cumuler base c p.
     *
     * @param boolean $aCumulerBaseCP The a cumuler base c p.
     * @return Libelles Returns this libelles.
     */
    public function setACumulerBaseCP($aCumulerBaseCP) {
        $this->aCumulerBaseCP = $aCumulerBaseCP;
        return $this;
    }

    /**
     * Set the a cumuler base caisse1.
     *
     * @param boolean $aCumulerBaseCaisse1 The a cumuler base caisse1.
     * @return Libelles Returns this libelles.
     */
    public function setACumulerBaseCaisse1($aCumulerBaseCaisse1) {
        $this->aCumulerBaseCaisse1 = $aCumulerBaseCaisse1;
        return $this;
    }

    /**
     * Set the a cumuler base caisse2.
     *
     * @param boolean $aCumulerBaseCaisse2 The a cumuler base caisse2.
     * @return Libelles Returns this libelles.
     */
    public function setACumulerBaseCaisse2($aCumulerBaseCaisse2) {
        $this->aCumulerBaseCaisse2 = $aCumulerBaseCaisse2;
        return $this;
    }

    /**
     * Set the a cumuler base caisse3.
     *
     * @param boolean $aCumulerBaseCaisse3 The a cumuler base caisse3.
     * @return Libelles Returns this libelles.
     */
    public function setACumulerBaseCaisse3($aCumulerBaseCaisse3) {
        $this->aCumulerBaseCaisse3 = $aCumulerBaseCaisse3;
        return $this;
    }

    /**
     * Set the a cumuler base secu.
     *
     * @param boolean $aCumulerBaseSecu The a cumuler base secu.
     * @return Libelles Returns this libelles.
     */
    public function setACumulerBaseSecu($aCumulerBaseSecu) {
        $this->aCumulerBaseSecu = $aCumulerBaseSecu;
        return $this;
    }

    /**
     * Set the a e n lien presence effective.
     *
     * @param boolean $aENLienPresenceEffective The a e n lien presence effective.
     * @return Libelles Returns this libelles.
     */
    public function setAENLienPresenceEffective($aENLienPresenceEffective) {
        $this->aENLienPresenceEffective = $aENLienPresenceEffective;
        return $this;
    }

    /**
     * Set the a reintegrer s e t p.
     *
     * @param boolean $aReintegrerSETP The a reintegrer s e t p.
     * @return Libelles Returns this libelles.
     */
    public function setAReintegrerSETP($aReintegrerSETP) {
        $this->aReintegrerSETP = $aReintegrerSETP;
        return $this;
    }

    /**
     * Set the active variables emp.
     *
     * @param boolean $activeVariablesEmp The active variables emp.
     * @return Libelles Returns this libelles.
     */
    public function setActiveVariablesEmp($activeVariablesEmp) {
        $this->activeVariablesEmp = $activeVariablesEmp;
        return $this;
    }

    /**
     * Set the agff.
     *
     * @param boolean $agff The agff.
     * @return Libelles Returns this libelles.
     */
    public function setAgff($agff) {
        $this->agff = $agff;
        return $this;
    }

    /**
     * Set the avantage nature prime.
     *
     * @param boolean $avantageNaturePrime The avantage nature prime.
     * @return Libelles Returns this libelles.
     */
    public function setAvantageNaturePrime($avantageNaturePrime) {
        $this->avantageNaturePrime = $avantageNaturePrime;
        return $this;
    }

    /**
     * Set the avantage nature t d s.
     *
     * @param boolean $avantageNatureTDS The avantage nature t d s.
     * @return Libelles Returns this libelles.
     */
    public function setAvantageNatureTDS($avantageNatureTDS) {
        $this->avantageNatureTDS = $avantageNatureTDS;
        return $this;
    }

    /**
     * Set the avec retro act.
     *
     * @param boolean $avecRetroAct The avec retro act.
     * @return Libelles Returns this libelles.
     */
    public function setAvecRetroAct($avecRetroAct) {
        $this->avecRetroAct = $avecRetroAct;
        return $this;
    }

    /**
     * Set the base exoneree.
     *
     * @param boolean $baseExoneree The base exoneree.
     * @return Libelles Returns this libelles.
     */
    public function setBaseExoneree($baseExoneree) {
        $this->baseExoneree = $baseExoneree;
        return $this;
    }

    /**
     * Set the base non exoneree.
     *
     * @param boolean $baseNonExoneree The base non exoneree.
     * @return Libelles Returns this libelles.
     */
    public function setBaseNonExoneree($baseNonExoneree) {
        $this->baseNonExoneree = $baseNonExoneree;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     * @return Libelles Returns this libelles.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the cheque vacance.
     *
     * @param boolean $chequeVacance The cheque vacance.
     * @return Libelles Returns this libelles.
     */
    public function setChequeVacance($chequeVacance) {
        $this->chequeVacance = $chequeVacance;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Libelles Returns this libelles.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code c s g taux.
     *
     * @param string $codeCSGTaux The code c s g taux.
     * @return Libelles Returns this libelles.
     */
    public function setCodeCSGTaux($codeCSGTaux) {
        $this->codeCSGTaux = $codeCSGTaux;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param string $codeCalcul The code calcul.
     * @return Libelles Returns this libelles.
     */
    public function setCodeCalcul($codeCalcul) {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     * @return Libelles Returns this libelles.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string $codeEditionHisto The code edition histo.
     * @return Libelles Returns this libelles.
     */
    public function setCodeEditionHisto($codeEditionHisto) {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return Libelles Returns this libelles.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return Libelles Returns this libelles.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code rds.
     *
     * @param string $codeRds The code rds.
     * @return Libelles Returns this libelles.
     */
    public function setCodeRds($codeRds) {
        $this->codeRds = $codeRds;
        return $this;
    }

    /**
     * Set the code type assurance.
     *
     * @param string $codeTypeAssurance The code type assurance.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypeAssurance($codeTypeAssurance) {
        $this->codeTypeAssurance = $codeTypeAssurance;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string $codeTypeBPlaf The code type b plaf.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypeBPlaf($codeTypeBPlaf) {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
        return $this;
    }

    /**
     * Set the code type b spec prev.
     *
     * @param string $codeTypeBSpecPrev The code type b spec prev.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypeBSpecPrev($codeTypeBSpecPrev) {
        $this->codeTypeBSpecPrev = $codeTypeBSpecPrev;
        return $this;
    }

    /**
     * Set the code type brut.
     *
     * @param string $codeTypeBrut The code type brut.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypeBrut($codeTypeBrut) {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type prev.
     *
     * @param string $codeTypePrev The code type prev.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypePrev($codeTypePrev) {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string $codeTypeSomme The code type somme.
     * @return Libelles Returns this libelles.
     */
    public function setCodeTypeSomme($codeTypeSomme) {
        $this->codeTypeSomme = $codeTypeSomme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     * @return Libelles Returns this libelles.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition.
     *
     * @param string $condition The condition.
     * @return Libelles Returns this libelles.
     */
    public function setCondition($condition) {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     * @return Libelles Returns this libelles.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the conge paye.
     *
     * @param boolean $congePaye The conge paye.
     * @return Libelles Returns this libelles.
     */
    public function setCongePaye($congePaye) {
        $this->congePaye = $congePaye;
        return $this;
    }

    /**
     * Set the cotis normal dues.
     *
     * @param boolean $cotisNormalDues The cotis normal dues.
     * @return Libelles Returns this libelles.
     */
    public function setCotisNormalDues($cotisNormalDues) {
        $this->cotisNormalDues = $cotisNormalDues;
        return $this;
    }

    /**
     * Set the cotis normal dues a c c r e.
     *
     * @param boolean $cotisNormalDuesACCRE The cotis normal dues a c c r e.
     * @return Libelles Returns this libelles.
     */
    public function setCotisNormalDuesACCRE($cotisNormalDuesACCRE) {
        $this->cotisNormalDuesACCRE = $cotisNormalDuesACCRE;
        return $this;
    }

    /**
     * Set the cotis normal dues z f u.
     *
     * @param boolean $cotisNormalDuesZFU The cotis normal dues z f u.
     * @return Libelles Returns this libelles.
     */
    public function setCotisNormalDuesZFU($cotisNormalDuesZFU) {
        $this->cotisNormalDuesZFU = $cotisNormalDuesZFU;
        return $this;
    }

    /**
     * Set the cotis normal dues z r d.
     *
     * @param boolean $cotisNormalDuesZRD The cotis normal dues z r d.
     * @return Libelles Returns this libelles.
     */
    public function setCotisNormalDuesZRD($cotisNormalDuesZRD) {
        $this->cotisNormalDuesZRD = $cotisNormalDuesZRD;
        return $this;
    }

    /**
     * Set the cotis normal dues z r r z r u.
     *
     * @param boolean $cotisNormalDuesZRRZRU The cotis normal dues z r r z r u.
     * @return Libelles Returns this libelles.
     */
    public function setCotisNormalDuesZRRZRU($cotisNormalDuesZRRZRU) {
        $this->cotisNormalDuesZRRZRU = $cotisNormalDuesZRRZRU;
        return $this;
    }

    /**
     * Set the cotisation c s g.
     *
     * @param boolean $cotisationCSG The cotisation c s g.
     * @return Libelles Returns this libelles.
     */
    public function setCotisationCSG($cotisationCSG) {
        $this->cotisationCSG = $cotisationCSG;
        return $this;
    }

    /**
     * Set the cout global.
     *
     * @param boolean $coutGlobal The cout global.
     * @return Libelles Returns this libelles.
     */
    public function setCoutGlobal($coutGlobal) {
        $this->coutGlobal = $coutGlobal;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime $debPerApplication The deb per application.
     * @return Libelles Returns this libelles.
     */
    public function setDebPerApplication(DateTime $debPerApplication = null) {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the determine allegement.
     *
     * @param boolean $determineAllegement The determine allegement.
     * @return Libelles Returns this libelles.
     */
    public function setDetermineAllegement($determineAllegement) {
        $this->determineAllegement = $determineAllegement;
        return $this;
    }

    /**
     * Set the determine base secu.
     *
     * @param boolean $determineBaseSecu The determine base secu.
     * @return Libelles Returns this libelles.
     */
    public function setDetermineBaseSecu($determineBaseSecu) {
        $this->determineBaseSecu = $determineBaseSecu;
        return $this;
    }

    /**
     * Set the diminue net.
     *
     * @param boolean $diminueNet The diminue net.
     * @return Libelles Returns this libelles.
     */
    public function setDiminueNet($diminueNet) {
        $this->diminueNet = $diminueNet;
        return $this;
    }

    /**
     * Set the edition base.
     *
     * @param boolean $editionBase The edition base.
     * @return Libelles Returns this libelles.
     */
    public function setEditionBase($editionBase) {
        $this->editionBase = $editionBase;
        return $this;
    }

    /**
     * Set the edition bulletin.
     *
     * @param boolean $editionBulletin The edition bulletin.
     * @return Libelles Returns this libelles.
     */
    public function setEditionBulletin($editionBulletin) {
        $this->editionBulletin = $editionBulletin;
        return $this;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param boolean $editionCotPatronale The edition cot patronale.
     * @return Libelles Returns this libelles.
     */
    public function setEditionCotPatronale($editionCotPatronale) {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }

    /**
     * Set the edition forcee d s.
     *
     * @param boolean $editionForceeDS The edition forcee d s.
     * @return Libelles Returns this libelles.
     */
    public function setEditionForceeDS($editionForceeDS) {
        $this->editionForceeDS = $editionForceeDS;
        return $this;
    }

    /**
     * Set the edition resultat.
     *
     * @param boolean $editionResultat The edition resultat.
     * @return Libelles Returns this libelles.
     */
    public function setEditionResultat($editionResultat) {
        $this->editionResultat = $editionResultat;
        return $this;
    }

    /**
     * Set the edition taux.
     *
     * @param boolean $editionTaux The edition taux.
     * @return Libelles Returns this libelles.
     */
    public function setEditionTaux($editionTaux) {
        $this->editionTaux = $editionTaux;
        return $this;
    }

    /**
     * Set the exclure loi t e p a.
     *
     * @param boolean $exclureLoiTEPA The exclure loi t e p a.
     * @return Libelles Returns this libelles.
     */
    public function setExclureLoiTEPA($exclureLoiTEPA) {
        $this->exclureLoiTEPA = $exclureLoiTEPA;
        return $this;
    }

    /**
     * Set the exo occasionnel m s a.
     *
     * @param boolean $exoOccasionnelMSA The exo occasionnel m s a.
     * @return Libelles Returns this libelles.
     */
    public function setExoOccasionnelMSA($exoOccasionnelMSA) {
        $this->exoOccasionnelMSA = $exoOccasionnelMSA;
        return $this;
    }

    /**
     * Set the exo taux patronal.
     *
     * @param boolean $exoTauxPatronal The exo taux patronal.
     * @return Libelles Returns this libelles.
     */
    public function setExoTauxPatronal($exoTauxPatronal) {
        $this->exoTauxPatronal = $exoTauxPatronal;
        return $this;
    }

    /**
     * Set the expatriation.
     *
     * @param boolean $expatriation The expatriation.
     * @return Libelles Returns this libelles.
     */
    public function setExpatriation($expatriation) {
        $this->expatriation = $expatriation;
        return $this;
    }

    /**
     * Set the fillon a d o m.
     *
     * @param boolean $fillonADOM The fillon a d o m.
     * @return Libelles Returns this libelles.
     */
    public function setFillonADOM($fillonADOM) {
        $this->fillonADOM = $fillonADOM;
        return $this;
    }

    /**
     * Set the fillon s a p.
     *
     * @param boolean $fillonSAP The fillon s a p.
     * @return Libelles Returns this libelles.
     */
    public function setFillonSAP($fillonSAP) {
        $this->fillonSAP = $fillonSAP;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime $finPerApplication The fin per application.
     * @return Libelles Returns this libelles.
     */
    public function setFinPerApplication(DateTime $finPerApplication = null) {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the frais professionnel.
     *
     * @param boolean $fraisProfessionnel The frais professionnel.
     * @return Libelles Returns this libelles.
     */
    public function setFraisProfessionnel($fraisProfessionnel) {
        $this->fraisProfessionnel = $fraisProfessionnel;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param boolean $fraisSante The frais sante.
     * @return Libelles Returns this libelles.
     */
    public function setFraisSante($fraisSante) {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param boolean $freq1 The freq1.
     * @return Libelles Returns this libelles.
     */
    public function setFreq1($freq1) {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param boolean $freq10 The freq10.
     * @return Libelles Returns this libelles.
     */
    public function setFreq10($freq10) {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param boolean $freq11 The freq11.
     * @return Libelles Returns this libelles.
     */
    public function setFreq11($freq11) {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param boolean $freq12 The freq12.
     * @return Libelles Returns this libelles.
     */
    public function setFreq12($freq12) {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param boolean $freq2 The freq2.
     * @return Libelles Returns this libelles.
     */
    public function setFreq2($freq2) {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param boolean $freq3 The freq3.
     * @return Libelles Returns this libelles.
     */
    public function setFreq3($freq3) {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param boolean $freq4 The freq4.
     * @return Libelles Returns this libelles.
     */
    public function setFreq4($freq4) {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param boolean $freq5 The freq5.
     * @return Libelles Returns this libelles.
     */
    public function setFreq5($freq5) {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param boolean $freq6 The freq6.
     * @return Libelles Returns this libelles.
     */
    public function setFreq6($freq6) {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param boolean $freq7 The freq7.
     * @return Libelles Returns this libelles.
     */
    public function setFreq7($freq7) {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param boolean $freq8 The freq8.
     * @return Libelles Returns this libelles.
     */
    public function setFreq8($freq8) {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param boolean $freq9 The freq9.
     * @return Libelles Returns this libelles.
     */
    public function setFreq9($freq9) {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the h sup loi t e p a.
     *
     * @param boolean $hSupLoiTEPA The h sup loi t e p a.
     * @return Libelles Returns this libelles.
     */
    public function setHSupLoiTEPA($hSupLoiTEPA) {
        $this->hSupLoiTEPA = $hSupLoiTEPA;
        return $this;
    }

    /**
     * Set the h sup structurelle.
     *
     * @param boolean $hSupStructurelle The h sup structurelle.
     * @return Libelles Returns this libelles.
     */
    public function setHSupStructurelle($hSupStructurelle) {
        $this->hSupStructurelle = $hSupStructurelle;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return Libelles Returns this libelles.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the ijss.
     *
     * @param boolean $ijss The ijss.
     * @return Libelles Returns this libelles.
     */
    public function setIjss($ijss) {
        $this->ijss = $ijss;
        return $this;
    }

    /**
     * Set the imput epargne ret.
     *
     * @param boolean $imputEpargneRet The imput epargne ret.
     * @return Libelles Returns this libelles.
     */
    public function setImputEpargneRet($imputEpargneRet) {
        $this->imputEpargneRet = $imputEpargneRet;
        return $this;
    }

    /**
     * Set the indemnite non imposable.
     *
     * @param boolean $indemniteNonImposable The indemnite non imposable.
     * @return Libelles Returns this libelles.
     */
    public function setIndemniteNonImposable($indemniteNonImposable) {
        $this->indemniteNonImposable = $indemniteNonImposable;
        return $this;
    }

    /**
     * Set the intervient brutal.
     *
     * @param boolean $intervientBrutal The intervient brutal.
     * @return Libelles Returns this libelles.
     */
    public function setIntervientBrutal($intervientBrutal) {
        $this->intervientBrutal = $intervientBrutal;
        return $this;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param boolean $intervientIndemPreca The intervient indem preca.
     * @return Libelles Returns this libelles.
     */
    public function setIntervientIndemPreca($intervientIndemPreca) {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string $intervientTauxHAbCp The intervient taux h ab cp.
     * @return Libelles Returns this libelles.
     */
    public function setIntervientTauxHAbCp($intervientTauxHAbCp) {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Libelles Returns this libelles.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule ducs.
     *
     * @param string $intituleDucs The intitule ducs.
     * @return Libelles Returns this libelles.
     */
    public function setIntituleDucs($intituleDucs) {
        $this->intituleDucs = $intituleDucs;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param boolean $maintienSalaire The maintien salaire.
     * @return Libelles Returns this libelles.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string $moisDebFixe The mois deb fixe.
     * @return Libelles Returns this libelles.
     */
    public function setMoisDebFixe($moisDebFixe) {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }

    /**
     * Set the mois echu.
     *
     * @param boolean $moisEchu The mois echu.
     * @return Libelles Returns this libelles.
     */
    public function setMoisEchu($moisEchu) {
        $this->moisEchu = $moisEchu;
        return $this;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string $moisFinFixe The mois fin fixe.
     * @return Libelles Returns this libelles.
     */
    public function setMoisFinFixe($moisFinFixe) {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }

    /**
     * Set the montant global.
     *
     * @param float $montantGlobal The montant global.
     * @return Libelles Returns this libelles.
     */
    public function setMontantGlobal($montantGlobal) {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }

    /**
     * Set the montant salarial.
     *
     * @param float $montantSalarial The montant salarial.
     * @return Libelles Returns this libelles.
     */
    public function setMontantSalarial($montantSalarial) {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float $nbHContract The nb h contract.
     * @return Libelles Returns this libelles.
     */
    public function setNbHContract($nbHContract) {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb mois applic.
     *
     * @param int $nbMoisApplic The nb mois applic.
     * @return Libelles Returns this libelles.
     */
    public function setNbMoisApplic($nbMoisApplic) {
        $this->nbMoisApplic = $nbMoisApplic;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param boolean $neutre The neutre.
     * @return Libelles Returns this libelles.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the num col acbs.
     *
     * @param string $numColAcbs The num col acbs.
     * @return Libelles Returns this libelles.
     */
    public function setNumColAcbs($numColAcbs) {
        $this->numColAcbs = $numColAcbs;
        return $this;
    }

    /**
     * Set the num col allege35h.
     *
     * @param string $numColAllege35h The num col allege35h.
     * @return Libelles Returns this libelles.
     */
    public function setNumColAllege35h($numColAllege35h) {
        $this->numColAllege35h = $numColAllege35h;
        return $this;
    }

    /**
     * Set the num col charges cafe.
     *
     * @param string $numColChargesCafe The num col charges cafe.
     * @return Libelles Returns this libelles.
     */
    public function setNumColChargesCafe($numColChargesCafe) {
        $this->numColChargesCafe = $numColChargesCafe;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int $numCumulBulletin The num cumul bulletin.
     * @return Libelles Returns this libelles.
     */
    public function setNumCumulBulletin($numCumulBulletin) {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int $numCumulPatron The num cumul patron.
     * @return Libelles Returns this libelles.
     */
    public function setNumCumulPatron($numCumulPatron) {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }

    /**
     * Set the num taux const nat.
     *
     * @param int $numTauxConstNat The num taux const nat.
     * @return Libelles Returns this libelles.
     */
    public function setNumTauxConstNat($numTauxConstNat) {
        $this->numTauxConstNat = $numTauxConstNat;
        return $this;
    }

    /**
     * Set the part patron prevoyance.
     *
     * @param boolean $partPatronPrevoyance The part patron prevoyance.
     * @return Libelles Returns this libelles.
     */
    public function setPartPatronPrevoyance($partPatronPrevoyance) {
        $this->partPatronPrevoyance = $partPatronPrevoyance;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return Libelles Returns this libelles.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the pourboire.
     *
     * @param boolean $pourboire The pourboire.
     * @return Libelles Returns this libelles.
     */
    public function setPourboire($pourboire) {
        $this->pourboire = $pourboire;
        return $this;
    }

    /**
     * Set the prevoyance.
     *
     * @param boolean $prevoyance The prevoyance.
     * @return Libelles Returns this libelles.
     */
    public function setPrevoyance($prevoyance) {
        $this->prevoyance = $prevoyance;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param boolean $prevoyanceComp The prevoyance comp.
     * @return Libelles Returns this libelles.
     */
    public function setPrevoyanceComp($prevoyanceComp) {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param boolean $primeNonProratisee The prime non proratisee.
     * @return Libelles Returns this libelles.
     */
    public function setPrimeNonProratisee($primeNonProratisee) {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }

    /**
     * Set the prime servitude travail.
     *
     * @param boolean $primeServitudeTravail The prime servitude travail.
     * @return Libelles Returns this libelles.
     */
    public function setPrimeServitudeTravail($primeServitudeTravail) {
        $this->primeServitudeTravail = $primeServitudeTravail;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     * @return Libelles Returns this libelles.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     * @return Libelles Returns this libelles.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regle taux.
     *
     * @param string $regleTaux The regle taux.
     * @return Libelles Returns this libelles.
     */
    public function setRegleTaux($regleTaux) {
        $this->regleTaux = $regleTaux;
        return $this;
    }

    /**
     * Set the remise a zero.
     *
     * @param boolean $remiseAZero The remise a zero.
     * @return Libelles Returns this libelles.
     */
    public function setRemiseAZero($remiseAZero) {
        $this->remiseAZero = $remiseAZero;
        return $this;
    }

    /**
     * Set the result mt.
     *
     * @param boolean $resultMt The result mt.
     * @return Libelles Returns this libelles.
     */
    public function setResultMt($resultMt) {
        $this->resultMt = $resultMt;
        return $this;
    }

    /**
     * Set the resultat ducs.
     *
     * @param boolean $resultatDucs The resultat ducs.
     * @return Libelles Returns this libelles.
     */
    public function setResultatDucs($resultatDucs) {
        $this->resultatDucs = $resultatDucs;
        return $this;
    }

    /**
     * Set the retenue salaire.
     *
     * @param boolean $retenueSalaire The retenue salaire.
     * @return Libelles Returns this libelles.
     */
    public function setRetenueSalaire($retenueSalaire) {
        $this->retenueSalaire = $retenueSalaire;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param boolean $retenueSource The retenue source.
     * @return Libelles Returns this libelles.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param boolean $retraiteObligatoire The retraite obligatoire.
     * @return Libelles Returns this libelles.
     */
    public function setRetraiteObligatoire($retraiteObligatoire) {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param boolean $retraiteSupp The retraite supp.
     * @return Libelles Returns this libelles.
     */
    public function setRetraiteSupp($retraiteSupp) {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the salaire c p.
     *
     * @param boolean $salaireCP The salaire c p.
     * @return Libelles Returns this libelles.
     */
    public function setSalaireCP($salaireCP) {
        $this->salaireCP = $salaireCP;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param boolean $sansReintegrationSociale The sans reintegration sociale.
     * @return Libelles Returns this libelles.
     */
    public function setSansReintegrationSociale($sansReintegrationSociale) {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis abattement.
     *
     * @param boolean $soumisAbattement The soumis abattement.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisAbattement($soumisAbattement) {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }

    /**
     * Set the soumis c r d s100.
     *
     * @param boolean $soumisCRDS100 The soumis c r d s100.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisCRDS100($soumisCRDS100) {
        $this->soumisCRDS100 = $soumisCRDS100;
        return $this;
    }

    /**
     * Set the soumis c s g.
     *
     * @param boolean $soumisCSG The soumis c s g.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisCSG($soumisCSG) {
        $this->soumisCSG = $soumisCSG;
        return $this;
    }

    /**
     * Set the soumis c s g100.
     *
     * @param boolean $soumisCSG100 The soumis c s g100.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisCSG100($soumisCSG100) {
        $this->soumisCSG100 = $soumisCSG100;
        return $this;
    }

    /**
     * Set the soumis forfait social.
     *
     * @param boolean $soumisForfaitSocial The soumis forfait social.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisForfaitSocial($soumisForfaitSocial) {
        $this->soumisForfaitSocial = $soumisForfaitSocial;
        return $this;
    }

    /**
     * Set the soumis r d s.
     *
     * @param boolean $soumisRDS The soumis r d s.
     * @return Libelles Returns this libelles.
     */
    public function setSoumisRDS($soumisRDS) {
        $this->soumisRDS = $soumisRDS;
        return $this;
    }

    /**
     * Set the taux du libelle.
     *
     * @param boolean $tauxDuLibelle The taux du libelle.
     * @return Libelles Returns this libelles.
     */
    public function setTauxDuLibelle($tauxDuLibelle) {
        $this->tauxDuLibelle = $tauxDuLibelle;
        return $this;
    }

    /**
     * Set the taux forfait social.
     *
     * @param string $tauxForfaitSocial The taux forfait social.
     * @return Libelles Returns this libelles.
     */
    public function setTauxForfaitSocial($tauxForfaitSocial) {
        $this->tauxForfaitSocial = $tauxForfaitSocial;
        return $this;
    }

    /**
     * Set the taux patronal d a d s u.
     *
     * @param float $tauxPatronalDADSU The taux patronal d a d s u.
     * @return Libelles Returns this libelles.
     */
    public function setTauxPatronalDADSU($tauxPatronalDADSU) {
        $this->tauxPatronalDADSU = $tauxPatronalDADSU;
        return $this;
    }

    /**
     * Set the taux salarial d a d s u.
     *
     * @param float $tauxSalarialDADSU The taux salarial d a d s u.
     * @return Libelles Returns this libelles.
     */
    public function setTauxSalarialDADSU($tauxSalarialDADSU) {
        $this->tauxSalarialDADSU = $tauxSalarialDADSU;
        return $this;
    }

    /**
     * Set the type absence h sup.
     *
     * @param string $typeAbsenceHSup The type absence h sup.
     * @return Libelles Returns this libelles.
     */
    public function setTypeAbsenceHSup($typeAbsenceHSup) {
        $this->typeAbsenceHSup = $typeAbsenceHSup;
        return $this;
    }

    /**
     * Set the type avantage.
     *
     * @param string $typeAvantage The type avantage.
     * @return Libelles Returns this libelles.
     */
    public function setTypeAvantage($typeAvantage) {
        $this->typeAvantage = $typeAvantage;
        return $this;
    }

    /**
     * Set the type base cotisation.
     *
     * @param string $typeBaseCotisation The type base cotisation.
     * @return Libelles Returns this libelles.
     */
    public function setTypeBaseCotisation($typeBaseCotisation) {
        $this->typeBaseCotisation = $typeBaseCotisation;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string $typeCotis The type cotis.
     * @return Libelles Returns this libelles.
     */
    public function setTypeCotis($typeCotis) {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the type date anc.
     *
     * @param int $typeDateAnc The type date anc.
     * @return Libelles Returns this libelles.
     */
    public function setTypeDateAnc($typeDateAnc) {
        $this->typeDateAnc = $typeDateAnc;
        return $this;
    }

    /**
     * Set the type donnee d a d s u.
     *
     * @param string $typeDonneeDADSU The type donnee d a d s u.
     * @return Libelles Returns this libelles.
     */
    public function setTypeDonneeDADSU($typeDonneeDADSU) {
        $this->typeDonneeDADSU = $typeDonneeDADSU;
        return $this;
    }

    /**
     * Set the type frais.
     *
     * @param string $typeFrais The type frais.
     * @return Libelles Returns this libelles.
     */
    public function setTypeFrais($typeFrais) {
        $this->typeFrais = $typeFrais;
        return $this;
    }

    /**
     * Set the type h e fillon.
     *
     * @param string $typeHEFillon The type h e fillon.
     * @return Libelles Returns this libelles.
     */
    public function setTypeHEFillon($typeHEFillon) {
        $this->typeHEFillon = $typeHEFillon;
        return $this;
    }

    /**
     * Set the type h sup loi t e p a.
     *
     * @param string $typeHSupLoiTEPA The type h sup loi t e p a.
     * @return Libelles Returns this libelles.
     */
    public function setTypeHSupLoiTEPA($typeHSupLoiTEPA) {
        $this->typeHSupLoiTEPA = $typeHSupLoiTEPA;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     * @return Libelles Returns this libelles.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type heure sup.
     *
     * @param string $typeHeureSup The type heure sup.
     * @return Libelles Returns this libelles.
     */
    public function setTypeHeureSup($typeHeureSup) {
        $this->typeHeureSup = $typeHeureSup;
        return $this;
    }

    /**
     * Set the type orga.
     *
     * @param string $typeOrga The type orga.
     * @return Libelles Returns this libelles.
     */
    public function setTypeOrga($typeOrga) {
        $this->typeOrga = $typeOrga;
        return $this;
    }

    /**
     * Set the type proratisation prime.
     *
     * @param string $typeProratisationPrime The type proratisation prime.
     * @return Libelles Returns this libelles.
     */
    public function setTypeProratisationPrime($typeProratisationPrime) {
        $this->typeProratisationPrime = $typeProratisationPrime;
        return $this;
    }

    /**
     * Set the type tranche.
     *
     * @param string $typeTranche The type tranche.
     * @return Libelles Returns this libelles.
     */
    public function setTypeTranche($typeTranche) {
        $this->typeTranche = $typeTranche;
        return $this;
    }

}
