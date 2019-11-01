<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RecapDucsAnnuelle;

/**
 * Recap ducs annuelle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RecapDucsAnnuelleTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapDucsAnnuelle();

        $this->assertNull($obj->getAEditerDucs());
        $this->assertNull($obj->getAcompte());
        $this->assertNull($obj->getArrondiBase());
        $this->assertNull($obj->getArrondiCotis());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateReglement());
        $this->assertNull($obj->getDateVerseSalaire());
        $this->assertNull($obj->getDucsEuro());
        $this->assertNull($obj->getEffectifInscrit());
        $this->assertNull($obj->getEffectifMoyen());
        $this->assertNull($obj->getEffectifPaye());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getGrandDecalage());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMethodeCalculCicehe());
        $this->assertNull($obj->getMontantTotal());
        $this->assertNull($obj->getMotifEcartEff());
        $this->assertNull($obj->getMtAideCtAides());
        $this->assertNull($obj->getMtBrutDads());
        $this->assertNull($obj->getMtRegulLodeom());
        $this->assertNull($obj->getNbAutres());
        $this->assertNull($obj->getNbFemmes());
        $this->assertNull($obj->getNbFinContrat());
        $this->assertNull($obj->getNbHommes());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPaieDecalee());
        $this->assertNull($obj->getPerDebCice());
        $this->assertNull($obj->getPerFinCice());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPetitDecalage());
        $this->assertNull($obj->getPremMois());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getRecapDucs1());
        $this->assertNull($obj->getRecapDucs10());
        $this->assertNull($obj->getRecapDucs11());
        $this->assertNull($obj->getRecapDucs12());
        $this->assertNull($obj->getRecapDucs13());
        $this->assertNull($obj->getRecapDucs2());
        $this->assertNull($obj->getRecapDucs3());
        $this->assertNull($obj->getRecapDucs4());
        $this->assertNull($obj->getRecapDucs5());
        $this->assertNull($obj->getRecapDucs6());
        $this->assertNull($obj->getRecapDucs7());
        $this->assertNull($obj->getRecapDucs8());
        $this->assertNull($obj->getRecapDucs9());
        $this->assertNull($obj->getRegulDucs());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSousTypeOrganisme());
        $this->assertNull($obj->getTraiterEdi());
        $this->assertNull($obj->getTypeOrganisme());
    }
}
