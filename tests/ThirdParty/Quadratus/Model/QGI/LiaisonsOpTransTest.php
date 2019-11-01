<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsOpTrans;

/**
 * Liaisons op trans test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsOpTransTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LiaisonsOpTrans();

        $this->assertNull($obj->getBatchApres());
        $this->assertNull($obj->getBatchAvant());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDtDernXFer());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getListeDestinataires());
        $this->assertNull($obj->getUseDtDernXFer());
        $this->assertNull($obj->getXFerActivites());
        $this->assertNull($obj->getXFerArticles());
        $this->assertNull($obj->getXFerBoniMali());
        $this->assertNull($obj->getXFerBudgetsTemps());
        $this->assertNull($obj->getXFerCivilites());
        $this->assertNull($obj->getXFerCli());
        $this->assertNull($obj->getXFerCliA1());
        $this->assertNull($obj->getXFerCliA2());
        $this->assertNull($obj->getXFerCliC());
        $this->assertNull($obj->getXFerCliDeb());
        $this->assertNull($obj->getXFerCliDocs());
        $this->assertNull($obj->getXFerCliE());
        $this->assertNull($obj->getXFerCliFin());
        $this->assertNull($obj->getXFerCliP());
        $this->assertNull($obj->getXFerCol());
        $this->assertNull($obj->getXFerCollabTache());
        $this->assertNull($obj->getXFerContenu());
        $this->assertNull($obj->getXFerCpta());
        $this->assertNull($obj->getXFerCptaAll());
        $this->assertNull($obj->getXFerCptaCli());
        $this->assertNull($obj->getXFerCptaDest());
        $this->assertNull($obj->getXFerCptaFrn());
        $this->assertNull($obj->getXFerCptaImg());
        $this->assertNull($obj->getXFerCptaLstDc());
        $this->assertNull($obj->getXFerCptaSrc());
        $this->assertNull($obj->getXFerCrDsi());
        $this->assertNull($obj->getXFerCrDucs());
        $this->assertNull($obj->getXFerCrPedi());
        $this->assertNull($obj->getXFerCrReq());
        $this->assertNull($obj->getXFerCrTdfc());
        $this->assertNull($obj->getXFerCrTva());
        $this->assertNull($obj->getXFerCstPxKm());
        $this->assertNull($obj->getXFerDosCpta());
        $this->assertNull($obj->getXFerDosPaie());
        $this->assertNull($obj->getXFerEtebac());
        $this->assertNull($obj->getXFerEdGrp());
        $this->assertNull($obj->getXFerFactEdit());
        $this->assertNull($obj->getXFerFactEditDelSrc());
        $this->assertNull($obj->getXFerFactNonEdit());
        $this->assertNull($obj->getXFerFactNonEditDelSrc());
        $this->assertNull($obj->getXFerFonctions());
        $this->assertNull($obj->getXFerImpotsDirects());
        $this->assertNull($obj->getXFerInt());
        $this->assertNull($obj->getXFerIntNoCliOnly());
        $this->assertNull($obj->getXFerLstCabs());
        $this->assertNull($obj->getXFerMis());
        $this->assertNull($obj->getXFerMisCli());
        $this->assertNull($obj->getXFerMissionPrincipale());
        $this->assertNull($obj->getXFerMsg());
        $this->assertNull($obj->getXFerMsgCli());
        $this->assertNull($obj->getXFerMsgCol());
        $this->assertNull($obj->getXFerMsgDelSrc());
        $this->assertNull($obj->getXFerMsgHist());
        $this->assertNull($obj->getXFerMsgHistCli());
        $this->assertNull($obj->getXFerMsgHistDelSrc());
        $this->assertNull($obj->getXFerObligations());
        $this->assertNull($obj->getXFerPdf());
        $this->assertNull($obj->getXFerPlanning());
        $this->assertNull($obj->getXFerPreFact());
        $this->assertNull($obj->getXFerPreFactCli());
        $this->assertNull($obj->getXFerPreFactCol());
        $this->assertNull($obj->getXFerPreFactFact());
        $this->assertNull($obj->getXFerQInfos());
        $this->assertNull($obj->getXFerQInfosDet());
        $this->assertNull($obj->getXFerQualifiants());
        $this->assertNull($obj->getXFerReglements());
        $this->assertNull($obj->getXFerSuiCli());
        $this->assertNull($obj->getXFerTaches());
        $this->assertNull($obj->getXFerTps());
        $this->assertNull($obj->getXFerTpsCli());
        $this->assertNull($obj->getXFerTpsCol());
        $this->assertNull($obj->getXFerTypeEvenements());
        $this->assertNull($obj->getXFerTypeSocietes());
    }
}
