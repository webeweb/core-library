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
use WBW\Library\Quadratus\Model\QPaie\RecapLignesDucs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Recap lignes ducs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RecapLignesDucsTest extends AbstractTestCase {

    /**
     * Tests setAEditerDucs()
     *
     * @return void
     */
    public function testSetAEditerDucs(): void {

        $obj = new RecapLignesDucs();

        $obj->setAEditerDucs(true);
        $this->assertEquals(true, $obj->getAEditerDucs());
    }

    /**
     * Tests setAcompte()
     *
     * @return void
     */
    public function testSetAcompte(): void {

        $obj = new RecapLignesDucs();

        $obj->setAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte());
    }

    /**
     * Tests setArrondiBase()
     *
     * @return void
     */
    public function testSetArrondiBase(): void {

        $obj = new RecapLignesDucs();

        $obj->setArrondiBase("arrondiBase");
        $this->assertEquals("arrondiBase", $obj->getArrondiBase());
    }

    /**
     * Tests setArrondiCotis()
     *
     * @return void
     */
    public function testSetArrondiCotis(): void {

        $obj = new RecapLignesDucs();

        $obj->setArrondiCotis("arrondiCotis");
        $this->assertEquals("arrondiCotis", $obj->getArrondiCotis());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new RecapLignesDucs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

        $obj->setDateVerseSalaire($dateVerseSalaire);
        $this->assertSame($dateVerseSalaire, $obj->getDateVerseSalaire());
    }

    /**
     * Tests setDucsEuro()
     *
     * @return void
     */
    public function testSetDucsEuro(): void {

        $obj = new RecapLignesDucs();

        $obj->setDucsEuro(true);
        $this->assertEquals(true, $obj->getDucsEuro());
    }

    /**
     * Tests setEffectifInscrit()
     *
     * @return void
     */
    public function testSetEffectifInscrit(): void {

        $obj = new RecapLignesDucs();

        $obj->setEffectifInscrit(10);
        $this->assertEquals(10, $obj->getEffectifInscrit());
    }

    /**
     * Tests setEffectifPaye()
     *
     * @return void
     */
    public function testSetEffectifPaye(): void {

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

        $obj->setFinPer($finPer);
        $this->assertSame($finPer, $obj->getFinPer());
    }

    /**
     * Tests setGrandDecalage()
     *
     * @return void
     */
    public function testSetGrandDecalage(): void {

        $obj = new RecapLignesDucs();

        $obj->setGrandDecalage(true);
        $this->assertEquals(true, $obj->getGrandDecalage());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new RecapLignesDucs();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMontantTotal()
     *
     * @return void
     */
    public function testSetMontantTotal(): void {

        $obj = new RecapLignesDucs();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }

    /**
     * Tests setMotifEcartEff()
     *
     * @return void
     */
    public function testSetMotifEcartEff(): void {

        $obj = new RecapLignesDucs();

        $obj->setMotifEcartEff("motifEcartEff");
        $this->assertEquals("motifEcartEff", $obj->getMotifEcartEff());
    }

    /**
     * Tests setNbAutres()
     *
     * @return void
     */
    public function testSetNbAutres(): void {

        $obj = new RecapLignesDucs();

        $obj->setNbAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbAutres());
    }

    /**
     * Tests setNbFemmes()
     *
     * @return void
     */
    public function testSetNbFemmes(): void {

        $obj = new RecapLignesDucs();

        $obj->setNbFemmes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFemmes());
    }

    /**
     * Tests setNbFinContrat()
     *
     * @return void
     */
    public function testSetNbFinContrat(): void {

        $obj = new RecapLignesDucs();

        $obj->setNbFinContrat(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFinContrat());
    }

    /**
     * Tests setNbHommes()
     *
     * @return void
     */
    public function testSetNbHommes(): void {

        $obj = new RecapLignesDucs();

        $obj->setNbHommes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHommes());
    }

    /**
     * Tests setNoAffiliation()
     *
     * @return void
     */
    public function testSetNoAffiliation(): void {

        $obj = new RecapLignesDucs();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new RecapLignesDucs();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPaieDecalee()
     *
     * @return void
     */
    public function testSetPaieDecalee(): void {

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

        $obj->setPerFinCice($perFinCice);
        $this->assertSame($perFinCice, $obj->getPerFinCice());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     */
    public function testSetPeriode(): void {

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests setPetitDecalage()
     *
     * @return void
     */
    public function testSetPetitDecalage(): void {

        $obj = new RecapLignesDucs();

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

        $obj = new RecapLignesDucs();

        $obj->setPremMois($premMois);
        $this->assertSame($premMois, $obj->getPremMois());
    }

    /**
     * Tests setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new RecapLignesDucs();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests setRegulDucs()
     *
     * @return void
     */
    public function testSetRegulDucs(): void {

        $obj = new RecapLignesDucs();

        $obj->setRegulDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getRegulDucs());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new RecapLignesDucs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSousTypeOrganisme()
     *
     * @return void
     */
    public function testSetSousTypeOrganisme(): void {

        $obj = new RecapLignesDucs();

        $obj->setSousTypeOrganisme("sousTypeOrganisme");
        $this->assertEquals("sousTypeOrganisme", $obj->getSousTypeOrganisme());
    }

    /**
     * Tests setTraiterEdi()
     *
     * @return void
     */
    public function testSetTraiterEdi(): void {

        $obj = new RecapLignesDucs();

        $obj->setTraiterEdi(true);
        $this->assertEquals(true, $obj->getTraiterEdi());
    }

    /**
     * Tests setTypeOrganisme()
     *
     * @return void
     */
    public function testSetTypeOrganisme(): void {

        $obj = new RecapLignesDucs();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RecapLignesDucs();

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
        $this->assertNull($obj->getEffectifPaye());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getGrandDecalage());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMontantTotal());
        $this->assertNull($obj->getMotifEcartEff());
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
        $this->assertNull($obj->getRegulDucs());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSousTypeOrganisme());
        $this->assertNull($obj->getTraiterEdi());
        $this->assertNull($obj->getTypeOrganisme());
    }
}
