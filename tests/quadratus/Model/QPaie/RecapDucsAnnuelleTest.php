<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\RecapDucsAnnuelle;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Recap ducs annuelle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RecapDucsAnnuelleTest extends AbstractTestCase {

    /**
     * Tests setAEditerDucs()
     *
     * @return void
     */
    public function testSetAEditerDucs(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setAEditerDucs(true);
        $this->assertEquals(true, $obj->getAEditerDucs());
    }

    /**
     * Tests setAcompte()
     *
     * @return void
     */
    public function testSetAcompte(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte());
    }

    /**
     * Tests setArrondiBase()
     *
     * @return void
     */
    public function testSetArrondiBase(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setArrondiBase("arrondiBase");
        $this->assertEquals("arrondiBase", $obj->getArrondiBase());
    }

    /**
     * Tests setArrondiCotis()
     *
     * @return void
     */
    public function testSetArrondiCotis(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setArrondiCotis("arrondiCotis");
        $this->assertEquals("arrondiCotis", $obj->getArrondiCotis());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setDateReglement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReglement(): void {

        // Set a Date/time mock.
        $dateReglement = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setDateReglement($dateReglement);
        $this->assertSame($dateReglement, $obj->getDateReglement());
    }

    /**
     * Tests setDateVerseSalaire()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVerseSalaire(): void {

        // Set a Date/time mock.
        $dateVerseSalaire = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setDateVerseSalaire($dateVerseSalaire);
        $this->assertSame($dateVerseSalaire, $obj->getDateVerseSalaire());
    }

    /**
     * Tests setDucsEuro()
     *
     * @return void
     */
    public function testSetDucsEuro(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setDucsEuro(true);
        $this->assertEquals(true, $obj->getDucsEuro());
    }

    /**
     * Tests setEffectifInscrit()
     *
     * @return void
     */
    public function testSetEffectifInscrit(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setEffectifInscrit(10);
        $this->assertEquals(10, $obj->getEffectifInscrit());
    }

    /**
     * Tests setEffectifMoyen()
     *
     * @return void
     */
    public function testSetEffectifMoyen(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setEffectifMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getEffectifMoyen());
    }

    /**
     * Tests setEffectifPaye()
     *
     * @return void
     */
    public function testSetEffectifPaye(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setEffectifPaye(10);
        $this->assertEquals(10, $obj->getEffectifPaye());
    }

    /**
     * Tests setFinPer()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPer(): void {

        // Set a Date/time mock.
        $finPer = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setFinPer($finPer);
        $this->assertSame($finPer, $obj->getFinPer());
    }

    /**
     * Tests setGrandDecalage()
     *
     * @return void
     */
    public function testSetGrandDecalage(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setGrandDecalage(true);
        $this->assertEquals(true, $obj->getGrandDecalage());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMethodeCalculCicehe()
     *
     * @return void
     */
    public function testSetMethodeCalculCicehe(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMethodeCalculCicehe("methodeCalculCicehe");
        $this->assertEquals("methodeCalculCicehe", $obj->getMethodeCalculCicehe());
    }

    /**
     * Tests setMontantTotal()
     *
     * @return void
     */
    public function testSetMontantTotal(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }

    /**
     * Tests setMotifEcartEff()
     *
     * @return void
     */
    public function testSetMotifEcartEff(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMotifEcartEff("motifEcartEff");
        $this->assertEquals("motifEcartEff", $obj->getMotifEcartEff());
    }

    /**
     * Tests setMtAideCtAides()
     *
     * @return void
     */
    public function testSetMtAideCtAides(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtAideCtAides(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAideCtAides());
    }

    /**
     * Tests setMtBrutDads()
     *
     * @return void
     */
    public function testSetMtBrutDads(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtBrutDads(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutDads());
    }

    /**
     * Tests setMtRegulLodeom()
     *
     * @return void
     */
    public function testSetMtRegulLodeom(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setMtRegulLodeom(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRegulLodeom());
    }

    /**
     * Tests setNbAutres()
     *
     * @return void
     */
    public function testSetNbAutres(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbAutres());
    }

    /**
     * Tests setNbFemmes()
     *
     * @return void
     */
    public function testSetNbFemmes(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbFemmes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFemmes());
    }

    /**
     * Tests setNbFinContrat()
     *
     * @return void
     */
    public function testSetNbFinContrat(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbFinContrat(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFinContrat());
    }

    /**
     * Tests setNbHommes()
     *
     * @return void
     */
    public function testSetNbHommes(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setNbHommes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHommes());
    }

    /**
     * Tests setNoAffiliation()
     *
     * @return void
     */
    public function testSetNoAffiliation(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPaieDecalee()
     *
     * @return void
     */
    public function testSetPaieDecalee(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests setPerDebCice()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDebCice(): void {

        // Set a Date/time mock.
        $perDebCice = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPerDebCice($perDebCice);
        $this->assertSame($perDebCice, $obj->getPerDebCice());
    }

    /**
     * Tests setPerFinCice()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFinCice(): void {

        // Set a Date/time mock.
        $perFinCice = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPerFinCice($perFinCice);
        $this->assertSame($perFinCice, $obj->getPerFinCice());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     */
    public function testSetPeriode(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setPeriode("periode");
        $this->assertEquals("periode", $obj->getPeriode());
    }

    /**
     * Tests setPeriodeDecla()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests setPetitDecalage()
     *
     * @return void
     */
    public function testSetPetitDecalage(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setPetitDecalage(true);
        $this->assertEquals(true, $obj->getPetitDecalage());
    }

    /**
     * Tests setPremMois()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremMois(): void {

        // Set a Date/time mock.
        $premMois = new DateTime("2018-09-10");

        $obj = new RecapDucsAnnuelle();

        $obj->setPremMois($premMois);
        $this->assertSame($premMois, $obj->getPremMois());
    }

    /**
     * Tests setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests setRecapDucs1()
     *
     * @return void
     */
    public function testSetRecapDucs1(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs1(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs1());
    }

    /**
     * Tests setRecapDucs10()
     *
     * @return void
     */
    public function testSetRecapDucs10(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs10(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs10());
    }

    /**
     * Tests setRecapDucs11()
     *
     * @return void
     */
    public function testSetRecapDucs11(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs11(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs11());
    }

    /**
     * Tests setRecapDucs12()
     *
     * @return void
     */
    public function testSetRecapDucs12(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs12(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs12());
    }

    /**
     * Tests setRecapDucs13()
     *
     * @return void
     */
    public function testSetRecapDucs13(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs13(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs13());
    }

    /**
     * Tests setRecapDucs2()
     *
     * @return void
     */
    public function testSetRecapDucs2(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs2(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs2());
    }

    /**
     * Tests setRecapDucs3()
     *
     * @return void
     */
    public function testSetRecapDucs3(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs3(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs3());
    }

    /**
     * Tests setRecapDucs4()
     *
     * @return void
     */
    public function testSetRecapDucs4(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs4(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs4());
    }

    /**
     * Tests setRecapDucs5()
     *
     * @return void
     */
    public function testSetRecapDucs5(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs5(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs5());
    }

    /**
     * Tests setRecapDucs6()
     *
     * @return void
     */
    public function testSetRecapDucs6(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs6(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs6());
    }

    /**
     * Tests setRecapDucs7()
     *
     * @return void
     */
    public function testSetRecapDucs7(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs7(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs7());
    }

    /**
     * Tests setRecapDucs8()
     *
     * @return void
     */
    public function testSetRecapDucs8(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs8(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs8());
    }

    /**
     * Tests setRecapDucs9()
     *
     * @return void
     */
    public function testSetRecapDucs9(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRecapDucs9(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs9());
    }

    /**
     * Tests setRegulDucs()
     *
     * @return void
     */
    public function testSetRegulDucs(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRegulDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getRegulDucs());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSousTypeOrganisme()
     *
     * @return void
     */
    public function testSetSousTypeOrganisme(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setSousTypeOrganisme("sousTypeOrganisme");
        $this->assertEquals("sousTypeOrganisme", $obj->getSousTypeOrganisme());
    }

    /**
     * Tests setTraiterEdi()
     *
     * @return void
     */
    public function testSetTraiterEdi(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setTraiterEdi(true);
        $this->assertEquals(true, $obj->getTraiterEdi());
    }

    /**
     * Tests setTypeOrganisme()
     *
     * @return void
     */
    public function testSetTypeOrganisme(): void {

        $obj = new RecapDucsAnnuelle();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
