<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Liaisons op trans model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsOpTrans {

    /**
     * Batch apres.
     *
     * @var string
     */
    private $batchApres;

    /**
     * Batch avant.
     *
     * @var string
     */
    private $batchAvant;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Dt dern x fer.
     *
     * @var DateTime
     */
    private $dtDernXFer;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Liste destinataires.
     *
     * @var string
     */
    private $listeDestinataires;

    /**
     * Use dt dern x fer.
     *
     * @var bool
     */
    private $useDtDernXFer;

    /**
     * X fer activites.
     *
     * @var bool
     */
    private $xFerActivites;

    /**
     * X fer articles.
     *
     * @var bool
     */
    private $xFerArticles;

    /**
     * X fer boni mali.
     *
     * @var bool
     */
    private $xFerBoniMali;

    /**
     * X fer budgets temps.
     *
     * @var bool
     */
    private $xFerBudgetsTemps;

    /**
     * X fer civilites.
     *
     * @var bool
     */
    private $xFerCivilites;

    /**
     * X fer cli.
     *
     * @var bool
     */
    private $xFerCli;

    /**
     * X fer cli a1.
     *
     * @var string
     */
    private $xFerCliA1;

    /**
     * X fer cli a2.
     *
     * @var string
     */
    private $xFerCliA2;

    /**
     * X fer cli c.
     *
     * @var string
     */
    private $xFerCliC;

    /**
     * X fer cli deb.
     *
     * @var string
     */
    private $xFerCliDeb;

    /**
     * X fer cli docs.
     *
     * @var bool
     */
    private $xFerCliDocs;

    /**
     * X fer cli e.
     *
     * @var string
     */
    private $xFerCliE;

    /**
     * X fer cli fin.
     *
     * @var string
     */
    private $xFerCliFin;

    /**
     * X fer cli p.
     *
     * @var string
     */
    private $xFerCliP;

    /**
     * X fer col.
     *
     * @var bool
     */
    private $xFerCol;

    /**
     * X fer collab tache.
     *
     * @var bool
     */
    private $xFerCollabTache;

    /**
     * X fer contenu.
     *
     * @var bool
     */
    private $xFerContenu;

    /**
     * X fer cpta.
     *
     * @var bool
     */
    private $xFerCpta;

    /**
     * X fer cpta all.
     *
     * @var bool
     */
    private $xFerCptaAll;

    /**
     * X fer cpta cli.
     *
     * @var bool
     */
    private $xFerCptaCli;

    /**
     * X fer cpta dest.
     *
     * @var string
     */
    private $xFerCptaDest;

    /**
     * X fer cpta frn.
     *
     * @var bool
     */
    private $xFerCptaFrn;

    /**
     * X fer cpta img.
     *
     * @var bool
     */
    private $xFerCptaImg;

    /**
     * X fer cpta lst d c.
     *
     * @var string
     */
    private $xFerCptaLstDC;

    /**
     * X fer cpta src.
     *
     * @var string
     */
    private $xFerCptaSrc;

    /**
     * X fer cr d s i.
     *
     * @var bool
     */
    private $xFerCrDSI;

    /**
     * X fer cr d u c s.
     *
     * @var bool
     */
    private $xFerCrDUCS;

    /**
     * X fer cr p e d i.
     *
     * @var bool
     */
    private $xFerCrPEDI;

    /**
     * X fer cr r e q.
     *
     * @var bool
     */
    private $xFerCrREQ;

    /**
     * X fer cr t d f c.
     *
     * @var bool
     */
    private $xFerCrTDFC;

    /**
     * X fer cr t v a.
     *
     * @var bool
     */
    private $xFerCrTVA;

    /**
     * X fer cst px km.
     *
     * @var bool
     */
    private $xFerCstPxKm;

    /**
     * X fer dos cpta.
     *
     * @var bool
     */
    private $xFerDosCpta;

    /**
     * X fer dos paie.
     *
     * @var bool
     */
    private $xFerDosPaie;

    /**
     * X fer e t e b a c.
     *
     * @var bool
     */
    private $xFerETEBAC;

    /**
     * X fer ed grp.
     *
     * @var bool
     */
    private $xFerEdGrp;

    /**
     * X fer fact edit.
     *
     * @var bool
     */
    private $xFerFactEdit;

    /**
     * X fer fact edit del src.
     *
     * @var bool
     */
    private $xFerFactEditDelSrc;

    /**
     * X fer fact non edit.
     *
     * @var bool
     */
    private $xFerFactNonEdit;

    /**
     * X fer fact non edit del src.
     *
     * @var bool
     */
    private $xFerFactNonEditDelSrc;

    /**
     * X fer fonctions.
     *
     * @var bool
     */
    private $xFerFonctions;

    /**
     * X fer impots directs.
     *
     * @var bool
     */
    private $xFerImpotsDirects;

    /**
     * X fer int.
     *
     * @var bool
     */
    private $xFerInt;

    /**
     * X fer int no cli only.
     *
     * @var bool
     */
    private $xFerIntNoCliOnly;

    /**
     * X fer lst cabs.
     *
     * @var string
     */
    private $xFerLstCabs;

    /**
     * X fer mis.
     *
     * @var bool
     */
    private $xFerMis;

    /**
     * X fer mis cli.
     *
     * @var bool
     */
    private $xFerMisCli;

    /**
     * X fer mission principale.
     *
     * @var bool
     */
    private $xFerMissionPrincipale;

    /**
     * X fer msg.
     *
     * @var bool
     */
    private $xFerMsg;

    /**
     * X fer msg cli.
     *
     * @var bool
     */
    private $xFerMsgCli;

    /**
     * X fer msg col.
     *
     * @var bool
     */
    private $xFerMsgCol;

    /**
     * X fer msg del src.
     *
     * @var bool
     */
    private $xFerMsgDelSrc;

    /**
     * X fer msg hist.
     *
     * @var bool
     */
    private $xFerMsgHist;

    /**
     * X fer msg hist cli.
     *
     * @var bool
     */
    private $xFerMsgHistCli;

    /**
     * X fer msg hist del src.
     *
     * @var bool
     */
    private $xFerMsgHistDelSrc;

    /**
     * X fer obligations.
     *
     * @var bool
     */
    private $xFerObligations;

    /**
     * X fer pdf.
     *
     * @var bool
     */
    private $xFerPdf;

    /**
     * X fer planning.
     *
     * @var bool
     */
    private $xFerPlanning;

    /**
     * X fer pre fact.
     *
     * @var bool
     */
    private $xFerPreFact;

    /**
     * X fer pre fact cli.
     *
     * @var bool
     */
    private $xFerPreFactCli;

    /**
     * X fer pre fact col.
     *
     * @var bool
     */
    private $xFerPreFactCol;

    /**
     * X fer pre fact fact.
     *
     * @var bool
     */
    private $xFerPreFactFact;

    /**
     * X fer q infos.
     *
     * @var bool
     */
    private $xFerQInfos;

    /**
     * X fer q infos det.
     *
     * @var string
     */
    private $xFerQInfosDet;

    /**
     * X fer qualifiants.
     *
     * @var bool
     */
    private $xFerQualifiants;

    /**
     * X fer reglements.
     *
     * @var bool
     */
    private $xFerReglements;

    /**
     * X fer sui cli.
     *
     * @var bool
     */
    private $xFerSuiCli;

    /**
     * X fer taches.
     *
     * @var bool
     */
    private $xFerTaches;

    /**
     * X fer tps.
     *
     * @var bool
     */
    private $xFerTps;

    /**
     * X fer tps cli.
     *
     * @var bool
     */
    private $xFerTpsCli;

    /**
     * X fer tps col.
     *
     * @var bool
     */
    private $xFerTpsCol;

    /**
     * X fer type evenements.
     *
     * @var bool
     */
    private $xFerTypeEvenements;

    /**
     * X fer type societes.
     *
     * @var bool
     */
    private $xFerTypeSocietes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the batch apres.
     *
     * @return string Returns the batch apres.
     */
    public function getBatchApres() {
        return $this->batchApres;
    }

    /**
     * Get the batch avant.
     *
     * @return string Returns the batch avant.
     */
    public function getBatchAvant() {
        return $this->batchAvant;
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
     * Get the dt dern x fer.
     *
     * @return DateTime Returns the dt dern x fer.
     */
    public function getDtDernXFer() {
        return $this->dtDernXFer;
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
     * Get the liste destinataires.
     *
     * @return string Returns the liste destinataires.
     */
    public function getListeDestinataires() {
        return $this->listeDestinataires;
    }

    /**
     * Get the use dt dern x fer.
     *
     * @return bool Returns the use dt dern x fer.
     */
    public function getUseDtDernXFer() {
        return $this->useDtDernXFer;
    }

    /**
     * Get the x fer activites.
     *
     * @return bool Returns the x fer activites.
     */
    public function getXFerActivites() {
        return $this->xFerActivites;
    }

    /**
     * Get the x fer articles.
     *
     * @return bool Returns the x fer articles.
     */
    public function getXFerArticles() {
        return $this->xFerArticles;
    }

    /**
     * Get the x fer boni mali.
     *
     * @return bool Returns the x fer boni mali.
     */
    public function getXFerBoniMali() {
        return $this->xFerBoniMali;
    }

    /**
     * Get the x fer budgets temps.
     *
     * @return bool Returns the x fer budgets temps.
     */
    public function getXFerBudgetsTemps() {
        return $this->xFerBudgetsTemps;
    }

    /**
     * Get the x fer civilites.
     *
     * @return bool Returns the x fer civilites.
     */
    public function getXFerCivilites() {
        return $this->xFerCivilites;
    }

    /**
     * Get the x fer cli.
     *
     * @return bool Returns the x fer cli.
     */
    public function getXFerCli() {
        return $this->xFerCli;
    }

    /**
     * Get the x fer cli a1.
     *
     * @return string Returns the x fer cli a1.
     */
    public function getXFerCliA1() {
        return $this->xFerCliA1;
    }

    /**
     * Get the x fer cli a2.
     *
     * @return string Returns the x fer cli a2.
     */
    public function getXFerCliA2() {
        return $this->xFerCliA2;
    }

    /**
     * Get the x fer cli c.
     *
     * @return string Returns the x fer cli c.
     */
    public function getXFerCliC() {
        return $this->xFerCliC;
    }

    /**
     * Get the x fer cli deb.
     *
     * @return string Returns the x fer cli deb.
     */
    public function getXFerCliDeb() {
        return $this->xFerCliDeb;
    }

    /**
     * Get the x fer cli docs.
     *
     * @return bool Returns the x fer cli docs.
     */
    public function getXFerCliDocs() {
        return $this->xFerCliDocs;
    }

    /**
     * Get the x fer cli e.
     *
     * @return string Returns the x fer cli e.
     */
    public function getXFerCliE() {
        return $this->xFerCliE;
    }

    /**
     * Get the x fer cli fin.
     *
     * @return string Returns the x fer cli fin.
     */
    public function getXFerCliFin() {
        return $this->xFerCliFin;
    }

    /**
     * Get the x fer cli p.
     *
     * @return string Returns the x fer cli p.
     */
    public function getXFerCliP() {
        return $this->xFerCliP;
    }

    /**
     * Get the x fer col.
     *
     * @return bool Returns the x fer col.
     */
    public function getXFerCol() {
        return $this->xFerCol;
    }

    /**
     * Get the x fer collab tache.
     *
     * @return bool Returns the x fer collab tache.
     */
    public function getXFerCollabTache() {
        return $this->xFerCollabTache;
    }

    /**
     * Get the x fer contenu.
     *
     * @return bool Returns the x fer contenu.
     */
    public function getXFerContenu() {
        return $this->xFerContenu;
    }

    /**
     * Get the x fer cpta.
     *
     * @return bool Returns the x fer cpta.
     */
    public function getXFerCpta() {
        return $this->xFerCpta;
    }

    /**
     * Get the x fer cpta all.
     *
     * @return bool Returns the x fer cpta all.
     */
    public function getXFerCptaAll() {
        return $this->xFerCptaAll;
    }

    /**
     * Get the x fer cpta cli.
     *
     * @return bool Returns the x fer cpta cli.
     */
    public function getXFerCptaCli() {
        return $this->xFerCptaCli;
    }

    /**
     * Get the x fer cpta dest.
     *
     * @return string Returns the x fer cpta dest.
     */
    public function getXFerCptaDest() {
        return $this->xFerCptaDest;
    }

    /**
     * Get the x fer cpta frn.
     *
     * @return bool Returns the x fer cpta frn.
     */
    public function getXFerCptaFrn() {
        return $this->xFerCptaFrn;
    }

    /**
     * Get the x fer cpta img.
     *
     * @return bool Returns the x fer cpta img.
     */
    public function getXFerCptaImg() {
        return $this->xFerCptaImg;
    }

    /**
     * Get the x fer cpta lst d c.
     *
     * @return string Returns the x fer cpta lst d c.
     */
    public function getXFerCptaLstDC() {
        return $this->xFerCptaLstDC;
    }

    /**
     * Get the x fer cpta src.
     *
     * @return string Returns the x fer cpta src.
     */
    public function getXFerCptaSrc() {
        return $this->xFerCptaSrc;
    }

    /**
     * Get the x fer cr d s i.
     *
     * @return bool Returns the x fer cr d s i.
     */
    public function getXFerCrDSI() {
        return $this->xFerCrDSI;
    }

    /**
     * Get the x fer cr d u c s.
     *
     * @return bool Returns the x fer cr d u c s.
     */
    public function getXFerCrDUCS() {
        return $this->xFerCrDUCS;
    }

    /**
     * Get the x fer cr p e d i.
     *
     * @return bool Returns the x fer cr p e d i.
     */
    public function getXFerCrPEDI() {
        return $this->xFerCrPEDI;
    }

    /**
     * Get the x fer cr r e q.
     *
     * @return bool Returns the x fer cr r e q.
     */
    public function getXFerCrREQ() {
        return $this->xFerCrREQ;
    }

    /**
     * Get the x fer cr t d f c.
     *
     * @return bool Returns the x fer cr t d f c.
     */
    public function getXFerCrTDFC() {
        return $this->xFerCrTDFC;
    }

    /**
     * Get the x fer cr t v a.
     *
     * @return bool Returns the x fer cr t v a.
     */
    public function getXFerCrTVA() {
        return $this->xFerCrTVA;
    }

    /**
     * Get the x fer cst px km.
     *
     * @return bool Returns the x fer cst px km.
     */
    public function getXFerCstPxKm() {
        return $this->xFerCstPxKm;
    }

    /**
     * Get the x fer dos cpta.
     *
     * @return bool Returns the x fer dos cpta.
     */
    public function getXFerDosCpta() {
        return $this->xFerDosCpta;
    }

    /**
     * Get the x fer dos paie.
     *
     * @return bool Returns the x fer dos paie.
     */
    public function getXFerDosPaie() {
        return $this->xFerDosPaie;
    }

    /**
     * Get the x fer e t e b a c.
     *
     * @return bool Returns the x fer e t e b a c.
     */
    public function getXFerETEBAC() {
        return $this->xFerETEBAC;
    }

    /**
     * Get the x fer ed grp.
     *
     * @return bool Returns the x fer ed grp.
     */
    public function getXFerEdGrp() {
        return $this->xFerEdGrp;
    }

    /**
     * Get the x fer fact edit.
     *
     * @return bool Returns the x fer fact edit.
     */
    public function getXFerFactEdit() {
        return $this->xFerFactEdit;
    }

    /**
     * Get the x fer fact edit del src.
     *
     * @return bool Returns the x fer fact edit del src.
     */
    public function getXFerFactEditDelSrc() {
        return $this->xFerFactEditDelSrc;
    }

    /**
     * Get the x fer fact non edit.
     *
     * @return bool Returns the x fer fact non edit.
     */
    public function getXFerFactNonEdit() {
        return $this->xFerFactNonEdit;
    }

    /**
     * Get the x fer fact non edit del src.
     *
     * @return bool Returns the x fer fact non edit del src.
     */
    public function getXFerFactNonEditDelSrc() {
        return $this->xFerFactNonEditDelSrc;
    }

    /**
     * Get the x fer fonctions.
     *
     * @return bool Returns the x fer fonctions.
     */
    public function getXFerFonctions() {
        return $this->xFerFonctions;
    }

    /**
     * Get the x fer impots directs.
     *
     * @return bool Returns the x fer impots directs.
     */
    public function getXFerImpotsDirects() {
        return $this->xFerImpotsDirects;
    }

    /**
     * Get the x fer int.
     *
     * @return bool Returns the x fer int.
     */
    public function getXFerInt() {
        return $this->xFerInt;
    }

    /**
     * Get the x fer int no cli only.
     *
     * @return bool Returns the x fer int no cli only.
     */
    public function getXFerIntNoCliOnly() {
        return $this->xFerIntNoCliOnly;
    }

    /**
     * Get the x fer lst cabs.
     *
     * @return string Returns the x fer lst cabs.
     */
    public function getXFerLstCabs() {
        return $this->xFerLstCabs;
    }

    /**
     * Get the x fer mis.
     *
     * @return bool Returns the x fer mis.
     */
    public function getXFerMis() {
        return $this->xFerMis;
    }

    /**
     * Get the x fer mis cli.
     *
     * @return bool Returns the x fer mis cli.
     */
    public function getXFerMisCli() {
        return $this->xFerMisCli;
    }

    /**
     * Get the x fer mission principale.
     *
     * @return bool Returns the x fer mission principale.
     */
    public function getXFerMissionPrincipale() {
        return $this->xFerMissionPrincipale;
    }

    /**
     * Get the x fer msg.
     *
     * @return bool Returns the x fer msg.
     */
    public function getXFerMsg() {
        return $this->xFerMsg;
    }

    /**
     * Get the x fer msg cli.
     *
     * @return bool Returns the x fer msg cli.
     */
    public function getXFerMsgCli() {
        return $this->xFerMsgCli;
    }

    /**
     * Get the x fer msg col.
     *
     * @return bool Returns the x fer msg col.
     */
    public function getXFerMsgCol() {
        return $this->xFerMsgCol;
    }

    /**
     * Get the x fer msg del src.
     *
     * @return bool Returns the x fer msg del src.
     */
    public function getXFerMsgDelSrc() {
        return $this->xFerMsgDelSrc;
    }

    /**
     * Get the x fer msg hist.
     *
     * @return bool Returns the x fer msg hist.
     */
    public function getXFerMsgHist() {
        return $this->xFerMsgHist;
    }

    /**
     * Get the x fer msg hist cli.
     *
     * @return bool Returns the x fer msg hist cli.
     */
    public function getXFerMsgHistCli() {
        return $this->xFerMsgHistCli;
    }

    /**
     * Get the x fer msg hist del src.
     *
     * @return bool Returns the x fer msg hist del src.
     */
    public function getXFerMsgHistDelSrc() {
        return $this->xFerMsgHistDelSrc;
    }

    /**
     * Get the x fer obligations.
     *
     * @return bool Returns the x fer obligations.
     */
    public function getXFerObligations() {
        return $this->xFerObligations;
    }

    /**
     * Get the x fer pdf.
     *
     * @return bool Returns the x fer pdf.
     */
    public function getXFerPdf() {
        return $this->xFerPdf;
    }

    /**
     * Get the x fer planning.
     *
     * @return bool Returns the x fer planning.
     */
    public function getXFerPlanning() {
        return $this->xFerPlanning;
    }

    /**
     * Get the x fer pre fact.
     *
     * @return bool Returns the x fer pre fact.
     */
    public function getXFerPreFact() {
        return $this->xFerPreFact;
    }

    /**
     * Get the x fer pre fact cli.
     *
     * @return bool Returns the x fer pre fact cli.
     */
    public function getXFerPreFactCli() {
        return $this->xFerPreFactCli;
    }

    /**
     * Get the x fer pre fact col.
     *
     * @return bool Returns the x fer pre fact col.
     */
    public function getXFerPreFactCol() {
        return $this->xFerPreFactCol;
    }

    /**
     * Get the x fer pre fact fact.
     *
     * @return bool Returns the x fer pre fact fact.
     */
    public function getXFerPreFactFact() {
        return $this->xFerPreFactFact;
    }

    /**
     * Get the x fer q infos.
     *
     * @return bool Returns the x fer q infos.
     */
    public function getXFerQInfos() {
        return $this->xFerQInfos;
    }

    /**
     * Get the x fer q infos det.
     *
     * @return string Returns the x fer q infos det.
     */
    public function getXFerQInfosDet() {
        return $this->xFerQInfosDet;
    }

    /**
     * Get the x fer qualifiants.
     *
     * @return bool Returns the x fer qualifiants.
     */
    public function getXFerQualifiants() {
        return $this->xFerQualifiants;
    }

    /**
     * Get the x fer reglements.
     *
     * @return bool Returns the x fer reglements.
     */
    public function getXFerReglements() {
        return $this->xFerReglements;
    }

    /**
     * Get the x fer sui cli.
     *
     * @return bool Returns the x fer sui cli.
     */
    public function getXFerSuiCli() {
        return $this->xFerSuiCli;
    }

    /**
     * Get the x fer taches.
     *
     * @return bool Returns the x fer taches.
     */
    public function getXFerTaches() {
        return $this->xFerTaches;
    }

    /**
     * Get the x fer tps.
     *
     * @return bool Returns the x fer tps.
     */
    public function getXFerTps() {
        return $this->xFerTps;
    }

    /**
     * Get the x fer tps cli.
     *
     * @return bool Returns the x fer tps cli.
     */
    public function getXFerTpsCli() {
        return $this->xFerTpsCli;
    }

    /**
     * Get the x fer tps col.
     *
     * @return bool Returns the x fer tps col.
     */
    public function getXFerTpsCol() {
        return $this->xFerTpsCol;
    }

    /**
     * Get the x fer type evenements.
     *
     * @return bool Returns the x fer type evenements.
     */
    public function getXFerTypeEvenements() {
        return $this->xFerTypeEvenements;
    }

    /**
     * Get the x fer type societes.
     *
     * @return bool Returns the x fer type societes.
     */
    public function getXFerTypeSocietes() {
        return $this->xFerTypeSocietes;
    }

    /**
     * Set the batch apres.
     *
     * @param string $batchApres The batch apres.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setBatchApres($batchApres) {
        $this->batchApres = $batchApres;
        return $this;
    }

    /**
     * Set the batch avant.
     *
     * @param string $batchAvant The batch avant.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setBatchAvant($batchAvant) {
        $this->batchAvant = $batchAvant;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the dt dern x fer.
     *
     * @param DateTime $dtDernXFer The dt dern x fer.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setDtDernXFer(DateTime $dtDernXFer = null) {
        $this->dtDernXFer = $dtDernXFer;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the liste destinataires.
     *
     * @param string $listeDestinataires The liste destinataires.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setListeDestinataires($listeDestinataires) {
        $this->listeDestinataires = $listeDestinataires;
        return $this;
    }

    /**
     * Set the use dt dern x fer.
     *
     * @param bool $useDtDernXFer The use dt dern x fer.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setUseDtDernXFer($useDtDernXFer) {
        $this->useDtDernXFer = $useDtDernXFer;
        return $this;
    }

    /**
     * Set the x fer activites.
     *
     * @param bool $xFerActivites The x fer activites.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerActivites($xFerActivites) {
        $this->xFerActivites = $xFerActivites;
        return $this;
    }

    /**
     * Set the x fer articles.
     *
     * @param bool $xFerArticles The x fer articles.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerArticles($xFerArticles) {
        $this->xFerArticles = $xFerArticles;
        return $this;
    }

    /**
     * Set the x fer boni mali.
     *
     * @param bool $xFerBoniMali The x fer boni mali.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerBoniMali($xFerBoniMali) {
        $this->xFerBoniMali = $xFerBoniMali;
        return $this;
    }

    /**
     * Set the x fer budgets temps.
     *
     * @param bool $xFerBudgetsTemps The x fer budgets temps.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerBudgetsTemps($xFerBudgetsTemps) {
        $this->xFerBudgetsTemps = $xFerBudgetsTemps;
        return $this;
    }

    /**
     * Set the x fer civilites.
     *
     * @param bool $xFerCivilites The x fer civilites.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCivilites($xFerCivilites) {
        $this->xFerCivilites = $xFerCivilites;
        return $this;
    }

    /**
     * Set the x fer cli.
     *
     * @param bool $xFerCli The x fer cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCli($xFerCli) {
        $this->xFerCli = $xFerCli;
        return $this;
    }

    /**
     * Set the x fer cli a1.
     *
     * @param string $xFerCliA1 The x fer cli a1.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliA1($xFerCliA1) {
        $this->xFerCliA1 = $xFerCliA1;
        return $this;
    }

    /**
     * Set the x fer cli a2.
     *
     * @param string $xFerCliA2 The x fer cli a2.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliA2($xFerCliA2) {
        $this->xFerCliA2 = $xFerCliA2;
        return $this;
    }

    /**
     * Set the x fer cli c.
     *
     * @param string $xFerCliC The x fer cli c.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliC($xFerCliC) {
        $this->xFerCliC = $xFerCliC;
        return $this;
    }

    /**
     * Set the x fer cli deb.
     *
     * @param string $xFerCliDeb The x fer cli deb.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliDeb($xFerCliDeb) {
        $this->xFerCliDeb = $xFerCliDeb;
        return $this;
    }

    /**
     * Set the x fer cli docs.
     *
     * @param bool $xFerCliDocs The x fer cli docs.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliDocs($xFerCliDocs) {
        $this->xFerCliDocs = $xFerCliDocs;
        return $this;
    }

    /**
     * Set the x fer cli e.
     *
     * @param string $xFerCliE The x fer cli e.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliE($xFerCliE) {
        $this->xFerCliE = $xFerCliE;
        return $this;
    }

    /**
     * Set the x fer cli fin.
     *
     * @param string $xFerCliFin The x fer cli fin.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliFin($xFerCliFin) {
        $this->xFerCliFin = $xFerCliFin;
        return $this;
    }

    /**
     * Set the x fer cli p.
     *
     * @param string $xFerCliP The x fer cli p.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCliP($xFerCliP) {
        $this->xFerCliP = $xFerCliP;
        return $this;
    }

    /**
     * Set the x fer col.
     *
     * @param bool $xFerCol The x fer col.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCol($xFerCol) {
        $this->xFerCol = $xFerCol;
        return $this;
    }

    /**
     * Set the x fer collab tache.
     *
     * @param bool $xFerCollabTache The x fer collab tache.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCollabTache($xFerCollabTache) {
        $this->xFerCollabTache = $xFerCollabTache;
        return $this;
    }

    /**
     * Set the x fer contenu.
     *
     * @param bool $xFerContenu The x fer contenu.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerContenu($xFerContenu) {
        $this->xFerContenu = $xFerContenu;
        return $this;
    }

    /**
     * Set the x fer cpta.
     *
     * @param bool $xFerCpta The x fer cpta.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCpta($xFerCpta) {
        $this->xFerCpta = $xFerCpta;
        return $this;
    }

    /**
     * Set the x fer cpta all.
     *
     * @param bool $xFerCptaAll The x fer cpta all.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaAll($xFerCptaAll) {
        $this->xFerCptaAll = $xFerCptaAll;
        return $this;
    }

    /**
     * Set the x fer cpta cli.
     *
     * @param bool $xFerCptaCli The x fer cpta cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaCli($xFerCptaCli) {
        $this->xFerCptaCli = $xFerCptaCli;
        return $this;
    }

    /**
     * Set the x fer cpta dest.
     *
     * @param string $xFerCptaDest The x fer cpta dest.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaDest($xFerCptaDest) {
        $this->xFerCptaDest = $xFerCptaDest;
        return $this;
    }

    /**
     * Set the x fer cpta frn.
     *
     * @param bool $xFerCptaFrn The x fer cpta frn.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaFrn($xFerCptaFrn) {
        $this->xFerCptaFrn = $xFerCptaFrn;
        return $this;
    }

    /**
     * Set the x fer cpta img.
     *
     * @param bool $xFerCptaImg The x fer cpta img.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaImg($xFerCptaImg) {
        $this->xFerCptaImg = $xFerCptaImg;
        return $this;
    }

    /**
     * Set the x fer cpta lst d c.
     *
     * @param string $xFerCptaLstDC The x fer cpta lst d c.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaLstDC($xFerCptaLstDC) {
        $this->xFerCptaLstDC = $xFerCptaLstDC;
        return $this;
    }

    /**
     * Set the x fer cpta src.
     *
     * @param string $xFerCptaSrc The x fer cpta src.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCptaSrc($xFerCptaSrc) {
        $this->xFerCptaSrc = $xFerCptaSrc;
        return $this;
    }

    /**
     * Set the x fer cr d s i.
     *
     * @param bool $xFerCrDSI The x fer cr d s i.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrDSI($xFerCrDSI) {
        $this->xFerCrDSI = $xFerCrDSI;
        return $this;
    }

    /**
     * Set the x fer cr d u c s.
     *
     * @param bool $xFerCrDUCS The x fer cr d u c s.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrDUCS($xFerCrDUCS) {
        $this->xFerCrDUCS = $xFerCrDUCS;
        return $this;
    }

    /**
     * Set the x fer cr p e d i.
     *
     * @param bool $xFerCrPEDI The x fer cr p e d i.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrPEDI($xFerCrPEDI) {
        $this->xFerCrPEDI = $xFerCrPEDI;
        return $this;
    }

    /**
     * Set the x fer cr r e q.
     *
     * @param bool $xFerCrREQ The x fer cr r e q.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrREQ($xFerCrREQ) {
        $this->xFerCrREQ = $xFerCrREQ;
        return $this;
    }

    /**
     * Set the x fer cr t d f c.
     *
     * @param bool $xFerCrTDFC The x fer cr t d f c.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrTDFC($xFerCrTDFC) {
        $this->xFerCrTDFC = $xFerCrTDFC;
        return $this;
    }

    /**
     * Set the x fer cr t v a.
     *
     * @param bool $xFerCrTVA The x fer cr t v a.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCrTVA($xFerCrTVA) {
        $this->xFerCrTVA = $xFerCrTVA;
        return $this;
    }

    /**
     * Set the x fer cst px km.
     *
     * @param bool $xFerCstPxKm The x fer cst px km.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerCstPxKm($xFerCstPxKm) {
        $this->xFerCstPxKm = $xFerCstPxKm;
        return $this;
    }

    /**
     * Set the x fer dos cpta.
     *
     * @param bool $xFerDosCpta The x fer dos cpta.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerDosCpta($xFerDosCpta) {
        $this->xFerDosCpta = $xFerDosCpta;
        return $this;
    }

    /**
     * Set the x fer dos paie.
     *
     * @param bool $xFerDosPaie The x fer dos paie.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerDosPaie($xFerDosPaie) {
        $this->xFerDosPaie = $xFerDosPaie;
        return $this;
    }

    /**
     * Set the x fer e t e b a c.
     *
     * @param bool $xFerETEBAC The x fer e t e b a c.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerETEBAC($xFerETEBAC) {
        $this->xFerETEBAC = $xFerETEBAC;
        return $this;
    }

    /**
     * Set the x fer ed grp.
     *
     * @param bool $xFerEdGrp The x fer ed grp.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerEdGrp($xFerEdGrp) {
        $this->xFerEdGrp = $xFerEdGrp;
        return $this;
    }

    /**
     * Set the x fer fact edit.
     *
     * @param bool $xFerFactEdit The x fer fact edit.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerFactEdit($xFerFactEdit) {
        $this->xFerFactEdit = $xFerFactEdit;
        return $this;
    }

    /**
     * Set the x fer fact edit del src.
     *
     * @param bool $xFerFactEditDelSrc The x fer fact edit del src.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerFactEditDelSrc($xFerFactEditDelSrc) {
        $this->xFerFactEditDelSrc = $xFerFactEditDelSrc;
        return $this;
    }

    /**
     * Set the x fer fact non edit.
     *
     * @param bool $xFerFactNonEdit The x fer fact non edit.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerFactNonEdit($xFerFactNonEdit) {
        $this->xFerFactNonEdit = $xFerFactNonEdit;
        return $this;
    }

    /**
     * Set the x fer fact non edit del src.
     *
     * @param bool $xFerFactNonEditDelSrc The x fer fact non edit del src.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerFactNonEditDelSrc($xFerFactNonEditDelSrc) {
        $this->xFerFactNonEditDelSrc = $xFerFactNonEditDelSrc;
        return $this;
    }

    /**
     * Set the x fer fonctions.
     *
     * @param bool $xFerFonctions The x fer fonctions.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerFonctions($xFerFonctions) {
        $this->xFerFonctions = $xFerFonctions;
        return $this;
    }

    /**
     * Set the x fer impots directs.
     *
     * @param bool $xFerImpotsDirects The x fer impots directs.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerImpotsDirects($xFerImpotsDirects) {
        $this->xFerImpotsDirects = $xFerImpotsDirects;
        return $this;
    }

    /**
     * Set the x fer int.
     *
     * @param bool $xFerInt The x fer int.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerInt($xFerInt) {
        $this->xFerInt = $xFerInt;
        return $this;
    }

    /**
     * Set the x fer int no cli only.
     *
     * @param bool $xFerIntNoCliOnly The x fer int no cli only.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerIntNoCliOnly($xFerIntNoCliOnly) {
        $this->xFerIntNoCliOnly = $xFerIntNoCliOnly;
        return $this;
    }

    /**
     * Set the x fer lst cabs.
     *
     * @param string $xFerLstCabs The x fer lst cabs.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerLstCabs($xFerLstCabs) {
        $this->xFerLstCabs = $xFerLstCabs;
        return $this;
    }

    /**
     * Set the x fer mis.
     *
     * @param bool $xFerMis The x fer mis.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMis($xFerMis) {
        $this->xFerMis = $xFerMis;
        return $this;
    }

    /**
     * Set the x fer mis cli.
     *
     * @param bool $xFerMisCli The x fer mis cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMisCli($xFerMisCli) {
        $this->xFerMisCli = $xFerMisCli;
        return $this;
    }

    /**
     * Set the x fer mission principale.
     *
     * @param bool $xFerMissionPrincipale The x fer mission principale.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMissionPrincipale($xFerMissionPrincipale) {
        $this->xFerMissionPrincipale = $xFerMissionPrincipale;
        return $this;
    }

    /**
     * Set the x fer msg.
     *
     * @param bool $xFerMsg The x fer msg.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsg($xFerMsg) {
        $this->xFerMsg = $xFerMsg;
        return $this;
    }

    /**
     * Set the x fer msg cli.
     *
     * @param bool $xFerMsgCli The x fer msg cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgCli($xFerMsgCli) {
        $this->xFerMsgCli = $xFerMsgCli;
        return $this;
    }

    /**
     * Set the x fer msg col.
     *
     * @param bool $xFerMsgCol The x fer msg col.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgCol($xFerMsgCol) {
        $this->xFerMsgCol = $xFerMsgCol;
        return $this;
    }

    /**
     * Set the x fer msg del src.
     *
     * @param bool $xFerMsgDelSrc The x fer msg del src.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgDelSrc($xFerMsgDelSrc) {
        $this->xFerMsgDelSrc = $xFerMsgDelSrc;
        return $this;
    }

    /**
     * Set the x fer msg hist.
     *
     * @param bool $xFerMsgHist The x fer msg hist.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgHist($xFerMsgHist) {
        $this->xFerMsgHist = $xFerMsgHist;
        return $this;
    }

    /**
     * Set the x fer msg hist cli.
     *
     * @param bool $xFerMsgHistCli The x fer msg hist cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgHistCli($xFerMsgHistCli) {
        $this->xFerMsgHistCli = $xFerMsgHistCli;
        return $this;
    }

    /**
     * Set the x fer msg hist del src.
     *
     * @param bool $xFerMsgHistDelSrc The x fer msg hist del src.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerMsgHistDelSrc($xFerMsgHistDelSrc) {
        $this->xFerMsgHistDelSrc = $xFerMsgHistDelSrc;
        return $this;
    }

    /**
     * Set the x fer obligations.
     *
     * @param bool $xFerObligations The x fer obligations.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerObligations($xFerObligations) {
        $this->xFerObligations = $xFerObligations;
        return $this;
    }

    /**
     * Set the x fer pdf.
     *
     * @param bool $xFerPdf The x fer pdf.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPdf($xFerPdf) {
        $this->xFerPdf = $xFerPdf;
        return $this;
    }

    /**
     * Set the x fer planning.
     *
     * @param bool $xFerPlanning The x fer planning.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPlanning($xFerPlanning) {
        $this->xFerPlanning = $xFerPlanning;
        return $this;
    }

    /**
     * Set the x fer pre fact.
     *
     * @param bool $xFerPreFact The x fer pre fact.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPreFact($xFerPreFact) {
        $this->xFerPreFact = $xFerPreFact;
        return $this;
    }

    /**
     * Set the x fer pre fact cli.
     *
     * @param bool $xFerPreFactCli The x fer pre fact cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPreFactCli($xFerPreFactCli) {
        $this->xFerPreFactCli = $xFerPreFactCli;
        return $this;
    }

    /**
     * Set the x fer pre fact col.
     *
     * @param bool $xFerPreFactCol The x fer pre fact col.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPreFactCol($xFerPreFactCol) {
        $this->xFerPreFactCol = $xFerPreFactCol;
        return $this;
    }

    /**
     * Set the x fer pre fact fact.
     *
     * @param bool $xFerPreFactFact The x fer pre fact fact.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerPreFactFact($xFerPreFactFact) {
        $this->xFerPreFactFact = $xFerPreFactFact;
        return $this;
    }

    /**
     * Set the x fer q infos.
     *
     * @param bool $xFerQInfos The x fer q infos.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerQInfos($xFerQInfos) {
        $this->xFerQInfos = $xFerQInfos;
        return $this;
    }

    /**
     * Set the x fer q infos det.
     *
     * @param string $xFerQInfosDet The x fer q infos det.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerQInfosDet($xFerQInfosDet) {
        $this->xFerQInfosDet = $xFerQInfosDet;
        return $this;
    }

    /**
     * Set the x fer qualifiants.
     *
     * @param bool $xFerQualifiants The x fer qualifiants.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerQualifiants($xFerQualifiants) {
        $this->xFerQualifiants = $xFerQualifiants;
        return $this;
    }

    /**
     * Set the x fer reglements.
     *
     * @param bool $xFerReglements The x fer reglements.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerReglements($xFerReglements) {
        $this->xFerReglements = $xFerReglements;
        return $this;
    }

    /**
     * Set the x fer sui cli.
     *
     * @param bool $xFerSuiCli The x fer sui cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerSuiCli($xFerSuiCli) {
        $this->xFerSuiCli = $xFerSuiCli;
        return $this;
    }

    /**
     * Set the x fer taches.
     *
     * @param bool $xFerTaches The x fer taches.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTaches($xFerTaches) {
        $this->xFerTaches = $xFerTaches;
        return $this;
    }

    /**
     * Set the x fer tps.
     *
     * @param bool $xFerTps The x fer tps.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTps($xFerTps) {
        $this->xFerTps = $xFerTps;
        return $this;
    }

    /**
     * Set the x fer tps cli.
     *
     * @param bool $xFerTpsCli The x fer tps cli.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTpsCli($xFerTpsCli) {
        $this->xFerTpsCli = $xFerTpsCli;
        return $this;
    }

    /**
     * Set the x fer tps col.
     *
     * @param bool $xFerTpsCol The x fer tps col.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTpsCol($xFerTpsCol) {
        $this->xFerTpsCol = $xFerTpsCol;
        return $this;
    }

    /**
     * Set the x fer type evenements.
     *
     * @param bool $xFerTypeEvenements The x fer type evenements.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTypeEvenements($xFerTypeEvenements) {
        $this->xFerTypeEvenements = $xFerTypeEvenements;
        return $this;
    }

    /**
     * Set the x fer type societes.
     *
     * @param bool $xFerTypeSocietes The x fer type societes.
     * @return LiaisonsOpTrans Returns this liaisons op trans.
     */
    public function setXFerTypeSocietes($xFerTypeSocietes) {
        $this->xFerTypeSocietes = $xFerTypeSocietes;
        return $this;
    }
}
