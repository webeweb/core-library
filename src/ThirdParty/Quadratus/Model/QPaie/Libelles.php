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
 * Libelles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Libelles {

    /**
     * A compter heures assedic.
     *
     * @var bool
     */
    private $aCompterHeuresAssedic;

    /**
     * A conserver setp.
     *
     * @var bool
     */
    private $aConserverSetp;

    /**
     * A cumuler base caisse1.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse1;

    /**
     * A cumuler base caisse2.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse2;

    /**
     * A cumuler base caisse3.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse3;

    /**
     * A cumuler base cp.
     *
     * @var bool
     */
    private $aCumulerBaseCp;

    /**
     * A cumuler base secu.
     *
     * @var bool
     */
    private $aCumulerBaseSecu;

    /**
     * A reintegrer setp.
     *
     * @var bool
     */
    private $aReintegrerSetp;

    /**
     * Active variables emp.
     *
     * @var bool
     */
    private $activeVariablesEmp;

    /**
     * Aen lien presence effective.
     *
     * @var bool
     */
    private $aenLienPresenceEffective;

    /**
     * Agff.
     *
     * @var bool
     */
    private $agff;

    /**
     * Avantage nature prime.
     *
     * @var bool
     */
    private $avantageNaturePrime;

    /**
     * Avantage nature tds.
     *
     * @var bool
     */
    private $avantageNatureTds;

    /**
     * Avec retro act.
     *
     * @var bool
     */
    private $avecRetroAct;

    /**
     * Base exoneree.
     *
     * @var bool
     */
    private $baseExoneree;

    /**
     * Base non exoneree.
     *
     * @var bool
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
     * @var bool
     */
    private $chequeVacance;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code calcul.
     *
     * @var string
     */
    private $codeCalcul;

    /**
     * Code csg taux.
     *
     * @var string
     */
    private $codeCsgTaux;

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
     * @var bool
     */
    private $congePaye;

    /**
     * Cotis normal dues.
     *
     * @var bool
     */
    private $cotisNormalDues;

    /**
     * Cotis normal dues accre.
     *
     * @var bool
     */
    private $cotisNormalDuesAccre;

    /**
     * Cotis normal dues zfu.
     *
     * @var bool
     */
    private $cotisNormalDuesZfu;

    /**
     * Cotis normal dues zrd.
     *
     * @var bool
     */
    private $cotisNormalDuesZrd;

    /**
     * Cotis normal dues zrrzru.
     *
     * @var bool
     */
    private $cotisNormalDuesZrrzru;

    /**
     * Cotisation csg.
     *
     * @var bool
     */
    private $cotisationCsg;

    /**
     * Cout global.
     *
     * @var bool
     */
    private $coutGlobal;

    /**
     * Deb per application.
     *
     * @var DateTime|null
     */
    private $debPerApplication;

    /**
     * Determine allegement.
     *
     * @var bool
     */
    private $determineAllegement;

    /**
     * Determine base secu.
     *
     * @var bool
     */
    private $determineBaseSecu;

    /**
     * Diminue net.
     *
     * @var bool
     */
    private $diminueNet;

    /**
     * Edition base.
     *
     * @var bool
     */
    private $editionBase;

    /**
     * Edition bulletin.
     *
     * @var bool
     */
    private $editionBulletin;

    /**
     * Edition cot patronale.
     *
     * @var bool
     */
    private $editionCotPatronale;

    /**
     * Edition forcee ds.
     *
     * @var bool
     */
    private $editionForceeDs;

    /**
     * Edition resultat.
     *
     * @var bool
     */
    private $editionResultat;

    /**
     * Edition taux.
     *
     * @var bool
     */
    private $editionTaux;

    /**
     * Exclure loi tepa.
     *
     * @var bool
     */
    private $exclureLoiTepa;

    /**
     * Exo occasionnel msa.
     *
     * @var bool
     */
    private $exoOccasionnelMsa;

    /**
     * Exo taux patronal.
     *
     * @var bool
     */
    private $exoTauxPatronal;

    /**
     * Expatriation.
     *
     * @var bool
     */
    private $expatriation;

    /**
     * Fillon adom.
     *
     * @var bool
     */
    private $fillonAdom;

    /**
     * Fillon sap.
     *
     * @var bool
     */
    private $fillonSap;

    /**
     * Fin per application.
     *
     * @var DateTime|null
     */
    private $finPerApplication;

    /**
     * Frais professionnel.
     *
     * @var bool
     */
    private $fraisProfessionnel;

    /**
     * Frais sante.
     *
     * @var bool
     */
    private $fraisSante;

    /**
     * Freq1.
     *
     * @var bool
     */
    private $freq1;

    /**
     * Freq10.
     *
     * @var bool
     */
    private $freq10;

    /**
     * Freq11.
     *
     * @var bool
     */
    private $freq11;

    /**
     * Freq12.
     *
     * @var bool
     */
    private $freq12;

    /**
     * Freq2.
     *
     * @var bool
     */
    private $freq2;

    /**
     * Freq3.
     *
     * @var bool
     */
    private $freq3;

    /**
     * Freq4.
     *
     * @var bool
     */
    private $freq4;

    /**
     * Freq5.
     *
     * @var bool
     */
    private $freq5;

    /**
     * Freq6.
     *
     * @var bool
     */
    private $freq6;

    /**
     * Freq7.
     *
     * @var bool
     */
    private $freq7;

    /**
     * Freq8.
     *
     * @var bool
     */
    private $freq8;

    /**
     * Freq9.
     *
     * @var bool
     */
    private $freq9;

    /**
     * H sup loi tepa.
     *
     * @var bool
     */
    private $hSupLoiTepa;

    /**
     * H sup structurelle.
     *
     * @var bool
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
     * @var bool
     */
    private $ijss;

    /**
     * Imput epargne ret.
     *
     * @var bool
     */
    private $imputEpargneRet;

    /**
     * Indemnite non imposable.
     *
     * @var bool
     */
    private $indemniteNonImposable;

    /**
     * Intervient brut al.
     *
     * @var bool
     */
    private $intervientBrutAl;

    /**
     * Intervient indem preca.
     *
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * @var bool
     */
    private $pourboire;

    /**
     * Prevoyance.
     *
     * @var bool
     */
    private $prevoyance;

    /**
     * Prevoyance comp.
     *
     * @var bool
     */
    private $prevoyanceComp;

    /**
     * Prime non proratisee.
     *
     * @var bool
     */
    private $primeNonProratisee;

    /**
     * Prime servitude travail.
     *
     * @var bool
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
     * @var bool
     */
    private $remiseAZero;

    /**
     * Result mt.
     *
     * @var bool
     */
    private $resultMt;

    /**
     * Resultat ducs.
     *
     * @var bool
     */
    private $resultatDucs;

    /**
     * Retenue salaire.
     *
     * @var bool
     */
    private $retenueSalaire;

    /**
     * Retenue source.
     *
     * @var bool
     */
    private $retenueSource;

    /**
     * Retraite obligatoire.
     *
     * @var bool
     */
    private $retraiteObligatoire;

    /**
     * Retraite supp.
     *
     * @var bool
     */
    private $retraiteSupp;

    /**
     * Salaire cp.
     *
     * @var bool
     */
    private $salaireCp;

    /**
     * Sans reintegration sociale.
     *
     * @var bool
     */
    private $sansReintegrationSociale;

    /**
     * Soumis abattement.
     *
     * @var bool
     */
    private $soumisAbattement;

    /**
     * Soumis crds100.
     *
     * @var bool
     */
    private $soumisCrds100;

    /**
     * Soumis csg.
     *
     * @var bool
     */
    private $soumisCsg;

    /**
     * Soumis csg100.
     *
     * @var bool
     */
    private $soumisCsg100;

    /**
     * Soumis forfait social.
     *
     * @var bool
     */
    private $soumisForfaitSocial;

    /**
     * Soumis rds.
     *
     * @var bool
     */
    private $soumisRds;

    /**
     * Taux du libelle.
     *
     * @var bool
     */
    private $tauxDuLibelle;

    /**
     * Taux forfait social.
     *
     * @var string
     */
    private $tauxForfaitSocial;

    /**
     * Taux patronal dadsu.
     *
     * @var float
     */
    private $tauxPatronalDadsu;

    /**
     * Taux salarial dadsu.
     *
     * @var float
     */
    private $tauxSalarialDadsu;

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
     * Type donnee dadsu.
     *
     * @var string
     */
    private $typeDonneeDadsu;

    /**
     * Type frais.
     *
     * @var string
     */
    private $typeFrais;

    /**
     * Type h sup loi tepa.
     *
     * @var string
     */
    private $typeHSupLoiTepa;

    /**
     * Type he fillon.
     *
     * @var string
     */
    private $typeHeFillon;

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
     * @return bool Returns the a compter heures assedic.
     */
    public function getACompterHeuresAssedic() {
        return $this->aCompterHeuresAssedic;
    }

    /**
     * Get the a conserver setp.
     *
     * @return bool Returns the a conserver setp.
     */
    public function getAConserverSetp() {
        return $this->aConserverSetp;
    }

    /**
     * Get the a cumuler base caisse1.
     *
     * @return bool Returns the a cumuler base caisse1.
     */
    public function getACumulerBaseCaisse1() {
        return $this->aCumulerBaseCaisse1;
    }

    /**
     * Get the a cumuler base caisse2.
     *
     * @return bool Returns the a cumuler base caisse2.
     */
    public function getACumulerBaseCaisse2() {
        return $this->aCumulerBaseCaisse2;
    }

    /**
     * Get the a cumuler base caisse3.
     *
     * @return bool Returns the a cumuler base caisse3.
     */
    public function getACumulerBaseCaisse3() {
        return $this->aCumulerBaseCaisse3;
    }

    /**
     * Get the a cumuler base cp.
     *
     * @return bool Returns the a cumuler base cp.
     */
    public function getACumulerBaseCp() {
        return $this->aCumulerBaseCp;
    }

    /**
     * Get the a cumuler base secu.
     *
     * @return bool Returns the a cumuler base secu.
     */
    public function getACumulerBaseSecu() {
        return $this->aCumulerBaseSecu;
    }

    /**
     * Get the a reintegrer setp.
     *
     * @return bool Returns the a reintegrer setp.
     */
    public function getAReintegrerSetp() {
        return $this->aReintegrerSetp;
    }

    /**
     * Get the active variables emp.
     *
     * @return bool Returns the active variables emp.
     */
    public function getActiveVariablesEmp() {
        return $this->activeVariablesEmp;
    }

    /**
     * Get the aen lien presence effective.
     *
     * @return bool Returns the aen lien presence effective.
     */
    public function getAenLienPresenceEffective() {
        return $this->aenLienPresenceEffective;
    }

    /**
     * Get the agff.
     *
     * @return bool Returns the agff.
     */
    public function getAgff() {
        return $this->agff;
    }

    /**
     * Get the avantage nature prime.
     *
     * @return bool Returns the avantage nature prime.
     */
    public function getAvantageNaturePrime() {
        return $this->avantageNaturePrime;
    }

    /**
     * Get the avantage nature tds.
     *
     * @return bool Returns the avantage nature tds.
     */
    public function getAvantageNatureTds() {
        return $this->avantageNatureTds;
    }

    /**
     * Get the avec retro act.
     *
     * @return bool Returns the avec retro act.
     */
    public function getAvecRetroAct() {
        return $this->avecRetroAct;
    }

    /**
     * Get the base exoneree.
     *
     * @return bool Returns the base exoneree.
     */
    public function getBaseExoneree() {
        return $this->baseExoneree;
    }

    /**
     * Get the base non exoneree.
     *
     * @return bool Returns the base non exoneree.
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
     * @return bool Returns the cheque vacance.
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
     * Get the code calcul.
     *
     * @return string Returns the code calcul.
     */
    public function getCodeCalcul() {
        return $this->codeCalcul;
    }

    /**
     * Get the code csg taux.
     *
     * @return string Returns the code csg taux.
     */
    public function getCodeCsgTaux() {
        return $this->codeCsgTaux;
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
     * @return bool Returns the conge paye.
     */
    public function getCongePaye() {
        return $this->congePaye;
    }

    /**
     * Get the cotis normal dues.
     *
     * @return bool Returns the cotis normal dues.
     */
    public function getCotisNormalDues() {
        return $this->cotisNormalDues;
    }

    /**
     * Get the cotis normal dues accre.
     *
     * @return bool Returns the cotis normal dues accre.
     */
    public function getCotisNormalDuesAccre() {
        return $this->cotisNormalDuesAccre;
    }

    /**
     * Get the cotis normal dues zfu.
     *
     * @return bool Returns the cotis normal dues zfu.
     */
    public function getCotisNormalDuesZfu() {
        return $this->cotisNormalDuesZfu;
    }

    /**
     * Get the cotis normal dues zrd.
     *
     * @return bool Returns the cotis normal dues zrd.
     */
    public function getCotisNormalDuesZrd() {
        return $this->cotisNormalDuesZrd;
    }

    /**
     * Get the cotis normal dues zrrzru.
     *
     * @return bool Returns the cotis normal dues zrrzru.
     */
    public function getCotisNormalDuesZrrzru() {
        return $this->cotisNormalDuesZrrzru;
    }

    /**
     * Get the cotisation csg.
     *
     * @return bool Returns the cotisation csg.
     */
    public function getCotisationCsg() {
        return $this->cotisationCsg;
    }

    /**
     * Get the cout global.
     *
     * @return bool Returns the cout global.
     */
    public function getCoutGlobal() {
        return $this->coutGlobal;
    }

    /**
     * Get the deb per application.
     *
     * @return DateTime|null Returns the deb per application.
     */
    public function getDebPerApplication() {
        return $this->debPerApplication;
    }

    /**
     * Get the determine allegement.
     *
     * @return bool Returns the determine allegement.
     */
    public function getDetermineAllegement() {
        return $this->determineAllegement;
    }

    /**
     * Get the determine base secu.
     *
     * @return bool Returns the determine base secu.
     */
    public function getDetermineBaseSecu() {
        return $this->determineBaseSecu;
    }

    /**
     * Get the diminue net.
     *
     * @return bool Returns the diminue net.
     */
    public function getDiminueNet() {
        return $this->diminueNet;
    }

    /**
     * Get the edition base.
     *
     * @return bool Returns the edition base.
     */
    public function getEditionBase() {
        return $this->editionBase;
    }

    /**
     * Get the edition bulletin.
     *
     * @return bool Returns the edition bulletin.
     */
    public function getEditionBulletin() {
        return $this->editionBulletin;
    }

    /**
     * Get the edition cot patronale.
     *
     * @return bool Returns the edition cot patronale.
     */
    public function getEditionCotPatronale() {
        return $this->editionCotPatronale;
    }

    /**
     * Get the edition forcee ds.
     *
     * @return bool Returns the edition forcee ds.
     */
    public function getEditionForceeDs() {
        return $this->editionForceeDs;
    }

    /**
     * Get the edition resultat.
     *
     * @return bool Returns the edition resultat.
     */
    public function getEditionResultat() {
        return $this->editionResultat;
    }

    /**
     * Get the edition taux.
     *
     * @return bool Returns the edition taux.
     */
    public function getEditionTaux() {
        return $this->editionTaux;
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
     * Get the exo occasionnel msa.
     *
     * @return bool Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa() {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Get the exo taux patronal.
     *
     * @return bool Returns the exo taux patronal.
     */
    public function getExoTauxPatronal() {
        return $this->exoTauxPatronal;
    }

    /**
     * Get the expatriation.
     *
     * @return bool Returns the expatriation.
     */
    public function getExpatriation() {
        return $this->expatriation;
    }

    /**
     * Get the fillon adom.
     *
     * @return bool Returns the fillon adom.
     */
    public function getFillonAdom() {
        return $this->fillonAdom;
    }

    /**
     * Get the fillon sap.
     *
     * @return bool Returns the fillon sap.
     */
    public function getFillonSap() {
        return $this->fillonSap;
    }

    /**
     * Get the fin per application.
     *
     * @return DateTime|null Returns the fin per application.
     */
    public function getFinPerApplication() {
        return $this->finPerApplication;
    }

    /**
     * Get the frais professionnel.
     *
     * @return bool Returns the frais professionnel.
     */
    public function getFraisProfessionnel() {
        return $this->fraisProfessionnel;
    }

    /**
     * Get the frais sante.
     *
     * @return bool Returns the frais sante.
     */
    public function getFraisSante() {
        return $this->fraisSante;
    }

    /**
     * Get the freq1.
     *
     * @return bool Returns the freq1.
     */
    public function getFreq1() {
        return $this->freq1;
    }

    /**
     * Get the freq10.
     *
     * @return bool Returns the freq10.
     */
    public function getFreq10() {
        return $this->freq10;
    }

    /**
     * Get the freq11.
     *
     * @return bool Returns the freq11.
     */
    public function getFreq11() {
        return $this->freq11;
    }

    /**
     * Get the freq12.
     *
     * @return bool Returns the freq12.
     */
    public function getFreq12() {
        return $this->freq12;
    }

    /**
     * Get the freq2.
     *
     * @return bool Returns the freq2.
     */
    public function getFreq2() {
        return $this->freq2;
    }

    /**
     * Get the freq3.
     *
     * @return bool Returns the freq3.
     */
    public function getFreq3() {
        return $this->freq3;
    }

    /**
     * Get the freq4.
     *
     * @return bool Returns the freq4.
     */
    public function getFreq4() {
        return $this->freq4;
    }

    /**
     * Get the freq5.
     *
     * @return bool Returns the freq5.
     */
    public function getFreq5() {
        return $this->freq5;
    }

    /**
     * Get the freq6.
     *
     * @return bool Returns the freq6.
     */
    public function getFreq6() {
        return $this->freq6;
    }

    /**
     * Get the freq7.
     *
     * @return bool Returns the freq7.
     */
    public function getFreq7() {
        return $this->freq7;
    }

    /**
     * Get the freq8.
     *
     * @return bool Returns the freq8.
     */
    public function getFreq8() {
        return $this->freq8;
    }

    /**
     * Get the freq9.
     *
     * @return bool Returns the freq9.
     */
    public function getFreq9() {
        return $this->freq9;
    }

    /**
     * Get the h sup loi tepa.
     *
     * @return bool Returns the h sup loi tepa.
     */
    public function getHSupLoiTepa() {
        return $this->hSupLoiTepa;
    }

    /**
     * Get the h sup structurelle.
     *
     * @return bool Returns the h sup structurelle.
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
     * @return bool Returns the ijss.
     */
    public function getIjss() {
        return $this->ijss;
    }

    /**
     * Get the imput epargne ret.
     *
     * @return bool Returns the imput epargne ret.
     */
    public function getImputEpargneRet() {
        return $this->imputEpargneRet;
    }

    /**
     * Get the indemnite non imposable.
     *
     * @return bool Returns the indemnite non imposable.
     */
    public function getIndemniteNonImposable() {
        return $this->indemniteNonImposable;
    }

    /**
     * Get the intervient brut al.
     *
     * @return bool Returns the intervient brut al.
     */
    public function getIntervientBrutAl() {
        return $this->intervientBrutAl;
    }

    /**
     * Get the intervient indem preca.
     *
     * @return bool Returns the intervient indem preca.
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
     * @return bool Returns the maintien salaire.
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
     * @return bool Returns the mois echu.
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
     * @return bool Returns the neutre.
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
     * @return bool Returns the part patron prevoyance.
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
     * @return bool Returns the pourboire.
     */
    public function getPourboire() {
        return $this->pourboire;
    }

    /**
     * Get the prevoyance.
     *
     * @return bool Returns the prevoyance.
     */
    public function getPrevoyance() {
        return $this->prevoyance;
    }

    /**
     * Get the prevoyance comp.
     *
     * @return bool Returns the prevoyance comp.
     */
    public function getPrevoyanceComp() {
        return $this->prevoyanceComp;
    }

    /**
     * Get the prime non proratisee.
     *
     * @return bool Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee() {
        return $this->primeNonProratisee;
    }

    /**
     * Get the prime servitude travail.
     *
     * @return bool Returns the prime servitude travail.
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
     * @return bool Returns the remise a zero.
     */
    public function getRemiseAZero() {
        return $this->remiseAZero;
    }

    /**
     * Get the result mt.
     *
     * @return bool Returns the result mt.
     */
    public function getResultMt() {
        return $this->resultMt;
    }

    /**
     * Get the resultat ducs.
     *
     * @return bool Returns the resultat ducs.
     */
    public function getResultatDucs() {
        return $this->resultatDucs;
    }

    /**
     * Get the retenue salaire.
     *
     * @return bool Returns the retenue salaire.
     */
    public function getRetenueSalaire() {
        return $this->retenueSalaire;
    }

    /**
     * Get the retenue source.
     *
     * @return bool Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Get the retraite obligatoire.
     *
     * @return bool Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire() {
        return $this->retraiteObligatoire;
    }

    /**
     * Get the retraite supp.
     *
     * @return bool Returns the retraite supp.
     */
    public function getRetraiteSupp() {
        return $this->retraiteSupp;
    }

    /**
     * Get the salaire cp.
     *
     * @return bool Returns the salaire cp.
     */
    public function getSalaireCp() {
        return $this->salaireCp;
    }

    /**
     * Get the sans reintegration sociale.
     *
     * @return bool Returns the sans reintegration sociale.
     */
    public function getSansReintegrationSociale() {
        return $this->sansReintegrationSociale;
    }

    /**
     * Get the soumis abattement.
     *
     * @return bool Returns the soumis abattement.
     */
    public function getSoumisAbattement() {
        return $this->soumisAbattement;
    }

    /**
     * Get the soumis crds100.
     *
     * @return bool Returns the soumis crds100.
     */
    public function getSoumisCrds100() {
        return $this->soumisCrds100;
    }

    /**
     * Get the soumis csg.
     *
     * @return bool Returns the soumis csg.
     */
    public function getSoumisCsg() {
        return $this->soumisCsg;
    }

    /**
     * Get the soumis csg100.
     *
     * @return bool Returns the soumis csg100.
     */
    public function getSoumisCsg100() {
        return $this->soumisCsg100;
    }

    /**
     * Get the soumis forfait social.
     *
     * @return bool Returns the soumis forfait social.
     */
    public function getSoumisForfaitSocial() {
        return $this->soumisForfaitSocial;
    }

    /**
     * Get the soumis rds.
     *
     * @return bool Returns the soumis rds.
     */
    public function getSoumisRds() {
        return $this->soumisRds;
    }

    /**
     * Get the taux du libelle.
     *
     * @return bool Returns the taux du libelle.
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
     * Get the taux patronal dadsu.
     *
     * @return float Returns the taux patronal dadsu.
     */
    public function getTauxPatronalDadsu() {
        return $this->tauxPatronalDadsu;
    }

    /**
     * Get the taux salarial dadsu.
     *
     * @return float Returns the taux salarial dadsu.
     */
    public function getTauxSalarialDadsu() {
        return $this->tauxSalarialDadsu;
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
     * Get the type donnee dadsu.
     *
     * @return string Returns the type donnee dadsu.
     */
    public function getTypeDonneeDadsu() {
        return $this->typeDonneeDadsu;
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
     * Get the type h sup loi tepa.
     *
     * @return string Returns the type h sup loi tepa.
     */
    public function getTypeHSupLoiTepa() {
        return $this->typeHSupLoiTepa;
    }

    /**
     * Get the type he fillon.
     *
     * @return string Returns the type he fillon.
     */
    public function getTypeHeFillon() {
        return $this->typeHeFillon;
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
     * @param bool $aCompterHeuresAssedic The a compter heures assedic.
     */
    public function setACompterHeuresAssedic($aCompterHeuresAssedic) {
        $this->aCompterHeuresAssedic = $aCompterHeuresAssedic;
        return $this;
    }

    /**
     * Set the a conserver setp.
     *
     * @param bool $aConserverSetp The a conserver setp.
     */
    public function setAConserverSetp($aConserverSetp) {
        $this->aConserverSetp = $aConserverSetp;
        return $this;
    }

    /**
     * Set the a cumuler base caisse1.
     *
     * @param bool $aCumulerBaseCaisse1 The a cumuler base caisse1.
     */
    public function setACumulerBaseCaisse1($aCumulerBaseCaisse1) {
        $this->aCumulerBaseCaisse1 = $aCumulerBaseCaisse1;
        return $this;
    }

    /**
     * Set the a cumuler base caisse2.
     *
     * @param bool $aCumulerBaseCaisse2 The a cumuler base caisse2.
     */
    public function setACumulerBaseCaisse2($aCumulerBaseCaisse2) {
        $this->aCumulerBaseCaisse2 = $aCumulerBaseCaisse2;
        return $this;
    }

    /**
     * Set the a cumuler base caisse3.
     *
     * @param bool $aCumulerBaseCaisse3 The a cumuler base caisse3.
     */
    public function setACumulerBaseCaisse3($aCumulerBaseCaisse3) {
        $this->aCumulerBaseCaisse3 = $aCumulerBaseCaisse3;
        return $this;
    }

    /**
     * Set the a cumuler base cp.
     *
     * @param bool $aCumulerBaseCp The a cumuler base cp.
     */
    public function setACumulerBaseCp($aCumulerBaseCp) {
        $this->aCumulerBaseCp = $aCumulerBaseCp;
        return $this;
    }

    /**
     * Set the a cumuler base secu.
     *
     * @param bool $aCumulerBaseSecu The a cumuler base secu.
     */
    public function setACumulerBaseSecu($aCumulerBaseSecu) {
        $this->aCumulerBaseSecu = $aCumulerBaseSecu;
        return $this;
    }

    /**
     * Set the a reintegrer setp.
     *
     * @param bool $aReintegrerSetp The a reintegrer setp.
     */
    public function setAReintegrerSetp($aReintegrerSetp) {
        $this->aReintegrerSetp = $aReintegrerSetp;
        return $this;
    }

    /**
     * Set the active variables emp.
     *
     * @param bool $activeVariablesEmp The active variables emp.
     */
    public function setActiveVariablesEmp($activeVariablesEmp) {
        $this->activeVariablesEmp = $activeVariablesEmp;
        return $this;
    }

    /**
     * Set the aen lien presence effective.
     *
     * @param bool $aenLienPresenceEffective The aen lien presence effective.
     */
    public function setAenLienPresenceEffective($aenLienPresenceEffective) {
        $this->aenLienPresenceEffective = $aenLienPresenceEffective;
        return $this;
    }

    /**
     * Set the agff.
     *
     * @param bool $agff The agff.
     */
    public function setAgff($agff) {
        $this->agff = $agff;
        return $this;
    }

    /**
     * Set the avantage nature prime.
     *
     * @param bool $avantageNaturePrime The avantage nature prime.
     */
    public function setAvantageNaturePrime($avantageNaturePrime) {
        $this->avantageNaturePrime = $avantageNaturePrime;
        return $this;
    }

    /**
     * Set the avantage nature tds.
     *
     * @param bool $avantageNatureTds The avantage nature tds.
     */
    public function setAvantageNatureTds($avantageNatureTds) {
        $this->avantageNatureTds = $avantageNatureTds;
        return $this;
    }

    /**
     * Set the avec retro act.
     *
     * @param bool $avecRetroAct The avec retro act.
     */
    public function setAvecRetroAct($avecRetroAct) {
        $this->avecRetroAct = $avecRetroAct;
        return $this;
    }

    /**
     * Set the base exoneree.
     *
     * @param bool $baseExoneree The base exoneree.
     */
    public function setBaseExoneree($baseExoneree) {
        $this->baseExoneree = $baseExoneree;
        return $this;
    }

    /**
     * Set the base non exoneree.
     *
     * @param bool $baseNonExoneree The base non exoneree.
     */
    public function setBaseNonExoneree($baseNonExoneree) {
        $this->baseNonExoneree = $baseNonExoneree;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the cheque vacance.
     *
     * @param bool $chequeVacance The cheque vacance.
     */
    public function setChequeVacance($chequeVacance) {
        $this->chequeVacance = $chequeVacance;
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
     * Set the code calcul.
     *
     * @param string $codeCalcul The code calcul.
     */
    public function setCodeCalcul($codeCalcul) {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the code csg taux.
     *
     * @param string $codeCsgTaux The code csg taux.
     */
    public function setCodeCsgTaux($codeCsgTaux) {
        $this->codeCsgTaux = $codeCsgTaux;
        return $this;
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
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
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
     * Set the code rds.
     *
     * @param string $codeRds The code rds.
     */
    public function setCodeRds($codeRds) {
        $this->codeRds = $codeRds;
        return $this;
    }

    /**
     * Set the code type assurance.
     *
     * @param string $codeTypeAssurance The code type assurance.
     */
    public function setCodeTypeAssurance($codeTypeAssurance) {
        $this->codeTypeAssurance = $codeTypeAssurance;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string $codeTypeBPlaf The code type b plaf.
     */
    public function setCodeTypeBPlaf($codeTypeBPlaf) {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
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
     * Set the code type brut.
     *
     * @param string $codeTypeBrut The code type brut.
     */
    public function setCodeTypeBrut($codeTypeBrut) {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type prev.
     *
     * @param string $codeTypePrev The code type prev.
     */
    public function setCodeTypePrev($codeTypePrev) {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string $codeTypeSomme The code type somme.
     */
    public function setCodeTypeSomme($codeTypeSomme) {
        $this->codeTypeSomme = $codeTypeSomme;
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
     * Set the condition.
     *
     * @param string $condition The condition.
     */
    public function setCondition($condition) {
        $this->condition = $condition;
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
     * Set the conge paye.
     *
     * @param bool $congePaye The conge paye.
     */
    public function setCongePaye($congePaye) {
        $this->congePaye = $congePaye;
        return $this;
    }

    /**
     * Set the cotis normal dues.
     *
     * @param bool $cotisNormalDues The cotis normal dues.
     */
    public function setCotisNormalDues($cotisNormalDues) {
        $this->cotisNormalDues = $cotisNormalDues;
        return $this;
    }

    /**
     * Set the cotis normal dues accre.
     *
     * @param bool $cotisNormalDuesAccre The cotis normal dues accre.
     */
    public function setCotisNormalDuesAccre($cotisNormalDuesAccre) {
        $this->cotisNormalDuesAccre = $cotisNormalDuesAccre;
        return $this;
    }

    /**
     * Set the cotis normal dues zfu.
     *
     * @param bool $cotisNormalDuesZfu The cotis normal dues zfu.
     */
    public function setCotisNormalDuesZfu($cotisNormalDuesZfu) {
        $this->cotisNormalDuesZfu = $cotisNormalDuesZfu;
        return $this;
    }

    /**
     * Set the cotis normal dues zrd.
     *
     * @param bool $cotisNormalDuesZrd The cotis normal dues zrd.
     */
    public function setCotisNormalDuesZrd($cotisNormalDuesZrd) {
        $this->cotisNormalDuesZrd = $cotisNormalDuesZrd;
        return $this;
    }

    /**
     * Set the cotis normal dues zrrzru.
     *
     * @param bool $cotisNormalDuesZrrzru The cotis normal dues zrrzru.
     */
    public function setCotisNormalDuesZrrzru($cotisNormalDuesZrrzru) {
        $this->cotisNormalDuesZrrzru = $cotisNormalDuesZrrzru;
        return $this;
    }

    /**
     * Set the cotisation csg.
     *
     * @param bool $cotisationCsg The cotisation csg.
     */
    public function setCotisationCsg($cotisationCsg) {
        $this->cotisationCsg = $cotisationCsg;
        return $this;
    }

    /**
     * Set the cout global.
     *
     * @param bool $coutGlobal The cout global.
     */
    public function setCoutGlobal($coutGlobal) {
        $this->coutGlobal = $coutGlobal;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     */
    public function setDebPerApplication(DateTime $debPerApplication = null) {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the determine allegement.
     *
     * @param bool $determineAllegement The determine allegement.
     */
    public function setDetermineAllegement($determineAllegement) {
        $this->determineAllegement = $determineAllegement;
        return $this;
    }

    /**
     * Set the determine base secu.
     *
     * @param bool $determineBaseSecu The determine base secu.
     */
    public function setDetermineBaseSecu($determineBaseSecu) {
        $this->determineBaseSecu = $determineBaseSecu;
        return $this;
    }

    /**
     * Set the diminue net.
     *
     * @param bool $diminueNet The diminue net.
     */
    public function setDiminueNet($diminueNet) {
        $this->diminueNet = $diminueNet;
        return $this;
    }

    /**
     * Set the edition base.
     *
     * @param bool $editionBase The edition base.
     */
    public function setEditionBase($editionBase) {
        $this->editionBase = $editionBase;
        return $this;
    }

    /**
     * Set the edition bulletin.
     *
     * @param bool $editionBulletin The edition bulletin.
     */
    public function setEditionBulletin($editionBulletin) {
        $this->editionBulletin = $editionBulletin;
        return $this;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param bool $editionCotPatronale The edition cot patronale.
     */
    public function setEditionCotPatronale($editionCotPatronale) {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param bool $editionForceeDs The edition forcee ds.
     */
    public function setEditionForceeDs($editionForceeDs) {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }

    /**
     * Set the edition resultat.
     *
     * @param bool $editionResultat The edition resultat.
     */
    public function setEditionResultat($editionResultat) {
        $this->editionResultat = $editionResultat;
        return $this;
    }

    /**
     * Set the edition taux.
     *
     * @param bool $editionTaux The edition taux.
     */
    public function setEditionTaux($editionTaux) {
        $this->editionTaux = $editionTaux;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool $exclureLoiTepa The exclure loi tepa.
     */
    public function setExclureLoiTepa($exclureLoiTepa) {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool $exoOccasionnelMsa The exo occasionnel msa.
     */
    public function setExoOccasionnelMsa($exoOccasionnelMsa) {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo taux patronal.
     *
     * @param bool $exoTauxPatronal The exo taux patronal.
     */
    public function setExoTauxPatronal($exoTauxPatronal) {
        $this->exoTauxPatronal = $exoTauxPatronal;
        return $this;
    }

    /**
     * Set the expatriation.
     *
     * @param bool $expatriation The expatriation.
     */
    public function setExpatriation($expatriation) {
        $this->expatriation = $expatriation;
        return $this;
    }

    /**
     * Set the fillon adom.
     *
     * @param bool $fillonAdom The fillon adom.
     */
    public function setFillonAdom($fillonAdom) {
        $this->fillonAdom = $fillonAdom;
        return $this;
    }

    /**
     * Set the fillon sap.
     *
     * @param bool $fillonSap The fillon sap.
     */
    public function setFillonSap($fillonSap) {
        $this->fillonSap = $fillonSap;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     */
    public function setFinPerApplication(DateTime $finPerApplication = null) {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the frais professionnel.
     *
     * @param bool $fraisProfessionnel The frais professionnel.
     */
    public function setFraisProfessionnel($fraisProfessionnel) {
        $this->fraisProfessionnel = $fraisProfessionnel;
        return $this;
    }

    /**
     * Set the frais sante.
     *
     * @param bool $fraisSante The frais sante.
     */
    public function setFraisSante($fraisSante) {
        $this->fraisSante = $fraisSante;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param bool $freq1 The freq1.
     */
    public function setFreq1($freq1) {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param bool $freq10 The freq10.
     */
    public function setFreq10($freq10) {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param bool $freq11 The freq11.
     */
    public function setFreq11($freq11) {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param bool $freq12 The freq12.
     */
    public function setFreq12($freq12) {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param bool $freq2 The freq2.
     */
    public function setFreq2($freq2) {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param bool $freq3 The freq3.
     */
    public function setFreq3($freq3) {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param bool $freq4 The freq4.
     */
    public function setFreq4($freq4) {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param bool $freq5 The freq5.
     */
    public function setFreq5($freq5) {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param bool $freq6 The freq6.
     */
    public function setFreq6($freq6) {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param bool $freq7 The freq7.
     */
    public function setFreq7($freq7) {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param bool $freq8 The freq8.
     */
    public function setFreq8($freq8) {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param bool $freq9 The freq9.
     */
    public function setFreq9($freq9) {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the h sup loi tepa.
     *
     * @param bool $hSupLoiTepa The h sup loi tepa.
     */
    public function setHSupLoiTepa($hSupLoiTepa) {
        $this->hSupLoiTepa = $hSupLoiTepa;
        return $this;
    }

    /**
     * Set the h sup structurelle.
     *
     * @param bool $hSupStructurelle The h sup structurelle.
     */
    public function setHSupStructurelle($hSupStructurelle) {
        $this->hSupStructurelle = $hSupStructurelle;
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
     * Set the ijss.
     *
     * @param bool $ijss The ijss.
     */
    public function setIjss($ijss) {
        $this->ijss = $ijss;
        return $this;
    }

    /**
     * Set the imput epargne ret.
     *
     * @param bool $imputEpargneRet The imput epargne ret.
     */
    public function setImputEpargneRet($imputEpargneRet) {
        $this->imputEpargneRet = $imputEpargneRet;
        return $this;
    }

    /**
     * Set the indemnite non imposable.
     *
     * @param bool $indemniteNonImposable The indemnite non imposable.
     */
    public function setIndemniteNonImposable($indemniteNonImposable) {
        $this->indemniteNonImposable = $indemniteNonImposable;
        return $this;
    }

    /**
     * Set the intervient brut al.
     *
     * @param bool $intervientBrutAl The intervient brut al.
     */
    public function setIntervientBrutAl($intervientBrutAl) {
        $this->intervientBrutAl = $intervientBrutAl;
        return $this;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param bool $intervientIndemPreca The intervient indem preca.
     */
    public function setIntervientIndemPreca($intervientIndemPreca) {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string $intervientTauxHAbCp The intervient taux h ab cp.
     */
    public function setIntervientTauxHAbCp($intervientTauxHAbCp) {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
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
     * Set the intitule ducs.
     *
     * @param string $intituleDucs The intitule ducs.
     */
    public function setIntituleDucs($intituleDucs) {
        $this->intituleDucs = $intituleDucs;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool $maintienSalaire The maintien salaire.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string $moisDebFixe The mois deb fixe.
     */
    public function setMoisDebFixe($moisDebFixe) {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }

    /**
     * Set the mois echu.
     *
     * @param bool $moisEchu The mois echu.
     */
    public function setMoisEchu($moisEchu) {
        $this->moisEchu = $moisEchu;
        return $this;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string $moisFinFixe The mois fin fixe.
     */
    public function setMoisFinFixe($moisFinFixe) {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }

    /**
     * Set the montant global.
     *
     * @param float $montantGlobal The montant global.
     */
    public function setMontantGlobal($montantGlobal) {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }

    /**
     * Set the montant salarial.
     *
     * @param float $montantSalarial The montant salarial.
     */
    public function setMontantSalarial($montantSalarial) {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float $nbHContract The nb h contract.
     */
    public function setNbHContract($nbHContract) {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb mois applic.
     *
     * @param int $nbMoisApplic The nb mois applic.
     */
    public function setNbMoisApplic($nbMoisApplic) {
        $this->nbMoisApplic = $nbMoisApplic;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool $neutre The neutre.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the num col acbs.
     *
     * @param string $numColAcbs The num col acbs.
     */
    public function setNumColAcbs($numColAcbs) {
        $this->numColAcbs = $numColAcbs;
        return $this;
    }

    /**
     * Set the num col allege35h.
     *
     * @param string $numColAllege35h The num col allege35h.
     */
    public function setNumColAllege35h($numColAllege35h) {
        $this->numColAllege35h = $numColAllege35h;
        return $this;
    }

    /**
     * Set the num col charges cafe.
     *
     * @param string $numColChargesCafe The num col charges cafe.
     */
    public function setNumColChargesCafe($numColChargesCafe) {
        $this->numColChargesCafe = $numColChargesCafe;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int $numCumulBulletin The num cumul bulletin.
     */
    public function setNumCumulBulletin($numCumulBulletin) {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int $numCumulPatron The num cumul patron.
     */
    public function setNumCumulPatron($numCumulPatron) {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }

    /**
     * Set the num taux const nat.
     *
     * @param int $numTauxConstNat The num taux const nat.
     */
    public function setNumTauxConstNat($numTauxConstNat) {
        $this->numTauxConstNat = $numTauxConstNat;
        return $this;
    }

    /**
     * Set the part patron prevoyance.
     *
     * @param bool $partPatronPrevoyance The part patron prevoyance.
     */
    public function setPartPatronPrevoyance($partPatronPrevoyance) {
        $this->partPatronPrevoyance = $partPatronPrevoyance;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the pourboire.
     *
     * @param bool $pourboire The pourboire.
     */
    public function setPourboire($pourboire) {
        $this->pourboire = $pourboire;
        return $this;
    }

    /**
     * Set the prevoyance.
     *
     * @param bool $prevoyance The prevoyance.
     */
    public function setPrevoyance($prevoyance) {
        $this->prevoyance = $prevoyance;
        return $this;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param bool $prevoyanceComp The prevoyance comp.
     */
    public function setPrevoyanceComp($prevoyanceComp) {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param bool $primeNonProratisee The prime non proratisee.
     */
    public function setPrimeNonProratisee($primeNonProratisee) {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }

    /**
     * Set the prime servitude travail.
     *
     * @param bool $primeServitudeTravail The prime servitude travail.
     */
    public function setPrimeServitudeTravail($primeServitudeTravail) {
        $this->primeServitudeTravail = $primeServitudeTravail;
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
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regle taux.
     *
     * @param string $regleTaux The regle taux.
     */
    public function setRegleTaux($regleTaux) {
        $this->regleTaux = $regleTaux;
        return $this;
    }

    /**
     * Set the remise a zero.
     *
     * @param bool $remiseAZero The remise a zero.
     */
    public function setRemiseAZero($remiseAZero) {
        $this->remiseAZero = $remiseAZero;
        return $this;
    }

    /**
     * Set the result mt.
     *
     * @param bool $resultMt The result mt.
     */
    public function setResultMt($resultMt) {
        $this->resultMt = $resultMt;
        return $this;
    }

    /**
     * Set the resultat ducs.
     *
     * @param bool $resultatDucs The resultat ducs.
     */
    public function setResultatDucs($resultatDucs) {
        $this->resultatDucs = $resultatDucs;
        return $this;
    }

    /**
     * Set the retenue salaire.
     *
     * @param bool $retenueSalaire The retenue salaire.
     */
    public function setRetenueSalaire($retenueSalaire) {
        $this->retenueSalaire = $retenueSalaire;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param bool $retenueSource The retenue source.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param bool $retraiteObligatoire The retraite obligatoire.
     */
    public function setRetraiteObligatoire($retraiteObligatoire) {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }

    /**
     * Set the retraite supp.
     *
     * @param bool $retraiteSupp The retraite supp.
     */
    public function setRetraiteSupp($retraiteSupp) {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }

    /**
     * Set the salaire cp.
     *
     * @param bool $salaireCp The salaire cp.
     */
    public function setSalaireCp($salaireCp) {
        $this->salaireCp = $salaireCp;
        return $this;
    }

    /**
     * Set the sans reintegration sociale.
     *
     * @param bool $sansReintegrationSociale The sans reintegration sociale.
     */
    public function setSansReintegrationSociale($sansReintegrationSociale) {
        $this->sansReintegrationSociale = $sansReintegrationSociale;
        return $this;
    }

    /**
     * Set the soumis abattement.
     *
     * @param bool $soumisAbattement The soumis abattement.
     */
    public function setSoumisAbattement($soumisAbattement) {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }

    /**
     * Set the soumis crds100.
     *
     * @param bool $soumisCrds100 The soumis crds100.
     */
    public function setSoumisCrds100($soumisCrds100) {
        $this->soumisCrds100 = $soumisCrds100;
        return $this;
    }

    /**
     * Set the soumis csg.
     *
     * @param bool $soumisCsg The soumis csg.
     */
    public function setSoumisCsg($soumisCsg) {
        $this->soumisCsg = $soumisCsg;
        return $this;
    }

    /**
     * Set the soumis csg100.
     *
     * @param bool $soumisCsg100 The soumis csg100.
     */
    public function setSoumisCsg100($soumisCsg100) {
        $this->soumisCsg100 = $soumisCsg100;
        return $this;
    }

    /**
     * Set the soumis forfait social.
     *
     * @param bool $soumisForfaitSocial The soumis forfait social.
     */
    public function setSoumisForfaitSocial($soumisForfaitSocial) {
        $this->soumisForfaitSocial = $soumisForfaitSocial;
        return $this;
    }

    /**
     * Set the soumis rds.
     *
     * @param bool $soumisRds The soumis rds.
     */
    public function setSoumisRds($soumisRds) {
        $this->soumisRds = $soumisRds;
        return $this;
    }

    /**
     * Set the taux du libelle.
     *
     * @param bool $tauxDuLibelle The taux du libelle.
     */
    public function setTauxDuLibelle($tauxDuLibelle) {
        $this->tauxDuLibelle = $tauxDuLibelle;
        return $this;
    }

    /**
     * Set the taux forfait social.
     *
     * @param string $tauxForfaitSocial The taux forfait social.
     */
    public function setTauxForfaitSocial($tauxForfaitSocial) {
        $this->tauxForfaitSocial = $tauxForfaitSocial;
        return $this;
    }

    /**
     * Set the taux patronal dadsu.
     *
     * @param float $tauxPatronalDadsu The taux patronal dadsu.
     */
    public function setTauxPatronalDadsu($tauxPatronalDadsu) {
        $this->tauxPatronalDadsu = $tauxPatronalDadsu;
        return $this;
    }

    /**
     * Set the taux salarial dadsu.
     *
     * @param float $tauxSalarialDadsu The taux salarial dadsu.
     */
    public function setTauxSalarialDadsu($tauxSalarialDadsu) {
        $this->tauxSalarialDadsu = $tauxSalarialDadsu;
        return $this;
    }

    /**
     * Set the type absence h sup.
     *
     * @param string $typeAbsenceHSup The type absence h sup.
     */
    public function setTypeAbsenceHSup($typeAbsenceHSup) {
        $this->typeAbsenceHSup = $typeAbsenceHSup;
        return $this;
    }

    /**
     * Set the type avantage.
     *
     * @param string $typeAvantage The type avantage.
     */
    public function setTypeAvantage($typeAvantage) {
        $this->typeAvantage = $typeAvantage;
        return $this;
    }

    /**
     * Set the type base cotisation.
     *
     * @param string $typeBaseCotisation The type base cotisation.
     */
    public function setTypeBaseCotisation($typeBaseCotisation) {
        $this->typeBaseCotisation = $typeBaseCotisation;
        return $this;
    }

    /**
     * Set the type cotis.
     *
     * @param string $typeCotis The type cotis.
     */
    public function setTypeCotis($typeCotis) {
        $this->typeCotis = $typeCotis;
        return $this;
    }

    /**
     * Set the type date anc.
     *
     * @param int $typeDateAnc The type date anc.
     */
    public function setTypeDateAnc($typeDateAnc) {
        $this->typeDateAnc = $typeDateAnc;
        return $this;
    }

    /**
     * Set the type donnee dadsu.
     *
     * @param string $typeDonneeDadsu The type donnee dadsu.
     */
    public function setTypeDonneeDadsu($typeDonneeDadsu) {
        $this->typeDonneeDadsu = $typeDonneeDadsu;
        return $this;
    }

    /**
     * Set the type frais.
     *
     * @param string $typeFrais The type frais.
     */
    public function setTypeFrais($typeFrais) {
        $this->typeFrais = $typeFrais;
        return $this;
    }

    /**
     * Set the type h sup loi tepa.
     *
     * @param string $typeHSupLoiTepa The type h sup loi tepa.
     */
    public function setTypeHSupLoiTepa($typeHSupLoiTepa) {
        $this->typeHSupLoiTepa = $typeHSupLoiTepa;
        return $this;
    }

    /**
     * Set the type he fillon.
     *
     * @param string $typeHeFillon The type he fillon.
     */
    public function setTypeHeFillon($typeHeFillon) {
        $this->typeHeFillon = $typeHeFillon;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type heure sup.
     *
     * @param string $typeHeureSup The type heure sup.
     */
    public function setTypeHeureSup($typeHeureSup) {
        $this->typeHeureSup = $typeHeureSup;
        return $this;
    }

    /**
     * Set the type orga.
     *
     * @param string $typeOrga The type orga.
     */
    public function setTypeOrga($typeOrga) {
        $this->typeOrga = $typeOrga;
        return $this;
    }

    /**
     * Set the type proratisation prime.
     *
     * @param string $typeProratisationPrime The type proratisation prime.
     */
    public function setTypeProratisationPrime($typeProratisationPrime) {
        $this->typeProratisationPrime = $typeProratisationPrime;
        return $this;
    }

    /**
     * Set the type tranche.
     *
     * @param string $typeTranche The type tranche.
     */
    public function setTypeTranche($typeTranche) {
        $this->typeTranche = $typeTranche;
        return $this;
    }
}
