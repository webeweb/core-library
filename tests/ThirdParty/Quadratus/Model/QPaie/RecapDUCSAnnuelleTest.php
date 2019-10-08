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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RecapDUCSAnnuelle;

/**
 * Recap d u c s annuelle model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RecapDUCSAnnuelleTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapDUCSAnnuelle();

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
        $this->assertNull($obj->getMethodeCalculCICEHE());
        $this->assertNull($obj->getMontantTotal());
        $this->assertNull($obj->getMotifEcartEff());
        $this->assertNull($obj->getMtAideCtAides());
        $this->assertNull($obj->getMtBrutDADS());
        $this->assertNull($obj->getMtRegulLODEOM());
        $this->assertNull($obj->getNbAutres());
        $this->assertNull($obj->getNbFemmes());
        $this->assertNull($obj->getNbFinContrat());
        $this->assertNull($obj->getNbHommes());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPaieDecalee());
        $this->assertNull($obj->getPerDebCICE());
        $this->assertNull($obj->getPerFinCICE());
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

    /**
     * Tests the setAEditerDucs() method.
     *
     * @return void
     */
    public function testSetAEditerDucs() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setAEditerDucs(true);
        $this->assertEquals(true, $obj->getAEditerDucs());
    }

    /**
     * Tests the setAcompte() method.
     *
     * @return void
     */
    public function testSetAcompte() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte());
    }

    /**
     * Tests the setArrondiBase() method.
     *
     * @return void
     */
    public function testSetArrondiBase() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setArrondiBase("arrondiBase");
        $this->assertEquals("arrondiBase", $obj->getArrondiBase());
    }

    /**
     * Tests the setArrondiCotis() method.
     *
     * @return void
     */
    public function testSetArrondiCotis() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setArrondiCotis("arrondiCotis");
        $this->assertEquals("arrondiCotis", $obj->getArrondiCotis());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateReglement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReglement() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setDateReglement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReglement());
    }

    /**
     * Tests the setDateVerseSalaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVerseSalaire() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setDateVerseSalaire(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVerseSalaire());
    }

    /**
     * Tests the setDucsEuro() method.
     *
     * @return void
     */
    public function testSetDucsEuro() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setDucsEuro(true);
        $this->assertEquals(true, $obj->getDucsEuro());
    }

    /**
     * Tests the setEffectifInscrit() method.
     *
     * @return void
     */
    public function testSetEffectifInscrit() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setEffectifInscrit(10);
        $this->assertEquals(10, $obj->getEffectifInscrit());
    }

    /**
     * Tests the setEffectifMoyen() method.
     *
     * @return void
     */
    public function testSetEffectifMoyen() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setEffectifMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getEffectifMoyen());
    }

    /**
     * Tests the setEffectifPaye() method.
     *
     * @return void
     */
    public function testSetEffectifPaye() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setEffectifPaye(10);
        $this->assertEquals(10, $obj->getEffectifPaye());
    }

    /**
     * Tests the setFinPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPer() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setFinPer(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPer());
    }

    /**
     * Tests the setGrandDecalage() method.
     *
     * @return void
     */
    public function testSetGrandDecalage() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setGrandDecalage(true);
        $this->assertEquals(true, $obj->getGrandDecalage());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMethodeCalculCICEHE() method.
     *
     * @return void
     */
    public function testSetMethodeCalculCICEHE() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMethodeCalculCICEHE("methodeCalculCICEHE");
        $this->assertEquals("methodeCalculCICEHE", $obj->getMethodeCalculCICEHE());
    }

    /**
     * Tests the setMontantTotal() method.
     *
     * @return void
     */
    public function testSetMontantTotal() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }

    /**
     * Tests the setMotifEcartEff() method.
     *
     * @return void
     */
    public function testSetMotifEcartEff() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMotifEcartEff("motifEcartEff");
        $this->assertEquals("motifEcartEff", $obj->getMotifEcartEff());
    }

    /**
     * Tests the setMtAideCtAides() method.
     *
     * @return void
     */
    public function testSetMtAideCtAides() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMtAideCtAides(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAideCtAides());
    }

    /**
     * Tests the setMtBrutDADS() method.
     *
     * @return void
     */
    public function testSetMtBrutDADS() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMtBrutDADS(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutDADS());
    }

    /**
     * Tests the setMtRegulLODEOM() method.
     *
     * @return void
     */
    public function testSetMtRegulLODEOM() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setMtRegulLODEOM(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRegulLODEOM());
    }

    /**
     * Tests the setNbAutres() method.
     *
     * @return void
     */
    public function testSetNbAutres() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setNbAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbAutres());
    }

    /**
     * Tests the setNbFemmes() method.
     *
     * @return void
     */
    public function testSetNbFemmes() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setNbFemmes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFemmes());
    }

    /**
     * Tests the setNbFinContrat() method.
     *
     * @return void
     */
    public function testSetNbFinContrat() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setNbFinContrat(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFinContrat());
    }

    /**
     * Tests the setNbHommes() method.
     *
     * @return void
     */
    public function testSetNbHommes() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setNbHommes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHommes());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPaieDecalee() method.
     *
     * @return void
     */
    public function testSetPaieDecalee() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests the setPerDebCICE() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDebCICE() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPerDebCICE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDebCICE());
    }

    /**
     * Tests the setPerFinCICE() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFinCICE() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPerFinCICE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFinCICE());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPeriode("periode");
        $this->assertEquals("periode", $obj->getPeriode());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPetitDecalage() method.
     *
     * @return void
     */
    public function testSetPetitDecalage() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPetitDecalage(true);
        $this->assertEquals(true, $obj->getPetitDecalage());
    }

    /**
     * Tests the setPremMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremMois() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setPremMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPremMois());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setRecapDucs1() method.
     *
     * @return void
     */
    public function testSetRecapDucs1() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs1(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs1());
    }

    /**
     * Tests the setRecapDucs10() method.
     *
     * @return void
     */
    public function testSetRecapDucs10() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs10(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs10());
    }

    /**
     * Tests the setRecapDucs11() method.
     *
     * @return void
     */
    public function testSetRecapDucs11() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs11(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs11());
    }

    /**
     * Tests the setRecapDucs12() method.
     *
     * @return void
     */
    public function testSetRecapDucs12() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs12(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs12());
    }

    /**
     * Tests the setRecapDucs13() method.
     *
     * @return void
     */
    public function testSetRecapDucs13() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs13(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs13());
    }

    /**
     * Tests the setRecapDucs2() method.
     *
     * @return void
     */
    public function testSetRecapDucs2() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs2(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs2());
    }

    /**
     * Tests the setRecapDucs3() method.
     *
     * @return void
     */
    public function testSetRecapDucs3() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs3(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs3());
    }

    /**
     * Tests the setRecapDucs4() method.
     *
     * @return void
     */
    public function testSetRecapDucs4() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs4(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs4());
    }

    /**
     * Tests the setRecapDucs5() method.
     *
     * @return void
     */
    public function testSetRecapDucs5() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs5(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs5());
    }

    /**
     * Tests the setRecapDucs6() method.
     *
     * @return void
     */
    public function testSetRecapDucs6() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs6(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs6());
    }

    /**
     * Tests the setRecapDucs7() method.
     *
     * @return void
     */
    public function testSetRecapDucs7() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs7(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs7());
    }

    /**
     * Tests the setRecapDucs8() method.
     *
     * @return void
     */
    public function testSetRecapDucs8() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs8(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs8());
    }

    /**
     * Tests the setRecapDucs9() method.
     *
     * @return void
     */
    public function testSetRecapDucs9() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRecapDucs9(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs9());
    }

    /**
     * Tests the setRegulDucs() method.
     *
     * @return void
     */
    public function testSetRegulDucs() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRegulDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getRegulDucs());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSousTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetSousTypeOrganisme() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setSousTypeOrganisme("sousTypeOrganisme");
        $this->assertEquals("sousTypeOrganisme", $obj->getSousTypeOrganisme());
    }

    /**
     * Tests the setTraiterEdi() method.
     *
     * @return void
     */
    public function testSetTraiterEdi() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setTraiterEdi(true);
        $this->assertEquals(true, $obj->getTraiterEdi());
    }

    /**
     * Tests the setTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetTypeOrganisme() {

        $obj = new RecapDUCSAnnuelle();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }
}
