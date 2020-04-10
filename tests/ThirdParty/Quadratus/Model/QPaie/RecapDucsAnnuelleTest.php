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
    public function test__construct() {

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

    /**
     * Tests the setAEditerDucs() method.
     *
     * @return void
     */
    public function testSetAEditerDucs() {

        $obj = new RecapDucsAnnuelle();

        $obj->setAEditerDucs(true);
        $this->assertEquals(true, $obj->getAEditerDucs());
    }

    /**
     * Tests the setAcompte() method.
     *
     * @return void
     */
    public function testSetAcompte() {

        $obj = new RecapDucsAnnuelle();

        $obj->setAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte());
    }

    /**
     * Tests the setArrondiBase() method.
     *
     * @return void
     */
    public function testSetArrondiBase() {

        $obj = new RecapDucsAnnuelle();

        $obj->setArrondiBase("arrondiBase");
        $this->assertEquals("arrondiBase", $obj->getArrondiBase());
    }

    /**
     * Tests the setArrondiCotis() method.
     *
     * @return void
     */
    public function testSetArrondiCotis() {

        $obj = new RecapDucsAnnuelle();

        $obj->setArrondiCotis("arrondiCotis");
        $this->assertEquals("arrondiCotis", $obj->getArrondiCotis());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new RecapDucsAnnuelle();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new RecapDucsAnnuelle();

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

        // Set a Date/time mock.
        $dateReglement = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setDateReglement($dateReglement);
        $this->assertSame($dateReglement, $obj->getDateReglement());
    }

    /**
     * Tests the setDateVerseSalaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVerseSalaire() {

        // Set a Date/time mock.
        $dateVerseSalaire = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setDateVerseSalaire($dateVerseSalaire);
        $this->assertSame($dateVerseSalaire, $obj->getDateVerseSalaire());
    }

    /**
     * Tests the setDucsEuro() method.
     *
     * @return void
     */
    public function testSetDucsEuro() {

        $obj = new RecapDucsAnnuelle();

        $obj->setDucsEuro(true);
        $this->assertEquals(true, $obj->getDucsEuro());
    }

    /**
     * Tests the setEffectifInscrit() method.
     *
     * @return void
     */
    public function testSetEffectifInscrit() {

        $obj = new RecapDucsAnnuelle();

        $obj->setEffectifInscrit(10);
        $this->assertEquals(10, $obj->getEffectifInscrit());
    }

    /**
     * Tests the setEffectifMoyen() method.
     *
     * @return void
     */
    public function testSetEffectifMoyen() {

        $obj = new RecapDucsAnnuelle();

        $obj->setEffectifMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getEffectifMoyen());
    }

    /**
     * Tests the setEffectifPaye() method.
     *
     * @return void
     */
    public function testSetEffectifPaye() {

        $obj = new RecapDucsAnnuelle();

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

        // Set a Date/time mock.
        $finPer = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setFinPer($finPer);
        $this->assertSame($finPer, $obj->getFinPer());
    }

    /**
     * Tests the setGrandDecalage() method.
     *
     * @return void
     */
    public function testSetGrandDecalage() {

        $obj = new RecapDucsAnnuelle();

        $obj->setGrandDecalage(true);
        $this->assertEquals(true, $obj->getGrandDecalage());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new RecapDucsAnnuelle();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMethodeCalculCicehe() method.
     *
     * @return void
     */
    public function testSetMethodeCalculCicehe() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMethodeCalculCicehe("methodeCalculCicehe");
        $this->assertEquals("methodeCalculCicehe", $obj->getMethodeCalculCicehe());
    }

    /**
     * Tests the setMontantTotal() method.
     *
     * @return void
     */
    public function testSetMontantTotal() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }

    /**
     * Tests the setMotifEcartEff() method.
     *
     * @return void
     */
    public function testSetMotifEcartEff() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMotifEcartEff("motifEcartEff");
        $this->assertEquals("motifEcartEff", $obj->getMotifEcartEff());
    }

    /**
     * Tests the setMtAideCtAides() method.
     *
     * @return void
     */
    public function testSetMtAideCtAides() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtAideCtAides(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAideCtAides());
    }

    /**
     * Tests the setMtBrutDads() method.
     *
     * @return void
     */
    public function testSetMtBrutDads() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtBrutDads(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutDads());
    }

    /**
     * Tests the setMtRegulLodeom() method.
     *
     * @return void
     */
    public function testSetMtRegulLodeom() {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtRegulLodeom(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRegulLodeom());
    }

    /**
     * Tests the setNbAutres() method.
     *
     * @return void
     */
    public function testSetNbAutres() {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbAutres());
    }

    /**
     * Tests the setNbFemmes() method.
     *
     * @return void
     */
    public function testSetNbFemmes() {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbFemmes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFemmes());
    }

    /**
     * Tests the setNbFinContrat() method.
     *
     * @return void
     */
    public function testSetNbFinContrat() {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbFinContrat(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFinContrat());
    }

    /**
     * Tests the setNbHommes() method.
     *
     * @return void
     */
    public function testSetNbHommes() {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbHommes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHommes());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation() {

        $obj = new RecapDucsAnnuelle();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new RecapDucsAnnuelle();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPaieDecalee() method.
     *
     * @return void
     */
    public function testSetPaieDecalee() {

        $obj = new RecapDucsAnnuelle();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests the setPerDebCice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDebCice() {

        // Set a Date/time mock.
        $perDebCice = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPerDebCice($perDebCice);
        $this->assertSame($perDebCice, $obj->getPerDebCice());
    }

    /**
     * Tests the setPerFinCice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFinCice() {

        // Set a Date/time mock.
        $perFinCice = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPerFinCice($perFinCice);
        $this->assertSame($perFinCice, $obj->getPerFinCice());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new RecapDucsAnnuelle();

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

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPetitDecalage() method.
     *
     * @return void
     */
    public function testSetPetitDecalage() {

        $obj = new RecapDucsAnnuelle();

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

        // Set a Date/time mock.
        $premMois = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPremMois($premMois);
        $this->assertSame($premMois, $obj->getPremMois());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setRecapDucs1() method.
     *
     * @return void
     */
    public function testSetRecapDucs1() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs1(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs1());
    }

    /**
     * Tests the setRecapDucs10() method.
     *
     * @return void
     */
    public function testSetRecapDucs10() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs10(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs10());
    }

    /**
     * Tests the setRecapDucs11() method.
     *
     * @return void
     */
    public function testSetRecapDucs11() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs11(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs11());
    }

    /**
     * Tests the setRecapDucs12() method.
     *
     * @return void
     */
    public function testSetRecapDucs12() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs12(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs12());
    }

    /**
     * Tests the setRecapDucs13() method.
     *
     * @return void
     */
    public function testSetRecapDucs13() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs13(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs13());
    }

    /**
     * Tests the setRecapDucs2() method.
     *
     * @return void
     */
    public function testSetRecapDucs2() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs2(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs2());
    }

    /**
     * Tests the setRecapDucs3() method.
     *
     * @return void
     */
    public function testSetRecapDucs3() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs3(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs3());
    }

    /**
     * Tests the setRecapDucs4() method.
     *
     * @return void
     */
    public function testSetRecapDucs4() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs4(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs4());
    }

    /**
     * Tests the setRecapDucs5() method.
     *
     * @return void
     */
    public function testSetRecapDucs5() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs5(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs5());
    }

    /**
     * Tests the setRecapDucs6() method.
     *
     * @return void
     */
    public function testSetRecapDucs6() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs6(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs6());
    }

    /**
     * Tests the setRecapDucs7() method.
     *
     * @return void
     */
    public function testSetRecapDucs7() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs7(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs7());
    }

    /**
     * Tests the setRecapDucs8() method.
     *
     * @return void
     */
    public function testSetRecapDucs8() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs8(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs8());
    }

    /**
     * Tests the setRecapDucs9() method.
     *
     * @return void
     */
    public function testSetRecapDucs9() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs9(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs9());
    }

    /**
     * Tests the setRegulDucs() method.
     *
     * @return void
     */
    public function testSetRegulDucs() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRegulDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getRegulDucs());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new RecapDucsAnnuelle();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSousTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetSousTypeOrganisme() {

        $obj = new RecapDucsAnnuelle();

        $obj->setSousTypeOrganisme("sousTypeOrganisme");
        $this->assertEquals("sousTypeOrganisme", $obj->getSousTypeOrganisme());
    }

    /**
     * Tests the setTraiterEdi() method.
     *
     * @return void
     */
    public function testSetTraiterEdi() {

        $obj = new RecapDucsAnnuelle();

        $obj->setTraiterEdi(true);
        $this->assertEquals(true, $obj->getTraiterEdi());
    }

    /**
     * Tests the setTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetTypeOrganisme() {

        $obj = new RecapDucsAnnuelle();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }
}
