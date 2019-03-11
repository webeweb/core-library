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
 * Suivi client model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SuiviClient {

    /**
     * Bilan commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
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
     * D a s2 commentaire date.
     *
     * @var DateTime
     */
    private $dAS2CommentaireDate;

    /**
     * D a s2 commentaire lib.
     *
     * @var string
     */
    private $dAS2CommentaireLib;

    /**
     * D c r commentaire date.
     *
     * @var DateTime
     */
    private $dCRCommentaireDate;

    /**
     * D c r commentaire lib.
     *
     * @var string
     */
    private $dCRCommentaireLib;

    /**
     * D c r date limite.
     *
     * @var DateTime
     */
    private $dCRDateLimite;

    /**
     * D s i commentaire date.
     *
     * @var DateTime
     */
    private $dSICommentaireDate;

    /**
     * D s i commentaire lib.
     *
     * @var string
     */
    private $dSICommentaireLib;

    /**
     * Dads u commentaire date.
     *
     * @var DateTime
     */
    private $dadsUCommentaireDate;

    /**
     * Dads u commentaire lib.
     *
     * @var string
     */
    private $dadsUCommentaireLib;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Ducs assedic commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
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
     * @var DateTime
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
     * Fait c v a e.
     *
     * @var string
     */
    private $faitCVAE;

    /**
     * Fait d a s2.
     *
     * @var string
     */
    private $faitDAS2;

    /**
     * Fait d c r.
     *
     * @var string
     */
    private $faitDCR;

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
     * Fait i f u.
     *
     * @var string
     */
    private $faitIFU;

    /**
     * Fait i s a.
     *
     * @var string
     */
    private $faitISA;

    /**
     * Fait i s f.
     *
     * @var string
     */
    private $faitISF;

    /**
     * Fait i s r.
     *
     * @var string
     */
    private $faitISR;

    /**
     * Fait i s s.
     *
     * @var string
     */
    private $faitISS;

    /**
     * Fait impot revenu.
     *
     * @var string
     */
    private $faitImpotRevenu;

    /**
     * Fait plaf t p.
     *
     * @var string
     */
    private $faitPlafTP;

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
     * Fait t p.
     *
     * @var string
     */
    private $faitTP;

    /**
     * Fait t v a.
     *
     * @var string
     */
    private $faitTVA;

    /**
     * Fait t v s.
     *
     * @var string
     */
    private $faitTVS;

    /**
     * Fait tab bord.
     *
     * @var string
     */
    private $faitTabBord;

    /**
     * Generic10 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic10DateLimite;

    /**
     * Generic1 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic1DateLimite;

    /**
     * Generic2 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic2DateLimite;

    /**
     * Generic3 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic3DateLimite;

    /**
     * Generic4 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic4DateLimite;

    /**
     * Generic5 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic5DateLimite;

    /**
     * Generic6 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic6DateLimite;

    /**
     * Generic7 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic7DateLimite;

    /**
     * Generic8 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic8DateLimite;

    /**
     * Generic9 commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $generic9DateLimite;

    /**
     * I f u commentaire date.
     *
     * @var DateTime
     */
    private $iFUCommentaireDate;

    /**
     * I f u commentaire lib.
     *
     * @var string
     */
    private $iFUCommentaireLib;

    /**
     * I s a commentaire date.
     *
     * @var DateTime
     */
    private $iSACommentaireDate;

    /**
     * I s a commentaire lib.
     *
     * @var string
     */
    private $iSACommentaireLib;

    /**
     * I s f commentaire date.
     *
     * @var DateTime
     */
    private $iSFCommentaireDate;

    /**
     * I s f commentaire lib.
     *
     * @var string
     */
    private $iSFCommentaireLib;

    /**
     * I s f date limite.
     *
     * @var DateTime
     */
    private $iSFDateLimite;

    /**
     * I s r commentaire date.
     *
     * @var DateTime
     */
    private $iSRCommentaireDate;

    /**
     * I s r commentaire lib.
     *
     * @var string
     */
    private $iSRCommentaireLib;

    /**
     * I s s commentaire date.
     *
     * @var DateTime
     */
    private $iSSCommentaireDate;

    /**
     * I s s commentaire lib.
     *
     * @var string
     */
    private $iSSCommentaireLib;

    /**
     * Impot revenu commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $impotRevenuDateLimite;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Plaf t p commentaire date.
     *
     * @var DateTime
     */
    private $plafTPCommentaireDate;

    /**
     * Plaf t p commentaire lib.
     *
     * @var string
     */
    private $plafTPCommentaireLib;

    /**
     * Pre lib commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $preLibDateLimite;

    /**
     * Situation commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $situationDateLimite;

    /**
     * T p commentaire date.
     *
     * @var DateTime
     */
    private $tPCommentaireDate;

    /**
     * T p commentaire lib.
     *
     * @var string
     */
    private $tPCommentaireLib;

    /**
     * T s a commentaire date.
     *
     * @var DateTime
     */
    private $tSACommentaireDate;

    /**
     * T s a commentaire lib.
     *
     * @var string
     */
    private $tSACommentaireLib;

    /**
     * T s s commentaire date.
     *
     * @var DateTime
     */
    private $tSSCommentaireDate;

    /**
     * T s s commentaire lib.
     *
     * @var string
     */
    private $tSSCommentaireLib;

    /**
     * T v s commentaire date.
     *
     * @var DateTime
     */
    private $tVSCommentaireDate;

    /**
     * T v s commentaire lib.
     *
     * @var string
     */
    private $tVSCommentaireLib;

    /**
     * Tab bord commentaire date.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $tabBordDateLimite;

    /**
     * Tva commentaire date.
     *
     * @var DateTime
     */
    private $tvaCommentaireDate;

    /**
     * Tva commentaire lib.
     *
     * @var string
     */
    private $tvaCommentaireLib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bilan commentaire date.
     *
     * @return DateTime Returns the bilan commentaire date.
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
     * @return DateTime Returns the bull commentaire date.
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
     * Get the d a s2 commentaire date.
     *
     * @return DateTime Returns the d a s2 commentaire date.
     */
    public function getDAS2CommentaireDate() {
        return $this->dAS2CommentaireDate;
    }

    /**
     * Get the d a s2 commentaire lib.
     *
     * @return string Returns the d a s2 commentaire lib.
     */
    public function getDAS2CommentaireLib() {
        return $this->dAS2CommentaireLib;
    }

    /**
     * Get the d c r commentaire date.
     *
     * @return DateTime Returns the d c r commentaire date.
     */
    public function getDCRCommentaireDate() {
        return $this->dCRCommentaireDate;
    }

    /**
     * Get the d c r commentaire lib.
     *
     * @return string Returns the d c r commentaire lib.
     */
    public function getDCRCommentaireLib() {
        return $this->dCRCommentaireLib;
    }

    /**
     * Get the d c r date limite.
     *
     * @return DateTime Returns the d c r date limite.
     */
    public function getDCRDateLimite() {
        return $this->dCRDateLimite;
    }

    /**
     * Get the d s i commentaire date.
     *
     * @return DateTime Returns the d s i commentaire date.
     */
    public function getDSICommentaireDate() {
        return $this->dSICommentaireDate;
    }

    /**
     * Get the d s i commentaire lib.
     *
     * @return string Returns the d s i commentaire lib.
     */
    public function getDSICommentaireLib() {
        return $this->dSICommentaireLib;
    }

    /**
     * Get the dads u commentaire date.
     *
     * @return DateTime Returns the dads u commentaire date.
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
     * Get the date modif.
     *
     * @return DateTime Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the ducs assedic commentaire date.
     *
     * @return DateTime Returns the ducs assedic commentaire date.
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
     * @return DateTime Returns the ducs urssaf commentaire date.
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
     * @return DateTime Returns the facturation commentaire date.
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
     * Get the fait c v a e.
     *
     * @return string Returns the fait c v a e.
     */
    public function getFaitCVAE() {
        return $this->faitCVAE;
    }

    /**
     * Get the fait d a s2.
     *
     * @return string Returns the fait d a s2.
     */
    public function getFaitDAS2() {
        return $this->faitDAS2;
    }

    /**
     * Get the fait d c r.
     *
     * @return string Returns the fait d c r.
     */
    public function getFaitDCR() {
        return $this->faitDCR;
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
     * Get the fait i f u.
     *
     * @return string Returns the fait i f u.
     */
    public function getFaitIFU() {
        return $this->faitIFU;
    }

    /**
     * Get the fait i s a.
     *
     * @return string Returns the fait i s a.
     */
    public function getFaitISA() {
        return $this->faitISA;
    }

    /**
     * Get the fait i s f.
     *
     * @return string Returns the fait i s f.
     */
    public function getFaitISF() {
        return $this->faitISF;
    }

    /**
     * Get the fait i s r.
     *
     * @return string Returns the fait i s r.
     */
    public function getFaitISR() {
        return $this->faitISR;
    }

    /**
     * Get the fait i s s.
     *
     * @return string Returns the fait i s s.
     */
    public function getFaitISS() {
        return $this->faitISS;
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
     * Get the fait plaf t p.
     *
     * @return string Returns the fait plaf t p.
     */
    public function getFaitPlafTP() {
        return $this->faitPlafTP;
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
     * Get the fait t p.
     *
     * @return string Returns the fait t p.
     */
    public function getFaitTP() {
        return $this->faitTP;
    }

    /**
     * Get the fait t v a.
     *
     * @return string Returns the fait t v a.
     */
    public function getFaitTVA() {
        return $this->faitTVA;
    }

    /**
     * Get the fait t v s.
     *
     * @return string Returns the fait t v s.
     */
    public function getFaitTVS() {
        return $this->faitTVS;
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
     * Get the generic10 commentaire date.
     *
     * @return DateTime Returns the generic10 commentaire date.
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
     * @return DateTime Returns the generic10 date limite.
     */
    public function getGeneric10DateLimite() {
        return $this->generic10DateLimite;
    }

    /**
     * Get the generic1 commentaire date.
     *
     * @return DateTime Returns the generic1 commentaire date.
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
     * @return DateTime Returns the generic1 date limite.
     */
    public function getGeneric1DateLimite() {
        return $this->generic1DateLimite;
    }

    /**
     * Get the generic2 commentaire date.
     *
     * @return DateTime Returns the generic2 commentaire date.
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
     * @return DateTime Returns the generic2 date limite.
     */
    public function getGeneric2DateLimite() {
        return $this->generic2DateLimite;
    }

    /**
     * Get the generic3 commentaire date.
     *
     * @return DateTime Returns the generic3 commentaire date.
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
     * @return DateTime Returns the generic3 date limite.
     */
    public function getGeneric3DateLimite() {
        return $this->generic3DateLimite;
    }

    /**
     * Get the generic4 commentaire date.
     *
     * @return DateTime Returns the generic4 commentaire date.
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
     * @return DateTime Returns the generic4 date limite.
     */
    public function getGeneric4DateLimite() {
        return $this->generic4DateLimite;
    }

    /**
     * Get the generic5 commentaire date.
     *
     * @return DateTime Returns the generic5 commentaire date.
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
     * @return DateTime Returns the generic5 date limite.
     */
    public function getGeneric5DateLimite() {
        return $this->generic5DateLimite;
    }

    /**
     * Get the generic6 commentaire date.
     *
     * @return DateTime Returns the generic6 commentaire date.
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
     * @return DateTime Returns the generic6 date limite.
     */
    public function getGeneric6DateLimite() {
        return $this->generic6DateLimite;
    }

    /**
     * Get the generic7 commentaire date.
     *
     * @return DateTime Returns the generic7 commentaire date.
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
     * @return DateTime Returns the generic7 date limite.
     */
    public function getGeneric7DateLimite() {
        return $this->generic7DateLimite;
    }

    /**
     * Get the generic8 commentaire date.
     *
     * @return DateTime Returns the generic8 commentaire date.
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
     * @return DateTime Returns the generic8 date limite.
     */
    public function getGeneric8DateLimite() {
        return $this->generic8DateLimite;
    }

    /**
     * Get the generic9 commentaire date.
     *
     * @return DateTime Returns the generic9 commentaire date.
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
     * @return DateTime Returns the generic9 date limite.
     */
    public function getGeneric9DateLimite() {
        return $this->generic9DateLimite;
    }

    /**
     * Get the i f u commentaire date.
     *
     * @return DateTime Returns the i f u commentaire date.
     */
    public function getIFUCommentaireDate() {
        return $this->iFUCommentaireDate;
    }

    /**
     * Get the i f u commentaire lib.
     *
     * @return string Returns the i f u commentaire lib.
     */
    public function getIFUCommentaireLib() {
        return $this->iFUCommentaireLib;
    }

    /**
     * Get the i s a commentaire date.
     *
     * @return DateTime Returns the i s a commentaire date.
     */
    public function getISACommentaireDate() {
        return $this->iSACommentaireDate;
    }

    /**
     * Get the i s a commentaire lib.
     *
     * @return string Returns the i s a commentaire lib.
     */
    public function getISACommentaireLib() {
        return $this->iSACommentaireLib;
    }

    /**
     * Get the i s f commentaire date.
     *
     * @return DateTime Returns the i s f commentaire date.
     */
    public function getISFCommentaireDate() {
        return $this->iSFCommentaireDate;
    }

    /**
     * Get the i s f commentaire lib.
     *
     * @return string Returns the i s f commentaire lib.
     */
    public function getISFCommentaireLib() {
        return $this->iSFCommentaireLib;
    }

    /**
     * Get the i s f date limite.
     *
     * @return DateTime Returns the i s f date limite.
     */
    public function getISFDateLimite() {
        return $this->iSFDateLimite;
    }

    /**
     * Get the i s r commentaire date.
     *
     * @return DateTime Returns the i s r commentaire date.
     */
    public function getISRCommentaireDate() {
        return $this->iSRCommentaireDate;
    }

    /**
     * Get the i s r commentaire lib.
     *
     * @return string Returns the i s r commentaire lib.
     */
    public function getISRCommentaireLib() {
        return $this->iSRCommentaireLib;
    }

    /**
     * Get the i s s commentaire date.
     *
     * @return DateTime Returns the i s s commentaire date.
     */
    public function getISSCommentaireDate() {
        return $this->iSSCommentaireDate;
    }

    /**
     * Get the i s s commentaire lib.
     *
     * @return string Returns the i s s commentaire lib.
     */
    public function getISSCommentaireLib() {
        return $this->iSSCommentaireLib;
    }

    /**
     * Get the impot revenu commentaire date.
     *
     * @return DateTime Returns the impot revenu commentaire date.
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
     * @return DateTime Returns the impot revenu date limite.
     */
    public function getImpotRevenuDateLimite() {
        return $this->impotRevenuDateLimite;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the plaf t p commentaire date.
     *
     * @return DateTime Returns the plaf t p commentaire date.
     */
    public function getPlafTPCommentaireDate() {
        return $this->plafTPCommentaireDate;
    }

    /**
     * Get the plaf t p commentaire lib.
     *
     * @return string Returns the plaf t p commentaire lib.
     */
    public function getPlafTPCommentaireLib() {
        return $this->plafTPCommentaireLib;
    }

    /**
     * Get the pre lib commentaire date.
     *
     * @return DateTime Returns the pre lib commentaire date.
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
     * @return DateTime Returns the pre lib date limite.
     */
    public function getPreLibDateLimite() {
        return $this->preLibDateLimite;
    }

    /**
     * Get the situation commentaire date.
     *
     * @return DateTime Returns the situation commentaire date.
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
     * @return DateTime Returns the situation date limite.
     */
    public function getSituationDateLimite() {
        return $this->situationDateLimite;
    }

    /**
     * Get the t p commentaire date.
     *
     * @return DateTime Returns the t p commentaire date.
     */
    public function getTPCommentaireDate() {
        return $this->tPCommentaireDate;
    }

    /**
     * Get the t p commentaire lib.
     *
     * @return string Returns the t p commentaire lib.
     */
    public function getTPCommentaireLib() {
        return $this->tPCommentaireLib;
    }

    /**
     * Get the t s a commentaire date.
     *
     * @return DateTime Returns the t s a commentaire date.
     */
    public function getTSACommentaireDate() {
        return $this->tSACommentaireDate;
    }

    /**
     * Get the t s a commentaire lib.
     *
     * @return string Returns the t s a commentaire lib.
     */
    public function getTSACommentaireLib() {
        return $this->tSACommentaireLib;
    }

    /**
     * Get the t s s commentaire date.
     *
     * @return DateTime Returns the t s s commentaire date.
     */
    public function getTSSCommentaireDate() {
        return $this->tSSCommentaireDate;
    }

    /**
     * Get the t s s commentaire lib.
     *
     * @return string Returns the t s s commentaire lib.
     */
    public function getTSSCommentaireLib() {
        return $this->tSSCommentaireLib;
    }

    /**
     * Get the t v s commentaire date.
     *
     * @return DateTime Returns the t v s commentaire date.
     */
    public function getTVSCommentaireDate() {
        return $this->tVSCommentaireDate;
    }

    /**
     * Get the t v s commentaire lib.
     *
     * @return string Returns the t v s commentaire lib.
     */
    public function getTVSCommentaireLib() {
        return $this->tVSCommentaireLib;
    }

    /**
     * Get the tab bord commentaire date.
     *
     * @return DateTime Returns the tab bord commentaire date.
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
     * @return DateTime Returns the tab bord date limite.
     */
    public function getTabBordDateLimite() {
        return $this->tabBordDateLimite;
    }

    /**
     * Get the tva commentaire date.
     *
     * @return DateTime Returns the tva commentaire date.
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
     * Set the bilan commentaire date.
     *
     * @param DateTime $bilanCommentaireDate The bilan commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setBilanCommentaireDate(DateTime $bilanCommentaireDate = null) {
        $this->bilanCommentaireDate = $bilanCommentaireDate;
        return $this;
    }

    /**
     * Set the bilan commentaire lib.
     *
     * @param string $bilanCommentaireLib The bilan commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setBilanCommentaireLib($bilanCommentaireLib) {
        $this->bilanCommentaireLib = $bilanCommentaireLib;
        return $this;
    }

    /**
     * Set the bull commentaire date.
     *
     * @param DateTime $bullCommentaireDate The bull commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setBullCommentaireDate(DateTime $bullCommentaireDate = null) {
        $this->bullCommentaireDate = $bullCommentaireDate;
        return $this;
    }

    /**
     * Set the bull commentaire lib.
     *
     * @param string $bullCommentaireLib The bull commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setBullCommentaireLib($bullCommentaireLib) {
        $this->bullCommentaireLib = $bullCommentaireLib;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return SuiviClient Returns this suivi client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the d a s2 commentaire date.
     *
     * @param DateTime $dAS2CommentaireDate The d a s2 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDAS2CommentaireDate(DateTime $dAS2CommentaireDate = null) {
        $this->dAS2CommentaireDate = $dAS2CommentaireDate;
        return $this;
    }

    /**
     * Set the d a s2 commentaire lib.
     *
     * @param string $dAS2CommentaireLib The d a s2 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDAS2CommentaireLib($dAS2CommentaireLib) {
        $this->dAS2CommentaireLib = $dAS2CommentaireLib;
        return $this;
    }

    /**
     * Set the d c r commentaire date.
     *
     * @param DateTime $dCRCommentaireDate The d c r commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDCRCommentaireDate(DateTime $dCRCommentaireDate = null) {
        $this->dCRCommentaireDate = $dCRCommentaireDate;
        return $this;
    }

    /**
     * Set the d c r commentaire lib.
     *
     * @param string $dCRCommentaireLib The d c r commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDCRCommentaireLib($dCRCommentaireLib) {
        $this->dCRCommentaireLib = $dCRCommentaireLib;
        return $this;
    }

    /**
     * Set the d c r date limite.
     *
     * @param DateTime $dCRDateLimite The d c r date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDCRDateLimite(DateTime $dCRDateLimite = null) {
        $this->dCRDateLimite = $dCRDateLimite;
        return $this;
    }

    /**
     * Set the d s i commentaire date.
     *
     * @param DateTime $dSICommentaireDate The d s i commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDSICommentaireDate(DateTime $dSICommentaireDate = null) {
        $this->dSICommentaireDate = $dSICommentaireDate;
        return $this;
    }

    /**
     * Set the d s i commentaire lib.
     *
     * @param string $dSICommentaireLib The d s i commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDSICommentaireLib($dSICommentaireLib) {
        $this->dSICommentaireLib = $dSICommentaireLib;
        return $this;
    }

    /**
     * Set the dads u commentaire date.
     *
     * @param DateTime $dadsUCommentaireDate The dads u commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDadsUCommentaireDate(DateTime $dadsUCommentaireDate = null) {
        $this->dadsUCommentaireDate = $dadsUCommentaireDate;
        return $this;
    }

    /**
     * Set the dads u commentaire lib.
     *
     * @param string $dadsUCommentaireLib The dads u commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDadsUCommentaireLib($dadsUCommentaireLib) {
        $this->dadsUCommentaireLib = $dadsUCommentaireLib;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire date.
     *
     * @param DateTime $ducsAssedicCommentaireDate The ducs assedic commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDucsAssedicCommentaireDate(DateTime $ducsAssedicCommentaireDate = null) {
        $this->ducsAssedicCommentaireDate = $ducsAssedicCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs assedic commentaire lib.
     *
     * @param string $ducsAssedicCommentaireLib The ducs assedic commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDucsAssedicCommentaireLib($ducsAssedicCommentaireLib) {
        $this->ducsAssedicCommentaireLib = $ducsAssedicCommentaireLib;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire date.
     *
     * @param DateTime $ducsUrssafCommentaireDate The ducs urssaf commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDucsUrssafCommentaireDate(DateTime $ducsUrssafCommentaireDate = null) {
        $this->ducsUrssafCommentaireDate = $ducsUrssafCommentaireDate;
        return $this;
    }

    /**
     * Set the ducs urssaf commentaire lib.
     *
     * @param string $ducsUrssafCommentaireLib The ducs urssaf commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setDucsUrssafCommentaireLib($ducsUrssafCommentaireLib) {
        $this->ducsUrssafCommentaireLib = $ducsUrssafCommentaireLib;
        return $this;
    }

    /**
     * Set the facturation commentaire date.
     *
     * @param DateTime $facturationCommentaireDate The facturation commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFacturationCommentaireDate(DateTime $facturationCommentaireDate = null) {
        $this->facturationCommentaireDate = $facturationCommentaireDate;
        return $this;
    }

    /**
     * Set the facturation commentaire lib.
     *
     * @param string $facturationCommentaireLib The facturation commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFacturationCommentaireLib($facturationCommentaireLib) {
        $this->facturationCommentaireLib = $facturationCommentaireLib;
        return $this;
    }

    /**
     * Set the fait bilan.
     *
     * @param string $faitBilan The fait bilan.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitBilan($faitBilan) {
        $this->faitBilan = $faitBilan;
        return $this;
    }

    /**
     * Set the fait c v a e.
     *
     * @param string $faitCVAE The fait c v a e.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitCVAE($faitCVAE) {
        $this->faitCVAE = $faitCVAE;
        return $this;
    }

    /**
     * Set the fait d a s2.
     *
     * @param string $faitDAS2 The fait d a s2.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitDAS2($faitDAS2) {
        $this->faitDAS2 = $faitDAS2;
        return $this;
    }

    /**
     * Set the fait d c r.
     *
     * @param string $faitDCR The fait d c r.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitDCR($faitDCR) {
        $this->faitDCR = $faitDCR;
        return $this;
    }

    /**
     * Set the fait generic1.
     *
     * @param string $faitGeneric1 The fait generic1.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric1($faitGeneric1) {
        $this->faitGeneric1 = $faitGeneric1;
        return $this;
    }

    /**
     * Set the fait generic10.
     *
     * @param string $faitGeneric10 The fait generic10.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric10($faitGeneric10) {
        $this->faitGeneric10 = $faitGeneric10;
        return $this;
    }

    /**
     * Set the fait generic2.
     *
     * @param string $faitGeneric2 The fait generic2.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric2($faitGeneric2) {
        $this->faitGeneric2 = $faitGeneric2;
        return $this;
    }

    /**
     * Set the fait generic3.
     *
     * @param string $faitGeneric3 The fait generic3.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric3($faitGeneric3) {
        $this->faitGeneric3 = $faitGeneric3;
        return $this;
    }

    /**
     * Set the fait generic4.
     *
     * @param string $faitGeneric4 The fait generic4.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric4($faitGeneric4) {
        $this->faitGeneric4 = $faitGeneric4;
        return $this;
    }

    /**
     * Set the fait generic5.
     *
     * @param string $faitGeneric5 The fait generic5.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric5($faitGeneric5) {
        $this->faitGeneric5 = $faitGeneric5;
        return $this;
    }

    /**
     * Set the fait generic6.
     *
     * @param string $faitGeneric6 The fait generic6.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric6($faitGeneric6) {
        $this->faitGeneric6 = $faitGeneric6;
        return $this;
    }

    /**
     * Set the fait generic7.
     *
     * @param string $faitGeneric7 The fait generic7.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric7($faitGeneric7) {
        $this->faitGeneric7 = $faitGeneric7;
        return $this;
    }

    /**
     * Set the fait generic8.
     *
     * @param string $faitGeneric8 The fait generic8.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric8($faitGeneric8) {
        $this->faitGeneric8 = $faitGeneric8;
        return $this;
    }

    /**
     * Set the fait generic9.
     *
     * @param string $faitGeneric9 The fait generic9.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitGeneric9($faitGeneric9) {
        $this->faitGeneric9 = $faitGeneric9;
        return $this;
    }

    /**
     * Set the fait i f u.
     *
     * @param string $faitIFU The fait i f u.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitIFU($faitIFU) {
        $this->faitIFU = $faitIFU;
        return $this;
    }

    /**
     * Set the fait i s a.
     *
     * @param string $faitISA The fait i s a.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitISA($faitISA) {
        $this->faitISA = $faitISA;
        return $this;
    }

    /**
     * Set the fait i s f.
     *
     * @param string $faitISF The fait i s f.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitISF($faitISF) {
        $this->faitISF = $faitISF;
        return $this;
    }

    /**
     * Set the fait i s r.
     *
     * @param string $faitISR The fait i s r.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitISR($faitISR) {
        $this->faitISR = $faitISR;
        return $this;
    }

    /**
     * Set the fait i s s.
     *
     * @param string $faitISS The fait i s s.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitISS($faitISS) {
        $this->faitISS = $faitISS;
        return $this;
    }

    /**
     * Set the fait impot revenu.
     *
     * @param string $faitImpotRevenu The fait impot revenu.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitImpotRevenu($faitImpotRevenu) {
        $this->faitImpotRevenu = $faitImpotRevenu;
        return $this;
    }

    /**
     * Set the fait plaf t p.
     *
     * @param string $faitPlafTP The fait plaf t p.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitPlafTP($faitPlafTP) {
        $this->faitPlafTP = $faitPlafTP;
        return $this;
    }

    /**
     * Set the fait pre lib.
     *
     * @param string $faitPreLib The fait pre lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitPreLib($faitPreLib) {
        $this->faitPreLib = $faitPreLib;
        return $this;
    }

    /**
     * Set the fait situation.
     *
     * @param string $faitSituation The fait situation.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitSituation($faitSituation) {
        $this->faitSituation = $faitSituation;
        return $this;
    }

    /**
     * Set the fait t p.
     *
     * @param string $faitTP The fait t p.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitTP($faitTP) {
        $this->faitTP = $faitTP;
        return $this;
    }

    /**
     * Set the fait t v a.
     *
     * @param string $faitTVA The fait t v a.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitTVA($faitTVA) {
        $this->faitTVA = $faitTVA;
        return $this;
    }

    /**
     * Set the fait t v s.
     *
     * @param string $faitTVS The fait t v s.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitTVS($faitTVS) {
        $this->faitTVS = $faitTVS;
        return $this;
    }

    /**
     * Set the fait tab bord.
     *
     * @param string $faitTabBord The fait tab bord.
     * @return SuiviClient Returns this suivi client.
     */
    public function setFaitTabBord($faitTabBord) {
        $this->faitTabBord = $faitTabBord;
        return $this;
    }

    /**
     * Set the generic10 commentaire date.
     *
     * @param DateTime $generic10CommentaireDate The generic10 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric10CommentaireDate(DateTime $generic10CommentaireDate = null) {
        $this->generic10CommentaireDate = $generic10CommentaireDate;
        return $this;
    }

    /**
     * Set the generic10 commentaire lib.
     *
     * @param string $generic10CommentaireLib The generic10 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric10CommentaireLib($generic10CommentaireLib) {
        $this->generic10CommentaireLib = $generic10CommentaireLib;
        return $this;
    }

    /**
     * Set the generic10 date limite.
     *
     * @param DateTime $generic10DateLimite The generic10 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric10DateLimite(DateTime $generic10DateLimite = null) {
        $this->generic10DateLimite = $generic10DateLimite;
        return $this;
    }

    /**
     * Set the generic1 commentaire date.
     *
     * @param DateTime $generic1CommentaireDate The generic1 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric1CommentaireDate(DateTime $generic1CommentaireDate = null) {
        $this->generic1CommentaireDate = $generic1CommentaireDate;
        return $this;
    }

    /**
     * Set the generic1 commentaire lib.
     *
     * @param string $generic1CommentaireLib The generic1 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric1CommentaireLib($generic1CommentaireLib) {
        $this->generic1CommentaireLib = $generic1CommentaireLib;
        return $this;
    }

    /**
     * Set the generic1 date limite.
     *
     * @param DateTime $generic1DateLimite The generic1 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric1DateLimite(DateTime $generic1DateLimite = null) {
        $this->generic1DateLimite = $generic1DateLimite;
        return $this;
    }

    /**
     * Set the generic2 commentaire date.
     *
     * @param DateTime $generic2CommentaireDate The generic2 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric2CommentaireDate(DateTime $generic2CommentaireDate = null) {
        $this->generic2CommentaireDate = $generic2CommentaireDate;
        return $this;
    }

    /**
     * Set the generic2 commentaire lib.
     *
     * @param string $generic2CommentaireLib The generic2 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric2CommentaireLib($generic2CommentaireLib) {
        $this->generic2CommentaireLib = $generic2CommentaireLib;
        return $this;
    }

    /**
     * Set the generic2 date limite.
     *
     * @param DateTime $generic2DateLimite The generic2 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric2DateLimite(DateTime $generic2DateLimite = null) {
        $this->generic2DateLimite = $generic2DateLimite;
        return $this;
    }

    /**
     * Set the generic3 commentaire date.
     *
     * @param DateTime $generic3CommentaireDate The generic3 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric3CommentaireDate(DateTime $generic3CommentaireDate = null) {
        $this->generic3CommentaireDate = $generic3CommentaireDate;
        return $this;
    }

    /**
     * Set the generic3 commentaire lib.
     *
     * @param string $generic3CommentaireLib The generic3 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric3CommentaireLib($generic3CommentaireLib) {
        $this->generic3CommentaireLib = $generic3CommentaireLib;
        return $this;
    }

    /**
     * Set the generic3 date limite.
     *
     * @param DateTime $generic3DateLimite The generic3 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric3DateLimite(DateTime $generic3DateLimite = null) {
        $this->generic3DateLimite = $generic3DateLimite;
        return $this;
    }

    /**
     * Set the generic4 commentaire date.
     *
     * @param DateTime $generic4CommentaireDate The generic4 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric4CommentaireDate(DateTime $generic4CommentaireDate = null) {
        $this->generic4CommentaireDate = $generic4CommentaireDate;
        return $this;
    }

    /**
     * Set the generic4 commentaire lib.
     *
     * @param string $generic4CommentaireLib The generic4 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric4CommentaireLib($generic4CommentaireLib) {
        $this->generic4CommentaireLib = $generic4CommentaireLib;
        return $this;
    }

    /**
     * Set the generic4 date limite.
     *
     * @param DateTime $generic4DateLimite The generic4 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric4DateLimite(DateTime $generic4DateLimite = null) {
        $this->generic4DateLimite = $generic4DateLimite;
        return $this;
    }

    /**
     * Set the generic5 commentaire date.
     *
     * @param DateTime $generic5CommentaireDate The generic5 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric5CommentaireDate(DateTime $generic5CommentaireDate = null) {
        $this->generic5CommentaireDate = $generic5CommentaireDate;
        return $this;
    }

    /**
     * Set the generic5 commentaire lib.
     *
     * @param string $generic5CommentaireLib The generic5 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric5CommentaireLib($generic5CommentaireLib) {
        $this->generic5CommentaireLib = $generic5CommentaireLib;
        return $this;
    }

    /**
     * Set the generic5 date limite.
     *
     * @param DateTime $generic5DateLimite The generic5 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric5DateLimite(DateTime $generic5DateLimite = null) {
        $this->generic5DateLimite = $generic5DateLimite;
        return $this;
    }

    /**
     * Set the generic6 commentaire date.
     *
     * @param DateTime $generic6CommentaireDate The generic6 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric6CommentaireDate(DateTime $generic6CommentaireDate = null) {
        $this->generic6CommentaireDate = $generic6CommentaireDate;
        return $this;
    }

    /**
     * Set the generic6 commentaire lib.
     *
     * @param string $generic6CommentaireLib The generic6 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric6CommentaireLib($generic6CommentaireLib) {
        $this->generic6CommentaireLib = $generic6CommentaireLib;
        return $this;
    }

    /**
     * Set the generic6 date limite.
     *
     * @param DateTime $generic6DateLimite The generic6 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric6DateLimite(DateTime $generic6DateLimite = null) {
        $this->generic6DateLimite = $generic6DateLimite;
        return $this;
    }

    /**
     * Set the generic7 commentaire date.
     *
     * @param DateTime $generic7CommentaireDate The generic7 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric7CommentaireDate(DateTime $generic7CommentaireDate = null) {
        $this->generic7CommentaireDate = $generic7CommentaireDate;
        return $this;
    }

    /**
     * Set the generic7 commentaire lib.
     *
     * @param string $generic7CommentaireLib The generic7 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric7CommentaireLib($generic7CommentaireLib) {
        $this->generic7CommentaireLib = $generic7CommentaireLib;
        return $this;
    }

    /**
     * Set the generic7 date limite.
     *
     * @param DateTime $generic7DateLimite The generic7 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric7DateLimite(DateTime $generic7DateLimite = null) {
        $this->generic7DateLimite = $generic7DateLimite;
        return $this;
    }

    /**
     * Set the generic8 commentaire date.
     *
     * @param DateTime $generic8CommentaireDate The generic8 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric8CommentaireDate(DateTime $generic8CommentaireDate = null) {
        $this->generic8CommentaireDate = $generic8CommentaireDate;
        return $this;
    }

    /**
     * Set the generic8 commentaire lib.
     *
     * @param string $generic8CommentaireLib The generic8 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric8CommentaireLib($generic8CommentaireLib) {
        $this->generic8CommentaireLib = $generic8CommentaireLib;
        return $this;
    }

    /**
     * Set the generic8 date limite.
     *
     * @param DateTime $generic8DateLimite The generic8 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric8DateLimite(DateTime $generic8DateLimite = null) {
        $this->generic8DateLimite = $generic8DateLimite;
        return $this;
    }

    /**
     * Set the generic9 commentaire date.
     *
     * @param DateTime $generic9CommentaireDate The generic9 commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric9CommentaireDate(DateTime $generic9CommentaireDate = null) {
        $this->generic9CommentaireDate = $generic9CommentaireDate;
        return $this;
    }

    /**
     * Set the generic9 commentaire lib.
     *
     * @param string $generic9CommentaireLib The generic9 commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric9CommentaireLib($generic9CommentaireLib) {
        $this->generic9CommentaireLib = $generic9CommentaireLib;
        return $this;
    }

    /**
     * Set the generic9 date limite.
     *
     * @param DateTime $generic9DateLimite The generic9 date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setGeneric9DateLimite(DateTime $generic9DateLimite = null) {
        $this->generic9DateLimite = $generic9DateLimite;
        return $this;
    }

    /**
     * Set the i f u commentaire date.
     *
     * @param DateTime $iFUCommentaireDate The i f u commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setIFUCommentaireDate(DateTime $iFUCommentaireDate = null) {
        $this->iFUCommentaireDate = $iFUCommentaireDate;
        return $this;
    }

    /**
     * Set the i f u commentaire lib.
     *
     * @param string $iFUCommentaireLib The i f u commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setIFUCommentaireLib($iFUCommentaireLib) {
        $this->iFUCommentaireLib = $iFUCommentaireLib;
        return $this;
    }

    /**
     * Set the i s a commentaire date.
     *
     * @param DateTime $iSACommentaireDate The i s a commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISACommentaireDate(DateTime $iSACommentaireDate = null) {
        $this->iSACommentaireDate = $iSACommentaireDate;
        return $this;
    }

    /**
     * Set the i s a commentaire lib.
     *
     * @param string $iSACommentaireLib The i s a commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISACommentaireLib($iSACommentaireLib) {
        $this->iSACommentaireLib = $iSACommentaireLib;
        return $this;
    }

    /**
     * Set the i s f commentaire date.
     *
     * @param DateTime $iSFCommentaireDate The i s f commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISFCommentaireDate(DateTime $iSFCommentaireDate = null) {
        $this->iSFCommentaireDate = $iSFCommentaireDate;
        return $this;
    }

    /**
     * Set the i s f commentaire lib.
     *
     * @param string $iSFCommentaireLib The i s f commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISFCommentaireLib($iSFCommentaireLib) {
        $this->iSFCommentaireLib = $iSFCommentaireLib;
        return $this;
    }

    /**
     * Set the i s f date limite.
     *
     * @param DateTime $iSFDateLimite The i s f date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISFDateLimite(DateTime $iSFDateLimite = null) {
        $this->iSFDateLimite = $iSFDateLimite;
        return $this;
    }

    /**
     * Set the i s r commentaire date.
     *
     * @param DateTime $iSRCommentaireDate The i s r commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISRCommentaireDate(DateTime $iSRCommentaireDate = null) {
        $this->iSRCommentaireDate = $iSRCommentaireDate;
        return $this;
    }

    /**
     * Set the i s r commentaire lib.
     *
     * @param string $iSRCommentaireLib The i s r commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISRCommentaireLib($iSRCommentaireLib) {
        $this->iSRCommentaireLib = $iSRCommentaireLib;
        return $this;
    }

    /**
     * Set the i s s commentaire date.
     *
     * @param DateTime $iSSCommentaireDate The i s s commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISSCommentaireDate(DateTime $iSSCommentaireDate = null) {
        $this->iSSCommentaireDate = $iSSCommentaireDate;
        return $this;
    }

    /**
     * Set the i s s commentaire lib.
     *
     * @param string $iSSCommentaireLib The i s s commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setISSCommentaireLib($iSSCommentaireLib) {
        $this->iSSCommentaireLib = $iSSCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu commentaire date.
     *
     * @param DateTime $impotRevenuCommentaireDate The impot revenu commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setImpotRevenuCommentaireDate(DateTime $impotRevenuCommentaireDate = null) {
        $this->impotRevenuCommentaireDate = $impotRevenuCommentaireDate;
        return $this;
    }

    /**
     * Set the impot revenu commentaire lib.
     *
     * @param string $impotRevenuCommentaireLib The impot revenu commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setImpotRevenuCommentaireLib($impotRevenuCommentaireLib) {
        $this->impotRevenuCommentaireLib = $impotRevenuCommentaireLib;
        return $this;
    }

    /**
     * Set the impot revenu date limite.
     *
     * @param DateTime $impotRevenuDateLimite The impot revenu date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setImpotRevenuDateLimite(DateTime $impotRevenuDateLimite = null) {
        $this->impotRevenuDateLimite = $impotRevenuDateLimite;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plaf t p commentaire date.
     *
     * @param DateTime $plafTPCommentaireDate The plaf t p commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPlafTPCommentaireDate(DateTime $plafTPCommentaireDate = null) {
        $this->plafTPCommentaireDate = $plafTPCommentaireDate;
        return $this;
    }

    /**
     * Set the plaf t p commentaire lib.
     *
     * @param string $plafTPCommentaireLib The plaf t p commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPlafTPCommentaireLib($plafTPCommentaireLib) {
        $this->plafTPCommentaireLib = $plafTPCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib commentaire date.
     *
     * @param DateTime $preLibCommentaireDate The pre lib commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPreLibCommentaireDate(DateTime $preLibCommentaireDate = null) {
        $this->preLibCommentaireDate = $preLibCommentaireDate;
        return $this;
    }

    /**
     * Set the pre lib commentaire lib.
     *
     * @param string $preLibCommentaireLib The pre lib commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPreLibCommentaireLib($preLibCommentaireLib) {
        $this->preLibCommentaireLib = $preLibCommentaireLib;
        return $this;
    }

    /**
     * Set the pre lib date limite.
     *
     * @param DateTime $preLibDateLimite The pre lib date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setPreLibDateLimite(DateTime $preLibDateLimite = null) {
        $this->preLibDateLimite = $preLibDateLimite;
        return $this;
    }

    /**
     * Set the situation commentaire date.
     *
     * @param DateTime $situationCommentaireDate The situation commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setSituationCommentaireDate(DateTime $situationCommentaireDate = null) {
        $this->situationCommentaireDate = $situationCommentaireDate;
        return $this;
    }

    /**
     * Set the situation commentaire lib.
     *
     * @param string $situationCommentaireLib The situation commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setSituationCommentaireLib($situationCommentaireLib) {
        $this->situationCommentaireLib = $situationCommentaireLib;
        return $this;
    }

    /**
     * Set the situation date limite.
     *
     * @param DateTime $situationDateLimite The situation date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setSituationDateLimite(DateTime $situationDateLimite = null) {
        $this->situationDateLimite = $situationDateLimite;
        return $this;
    }

    /**
     * Set the t p commentaire date.
     *
     * @param DateTime $tPCommentaireDate The t p commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTPCommentaireDate(DateTime $tPCommentaireDate = null) {
        $this->tPCommentaireDate = $tPCommentaireDate;
        return $this;
    }

    /**
     * Set the t p commentaire lib.
     *
     * @param string $tPCommentaireLib The t p commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTPCommentaireLib($tPCommentaireLib) {
        $this->tPCommentaireLib = $tPCommentaireLib;
        return $this;
    }

    /**
     * Set the t s a commentaire date.
     *
     * @param DateTime $tSACommentaireDate The t s a commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTSACommentaireDate(DateTime $tSACommentaireDate = null) {
        $this->tSACommentaireDate = $tSACommentaireDate;
        return $this;
    }

    /**
     * Set the t s a commentaire lib.
     *
     * @param string $tSACommentaireLib The t s a commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTSACommentaireLib($tSACommentaireLib) {
        $this->tSACommentaireLib = $tSACommentaireLib;
        return $this;
    }

    /**
     * Set the t s s commentaire date.
     *
     * @param DateTime $tSSCommentaireDate The t s s commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTSSCommentaireDate(DateTime $tSSCommentaireDate = null) {
        $this->tSSCommentaireDate = $tSSCommentaireDate;
        return $this;
    }

    /**
     * Set the t s s commentaire lib.
     *
     * @param string $tSSCommentaireLib The t s s commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTSSCommentaireLib($tSSCommentaireLib) {
        $this->tSSCommentaireLib = $tSSCommentaireLib;
        return $this;
    }

    /**
     * Set the t v s commentaire date.
     *
     * @param DateTime $tVSCommentaireDate The t v s commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTVSCommentaireDate(DateTime $tVSCommentaireDate = null) {
        $this->tVSCommentaireDate = $tVSCommentaireDate;
        return $this;
    }

    /**
     * Set the t v s commentaire lib.
     *
     * @param string $tVSCommentaireLib The t v s commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTVSCommentaireLib($tVSCommentaireLib) {
        $this->tVSCommentaireLib = $tVSCommentaireLib;
        return $this;
    }

    /**
     * Set the tab bord commentaire date.
     *
     * @param DateTime $tabBordCommentaireDate The tab bord commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTabBordCommentaireDate(DateTime $tabBordCommentaireDate = null) {
        $this->tabBordCommentaireDate = $tabBordCommentaireDate;
        return $this;
    }

    /**
     * Set the tab bord commentaire lib.
     *
     * @param string $tabBordCommentaireLib The tab bord commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTabBordCommentaireLib($tabBordCommentaireLib) {
        $this->tabBordCommentaireLib = $tabBordCommentaireLib;
        return $this;
    }

    /**
     * Set the tab bord date limite.
     *
     * @param DateTime $tabBordDateLimite The tab bord date limite.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTabBordDateLimite(DateTime $tabBordDateLimite = null) {
        $this->tabBordDateLimite = $tabBordDateLimite;
        return $this;
    }

    /**
     * Set the tva commentaire date.
     *
     * @param DateTime $tvaCommentaireDate The tva commentaire date.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTvaCommentaireDate(DateTime $tvaCommentaireDate = null) {
        $this->tvaCommentaireDate = $tvaCommentaireDate;
        return $this;
    }

    /**
     * Set the tva commentaire lib.
     *
     * @param string $tvaCommentaireLib The tva commentaire lib.
     * @return SuiviClient Returns this suivi client.
     */
    public function setTvaCommentaireLib($tvaCommentaireLib) {
        $this->tvaCommentaireLib = $tvaCommentaireLib;
        return $this;
    }
}
