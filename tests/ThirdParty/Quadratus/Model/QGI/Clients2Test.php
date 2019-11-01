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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Clients2;

/**
 * Clients2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class Clients2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Clients2();

        $this->assertNull($obj->getAllotissement());
        $this->assertNull($obj->getBlMail());
        $this->assertNull($obj->getCdesMail());
        $this->assertNull($obj->getCodeActiviteCga());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeTransporteur1());
        $this->assertNull($obj->getCodeTransporteur2());
        $this->assertNull($obj->getCodeTransporteur3());
        $this->assertNull($obj->getCodeTransporteur4());
        $this->assertNull($obj->getCodeTransporteur5());
        $this->assertNull($obj->getDateDebExePublication());
        $this->assertNull($obj->getDelaiLivraison());
        $this->assertNull($obj->getDevisMail());
        $this->assertNull($obj->getEanClient());
        $this->assertNull($obj->getEanFacturePapier());
        $this->assertNull($obj->getEanPlateforme());
        $this->assertNull($obj->getEdiExportBl());
        $this->assertNull($obj->getEdiExportFac());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getFactComplementSuite());
        $this->assertNull($obj->getFactZipCode());
        $this->assertNull($obj->getIndMailPublication());
        $this->assertNull($obj->getIndiceBlMail());
        $this->assertNull($obj->getIndiceCdesMail());
        $this->assertNull($obj->getIndiceDevisMail());
        $this->assertNull($obj->getIndiceRelevesMail());
        $this->assertNull($obj->getLettreDeMissionDateSignature());
        $this->assertNull($obj->getModeleFactureManuelleSpe());
        $this->assertNull($obj->getMontantDepassementAutorise());
        $this->assertNull($obj->getMotifEntree());
        $this->assertNull($obj->getMotifSortie());
        $this->assertNull($obj->getMtTransport1());
        $this->assertNull($obj->getMtTransport2());
        $this->assertNull($obj->getMtTransport3());
        $this->assertNull($obj->getMtTransport4());
        $this->assertNull($obj->getMtTransport5());
        $this->assertNull($obj->getNonConcerneIs());
        $this->assertNull($obj->getNonConcerneTp());
        $this->assertNull($obj->getNonFacturable());
        $this->assertNull($obj->getPmeTarifOuRemSpe());
        $this->assertNull($obj->getPrevenirMailPublier());
        $this->assertNull($obj->getRelevesMail());
        $this->assertNull($obj->getSocialComplementSuite());
        $this->assertNull($obj->getSocialZipCode());
        $this->assertNull($obj->getTrsArtPied());
        $this->assertNull($obj->getTrsArtPied2());
        $this->assertNull($obj->getTrsCategMarch());
        $this->assertNull($obj->getTrsCentreAna());
        $this->assertNull($obj->getTrsCodeTarif1());
        $this->assertNull($obj->getTrsCodeTarif1Sens());
        $this->assertNull($obj->getTrsCodeTarif2());
        $this->assertNull($obj->getTrsCodeTarif2Sens());
        $this->assertNull($obj->getTrsCodeTarif3());
        $this->assertNull($obj->getTrsCodeTarif3Sens());
        $this->assertNull($obj->getTrsCodeTarif4());
        $this->assertNull($obj->getTrsCodeTarif4Sens());
        $this->assertNull($obj->getTrsCodeTarif5());
        $this->assertNull($obj->getTrsCodeTarif5Sens());
        $this->assertNull($obj->getTrsCodeTarif6());
        $this->assertNull($obj->getTrsCodeTarif6Sens());
        $this->assertNull($obj->getTrsCodeTarifDef());
        $this->assertNull($obj->getTrsComment1());
        $this->assertNull($obj->getTrsComment2());
        $this->assertNull($obj->getTrsComment3());
        $this->assertNull($obj->getTrsComment4());
        $this->assertNull($obj->getTrsComment5());
        $this->assertNull($obj->getTrsComment6());
        $this->assertNull($obj->getTrsComment7());
        $this->assertNull($obj->getTrsComment8());
        $this->assertNull($obj->getTrsComment9());
        $this->assertNull($obj->getTrsConsignes1());
        $this->assertNull($obj->getTrsConsignes2());
        $this->assertNull($obj->getTrsConsignes3());
        $this->assertNull($obj->getTrsGestionPalettes());
        $this->assertNull($obj->getTrsMarchandiseSensible());
        $this->assertNull($obj->getTrsModeleFactureSpe());
        $this->assertNull($obj->getTrsPoidsMiniPal());
        $this->assertNull($obj->getTrsPortDuAuto());
        $this->assertNull($obj->getTrsSuiviCaMens());
        $this->assertNull($obj->getTrsSuiviDtEnl());
        $this->assertNull($obj->getTrsSuiviDtLiv());
        $this->assertNull($obj->getTrsSuiviDtLivFax());
        $this->assertNull($obj->getTrsSuiviDtLivMail());
        $this->assertNull($obj->getTrsTypeClient());
        $this->assertNull($obj->getTrsTypeFacturation());
        $this->assertNull($obj->getTrsTypeTravail());
        $this->assertNull($obj->getTypeTransport1());
        $this->assertNull($obj->getTypeTransport2());
        $this->assertNull($obj->getTypeTransport3());
        $this->assertNull($obj->getTypeTransport4());
        $this->assertNull($obj->getTypeTransport5());
        $this->assertNull($obj->getlocalisationArchives());
    }
}
