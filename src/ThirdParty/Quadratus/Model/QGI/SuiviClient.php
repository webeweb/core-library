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
 * Suivi client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SuiviClient {

    /**
     * Bilan commentaire date.
     *
     * @var DateTime|null
     */
    private $bilanCommentaireDate;

    /**
     * Bilan commentaire lib.
     *
     * @var string
     */
    private $bilanCommentaireLib;

    /**
     * Bull commentaire date.
     *
     * @var DateTime|null
     */
    private $bullCommentaireDate;

    /**
     * Bull commentaire lib.
     *
     * @var string
     */
    private $bullCommentaireLib;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Dads u commentaire date.
     *
     * @var DateTime|null
     */
    private $dadsUCommentaireDate;

    /**
     * Dads u commentaire lib.
     *
     * @var string
     */
    private $dadsUCommentaireLib;

    /**
     * Das2 commentaire date.
     *
     * @var DateTime|null
     */
    private $das2CommentaireDate;

    /**
     * Das2 commentaire lib.
     *
     * @var string
     */
    private $das2CommentaireLib;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Dcr commentaire date.
     *
     * @var DateTime|null
     */
    private $dcrCommentaireDate;

    /**
     * Dcr commentaire lib.
     *
     * @var string
     */
    private $dcrCommentaireLib;

    /**
     * Dcr date limite.
     *
     * @var DateTime|null
     */
    private $dcrDateLimite;

    /**
     * Dsi commentaire date.
     *
     * @var DateTime|null
     */
    private $dsiCommentaireDate;

    /**
     * Dsi commentaire lib.
     *
     * @var string
     */
    private $dsiCommentaireLib;

    /**
     * Ducs assedic commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsAssedicCommentaireDate;

    /**
     * Ducs assedic commentaire lib.
     *
     * @var string
     */
    private $ducsAssedicCommentaireLib;

    /**
     * Ducs urssaf commentaire date.
     *
     * @var DateTime|null
     */
    private $ducsUrssafCommentaireDate;

    /**
     * Ducs urssaf commentaire lib.
     *
     * @var string
     */
    private $ducsUrssafCommentaireLib;

    /**
     * Facturation commentaire date.
     *
     * @var DateTime|null
     */
    private $facturationCommentaireDate;

    /**
     * Facturation commentaire lib.
     *
     * @var string
     */
    private $facturationCommentaireLib;

    /**
     * Fait bilan.
     *
     * @var string
     */
    private $faitBilan;

    /**
     * Fait cvae.
     *
     * @var string
     */
    private $faitCvae;

    /**
     * Fait das2.
     *
     * @var string
     */
    private $faitDas2;

    /**
     * Fait dcr.
     *
     * @var string
     */
    private $faitDcr;

    /**
     * Fait generic1.
     *
     * @var string
     */
    private $faitGeneric1;

    /**
     * Fait generic10.
     *
     * @var string
     */
    private $faitGeneric10;

    /**
     * Fait generic2.
     *
     * @var string
     */
    private $faitGeneric2;

    /**
     * Fait generic3.
     *
     * @var string
     */
    private $faitGeneric3;

    /**
     * Fait generic4.
     *
     * @var string
     */
    private $faitGeneric4;

    /**
     * Fait generic5.
     *
     * @var string
     */
    private $faitGeneric5;

    /**
     * Fait generic6.
     *
     * @var string
     */
    private $faitGeneric6;

    /**
     * Fait generic7.
     *
     * @var string
     */
    private $faitGeneric7;

    /**
     * Fait generic8.
     *
     * @var string
     */
    private $faitGeneric8;

    /**
     * Fait generic9.
     *
     * @var string
     */
    private $faitGeneric9;

    /**
     * Fait ifu.
     *
     * @var string
     */
    private $faitIfu;

    /**
     * Fait impot revenu.
     *
     * @var string
     */
    private $faitImpotRevenu;

    /**
     * Fait isa.
     *
     * @var string
     */
    private $faitIsa;

    /**
     * Fait isf.
     *
     * @var string
     */
    private $faitIsf;

    /**
     * Fait isr.
     *
     * @var string
     */
    private $faitIsr;

    /**
     * Fait iss.
     *
     * @var string
     */
    private $faitIss;

    /**
     * Fait plaf tp.
     *
     * @var string
     */
    private $faitPlafTp;

    /**
     * Fait pre lib.
     *
     * @var string
     */
    private $faitPreLib;

    /**
     * Fait situation.
     *
     * @var string
     */
    private $faitSituation;

    /**
     * Fait tab bord.
     *
     * @var string
     */
    private $faitTabBord;

    /**
     * Fait tp.
     *
     * @var string
     */
    private $faitTp;

    /**
     * Fait tva.
     *
     * @var string
     */
    private $faitTva;

    /**
     * Fait tvs.
     *
     * @var string
     */
    private $faitTvs;

    /**
     * Generic10 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic10CommentaireDate;

    /**
     * Generic10 commentaire lib.
     *
     * @var string
     */
    private $generic10CommentaireLib;

    /**
     * Generic10 date limite.
     *
     * @var DateTime|null
     */
    private $generic10DateLimite;

    /**
     * Generic1 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic1CommentaireDate;

    /**
     * Generic1 commentaire lib.
     *
     * @var string
     */
    private $generic1CommentaireLib;

    /**
     * Generic1 date limite.
     *
     * @var DateTime|null
     */
    private $generic1DateLimite;

    /**
     * Generic2 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic2CommentaireDate;

    /**
     * Generic2 commentaire lib.
     *
     * @var string
     */
    private $generic2CommentaireLib;

    /**
     * Generic2 date limite.
     *
     * @var DateTime|null
     */
    private $generic2DateLimite;

    /**
     * Generic3 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic3CommentaireDate;

    /**
     * Generic3 commentaire lib.
     *
     * @var string
     */
    private $generic3CommentaireLib;

    /**
     * Generic3 date limite.
     *
     * @var DateTime|null
     */
    private $generic3DateLimite;

    /**
     * Generic4 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic4CommentaireDate;

    /**
     * Generic4 commentaire lib.
     *
     * @var string
     */
    private $generic4CommentaireLib;

    /**
     * Generic4 date limite.
     *
     * @var DateTime|null
     */
    private $generic4DateLimite;

    /**
     * Generic5 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic5CommentaireDate;

    /**
     * Generic5 commentaire lib.
     *
     * @var string
     */
    private $generic5CommentaireLib;

    /**
     * Generic5 date limite.
     *
     * @var DateTime|null
     */
    private $generic5DateLimite;

    /**
     * Generic6 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic6CommentaireDate;

    /**
     * Generic6 commentaire lib.
     *
     * @var string
     */
    private $generic6CommentaireLib;

    /**
     * Generic6 date limite.
     *
     * @var DateTime|null
     */
    private $generic6DateLimite;

    /**
     * Generic7 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic7CommentaireDate;

    /**
     * Generic7 commentaire lib.
     *
     * @var string
     */
    private $generic7CommentaireLib;

    /**
     * Generic7 date limite.
     *
     * @var DateTime|null
     */
    private $generic7DateLimite;

    /**
     * Generic8 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic8CommentaireDate;

    /**
     * Generic8 commentaire lib.
     *
     * @var string
     */
    private $generic8CommentaireLib;

    /**
     * Generic8 date limite.
     *
     * @var DateTime|null
     */
    private $generic8DateLimite;

    /**
     * Generic9 commentaire date.
     *
     * @var DateTime|null
     */
    private $generic9CommentaireDate;

    /**
     * Generic9 commentaire lib.
     *
     * @var string
     */
    private $generic9CommentaireLib;

    /**
     * Generic9 date limite.
     *
     * @var DateTime|null
     */
    private $generic9DateLimite;

    /**
     * Ifu commentaire date.
     *
     * @var DateTime|null
     */
    private $ifuCommentaireDate;

    /**
     * Ifu commentaire lib.
     *
     * @var string
     */
    private $ifuCommentaireLib;

    /**
     * Impot revenu commentaire date.
     *
     * @var DateTime|null
     */
    private $impotRevenuCommentaireDate;

    /**
     * Impot revenu commentaire lib.
     *
     * @var string
     */
    private $impotRevenuCommentaireLib;

    /**
     * Impot revenu date limite.
     *
     * @var DateTime|null
     */
    private $impotRevenuDateLimite;

    /**
     * Isa commentaire date.
     *
     * @var DateTime|null
     */
    private $isaCommentaireDate;

    /**
     * Isa commentaire lib.
     *
     * @var string
     */
    private $isaCommentaireLib;

    /**
     * Isf commentaire date.
     *
     * @var DateTime|null
     */
    private $isfCommentaireDate;

    /**
     * Isf commentaire lib.
     *
     * @var string
     */
    private $isfCommentaireLib;

    /**
     * Isf date limite.
     *
     * @var DateTime|null
     */
    private $isfDateLimite;

    /**
     * Isr commentaire date.
     *
     * @var DateTime|null
     */
    private $isrCommentaireDate;

    /**
     * Isr commentaire lib.
     *
     * @var string
     */
    private $isrCommentaireLib;

    /**
     * Iss commentaire date.
     *
     * @var DateTime|null
     */
    private $issCommentaireDate;

    /**
     * Iss commentaire lib.
     *
     * @var string
     */
    private $issCommentaireLib;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plaf tp commentaire date.
     *
     * @var DateTime|null
     */
    private $plafTpCommentaireDate;

    /**
     * Plaf tp commentaire lib.
     *
     * @var string
     */
    private $plafTpCommentaireLib;

    /**
     * Pre lib commentaire date.
     *
     * @var DateTime|null
     */
    private $preLibCommentaireDate;

    /**
     * Pre lib commentaire lib.
     *
     * @var string
     */
    private $preLibCommentaireLib;

    /**
     * Pre lib date limite.
     *
     * @var DateTime|null
     */
    private $preLibDateLimite;

    /**
     * Situation commentaire date.
     *
     * @var DateTime|null
     */
    private $situationCommentaireDate;

    /**
     * Situation commentaire lib.
     *
     * @var string
     */
    private $situationCommentaireLib;

    /**
     * Situation date limite.
     *
     * @var DateTime|null
     */
    private $situationDateLimite;

    /**
     * Tab bord commentaire date.
     *
     * @var DateTime|null
     */
    private $tabBordCommentaireDate;

    /**
     * Tab bord commentaire lib.
     *
     * @var string
     */
    private $tabBordCommentaireLib;

    /**
     * Tab bord date limite.
     *
     * @var DateTime|null
     */
    private $tabBordDateLimite;

    /**
     * Tp commentaire date.
     *
     * @var DateTime|null
     */
    private $tpCommentaireDate;

    /**
     * Tp commentaire lib.
     *
     * @var string
     */
    private $tpCommentaireLib;

    /**
     * Tsa commentaire date.
     *
     * @var DateTime|null
     */
    private $tsaCommentaireDate;

    /**
     * Tsa commentaire lib.
     *
     * @var string
     */
    private $tsaCommentaireLib;

    /**
     * Tss commentaire date.
     *
     * @var DateTime|null
     */
    private $tssCommentaireDate;

    /**
     * Tss commentaire lib.
     *
     * @var string
     */
    private $tssCommentaireLib;

    /**
     * Tva commentaire date.
     *
     * @var DateTime|null
     */
    private $tvaCommentaireDate;

    /**
     * Tva commentaire lib.
     *
     * @var string
     */
    private $tvaCommentaireLib;

    /**
     * Tvs commentaire date.
     *
     * @var DateTime|null
     */
    private $tvsCommentaireDate;

    /**
     * Tvs commentaire lib.
     *
     * @var string
     */
    private $tvsCommentaireLib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bilan commentaire date.
     *
     * @return DateTime|null Returns the bilan commentaire date.
     */
    public function getBilanCommentaireDate() {
        return $this->bilanCommentaireDate;
    }

    /**
     * Get the bilan commentaire lib.
     *
     * @return string Returns the bilan commentaire lib.
     */
    public function getBilanCommentaireLib() {
        return $this->bilanCommentaireLib;
    }

    /**
     * Get the bull commentaire date.
     *
     * @return DateTime|null Returns the bull commentaire date.
     */
    public function getBullCommentaireDate() {
        return $this->bullCommentaireDate;
    }

    /**
     * Get the bull commentaire lib.
     *
     * @return string Returns the bull commentaire lib.
     */
    public function getBullCommentaireLib() {
        return $this->bullCommentaireLib;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the dads u commentaire date.
     *
     * @return DateTime|null Returns the dads u commentaire date.
     */
    public function getDadsUCommentaireDate() {
        return $this->dadsUCommentaireDate;
    }

    /**
     * Get the dads u commentaire lib.
     *
     * @return string Returns the dads u commentaire lib.
     */
    public function getDadsUCommentaireLib() {
        return $this->dadsUCommentaireLib;
    }

    /**
     * Get the das2 commentaire date.
     *
     * @return DateTime|null Returns the das2 commentaire date.
     */
    public function getDas2CommentaireDate() {
        return $this->das2CommentaireDate;
    }

    /**
     * Get the das2 commentaire lib.
     *
     * @return string Returns the das2 commentaire lib.
     */
    public function getDas2CommentaireLib() {
        return $this->das2CommentaireLib;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the dcr commentaire date.
     *
     * @return DateTime|null Returns the dcr commentaire date.
     */
    public function getDcrCommentaireDate() {
        return $this->dcrCommentaireDate;
    }

    /**
     * Get the dcr commentaire lib.
     *
     * @return string Returns the dcr commentaire lib.
     */
    public function getDcrCommentaireLib() {
        return $this->dcrCommentaireLib;
    }

    /**
     * Get the dcr date limite.
     *
     * @return DateTime|null Returns the dcr date limite.
     */
    public function getDcrDateLimite() {
        return $this->dcrDateLimite;
    }

    /**
     * Get the dsi commentaire date.
     *
     * @return DateTime|null Returns the dsi commentaire date.
     */
    public function getDsiCommentaireDate() {
        return $this->dsiCommentaireDate;
    }

    /**
     * Get the dsi commentaire lib.
     *
     * @return string Returns the dsi commentaire lib.
     */
    public function getDsiCommentaireLib() {
        return $this->dsiCommentaireLib;
    }

    /**
     * Get the ducs assedic commentaire date.
     *
     * @return DateTime|null Returns the ducs assedic commentaire date.
     */
    public function getDucsAssedicCommentaireDate() {
        return $this->ducsAssedicCommentaireDate;
    }

    /**
     * Get the ducs assedic commentaire lib.
     *
     * @return string Returns the ducs assedic commentaire lib.
     */
    public function getDucsAssedicCommentaireLib() {
        return $this->ducsAssedicCommentaireLib;
    }

    /**
     * Get the ducs urssaf commentaire date.
     *
     * @return DateTime|null Returns the ducs urssaf commentaire date.
     */
    public function getDucsUrssafCommentaireDate() {
        return $this->ducsUrssafCommentaireDate;
    }

    /**
     * Get the ducs urssaf commentaire lib.
     *
     * @return string Returns the ducs urssaf commentaire lib.
     */
    public function getDucsUrssafCommentaireLib() {
        return $this->ducsUrssafCommentaireLib;
    }

    /**
     * Get the facturation commentaire date.
     *
     * @return DateTime|null Returns the facturation commentaire date.
     */
    public function getFacturationCommentaireDate() {
        return $this->facturationCommentaireDate;
    }

    /**
     * Get the facturation commentaire lib.
     *
     * @return string Returns the facturation commentaire lib.
     */
    public function getFacturationCommentaireLib() {
        return $this->facturationCommentaireLib;
    }

    /**
     * Get the fait bilan.
     *
     * @return string Returns the fait bilan.
     */
    public function getFaitBilan() {
        return $this->faitBilan;
    }

    /**
     * Get the fait cvae.
     *
     * @return string Returns the fait cvae.
     */
    public function getFaitCvae() {
        return $this->faitCvae;
    }

    /**
     * Get the fait das2.
     *
     * @return string Returns the fait das2.
     */
    public function getFaitDas2() {
        return $this->faitDas2;
    }

    /**
     * Get the fait dcr.
     *
     * @return string Returns the fait dcr.
     */
    public function getFaitDcr() {
        return $this->faitDcr;
    }

    /**
     * Get the fait generic1.
     *
     * @return string Returns the fait generic1.
     */
    public function getFaitGeneric1() {
        return $this->faitGeneric1;
    }

    /**
     * Get the fait generic10.
     *
     * @return string Returns the fait generic10.
     */
    public function getFaitGeneric10() {
        return $this->faitGeneric10;
    }

    /**
     * Get the fait generic2.
     *
     * @return string Returns the fait generic2.
     */
    public function getFaitGeneric2() {
        return $this->faitGeneric2;
    }

    /**
     * Get the fait generic3.
     *
     * @return string Returns the fait generic3.
     */
    public function getFaitGeneric3() {
        return $this->faitGeneric3;
    }

    /**
     * Get the fait generic4.
     *
     * @return string Returns the fait generic4.
     */
    public function getFaitGeneric4() {
        return $this->faitGeneric4;
    }

    /**
     * Get the fait generic5.
     *
     * @return string Returns the fait generic5.
     */
    public function getFaitGeneric5() {
        return $this->faitGeneric5;
    }

    /**
     * Get the fait generic6.
     *
     * @return string Returns the fait generic6.
     */
    public function getFaitGeneric6() {
        return $this->faitGeneric6;
    }

    /**
     * Get the fait generic7.
     *
     * @return string Returns the fait generic7.
     */
    public function getFaitGeneric7() {
        return $this->faitGeneric7;
    }

    /**
     * Get the fait generic8.
     *
     * @return string Returns the fait generic8.
     */
    public function getFaitGeneric8() {
        return $this->faitGeneric8;
    }

    /**
     * Get the fait generic9.
     *
     * @return string Returns the fait generic9.
     */
    public function getFaitGeneric9() {
        return $this->faitGeneric9;
    }

    /**
     * Get the fait ifu.
     *
     * @return string Returns the fait ifu.
     */
    public function getFaitIfu() {
        return $this->faitIfu;
    }

    /**
     * Get the fait impot revenu.
     *
     * @return string Returns the fait impot revenu.
     */
    public function getFaitImpotRevenu() {
        return $this->faitImpotRevenu;
    }

    /**
     * Get the fait isa.
     *
     * @return string Returns the fait isa.
     */
    public function getFaitIsa() {
        return $this->faitIsa;
    }

    /**
     * Get the fait isf.
     *
     * @return string Returns the fait isf.
     */
    public function getFaitIsf() {
        return $this->faitIsf;
    }

    /**
     * Get the fait isr.
     *
     * @return string Returns the fait isr.
     */
    public function getFaitIsr() {
        return $this->faitIsr;
    }

    /**
     * Get the fait iss.
     *
     * @return string Returns the fait iss.
     */
    public function getFaitIss() {
        return $this->faitIss;
    }

    /**
     * Get the fait plaf tp.
     *
     * @return string Returns the fait plaf tp.
     */
    public function getFaitPlafTp() {
        return $this->faitPlafTp;
    }

    /**
     * Get the fait pre lib.
     *
     * @return string Returns the fait pre lib.
     */
    public function getFaitPreLib() {
        return $this->faitPreLib;
    }

    /**
     * Get the fait situation.
     *
     * @return string Returns the fait situation.
     */
    public function getFaitSituation() {
        return $this->faitSituation;
    }

    /**
     * Get the fait tab bord.
     *
     * @return string Returns the fait tab bord.
     */
    public function getFaitTabBord() {
        return $this->faitTabBord;
    }

    /**
     * Get the fait tp.
     *
     * @return string Returns the fait tp.
     */
    public function getFaitTp() {
        return $this->faitTp;
    }

    /**
     * Get the fait tva.
     *
     * @return string Returns the fait tva.
     */
    public function getFaitTva() {
        return $this->faitTva;
    }

    /**
     * Get the fait tvs.
     *
     * @return string Returns the fait tvs.
     */
    public function getFaitTvs() {
        return $this->faitTvs;
    }

    /**
     * Get the generic10 commentaire date.
     *
     * @return DateTime|null Returns the generic10 commentaire date.
     */
    public function getGeneric10CommentaireDate() {
        return $this->generic10CommentaireDate;
    }

    /**
     * Get the generic10 commentaire lib.
     *
     * @return string Returns the generic10 commentaire lib.
     */
    public function getGeneric10CommentaireLib() {
        return $this->generic10CommentaireLib;
    }

    /**
     * Get the generic10 date limite.
     *
     * @return DateTime|null Returns the generic10 date limite.
     */
    public function getGeneric10DateLimite() {
        return $this->generic10DateLimite;
    }

    /**
     * Get the generic1 commentaire date.
     *
     * @return DateTime|null Returns the generic1 commentaire date.
     */
    public function getGeneric1CommentaireDate() {
        return $this->generic1CommentaireDate;
    }

    /**
     * Get the generic1 commentaire lib.
     *
     * @return string Returns the generic1 commentaire lib.
     */
    public function getGeneric1CommentaireLib() {
        return $this->generic1CommentaireLib;
    }

    /**
     * Get the generic1 date limite.
     *
     * @return DateTime|null Returns the generic1 date limite.
     */
    public function getGeneric1DateLimite() {
        return $this->generic1DateLimite;
    }

    /**
     * Get the generic2 commentaire date.
     *
     * @return DateTime|null Returns the generic2 commentaire date.
     */
    public function getGeneric2CommentaireDate() {
        return $this->generic2CommentaireDate;
    }

    /**
     * Get the generic2 commentaire lib.
     *
     * @return string Returns the generic2 commentaire lib.
     */
    public function getGeneric2CommentaireLib() {
        return $this->generic2CommentaireLib;
    }

    /**
     * Get the generic2 date limite.
     *
     * @return DateTime|null Returns the generic2 date limite.
     */
    public function getGeneric2DateLimite() {
        return $this->generic2DateLimite;
    }

    /**
     * Get the generic3 commentaire date.
     *
     * @return DateTime|null Returns the generic3 commentaire date.
     */
    public function getGeneric3CommentaireDate() {
        return $this->generic3CommentaireDate;
    }

    /**
     * Get the generic3 commentaire lib.
     *
     * @return string Returns the generic3 commentaire lib.
     */
    public function getGeneric3CommentaireLib() {
        return $this->generic3CommentaireLib;
    }

    /**
     * Get the generic3 date limite.
     *
     * @return DateTime|null Returns the generic3 date limite.
     */
    public function getGeneric3DateLimite() {
        return $this->generic3DateLimite;
    }

    /**
     * Get the generic4 commentaire date.
     *
     * @return DateTime|null Returns the generic4 commentaire date.
     */
    public function getGeneric4CommentaireDate() {
        return $this->generic4CommentaireDate;
    }

    /**
     * Get the generic4 commentaire lib.
     *
     * @return string Returns the generic4 commentaire lib.
     */
    public function getGeneric4CommentaireLib() {
        return $this->generic4CommentaireLib;
    }

    /**
     * Get the generic4 date limite.
     *
     * @return DateTime|null Returns the generic4 date limite.
     */
    public function getGeneric4DateLimite() {
        return $this->generic4DateLimite;
    }

    /**
     * Get the generic5 commentaire date.
     *
     * @return DateTime|null Returns the generic5 commentaire date.
     */
    public function getGeneric5CommentaireDate() {
        return $this->generic5CommentaireDate;
    }

    /**
     * Get the generic5 commentaire lib.
     *
     * @return string Returns the generic5 commentaire lib.
     */
    public function getGeneric5CommentaireLib() {
        return $this->generic5CommentaireLib;
    }

    /**
     * Get the generic5 date limite.
     *
     * @return DateTime|null Returns the generic5 date limite.
     */
    public function getGeneric5DateLimite() {
        return $this->generic5DateLimite;
    }

    /**
     * Get the generic6 commentaire date.
     *
     * @return DateTime|null Returns the generic6 commentaire date.
     */
    public function getGeneric6CommentaireDate() {
        return $this->generic6CommentaireDate;
    }

    /**
     * Get the generic6 commentaire lib.
     *
     * @return string Returns the generic6 commentaire lib.
     */
    public function getGeneric6CommentaireLib() {
        return $this->generic6CommentaireLib;
    }

    /**
     * Get the generic6 date limite.
     *
     * @return DateTime|null Returns the generic6 date limite.
     */
    public function getGeneric6DateLimite() {
        return $this->generic6DateLimite;
    }

    /**
     * Get the generic7 commentaire date.
     *
     * @return DateTime|null Returns the generic7 commentaire date.
     */
    public function getGeneric7CommentaireDate() {
        return $this->generic7CommentaireDate;
    }

    /**
     * Get the generic7 commentaire lib.
     *
     * @return string Returns the generic7 commentaire lib.
     */
    public function getGeneric7CommentaireLib() {
        return $this->generic7CommentaireLib;
    }

    /**
     * Get the generic7 date limite.
     *
     * @return DateTime|null Returns the generic7 date limite.
     */
    public function getGeneric7DateLimite() {
        return $this->generic7DateLimite;
    }

    /**
     * Get the generic8 commentaire date.
     *
     * @return DateTime|null Returns the generic8 commentaire date.
     */
    public function getGeneric8CommentaireDate() {
        return $this->generic8CommentaireDate;
    }

    /**
     * Get the generic8 commentaire lib.
     *
     * @return string Returns the generic8 commentaire lib.
     */
    public function getGeneric8CommentaireLib() {
        return $this->generic8CommentaireLib;
    }

    /**
     * Get the generic8 date limite.
     *
     * @return DateTime|null Returns the generic8 date limite.
     */
    public function getGeneric8DateLimite() {
        return $this->generic8DateLimite;
    }

    /**
     * Get the generic9 commentaire date.
     *
     * @return DateTime|null Returns the generic9 commentaire date.
     */
    public function getGeneric9CommentaireDate() {
        return $this->generic9CommentaireDate;
    }

    /**
     * Get the generic9 commentaire lib.
     *
     * @return string Returns the generic9 commentaire lib.
     */
    public function getGeneric9CommentaireLib() {
        return $this->generic9CommentaireLib;
    }

    /**
     * Get the generic9 date limite.
     *
     * @return DateTime|null Returns the generic9 date limite.
     */
    public function getGeneric9DateLimite() {
        return $this->generic9DateLimite;
    }

    /**
     * Get the ifu commentaire date.
     *
     * @return DateTime|null Returns the ifu commentaire date.
     */
    public function getIfuCommentaireDate() {
        return $this->ifuCommentaireDate;
    }

    /**
     * Get the ifu commentaire lib.
     *
     * @return string Returns the ifu commentaire lib.
     */
    public function getIfuCommentaireLib() {
        return $this->ifuCommentaireLib;
    }

    /**
     * Get the impot revenu commentaire date.
     *
     * @return DateTime|null Returns the impot revenu commentaire date.
     */
    public function getImpotRevenuCommentaireDate() {
        return $this->impotRevenuCommentaireDate;
    }

    /**
     * Get the impot revenu commentaire lib.
     *
     * @return string Returns the impot revenu commentaire lib.
     */
    public function getImpotRevenuCommentaireLib() {
        return $this->impotRevenuCommentaireLib;
    }

    /**
     * Get the impot revenu date limite.
     *
     * @return DateTime|null Returns the impot revenu date limite.
     */
    public function getImpotRevenuDateLimite() {
        return $this->impotRevenuDateLimite;
    }

    /**
     * Get the isa commentaire date.
     *
     * @return DateTime|null Returns the isa commentaire date.
     */
    public function getIsaCommentaireDate() {
        return $this->isaCommentaireDate;
    }

    /**
     * Get the isa commentaire lib.
     *
     * @return string Returns the isa commentaire lib.
     */
    public function getIsaCommentaireLib() {
        return $this->isaCommentaireLib;
    }

    /**
     * Get the isf commentaire date.
     *
     * @return DateTime|null Returns the isf commentaire date.
     */
    public function getIsfCommentaireDate() {
        return $this->isfCommentaireDate;
    }

    /**
     * Get the isf commentaire lib.
     *
     * @return string Returns the isf commentaire lib.
     */
    public function getIsfCommentaireLib() {
        return $this->isfCommentaireLib;
    }

    /**
     * Get the isf date limite.
     *
     * @return DateTime|null Returns the isf date limite.
     */
    public function getIsfDateLimite() {
        return $this->isfDateLimite;
    }

    /**
     * Get the isr commentaire date.
     *
     * @return DateTime|null Returns the isr commentaire date.
     */
    public function getIsrCommentaireDate() {
        return $this->isrCommentaireDate;
    }

    /**
     * Get the isr commentaire lib.
     *
     * @return string Returns the isr commentaire lib.
     */
    public function getIsrCommentaireLib() {
        return $this->isrCommentaireLib;
    }

    /**
     * Get the iss commentaire date.
     *
     * @return DateTime|null Returns the iss commentaire date.
     */
    public function getIssCommentaireDate() {
        return $this->issCommentaireDate;
    }

    /**
     * Get the iss commentaire lib.
     *
     * @return string Returns the iss commentaire lib.
     */
    public function getIssCommentaireLib() {
        return $this->issCommentaireLib;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the plaf tp commentaire date.
     *
     * @return DateTime|null Returns the plaf tp commentaire date.
     */
    public function getPlafTpCommentaireDate() {
        return $this->plafTpCommentaireDate;
    }

    /**
     * Get the plaf tp commentaire lib.
     *
     * @return string Returns the plaf tp commentaire lib.
     */
    public function getPlafTpCommentaireLib() {
        return $this->plafTpCommentaireLib;
    }

    /**
     * Get the pre lib commentaire date.
     *
     * @return DateTime|null Returns the pre lib commentaire date.
     */
    public function getPreLibCommentaireDate() {
        return $this->preLibCommentaireDate;
    }

    /**
     * Get the pre lib commentaire lib.
     *
     * @return string Returns the pre lib commentaire lib.
     */
    public function getPreLibCommentaireLib() {
        return $this->preLibCommentaireLib;
    }

    /**
     * Get the pre lib date limite.
     *
     * @return DateTime|null Returns the pre lib date limite.
     */
    public function getPreLibDateLimite() {
        return $this->preLibDateLimite;
    }

    /**
     * Get the situation commentaire date.
     *
     * @return DateTime|null Returns the situation commentaire date.
     */
    public function getSituationCommentaireDate() {
        return $this->situationCommentaireDate;
    }

    /**
     * Get the situation commentaire lib.
     *
     * @return string Returns the situation commentaire lib.
     */
    public function getSituationCommentaireLib() {
        return $this->situationCommentaireLib;
    }

    /**
     * Get the situation date limite.
     *
     * @return DateTime|null Returns the situation date limite.
     */
    public function getSituationDateLimite() {
        return $this->situationDateLimite;
    }

    /**
     * Get the tab bord commentaire date.
     *
     * @return DateTime|null Returns the tab bord commentaire date.
     */
    public function getTabBordCommentaireDate() {
        return $this->tabBordCommentaireDate;
    }

    /**
     * Get the tab bord commentaire lib.
     *
     * @return string Returns the tab bord commentaire lib.
     */
    public function getTabBordCommentaireLib() {
        return $this->tabBordCommentaireLib;
    }

    /**
     * Get the tab bord date limite.
     *
     * @return DateTime|null Returns the tab bord date limite.
     */
    public function getTabBordDateLimite() {
        return $this->tabBordDateLimite;
    }

    /**
     * Get the tp commentaire date.
     *
     * @return DateTime|null Returns the tp commentaire date.
     */
    public function getTpCommentaireDate() {
        return $this->tpCommentaireDate;
    }

    /**
     * Get the tp commentaire lib.
     *
     * @return string Returns the tp commentaire lib.
     */
    public function getTpCommentaireLib() {
        return $this->tpCommentaireLib;
    }

    /**
     * Get the tsa commentaire date.
     *
     * @return DateTime|null Returns the tsa commentaire date.
     */
    public function getTsaCommentaireDate() {
        return $this->tsaCommentaireDate;
    }

    /**
     * Get the tsa commentaire lib.
     *
     * @return string Returns the tsa commentaire lib.
     */
    public function getTsaCommentaireLib() {
        return $this->tsaCommentaireLib;
    }

    /**
     * Get the tss commentaire date.
     *
     * @return DateTime|null Returns the tss commentaire date.
     */
    public function getTssCommentaireDate() {
        return $this->tssCommentaireDate;
    }

    /**
     * Get the tss commentaire lib.
     *
     * @return string Returns the tss commentaire lib.
     */
    public function getTssCommentaireLib() {
        return $this->tssCommentaireLib;
    }

    /**
     * Get the tva commentaire date.
     *
     * @return DateTime|null Returns the tva commentaire date.
     */
    public function getTvaCommentaireDate() {
        return $this->tvaCommentaireDate;
    }

    /**
     * Get the tva commentaire lib.
     *
     * @return string Returns the tva commentaire lib.
     */
    public function getTvaCommentaireLib() {
        return $this->tvaCommentaireLib;
    }

    /**
     * Get the tvs commentaire date.
     *
     * @return DateTime|null Returns the tvs commentaire date.
     */
    public function getTvsCommentaireDate() {
        return $this->tvsCommentaireDate;
    }

    /**
     * Get the tvs commentaire lib.
     *
     * @return string Returns the tvs commentaire lib.
     */
    public function getTvsCommentaireLib() {
        return $this->tvsCommentaireLib;
    }

    /**
     * Set the bilan commentaire date.
     *
     * @param DateTime|null $bilanCommentaireDate The bilan commentaire date.
     */
    public function setBilanCommentaireDate(DateTime $bilanCommentaireDate = null) {
        $this->bilanCommentaireDate = $bilanCommentaireDate;
        return $this;
    }

    /**
     * Set the bilan commentaire lib.
     *
     * @param string $bilanCommentaireLib The bilan commentaire lib.
     */
    public function setBilanCommentaireLib($bilanCommentaireLib) {
        $this->bilanCommentaireLib = $bilanCommentaireLib;
        return $this;
    }

    /**
     * Set the bull commentaire date.
     *
     * @param DateTime|null $bullCommentaireDate The bull commentaire date.
     */
    public function setBullCommentaireDate(DateTime $bullCommentaireDate = null) {
        $this->bullCommentaireDate = $bullCommentaireDate;
        return $this;
    }

    /**
     * Set the bull commentaire lib.
     *
     * @param string $bullCommentaireLib The bull commentaire lib.
     */
    public function setBullCommentaireLib($bullCommentaireLib) {
        $this->bullCommentaireLib = $bullCommentaireLib;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the dads u commentaire date.
     *
     * @param DateTime|null $dadsUCommentaireDate The dads u commentaire date.
     */
    public function setDadsUCommentaireDate(DateTime $dadsUCommentaireDate = null) {
        $this->dadsUCommentaireDate = $dadsUCommentaireDate;
        return $this;
    }

    /**
     * Set the dads u commentaire lib.
     *
     * @param string $dadsUCommentaireLib The dads u commentaire lib.
     */
    public function setDadsUCommentaireLib($dadsUCommentaireLib) {
        $this->dadsUCommentaireLib = $dadsUCommentaireLib;
        return $this;
    }

    /**
     * Set the das2 commentaire date.
     *
     * @param DateTime|null $das2CommentaireDate The das2 commentaire date.
     */
    public function setDas2CommentaireDate(DateTime $das2CommentaireDate = null) {
        $this->das2CommentaireDate = $das2CommentaireDate;
        return $this;
    }

    /**
     * Set the das2 commentaire lib.
     *
     * @param string $das2CommentaireLib The das2 commentaire lib.
     */
    public function setDas2CommentaireLib($das2CommentaireLib) {
        $this->das2CommentaireLib = $das2CommentaireLib;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the dcr commentaire date.
     *
     * @param DateTime|null $dcrCommentaireDate The dcr commentaire date.
     */
    public function setDcrCommentaireDate(DateTime $dcrCommentaireDate = null) {
        $this->dcrCommentaireDate = $dcrCommentaireDate;
        return $this;
    }

    /**
     * Set the dcr commentaire lib.
     *
     * @param string $dcrCommentaireLib The dcr commentaire lib.
     */
    public function setDcrCommentaireLib($dcrCommentaireLib) {
        $this->dcrCommentaireLib = $dcrCommentaireLib;
        return $this;
    }

    /**
     * Set the dcr date limite.
     *
     * @param DateTime|null $dcrDateLimite The dcr date limite.
     */
    public function setDcrDateLimite(DateTime $dcrDateLimite = null) {
        $this->dcrDateLimite = $dcrDateLimite;
        return $this;
    }

    /**
     * Set the dsi commentaire date.
     *
     * @param DateTime|null $dsiCommentaireDate The dsi commentaire date.
     */
    public function setDsiCommentaireDate(DateTime $dsiCommentaireDate = null) {
        $this->dsiCommentaireDate = $dsiCommentaireDate;
        return $this;
    }

    /**
     * Set the dsi commentaire lib.
     *
     * @param string $dsiCommentaireLib The dsi commentaire lib.
     */
    public function setDsiCommentaireLib($dsiCommentaireLib) {
        $this->dsiCommentaireLib = $dsiCommentaireLib;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire date.
     *
     * @param DateTime|null $ducsAssedicCommentaireDate The ducs assedic commentaire date.
     */
    public function setDucsAssedicCommentaireDate(DateTime $ducsAssedicCommentaireDate = null) {
        $this->ducsAssedicCommentaireDate = $ducsAssedicCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire lib.
     *
     * @param string $ducsAssedicCommentaireLib The ducs assedic commentaire lib.
     */
    public function setDucsAssedicCommentaireLib($ducsAssedicCommentaireLib) {
        $this->ducsAssedicCommentaireLib = $ducsAssedicCommentaireLib;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire date.
     *
     * @param DateTime|null $ducsUrssafCommentaireDate The ducs urssaf commentaire date.
     */
    public function setDucsUrssafCommentaireDate(DateTime $ducsUrssafCommentaireDate = null) {
        $this->ducsUrssafCommentaireDate = $ducsUrssafCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire lib.
     *
     * @param string $ducsUrssafCommentaireLib The ducs urssaf commentaire lib.
     */
    public function setDucsUrssafCommentaireLib($ducsUrssafCommentaireLib) {
        $this->ducsUrssafCommentaireLib = $ducsUrssafCommentaireLib;
        return $this;
    }

    /**
     * Set the facturation commentaire date.
     *
     * @param DateTime|null $facturationCommentaireDate The facturation commentaire date.
     */
    public function setFacturationCommentaireDate(DateTime $facturationCommentaireDate = null) {
        $this->facturationCommentaireDate = $facturationCommentaireDate;
        return $this;
    }

    /**
     * Set the facturation commentaire lib.
     *
     * @param string $facturationCommentaireLib The facturation commentaire lib.
     */
    public function setFacturationCommentaireLib($facturationCommentaireLib) {
        $this->facturationCommentaireLib = $facturationCommentaireLib;
        return $this;
    }

    /**
     * Set the fait bilan.
     *
     * @param string $faitBilan The fait bilan.
     */
    public function setFaitBilan($faitBilan) {
        $this->faitBilan = $faitBilan;
        return $this;
    }

    /**
     * Set the fait cvae.
     *
     * @param string $faitCvae The fait cvae.
     */
    public function setFaitCvae($faitCvae) {
        $this->faitCvae = $faitCvae;
        return $this;
    }

    /**
     * Set the fait das2.
     *
     * @param string $faitDas2 The fait das2.
     */
    public function setFaitDas2($faitDas2) {
        $this->faitDas2 = $faitDas2;
        return $this;
    }

    /**
     * Set the fait dcr.
     *
     * @param string $faitDcr The fait dcr.
     */
    public function setFaitDcr($faitDcr) {
        $this->faitDcr = $faitDcr;
        return $this;
    }

    /**
     * Set the fait generic1.
     *
     * @param string $faitGeneric1 The fait generic1.
     */
    public function setFaitGeneric1($faitGeneric1) {
        $this->faitGeneric1 = $faitGeneric1;
        return $this;
    }

    /**
     * Set the fait generic10.
     *
     * @param string $faitGeneric10 The fait generic10.
     */
    public function setFaitGeneric10($faitGeneric10) {
        $this->faitGeneric10 = $faitGeneric10;
        return $this;
    }

    /**
     * Set the fait generic2.
     *
     * @param string $faitGeneric2 The fait generic2.
     */
    public function setFaitGeneric2($faitGeneric2) {
        $this->faitGeneric2 = $faitGeneric2;
        return $this;
    }

    /**
     * Set the fait generic3.
     *
     * @param string $faitGeneric3 The fait generic3.
     */
    public function setFaitGeneric3($faitGeneric3) {
        $this->faitGeneric3 = $faitGeneric3;
        return $this;
    }

    /**
     * Set the fait generic4.
     *
     * @param string $faitGeneric4 The fait generic4.
     */
    public function setFaitGeneric4($faitGeneric4) {
        $this->faitGeneric4 = $faitGeneric4;
        return $this;
    }

    /**
     * Set the fait generic5.
     *
     * @param string $faitGeneric5 The fait generic5.
     */
    public function setFaitGeneric5($faitGeneric5) {
        $this->faitGeneric5 = $faitGeneric5;
        return $this;
    }

    /**
     * Set the fait generic6.
     *
     * @param string $faitGeneric6 The fait generic6.
     */
    public function setFaitGeneric6($faitGeneric6) {
        $this->faitGeneric6 = $faitGeneric6;
        return $this;
    }

    /**
     * Set the fait generic7.
     *
     * @param string $faitGeneric7 The fait generic7.
     */
    public function setFaitGeneric7($faitGeneric7) {
        $this->faitGeneric7 = $faitGeneric7;
        return $this;
    }

    /**
     * Set the fait generic8.
     *
     * @param string $faitGeneric8 The fait generic8.
     */
    public function setFaitGeneric8($faitGeneric8) {
        $this->faitGeneric8 = $faitGeneric8;
        return $this;
    }

    /**
     * Set the fait generic9.
     *
     * @param string $faitGeneric9 The fait generic9.
     */
    public function setFaitGeneric9($faitGeneric9) {
        $this->faitGeneric9 = $faitGeneric9;
        return $this;
    }

    /**
     * Set the fait ifu.
     *
     * @param string $faitIfu The fait ifu.
     */
    public function setFaitIfu($faitIfu) {
        $this->faitIfu = $faitIfu;
        return $this;
    }

    /**
     * Set the fait impot revenu.
     *
     * @param string $faitImpotRevenu The fait impot revenu.
     */
    public function setFaitImpotRevenu($faitImpotRevenu) {
        $this->faitImpotRevenu = $faitImpotRevenu;
        return $this;
    }

    /**
     * Set the fait isa.
     *
     * @param string $faitIsa The fait isa.
     */
    public function setFaitIsa($faitIsa) {
        $this->faitIsa = $faitIsa;
        return $this;
    }

    /**
     * Set the fait isf.
     *
     * @param string $faitIsf The fait isf.
     */
    public function setFaitIsf($faitIsf) {
        $this->faitIsf = $faitIsf;
        return $this;
    }

    /**
     * Set the fait isr.
     *
     * @param string $faitIsr The fait isr.
     */
    public function setFaitIsr($faitIsr) {
        $this->faitIsr = $faitIsr;
        return $this;
    }

    /**
     * Set the fait iss.
     *
     * @param string $faitIss The fait iss.
     */
    public function setFaitIss($faitIss) {
        $this->faitIss = $faitIss;
        return $this;
    }

    /**
     * Set the fait plaf tp.
     *
     * @param string $faitPlafTp The fait plaf tp.
     */
    public function setFaitPlafTp($faitPlafTp) {
        $this->faitPlafTp = $faitPlafTp;
        return $this;
    }

    /**
     * Set the fait pre lib.
     *
     * @param string $faitPreLib The fait pre lib.
     */
    public function setFaitPreLib($faitPreLib) {
        $this->faitPreLib = $faitPreLib;
        return $this;
    }

    /**
     * Set the fait situation.
     *
     * @param string $faitSituation The fait situation.
     */
    public function setFaitSituation($faitSituation) {
        $this->faitSituation = $faitSituation;
        return $this;
    }

    /**
     * Set the fait tab bord.
     *
     * @param string $faitTabBord The fait tab bord.
     */
    public function setFaitTabBord($faitTabBord) {
        $this->faitTabBord = $faitTabBord;
        return $this;
    }

    /**
     * Set the fait tp.
     *
     * @param string $faitTp The fait tp.
     */
    public function setFaitTp($faitTp) {
        $this->faitTp = $faitTp;
        return $this;
    }

    /**
     * Set the fait tva.
     *
     * @param string $faitTva The fait tva.
     */
    public function setFaitTva($faitTva) {
        $this->faitTva = $faitTva;
        return $this;
    }

    /**
     * Set the fait tvs.
     *
     * @param string $faitTvs The fait tvs.
     */
    public function setFaitTvs($faitTvs) {
        $this->faitTvs = $faitTvs;
        return $this;
    }

    /**
     * Set the generic10 commentaire date.
     *
     * @param DateTime|null $generic10CommentaireDate The generic10 commentaire date.
     */
    public function setGeneric10CommentaireDate(DateTime $generic10CommentaireDate = null) {
        $this->generic10CommentaireDate = $generic10CommentaireDate;
        return $this;
    }

    /**
     * Set the generic10 commentaire lib.
     *
     * @param string $generic10CommentaireLib The generic10 commentaire lib.
     */
    public function setGeneric10CommentaireLib($generic10CommentaireLib) {
        $this->generic10CommentaireLib = $generic10CommentaireLib;
        return $this;
    }

    /**
     * Set the generic10 date limite.
     *
     * @param DateTime|null $generic10DateLimite The generic10 date limite.
     */
    public function setGeneric10DateLimite(DateTime $generic10DateLimite = null) {
        $this->generic10DateLimite = $generic10DateLimite;
        return $this;
    }

    /**
     * Set the generic1 commentaire date.
     *
     * @param DateTime|null $generic1CommentaireDate The generic1 commentaire date.
     */
    public function setGeneric1CommentaireDate(DateTime $generic1CommentaireDate = null) {
        $this->generic1CommentaireDate = $generic1CommentaireDate;
        return $this;
    }

    /**
     * Set the generic1 commentaire lib.
     *
     * @param string $generic1CommentaireLib The generic1 commentaire lib.
     */
    public function setGeneric1CommentaireLib($generic1CommentaireLib) {
        $this->generic1CommentaireLib = $generic1CommentaireLib;
        return $this;
    }

    /**
     * Set the generic1 date limite.
     *
     * @param DateTime|null $generic1DateLimite The generic1 date limite.
     */
    public function setGeneric1DateLimite(DateTime $generic1DateLimite = null) {
        $this->generic1DateLimite = $generic1DateLimite;
        return $this;
    }

    /**
     * Set the generic2 commentaire date.
     *
     * @param DateTime|null $generic2CommentaireDate The generic2 commentaire date.
     */
    public function setGeneric2CommentaireDate(DateTime $generic2CommentaireDate = null) {
        $this->generic2CommentaireDate = $generic2CommentaireDate;
        return $this;
    }

    /**
     * Set the generic2 commentaire lib.
     *
     * @param string $generic2CommentaireLib The generic2 commentaire lib.
     */
    public function setGeneric2CommentaireLib($generic2CommentaireLib) {
        $this->generic2CommentaireLib = $generic2CommentaireLib;
        return $this;
    }

    /**
     * Set the generic2 date limite.
     *
     * @param DateTime|null $generic2DateLimite The generic2 date limite.
     */
    public function setGeneric2DateLimite(DateTime $generic2DateLimite = null) {
        $this->generic2DateLimite = $generic2DateLimite;
        return $this;
    }

    /**
     * Set the generic3 commentaire date.
     *
     * @param DateTime|null $generic3CommentaireDate The generic3 commentaire date.
     */
    public function setGeneric3CommentaireDate(DateTime $generic3CommentaireDate = null) {
        $this->generic3CommentaireDate = $generic3CommentaireDate;
        return $this;
    }

    /**
     * Set the generic3 commentaire lib.
     *
     * @param string $generic3CommentaireLib The generic3 commentaire lib.
     */
    public function setGeneric3CommentaireLib($generic3CommentaireLib) {
        $this->generic3CommentaireLib = $generic3CommentaireLib;
        return $this;
    }

    /**
     * Set the generic3 date limite.
     *
     * @param DateTime|null $generic3DateLimite The generic3 date limite.
     */
    public function setGeneric3DateLimite(DateTime $generic3DateLimite = null) {
        $this->generic3DateLimite = $generic3DateLimite;
        return $this;
    }

    /**
     * Set the generic4 commentaire date.
     *
     * @param DateTime|null $generic4CommentaireDate The generic4 commentaire date.
     */
    public function setGeneric4CommentaireDate(DateTime $generic4CommentaireDate = null) {
        $this->generic4CommentaireDate = $generic4CommentaireDate;
        return $this;
    }

    /**
     * Set the generic4 commentaire lib.
     *
     * @param string $generic4CommentaireLib The generic4 commentaire lib.
     */
    public function setGeneric4CommentaireLib($generic4CommentaireLib) {
        $this->generic4CommentaireLib = $generic4CommentaireLib;
        return $this;
    }

    /**
     * Set the generic4 date limite.
     *
     * @param DateTime|null $generic4DateLimite The generic4 date limite.
     */
    public function setGeneric4DateLimite(DateTime $generic4DateLimite = null) {
        $this->generic4DateLimite = $generic4DateLimite;
        return $this;
    }

    /**
     * Set the generic5 commentaire date.
     *
     * @param DateTime|null $generic5CommentaireDate The generic5 commentaire date.
     */
    public function setGeneric5CommentaireDate(DateTime $generic5CommentaireDate = null) {
        $this->generic5CommentaireDate = $generic5CommentaireDate;
        return $this;
    }

    /**
     * Set the generic5 commentaire lib.
     *
     * @param string $generic5CommentaireLib The generic5 commentaire lib.
     */
    public function setGeneric5CommentaireLib($generic5CommentaireLib) {
        $this->generic5CommentaireLib = $generic5CommentaireLib;
        return $this;
    }

    /**
     * Set the generic5 date limite.
     *
     * @param DateTime|null $generic5DateLimite The generic5 date limite.
     */
    public function setGeneric5DateLimite(DateTime $generic5DateLimite = null) {
        $this->generic5DateLimite = $generic5DateLimite;
        return $this;
    }

    /**
     * Set the generic6 commentaire date.
     *
     * @param DateTime|null $generic6CommentaireDate The generic6 commentaire date.
     */
    public function setGeneric6CommentaireDate(DateTime $generic6CommentaireDate = null) {
        $this->generic6CommentaireDate = $generic6CommentaireDate;
        return $this;
    }

    /**
     * Set the generic6 commentaire lib.
     *
     * @param string $generic6CommentaireLib The generic6 commentaire lib.
     */
    public function setGeneric6CommentaireLib($generic6CommentaireLib) {
        $this->generic6CommentaireLib = $generic6CommentaireLib;
        return $this;
    }

    /**
     * Set the generic6 date limite.
     *
     * @param DateTime|null $generic6DateLimite The generic6 date limite.
     */
    public function setGeneric6DateLimite(DateTime $generic6DateLimite = null) {
        $this->generic6DateLimite = $generic6DateLimite;
        return $this;
    }

    /**
     * Set the generic7 commentaire date.
     *
     * @param DateTime|null $generic7CommentaireDate The generic7 commentaire date.
     */
    public function setGeneric7CommentaireDate(DateTime $generic7CommentaireDate = null) {
        $this->generic7CommentaireDate = $generic7CommentaireDate;
        return $this;
    }

    /**
     * Set the generic7 commentaire lib.
     *
     * @param string $generic7CommentaireLib The generic7 commentaire lib.
     */
    public function setGeneric7CommentaireLib($generic7CommentaireLib) {
        $this->generic7CommentaireLib = $generic7CommentaireLib;
        return $this;
    }

    /**
     * Set the generic7 date limite.
     *
     * @param DateTime|null $generic7DateLimite The generic7 date limite.
     */
    public function setGeneric7DateLimite(DateTime $generic7DateLimite = null) {
        $this->generic7DateLimite = $generic7DateLimite;
        return $this;
    }

    /**
     * Set the generic8 commentaire date.
     *
     * @param DateTime|null $generic8CommentaireDate The generic8 commentaire date.
     */
    public function setGeneric8CommentaireDate(DateTime $generic8CommentaireDate = null) {
        $this->generic8CommentaireDate = $generic8CommentaireDate;
        return $this;
    }

    /**
     * Set the generic8 commentaire lib.
     *
     * @param string $generic8CommentaireLib The generic8 commentaire lib.
     */
    public function setGeneric8CommentaireLib($generic8CommentaireLib) {
        $this->generic8CommentaireLib = $generic8CommentaireLib;
        return $this;
    }

    /**
     * Set the generic8 date limite.
     *
     * @param DateTime|null $generic8DateLimite The generic8 date limite.
     */
    public function setGeneric8DateLimite(DateTime $generic8DateLimite = null) {
        $this->generic8DateLimite = $generic8DateLimite;
        return $this;
    }

    /**
     * Set the generic9 commentaire date.
     *
     * @param DateTime|null $generic9CommentaireDate The generic9 commentaire date.
     */
    public function setGeneric9CommentaireDate(DateTime $generic9CommentaireDate = null) {
        $this->generic9CommentaireDate = $generic9CommentaireDate;
        return $this;
    }

    /**
     * Set the generic9 commentaire lib.
     *
     * @param string $generic9CommentaireLib The generic9 commentaire lib.
     */
    public function setGeneric9CommentaireLib($generic9CommentaireLib) {
        $this->generic9CommentaireLib = $generic9CommentaireLib;
        return $this;
    }

    /**
     * Set the generic9 date limite.
     *
     * @param DateTime|null $generic9DateLimite The generic9 date limite.
     */
    public function setGeneric9DateLimite(DateTime $generic9DateLimite = null) {
        $this->generic9DateLimite = $generic9DateLimite;
        return $this;
    }

    /**
     * Set the ifu commentaire date.
     *
     * @param DateTime|null $ifuCommentaireDate The ifu commentaire date.
     */
    public function setIfuCommentaireDate(DateTime $ifuCommentaireDate = null) {
        $this->ifuCommentaireDate = $ifuCommentaireDate;
        return $this;
    }

    /**
     * Set the ifu commentaire lib.
     *
     * @param string $ifuCommentaireLib The ifu commentaire lib.
     */
    public function setIfuCommentaireLib($ifuCommentaireLib) {
        $this->ifuCommentaireLib = $ifuCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu commentaire date.
     *
     * @param DateTime|null $impotRevenuCommentaireDate The impot revenu commentaire date.
     */
    public function setImpotRevenuCommentaireDate(DateTime $impotRevenuCommentaireDate = null) {
        $this->impotRevenuCommentaireDate = $impotRevenuCommentaireDate;
        return $this;
    }

    /**
     * Set the impot revenu commentaire lib.
     *
     * @param string $impotRevenuCommentaireLib The impot revenu commentaire lib.
     */
    public function setImpotRevenuCommentaireLib($impotRevenuCommentaireLib) {
        $this->impotRevenuCommentaireLib = $impotRevenuCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu date limite.
     *
     * @param DateTime|null $impotRevenuDateLimite The impot revenu date limite.
     */
    public function setImpotRevenuDateLimite(DateTime $impotRevenuDateLimite = null) {
        $this->impotRevenuDateLimite = $impotRevenuDateLimite;
        return $this;
    }

    /**
     * Set the isa commentaire date.
     *
     * @param DateTime|null $isaCommentaireDate The isa commentaire date.
     */
    public function setIsaCommentaireDate(DateTime $isaCommentaireDate = null) {
        $this->isaCommentaireDate = $isaCommentaireDate;
        return $this;
    }

    /**
     * Set the isa commentaire lib.
     *
     * @param string $isaCommentaireLib The isa commentaire lib.
     */
    public function setIsaCommentaireLib($isaCommentaireLib) {
        $this->isaCommentaireLib = $isaCommentaireLib;
        return $this;
    }

    /**
     * Set the isf commentaire date.
     *
     * @param DateTime|null $isfCommentaireDate The isf commentaire date.
     */
    public function setIsfCommentaireDate(DateTime $isfCommentaireDate = null) {
        $this->isfCommentaireDate = $isfCommentaireDate;
        return $this;
    }

    /**
     * Set the isf commentaire lib.
     *
     * @param string $isfCommentaireLib The isf commentaire lib.
     */
    public function setIsfCommentaireLib($isfCommentaireLib) {
        $this->isfCommentaireLib = $isfCommentaireLib;
        return $this;
    }

    /**
     * Set the isf date limite.
     *
     * @param DateTime|null $isfDateLimite The isf date limite.
     */
    public function setIsfDateLimite(DateTime $isfDateLimite = null) {
        $this->isfDateLimite = $isfDateLimite;
        return $this;
    }

    /**
     * Set the isr commentaire date.
     *
     * @param DateTime|null $isrCommentaireDate The isr commentaire date.
     */
    public function setIsrCommentaireDate(DateTime $isrCommentaireDate = null) {
        $this->isrCommentaireDate = $isrCommentaireDate;
        return $this;
    }

    /**
     * Set the isr commentaire lib.
     *
     * @param string $isrCommentaireLib The isr commentaire lib.
     */
    public function setIsrCommentaireLib($isrCommentaireLib) {
        $this->isrCommentaireLib = $isrCommentaireLib;
        return $this;
    }

    /**
     * Set the iss commentaire date.
     *
     * @param DateTime|null $issCommentaireDate The iss commentaire date.
     */
    public function setIssCommentaireDate(DateTime $issCommentaireDate = null) {
        $this->issCommentaireDate = $issCommentaireDate;
        return $this;
    }

    /**
     * Set the iss commentaire lib.
     *
     * @param string $issCommentaireLib The iss commentaire lib.
     */
    public function setIssCommentaireLib($issCommentaireLib) {
        $this->issCommentaireLib = $issCommentaireLib;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plaf tp commentaire date.
     *
     * @param DateTime|null $plafTpCommentaireDate The plaf tp commentaire date.
     */
    public function setPlafTpCommentaireDate(DateTime $plafTpCommentaireDate = null) {
        $this->plafTpCommentaireDate = $plafTpCommentaireDate;
        return $this;
    }

    /**
     * Set the plaf tp commentaire lib.
     *
     * @param string $plafTpCommentaireLib The plaf tp commentaire lib.
     */
    public function setPlafTpCommentaireLib($plafTpCommentaireLib) {
        $this->plafTpCommentaireLib = $plafTpCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib commentaire date.
     *
     * @param DateTime|null $preLibCommentaireDate The pre lib commentaire date.
     */
    public function setPreLibCommentaireDate(DateTime $preLibCommentaireDate = null) {
        $this->preLibCommentaireDate = $preLibCommentaireDate;
        return $this;
    }

    /**
     * Set the pre lib commentaire lib.
     *
     * @param string $preLibCommentaireLib The pre lib commentaire lib.
     */
    public function setPreLibCommentaireLib($preLibCommentaireLib) {
        $this->preLibCommentaireLib = $preLibCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib date limite.
     *
     * @param DateTime|null $preLibDateLimite The pre lib date limite.
     */
    public function setPreLibDateLimite(DateTime $preLibDateLimite = null) {
        $this->preLibDateLimite = $preLibDateLimite;
        return $this;
    }

    /**
     * Set the situation commentaire date.
     *
     * @param DateTime|null $situationCommentaireDate The situation commentaire date.
     */
    public function setSituationCommentaireDate(DateTime $situationCommentaireDate = null) {
        $this->situationCommentaireDate = $situationCommentaireDate;
        return $this;
    }

    /**
     * Set the situation commentaire lib.
     *
     * @param string $situationCommentaireLib The situation commentaire lib.
     */
    public function setSituationCommentaireLib($situationCommentaireLib) {
        $this->situationCommentaireLib = $situationCommentaireLib;
        return $this;
    }

    /**
     * Set the situation date limite.
     *
     * @param DateTime|null $situationDateLimite The situation date limite.
     */
    public function setSituationDateLimite(DateTime $situationDateLimite = null) {
        $this->situationDateLimite = $situationDateLimite;
        return $this;
    }

    /**
     * Set the tab bord commentaire date.
     *
     * @param DateTime|null $tabBordCommentaireDate The tab bord commentaire date.
     */
    public function setTabBordCommentaireDate(DateTime $tabBordCommentaireDate = null) {
        $this->tabBordCommentaireDate = $tabBordCommentaireDate;
        return $this;
    }

    /**
     * Set the tab bord commentaire lib.
     *
     * @param string $tabBordCommentaireLib The tab bord commentaire lib.
     */
    public function setTabBordCommentaireLib($tabBordCommentaireLib) {
        $this->tabBordCommentaireLib = $tabBordCommentaireLib;
        return $this;
    }

    /**
     * Set the tab bord date limite.
     *
     * @param DateTime|null $tabBordDateLimite The tab bord date limite.
     */
    public function setTabBordDateLimite(DateTime $tabBordDateLimite = null) {
        $this->tabBordDateLimite = $tabBordDateLimite;
        return $this;
    }

    /**
     * Set the tp commentaire date.
     *
     * @param DateTime|null $tpCommentaireDate The tp commentaire date.
     */
    public function setTpCommentaireDate(DateTime $tpCommentaireDate = null) {
        $this->tpCommentaireDate = $tpCommentaireDate;
        return $this;
    }

    /**
     * Set the tp commentaire lib.
     *
     * @param string $tpCommentaireLib The tp commentaire lib.
     */
    public function setTpCommentaireLib($tpCommentaireLib) {
        $this->tpCommentaireLib = $tpCommentaireLib;
        return $this;
    }

    /**
     * Set the tsa commentaire date.
     *
     * @param DateTime|null $tsaCommentaireDate The tsa commentaire date.
     */
    public function setTsaCommentaireDate(DateTime $tsaCommentaireDate = null) {
        $this->tsaCommentaireDate = $tsaCommentaireDate;
        return $this;
    }

    /**
     * Set the tsa commentaire lib.
     *
     * @param string $tsaCommentaireLib The tsa commentaire lib.
     */
    public function setTsaCommentaireLib($tsaCommentaireLib) {
        $this->tsaCommentaireLib = $tsaCommentaireLib;
        return $this;
    }

    /**
     * Set the tss commentaire date.
     *
     * @param DateTime|null $tssCommentaireDate The tss commentaire date.
     */
    public function setTssCommentaireDate(DateTime $tssCommentaireDate = null) {
        $this->tssCommentaireDate = $tssCommentaireDate;
        return $this;
    }

    /**
     * Set the tss commentaire lib.
     *
     * @param string $tssCommentaireLib The tss commentaire lib.
     */
    public function setTssCommentaireLib($tssCommentaireLib) {
        $this->tssCommentaireLib = $tssCommentaireLib;
        return $this;
    }

    /**
     * Set the tva commentaire date.
     *
     * @param DateTime|null $tvaCommentaireDate The tva commentaire date.
     */
    public function setTvaCommentaireDate(DateTime $tvaCommentaireDate = null) {
        $this->tvaCommentaireDate = $tvaCommentaireDate;
        return $this;
    }

    /**
     * Set the tva commentaire lib.
     *
     * @param string $tvaCommentaireLib The tva commentaire lib.
     */
    public function setTvaCommentaireLib($tvaCommentaireLib) {
        $this->tvaCommentaireLib = $tvaCommentaireLib;
        return $this;
    }

    /**
     * Set the tvs commentaire date.
     *
     * @param DateTime|null $tvsCommentaireDate The tvs commentaire date.
     */
    public function setTvsCommentaireDate(DateTime $tvsCommentaireDate = null) {
        $this->tvsCommentaireDate = $tvsCommentaireDate;
        return $this;
    }

    /**
     * Set the tvs commentaire lib.
     *
     * @param string $tvsCommentaireLib The tvs commentaire lib.
     */
    public function setTvsCommentaireLib($tvsCommentaireLib) {
        $this->tvsCommentaireLib = $tvsCommentaireLib;
        return $this;
    }
}
