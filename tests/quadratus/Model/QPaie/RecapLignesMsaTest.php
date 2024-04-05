<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\RecapLignesMsa;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Recap lignes msa test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RecapLignesMsaTest extends AbstractTestCase {

    /**
     * Test setAdresseMsa()
     *
     * @return void
     */
    public function testSetAdresseMsa(): void {

        $obj = new RecapLignesMsa();

        $obj->setAdresseMsa("adresseMsa");
        $this->assertEquals("adresseMsa", $obj->getAdresseMsa());
    }

    /**
     * Test setCCollect()
     *
     * @return void
     */
    public function testSetCCollect(): void {

        $obj = new RecapLignesMsa();

        $obj->setCCollect("cCollect");
        $this->assertEquals("cCollect", $obj->getCCollect());
    }

    /**
     * Test setCodeActivite()
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new RecapLignesMsa();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new RecapLignesMsa();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new RecapLignesMsa();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Test setDateReglement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateReglement(): void {

        // Set a Date/time mock.
        $dateReglement = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setDateReglement($dateReglement);
        $this->assertSame($dateReglement, $obj->getDateReglement());
    }

    /**
     * Test setEffectifCice()
     *
     * @return void
     */
    public function testSetEffectifCice(): void {

        $obj = new RecapLignesMsa();

        $obj->setEffectifCice(10);
        $this->assertEquals(10, $obj->getEffectifCice());
    }

    /**
     * Test setFaitA()
     *
     * @return void
     */
    public function testSetFaitA(): void {

        $obj = new RecapLignesMsa();

        $obj->setFaitA("faitA");
        $this->assertEquals("faitA", $obj->getFaitA());
    }

    /**
     * Test setFaitLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFaitLe(): void {

        // Set a Date/time mock.
        $faitLe = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setFaitLe($faitLe);
        $this->assertSame($faitLe, $obj->getFaitLe());
    }

    /**
     * Test setFinPer()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPer(): void {

        // Set a Date/time mock.
        $finPer = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setFinPer($finPer);
        $this->assertSame($finPer, $obj->getFinPer());
    }

    /**
     * Test setIntituleCodeUnite()
     *
     * @return void
     */
    public function testSetIntituleCodeUnite(): void {

        $obj = new RecapLignesMsa();

        $obj->setIntituleCodeUnite("intituleCodeUnite");
        $this->assertEquals("intituleCodeUnite", $obj->getIntituleCodeUnite());
    }

    /**
     * Test setListeServices()
     *
     * @return void
     */
    public function testSetListeServices(): void {

        $obj = new RecapLignesMsa();

        $obj->setListeServices("listeServices");
        $this->assertEquals("listeServices", $obj->getListeServices());
    }

    /**
     * Test setMtCsg()
     *
     * @return void
     */
    public function testSetMtCsg(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtCsg(10);
        $this->assertEquals(10, $obj->getMtCsg());
    }

    /**
     * Test setMtCsgrdsrrImp()
     *
     * @return void
     */
    public function testSetMtCsgrdsrrImp(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtCsgrdsrrImp(10);
        $this->assertEquals(10, $obj->getMtCsgrdsrrImp());
    }

    /**
     * Test setMtCsgrdsrrNonImp()
     *
     * @return void
     */
    public function testSetMtCsgrdsrrNonImp(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtCsgrdsrrNonImp(10);
        $this->assertEquals(10, $obj->getMtCsgrdsrrNonImp());
    }

    /**
     * Test setMtElemCalcul57()
     *
     * @return void
     */
    public function testSetMtElemCalcul57(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul57(10);
        $this->assertEquals(10, $obj->getMtElemCalcul57());
    }

    /**
     * Test setMtElemCalcul58()
     *
     * @return void
     */
    public function testSetMtElemCalcul58(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul58(10);
        $this->assertEquals(10, $obj->getMtElemCalcul58());
    }

    /**
     * Test setMtElemCalcul59()
     *
     * @return void
     */
    public function testSetMtElemCalcul59(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul59(10);
        $this->assertEquals(10, $obj->getMtElemCalcul59());
    }

    /**
     * Test setMtElemCalcul60()
     *
     * @return void
     */
    public function testSetMtElemCalcul60(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul60(10);
        $this->assertEquals(10, $obj->getMtElemCalcul60());
    }

    /**
     * Test setMtElemCalcul61()
     *
     * @return void
     */
    public function testSetMtElemCalcul61(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul61(10);
        $this->assertEquals(10, $obj->getMtElemCalcul61());
    }

    /**
     * Test setMtElemCalcul62()
     *
     * @return void
     */
    public function testSetMtElemCalcul62(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul62(10);
        $this->assertEquals(10, $obj->getMtElemCalcul62());
    }

    /**
     * Test setMtElemCalcul63()
     *
     * @return void
     */
    public function testSetMtElemCalcul63(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul63(10);
        $this->assertEquals(10, $obj->getMtElemCalcul63());
    }

    /**
     * Test setMtElemCalcul65()
     *
     * @return void
     */
    public function testSetMtElemCalcul65(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul65(10);
        $this->assertEquals(10, $obj->getMtElemCalcul65());
    }

    /**
     * Test setMtElemCalcul66()
     *
     * @return void
     */
    public function testSetMtElemCalcul66(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul66(10);
        $this->assertEquals(10, $obj->getMtElemCalcul66());
    }

    /**
     * Test setMtElemCalcul67()
     *
     * @return void
     */
    public function testSetMtElemCalcul67(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul67(10);
        $this->assertEquals(10, $obj->getMtElemCalcul67());
    }

    /**
     * Test setMtElemCalcul68()
     *
     * @return void
     */
    public function testSetMtElemCalcul68(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul68(10);
        $this->assertEquals(10, $obj->getMtElemCalcul68());
    }

    /**
     * Test setMtElemCalcul69()
     *
     * @return void
     */
    public function testSetMtElemCalcul69(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul69(10);
        $this->assertEquals(10, $obj->getMtElemCalcul69());
    }

    /**
     * Test setMtElemCalcul70()
     *
     * @return void
     */
    public function testSetMtElemCalcul70(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul70(10);
        $this->assertEquals(10, $obj->getMtElemCalcul70());
    }

    /**
     * Test setMtElemCalcul71()
     *
     * @return void
     */
    public function testSetMtElemCalcul71(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul71(10);
        $this->assertEquals(10, $obj->getMtElemCalcul71());
    }

    /**
     * Test setMtElemCalcul72()
     *
     * @return void
     */
    public function testSetMtElemCalcul72(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul72(10);
        $this->assertEquals(10, $obj->getMtElemCalcul72());
    }

    /**
     * Test setMtElemCalcul73()
     *
     * @return void
     */
    public function testSetMtElemCalcul73(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul73(10);
        $this->assertEquals(10, $obj->getMtElemCalcul73());
    }

    /**
     * Test setMtElemCalcul74()
     *
     * @return void
     */
    public function testSetMtElemCalcul74(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul74(10);
        $this->assertEquals(10, $obj->getMtElemCalcul74());
    }

    /**
     * Test setMtElemCalcul75()
     *
     * @return void
     */
    public function testSetMtElemCalcul75(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul75(10);
        $this->assertEquals(10, $obj->getMtElemCalcul75());
    }

    /**
     * Test setMtElemCalcul76()
     *
     * @return void
     */
    public function testSetMtElemCalcul76(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul76(10);
        $this->assertEquals(10, $obj->getMtElemCalcul76());
    }

    /**
     * Test setMtElemCalcul77()
     *
     * @return void
     */
    public function testSetMtElemCalcul77(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul77(10);
        $this->assertEquals(10, $obj->getMtElemCalcul77());
    }

    /**
     * Test setMtElemCalcul78()
     *
     * @return void
     */
    public function testSetMtElemCalcul78(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul78(10);
        $this->assertEquals(10, $obj->getMtElemCalcul78());
    }

    /**
     * Test setMtElemCalcul79()
     *
     * @return void
     */
    public function testSetMtElemCalcul79(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul79(10);
        $this->assertEquals(10, $obj->getMtElemCalcul79());
    }

    /**
     * Test setMtElemCalcul97()
     *
     * @return void
     */
    public function testSetMtElemCalcul97(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul97(10);
        $this->assertEquals(10, $obj->getMtElemCalcul97());
    }

    /**
     * Test setMtElemCalcul98()
     *
     * @return void
     */
    public function testSetMtElemCalcul98(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul98(10);
        $this->assertEquals(10, $obj->getMtElemCalcul98());
    }

    /**
     * Test setMtTcp()
     *
     * @return void
     */
    public function testSetMtTcp(): void {

        $obj = new RecapLignesMsa();

        $obj->setMtTcp(10);
        $this->assertEquals(10, $obj->getMtTcp());
    }

    /**
     * Test setPerDebCice()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerDebCice(): void {

        // Set a Date/time mock.
        $perDebCice = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPerDebCice($perDebCice);
        $this->assertSame($perDebCice, $obj->getPerDebCice());
    }

    /**
     * Test setPerFinCice()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerFinCice(): void {

        // Set a Date/time mock.
        $perFinCice = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPerFinCice($perFinCice);
        $this->assertSame($perFinCice, $obj->getPerFinCice());
    }

    /**
     * Test setPeriodeDecla()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Test setPersonneContact()
     *
     * @return void
     */
    public function testSetPersonneContact(): void {

        $obj = new RecapLignesMsa();

        $obj->setPersonneContact("personneContact");
        $this->assertEquals("personneContact", $obj->getPersonneContact());
    }

    /**
     * Test setPremMois()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPremMois(): void {

        // Set a Date/time mock.
        $premMois = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPremMois($premMois);
        $this->assertSame($premMois, $obj->getPremMois());
    }

    /**
     * Test setSalariesDe()
     *
     * @return void
     */
    public function testSetSalariesDe(): void {

        $obj = new RecapLignesMsa();

        $obj->setSalariesDe("salariesDe");
        $this->assertEquals("salariesDe", $obj->getSalariesDe());
    }

    /**
     * Test setSelectionService()
     *
     * @return void
     */
    public function testSetSelectionService(): void {

        $obj = new RecapLignesMsa();

        $obj->setSelectionService("selectionService");
        $this->assertEquals("selectionService", $obj->getSelectionService());
    }

    /**
     * Test setSiren()
     *
     * @return void
     */
    public function testSetSiren(): void {

        $obj = new RecapLignesMsa();

        $obj->setSiren("siren");
        $this->assertEquals("siren", $obj->getSiren());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new RecapLignesMsa();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSuiviPar()
     *
     * @return void
     */
    public function testSetSuiviPar(): void {

        $obj = new RecapLignesMsa();

        $obj->setSuiviPar("suiviPar");
        $this->assertEquals("suiviPar", $obj->getSuiviPar());
    }

    /**
     * Test setTelPersonne()
     *
     * @return void
     */
    public function testSetTelPersonne(): void {

        $obj = new RecapLignesMsa();

        $obj->setTelPersonne("telPersonne");
        $this->assertEquals("telPersonne", $obj->getTelPersonne());
    }

    /**
     * Test setTriDeclMsa()
     *
     * @return void
     */
    public function testSetTriDeclMsa(): void {

        $obj = new RecapLignesMsa();

        $obj->setTriDeclMsa("triDeclMsa");
        $this->assertEquals("triDeclMsa", $obj->getTriDeclMsa());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RecapLignesMsa();

        $this->assertNull($obj->getAdresseMsa());
        $this->assertNull($obj->getCCollect());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getDateReglement());
        $this->assertNull($obj->getEffectifCice());
        $this->assertNull($obj->getFaitA());
        $this->assertNull($obj->getFaitLe());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getIntituleCodeUnite());
        $this->assertNull($obj->getListeServices());
        $this->assertNull($obj->getMtCsg());
        $this->assertNull($obj->getMtCsgrdsrrImp());
        $this->assertNull($obj->getMtCsgrdsrrNonImp());
        $this->assertNull($obj->getMtElemCalcul57());
        $this->assertNull($obj->getMtElemCalcul58());
        $this->assertNull($obj->getMtElemCalcul59());
        $this->assertNull($obj->getMtElemCalcul60());
        $this->assertNull($obj->getMtElemCalcul61());
        $this->assertNull($obj->getMtElemCalcul62());
        $this->assertNull($obj->getMtElemCalcul63());
        $this->assertNull($obj->getMtElemCalcul65());
        $this->assertNull($obj->getMtElemCalcul66());
        $this->assertNull($obj->getMtElemCalcul67());
        $this->assertNull($obj->getMtElemCalcul68());
        $this->assertNull($obj->getMtElemCalcul69());
        $this->assertNull($obj->getMtElemCalcul70());
        $this->assertNull($obj->getMtElemCalcul71());
        $this->assertNull($obj->getMtElemCalcul72());
        $this->assertNull($obj->getMtElemCalcul73());
        $this->assertNull($obj->getMtElemCalcul74());
        $this->assertNull($obj->getMtElemCalcul75());
        $this->assertNull($obj->getMtElemCalcul76());
        $this->assertNull($obj->getMtElemCalcul77());
        $this->assertNull($obj->getMtElemCalcul78());
        $this->assertNull($obj->getMtElemCalcul79());
        $this->assertNull($obj->getMtElemCalcul97());
        $this->assertNull($obj->getMtElemCalcul98());
        $this->assertNull($obj->getMtTcp());
        $this->assertNull($obj->getPerDebCice());
        $this->assertNull($obj->getPerFinCice());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPersonneContact());
        $this->assertNull($obj->getPremMois());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalariesDe());
        $this->assertNull($obj->getSelectionService());
        $this->assertNull($obj->getSuiviPar());
        $this->assertNull($obj->getTelPersonne());
        $this->assertNull($obj->getTriDeclMsa());
    }
}
