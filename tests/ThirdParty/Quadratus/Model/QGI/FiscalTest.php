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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Fiscal;

/**
 * Fiscal test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FiscalTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fiscal();

        $this->assertNull($obj->getAbattementCga());
        $this->assertNull($obj->getAssuranceControle());
        $this->assertNull($obj->getCdAssiette());
        $this->assertNull($obj->getCdi());
        $this->assertNull($obj->getCga());
        $this->assertNull($obj->getCodeCga());
        $this->assertNull($obj->getCodeCentreImpot());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeImpotDirect());
        $this->assertNull($obj->getCodeRecetteImpots());
        $this->assertNull($obj->getCodeRegimeTva());
        $this->assertNull($obj->getContactCga());
        $this->assertNull($obj->getContactCentreImpots());
        $this->assertNull($obj->getContactRecetteImpots());
        $this->assertNull($obj->getDateAdhesionCga());
        $this->assertNull($obj->getDateEffetAdhesionCga());
        $this->assertNull($obj->getDateEffetRadiationCga());
        $this->assertNull($obj->getDateRadiationCga());
        $this->assertNull($obj->getDeclarationSur());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getEdiTdfcBdF());
        $this->assertNull($obj->getFrpCle());
        $this->assertNull($obj->getFrpDossier());
        $this->assertNull($obj->getFrpRecette());
        $this->assertNull($obj->getIdImpotsGouvFr());
        $this->assertNull($obj->getImpot());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getJourDeclaration());
        $this->assertNull($obj->getMandatDateDebutDads());
        $this->assertNull($obj->getMandatDateDebutDucsedi());
        $this->assertNull($obj->getMandatDateDebutEditva());
        $this->assertNull($obj->getMandatDateDebutEtebac());
        $this->assertNull($obj->getMandatDateDebutPedi());
        $this->assertNull($obj->getMandatDateDebutReq());
        $this->assertNull($obj->getMandatDateDebutTdfc());
        $this->assertNull($obj->getMandatDureeDads());
        $this->assertNull($obj->getMandatDureeDucsedi());
        $this->assertNull($obj->getMandatDureeEditva());
        $this->assertNull($obj->getMandatDureeEtebac());
        $this->assertNull($obj->getMandatDureePedi());
        $this->assertNull($obj->getMandatDureeReq());
        $this->assertNull($obj->getMandatDureeTdfc());
        $this->assertNull($obj->getMandatPieceJointeDads());
        $this->assertNull($obj->getMandatPieceJointeDucsedi());
        $this->assertNull($obj->getMandatPieceJointeEditva());
        $this->assertNull($obj->getMandatPieceJointeEtebac());
        $this->assertNull($obj->getMandatPieceJointePedi());
        $this->assertNull($obj->getMandatPieceJointeReq());
        $this->assertNull($obj->getMandatPieceJointeTdfc());
        $this->assertNull($obj->getMandatSuiviDads());
        $this->assertNull($obj->getMandatSuiviDucsedi());
        $this->assertNull($obj->getMandatSuiviEditva());
        $this->assertNull($obj->getMandatSuiviEtebac());
        $this->assertNull($obj->getMandatSuiviPedi());
        $this->assertNull($obj->getMandatSuiviReq());
        $this->assertNull($obj->getMandatSuiviTdfc());
        $this->assertNull($obj->getMdpImpotsGouvFr());
        $this->assertNull($obj->getMethodeCalcul());
        $this->assertNull($obj->getMotifRadiationCga());
        $this->assertNull($obj->getNumeroRegistre());
        $this->assertNull($obj->getPmeCommunautaire());
        $this->assertNull($obj->getPeriodiciteTva());
        $this->assertNull($obj->getPoleEnregistrement());
        $this->assertNull($obj->getRefObligFisc());
        $this->assertNull($obj->getRefPaiementDgi());
        $this->assertNull($obj->getRegime());
        $this->assertNull($obj->getRegimeAgricole());
        $this->assertNull($obj->getRegimeGroupe());
        $this->assertNull($obj->getRofCfe());
        $this->assertNull($obj->getRofCvae());
        $this->assertNull($obj->getRofCvaep());
        $this->assertNull($obj->getRofIs());
        $this->assertNull($obj->getRofRcm());
        $this->assertNull($obj->getRofTs());
        $this->assertNull($obj->getRofTva());
        $this->assertNull($obj->getRofTdfcGroup());
        $this->assertNull($obj->getSocieteMere());
        $this->assertNull($obj->getTvaEtabBtq());
        $this->assertNull($obj->getTvaEtabBureauDistributeur());
        $this->assertNull($obj->getTvaEtabCodePostal());
        $this->assertNull($obj->getTvaEtabComplement());
        $this->assertNull($obj->getTvaEtabNomRs());
        $this->assertNull($obj->getTvaEtabNomVoie());
        $this->assertNull($obj->getTvaEtabNumVoie());
        $this->assertNull($obj->getTvaNomVir());
        $this->assertNull($obj->getTvaribVir());
        $this->assertNull($obj->getTresorerie());
        $this->assertNull($obj->getTresorerieIs());
        $this->assertNull($obj->getTvaCa12Ae());
        $this->assertNull($obj->getTvaDecaissements());
        $this->assertNull($obj->getTvaFaiteParClient());
        $this->assertNull($obj->getViseurConventionne());
        $this->assertNull($obj->getViseurDtAttest());
        $this->assertNull($obj->getViseurNumAttest());
    }
}
