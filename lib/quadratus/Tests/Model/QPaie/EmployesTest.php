<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Employes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Employes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmployesTest extends AbstractTestCase {

    /**
     * Test setATransfererEnP()
     *
     * @return void
     */
    public function testSetATransfererEnP(): void {

        $obj = new Employes();

        $obj->setATransfererEnP(true);
        $this->assertTrue($obj->getATransfererEnP());
    }

    /**
     * Test setAdministratif()
     *
     * @return void
     */
    public function testSetAdministratif(): void {

        $obj = new Employes();

        $obj->setAdministratif(true);
        $this->assertTrue($obj->getAdministratif());
    }

    /**
     * Test setAllegParticulier()
     *
     * @return void
     */
    public function testSetAllegParticulier(): void {

        $obj = new Employes();

        $obj->setAllegParticulier(true);
        $this->assertTrue($obj->getAllegParticulier());
    }

    /**
     * Test setAutreAlleg()
     *
     * @return void
     */
    public function testSetAutreAlleg(): void {

        $obj = new Employes();

        $obj->setAutreAlleg(true);
        $this->assertTrue($obj->getAutreAlleg());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Employes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Employes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setCalculParticip()
     *
     * @return void
     */
    public function testSetCalculParticip(): void {

        $obj = new Employes();

        $obj->setCalculParticip(true);
        $this->assertTrue($obj->getCalculParticip());
    }

    /**
     * Test setCarteSejourDelivreeLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCarteSejourDelivreeLe(): void {

        // Set a Date/time mock.
        $carteSejourDelivreeLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setCarteSejourDelivreeLe($carteSejourDelivreeLe);
        $this->assertSame($carteSejourDelivreeLe, $obj->getCarteSejourDelivreeLe());
    }

    /**
     * Test setCarteSejourExpireLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCarteSejourExpireLe(): void {

        // Set a Date/time mock.
        $carteSejourExpireLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setCarteSejourExpireLe($carteSejourExpireLe);
        $this->assertSame($carteSejourExpireLe, $obj->getCarteSejourExpireLe());
    }

    /**
     * Test setCarteTravailDelivreeLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCarteTravailDelivreeLe(): void {

        // Set a Date/time mock.
        $carteTravailDelivreeLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setCarteTravailDelivreeLe($carteTravailDelivreeLe);
        $this->assertSame($carteTravailDelivreeLe, $obj->getCarteTravailDelivreeLe());
    }

    /**
     * Test setCarteTravailExpireLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCarteTravailExpireLe(): void {

        // Set a Date/time mock.
        $carteTravailExpireLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setCarteTravailExpireLe($carteTravailExpireLe);
        $this->assertSame($carteTravailExpireLe, $obj->getCarteTravailExpireLe());
    }

    /**
     * Test setCasPartSs()
     *
     * @return void
     */
    public function testSetCasPartSs(): void {

        $obj = new Employes();

        $obj->setCasPartSs(true);
        $this->assertTrue($obj->getCasPartSs());
    }

    /**
     * Test setCategPopulation()
     *
     * @return void
     */
    public function testSetCategPopulation(): void {

        $obj = new Employes();

        $obj->setCategPopulation("categPopulation");
        $this->assertEquals("categPopulation", $obj->getCategPopulation());
    }

    /**
     * Test setCategSalarie()
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new Employes();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Test setCategoriePermis()
     *
     * @return void
     */
    public function testSetCategoriePermis(): void {

        $obj = new Employes();

        $obj->setCategoriePermis("categoriePermis");
        $this->assertEquals("categoriePermis", $obj->getCategoriePermis());
    }

    /**
     * Test setCddcdi()
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new Employes();

        $obj->setCddcdi(true);
        $this->assertTrue($obj->getCddcdi());
    }

    /**
     * Test setClassification()
     *
     * @return void
     */
    public function testSetClassification(): void {

        $obj = new Employes();

        $obj->setClassification("classification");
        $this->assertEquals("classification", $obj->getClassification());
    }

    /**
     * Test setCleDeux()
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new Employes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Test setCodeAt()
     *
     * @return void
     */
    public function testSetCodeAt(): void {

        $obj = new Employes();

        $obj->setCodeAt(10);
        $this->assertEquals(10, $obj->getCodeAt());
    }

    /**
     * Test setCodeCentreUrssaf()
     *
     * @return void
     */
    public function testSetCodeCentreUrssaf(): void {

        $obj = new Employes();

        $obj->setCodeCentreUrssaf("codeCentreUrssaf");
        $this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
    }

    /**
     * Test setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new Employes();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Employes();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Employes();

        $obj->setCodeNaf(10);
        $this->assertEquals(10, $obj->getCodeNaf());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Employes();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodePaysNaissance()
     *
     * @return void
     */
    public function testSetCodePaysNaissance(): void {

        $obj = new Employes();

        $obj->setCodePaysNaissance("codePaysNaissance");
        $this->assertEquals("codePaysNaissance", $obj->getCodePaysNaissance());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Employes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCodeTypeSal()
     *
     * @return void
     */
    public function testSetCodeTypeSal(): void {

        $obj = new Employes();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Test setCommuneNaissance()
     *
     * @return void
     */
    public function testSetCommuneNaissance(): void {

        $obj = new Employes();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Employes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setCompteTiers()
     *
     * @return void
     */
    public function testSetCompteTiers(): void {

        $obj = new Employes();

        $obj->setCompteTiers("compteTiers");
        $this->assertEquals("compteTiers", $obj->getCompteTiers());
    }

    /**
     * Test setCptAccompte()
     *
     * @return void
     */
    public function testSetCptAccompte(): void {

        $obj = new Employes();

        $obj->setCptAccompte(10);
        $this->assertEquals(10, $obj->getCptAccompte());
    }

    /**
     * Test setCtrlTauxSalBase()
     *
     * @return void
     */
    public function testSetCtrlTauxSalBase(): void {

        $obj = new Employes();

        $obj->setCtrlTauxSalBase(true);
        $this->assertTrue($obj->getCtrlTauxSalBase());
    }

    /**
     * Test setCum30Ss()
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new Employes();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Test setCumBaseCsg()
     *
     * @return void
     */
    public function testSetCumBaseCsg(): void {

        $obj = new Employes();

        $obj->setCumBaseCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseCsg());
    }

    /**
     * Test setCumBaseGmp()
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new Employes();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Test setCumBaseSs()
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new Employes();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Test setCumBaseTrA()
     *
     * @return void
     */
    public function testSetCumBaseTrA(): void {

        $obj = new Employes();

        $obj->setCumBaseTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrA());
    }

    /**
     * Test setCumBaseTrACaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse1(): void {

        $obj = new Employes();

        $obj->setCumBaseTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
    }

    /**
     * Test setCumBaseTrACaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse2(): void {

        $obj = new Employes();

        $obj->setCumBaseTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse2());
    }

    /**
     * Test setCumBaseTrACaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse3(): void {

        $obj = new Employes();

        $obj->setCumBaseTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
    }

    /**
     * Test setCumBaseTrB()
     *
     * @return void
     */
    public function testSetCumBaseTrB(): void {

        $obj = new Employes();

        $obj->setCumBaseTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrB());
    }

    /**
     * Test setCumBaseTrBCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse1(): void {

        $obj = new Employes();

        $obj->setCumBaseTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
    }

    /**
     * Test setCumBaseTrBCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse2(): void {

        $obj = new Employes();

        $obj->setCumBaseTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse2());
    }

    /**
     * Test setCumBaseTrBCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse3(): void {

        $obj = new Employes();

        $obj->setCumBaseTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse3());
    }

    /**
     * Test setCumBaseTrC()
     *
     * @return void
     */
    public function testSetCumBaseTrC(): void {

        $obj = new Employes();

        $obj->setCumBaseTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrC());
    }

    /**
     * Test setCumBaseTrCCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse1(): void {

        $obj = new Employes();

        $obj->setCumBaseTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse1());
    }

    /**
     * Test setCumBaseTrCCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse2(): void {

        $obj = new Employes();

        $obj->setCumBaseTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
    }

    /**
     * Test setCumBaseTrCCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse3(): void {

        $obj = new Employes();

        $obj->setCumBaseTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
    }

    /**
     * Test setCumBrutAbatNonLim()
     *
     * @return void
     */
    public function testSetCumBrutAbatNonLim(): void {

        $obj = new Employes();

        $obj->setCumBrutAbatNonLim(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
    }

    /**
     * Test setCumBrutAl()
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new Employes();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Test setCumBrutNonAbattu()
     *
     * @return void
     */
    public function testSetCumBrutNonAbattu(): void {

        $obj = new Employes();

        $obj->setCumBrutNonAbattu(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
    }

    /**
     * Test setCumCpDus()
     *
     * @return void
     */
    public function testSetCumCpDus(): void {

        $obj = new Employes();

        $obj->setCumCpDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus());
    }

    /**
     * Test setCumCpDus1()
     *
     * @return void
     */
    public function testSetCumCpDus1(): void {

        $obj = new Employes();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }

    /**
     * Test setCumCpPris()
     *
     * @return void
     */
    public function testSetCumCpPris(): void {

        $obj = new Employes();

        $obj->setCumCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris());
    }

    /**
     * Test setCumCpPris1()
     *
     * @return void
     */
    public function testSetCumCpPris1(): void {

        $obj = new Employes();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }

    /**
     * Test setCumHReposRemplace()
     *
     * @return void
     */
    public function testSetCumHReposRemplace(): void {

        $obj = new Employes();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Test setCumHService()
     *
     * @return void
     */
    public function testSetCumHService(): void {

        $obj = new Employes();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Test setCumHSup()
     *
     * @return void
     */
    public function testSetCumHSup(): void {

        $obj = new Employes();

        $obj->setCumHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSup());
    }

    /**
     * Test setCumHSupRcit()
     *
     * @return void
     */
    public function testSetCumHSupRcit(): void {

        $obj = new Employes();

        $obj->setCumHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSupRcit());
    }

    /**
     * Test setCumHeurePaye()
     *
     * @return void
     */
    public function testSetCumHeurePaye(): void {

        $obj = new Employes();

        $obj->setCumHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeurePaye());
    }

    /**
     * Test setCumHeureTrav()
     *
     * @return void
     */
    public function testSetCumHeureTrav(): void {

        $obj = new Employes();

        $obj->setCumHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeureTrav());
    }

    /**
     * Test setCumJReposRecup()
     *
     * @return void
     */
    public function testSetCumJReposRecup(): void {

        $obj = new Employes();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Test setCumJourPaye()
     *
     * @return void
     */
    public function testSetCumJourPaye(): void {

        $obj = new Employes();

        $obj->setCumJourPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourPaye());
    }

    /**
     * Test setCumJourTrav()
     *
     * @return void
     */
    public function testSetCumJourTrav(): void {

        $obj = new Employes();

        $obj->setCumJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourTrav());
    }

    /**
     * Test setCumMtCpPris()
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new Employes();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Test setCumMtCpPris1()
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new Employes();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Test setCumNetAPayer()
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new Employes();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Test setCumNetImposable()
     *
     * @return void
     */
    public function testSetCumNetImposable(): void {

        $obj = new Employes();

        $obj->setCumNetImposable(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImposable());
    }

    /**
     * Test setCumPlaf1Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1(): void {

        $obj = new Employes();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Test setCumPlaf1Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2(): void {

        $obj = new Employes();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Test setCumPlaf1Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3(): void {

        $obj = new Employes();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Test setCumPlaf2Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1(): void {

        $obj = new Employes();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Test setCumPlaf2Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2(): void {

        $obj = new Employes();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Test setCumPlaf2Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3(): void {

        $obj = new Employes();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Test setCumPlafondGmp()
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new Employes();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Test setCumPlafondSs1()
     *
     * @return void
     */
    public function testSetCumPlafondSs1(): void {

        $obj = new Employes();

        $obj->setCumPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs1());
    }

    /**
     * Test setCumPlafondSs2()
     *
     * @return void
     */
    public function testSetCumPlafondSs2(): void {

        $obj = new Employes();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }

    /**
     * Test setCumProvCp()
     *
     * @return void
     */
    public function testSetCumProvCp(): void {

        $obj = new Employes();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }

    /**
     * Test setCumProvCp1()
     *
     * @return void
     */
    public function testSetCumProvCp1(): void {

        $obj = new Employes();

        $obj->setCumProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp1());
    }

    /**
     * Test setCumReposComp()
     *
     * @return void
     */
    public function testSetCumReposComp(): void {

        $obj = new Employes();

        $obj->setCumReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumReposComp());
    }

    /**
     * Test setDateAncien()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncien(): void {

        // Set a Date/time mock.
        $dateAncien = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateAncien($dateAncien);
        $this->assertSame($dateAncien, $obj->getDateAncien());
    }

    /**
     * Test setDateEmbauche()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEmbauche(): void {

        // Set a Date/time mock.
        $dateEmbauche = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEmbauche($dateEmbauche);
        $this->assertSame($dateEmbauche, $obj->getDateEmbauche());
    }

    /**
     * Test setDateEntree1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree1(): void {

        // Set a Date/time mock.
        $dateEntree1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree1($dateEntree1);
        $this->assertSame($dateEntree1, $obj->getDateEntree1());
    }

    /**
     * Test setDateEntree2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree2(): void {

        // Set a Date/time mock.
        $dateEntree2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree2($dateEntree2);
        $this->assertSame($dateEntree2, $obj->getDateEntree2());
    }

    /**
     * Test setDateLicenciement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLicenciement(): void {

        // Set a Date/time mock.
        $dateLicenciement = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateLicenciement($dateLicenciement);
        $this->assertSame($dateLicenciement, $obj->getDateLicenciement());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDateNaissConjoint()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissConjoint(): void {

        // Set a Date/time mock.
        $dateNaissConjoint = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateNaissConjoint($dateNaissConjoint);
        $this->assertSame($dateNaissConjoint, $obj->getDateNaissConjoint());
    }

    /**
     * Test setDateNaissance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Test setDateSortie1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie1(): void {

        // Set a Date/time mock.
        $dateSortie1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie1($dateSortie1);
        $this->assertSame($dateSortie1, $obj->getDateSortie1());
    }

    /**
     * Test setDateSortie2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie2(): void {

        // Set a Date/time mock.
        $dateSortie2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie2($dateSortie2);
        $this->assertSame($dateSortie2, $obj->getDateSortie2());
    }

    /**
     * Test setDateVisiteMedicale()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateVisiteMedicale(): void {

        // Set a Date/time mock.
        $dateVisiteMedicale = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateVisiteMedicale($dateVisiteMedicale);
        $this->assertSame($dateVisiteMedicale, $obj->getDateVisiteMedicale());
    }

    /**
     * Test setDateVisiteReprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateVisiteReprise(): void {

        // Set a Date/time mock.
        $dateVisiteReprise = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateVisiteReprise($dateVisiteReprise);
        $this->assertSame($dateVisiteReprise, $obj->getDateVisiteReprise());
    }

    /**
     * Test setDeptNaissance()
     *
     * @return void
     */
    public function testSetDeptNaissance(): void {

        $obj = new Employes();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Test setDernNumPrime()
     *
     * @return void
     */
    public function testSetDernNumPrime(): void {

        $obj = new Employes();

        $obj->setDernNumPrime(10);
        $this->assertEquals(10, $obj->getDernNumPrime());
    }

    /**
     * Test setDimType2()
     *
     * @return void
     */
    public function testSetDimType2(): void {

        $obj = new Employes();

        $obj->setDimType2(true);
        $this->assertTrue($obj->getDimType2());
    }

    /**
     * Test setDirNonSalarie()
     *
     * @return void
     */
    public function testSetDirNonSalarie(): void {

        $obj = new Employes();

        $obj->setDirNonSalarie(true);
        $this->assertTrue($obj->getDirNonSalarie());
    }

    /**
     * Test setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Employes();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Test setEdTauxSalBase()
     *
     * @return void
     */
    public function testSetEdTauxSalBase(): void {

        $obj = new Employes();

        $obj->setEdTauxSalBase(true);
        $this->assertTrue($obj->getEdTauxSalBase());
    }

    /**
     * Test setEffectif()
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new Employes();

        $obj->setEffectif(true);
        $this->assertTrue($obj->getEffectif());
    }

    /**
     * Test setEffectifDas()
     *
     * @return void
     */
    public function testSetEffectifDas(): void {

        $obj = new Employes();

        $obj->setEffectifDas(true);
        $this->assertTrue($obj->getEffectifDas());
    }

    /**
     * Test setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new Employes();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Test setFictif()
     *
     * @return void
     */
    public function testSetFictif(): void {

        $obj = new Employes();

        $obj->setFictif(true);
        $this->assertTrue($obj->getFictif());
    }

    /**
     * Test setFractionEtab()
     *
     * @return void
     */
    public function testSetFractionEtab(): void {

        $obj = new Employes();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Test setGestionMajDim()
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Employes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Test setGestionMajJf()
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Employes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Test setGestionMajNuit()
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Employes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Test setGrilleAnc1()
     *
     * @return void
     */
    public function testSetGrilleAnc1(): void {

        $obj = new Employes();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }

    /**
     * Test setGrilleAnc2()
     *
     * @return void
     */
    public function testSetGrilleAnc2(): void {

        $obj = new Employes();

        $obj->setGrilleAnc2("grilleAnc2");
        $this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
    }

    /**
     * Test setGrilleAnc3()
     *
     * @return void
     */
    public function testSetGrilleAnc3(): void {

        $obj = new Employes();

        $obj->setGrilleAnc3("grilleAnc3");
        $this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
    }

    /**
     * Test setHNuitType2()
     *
     * @return void
     */
    public function testSetHNuitType2(): void {

        $obj = new Employes();

        $obj->setHNuitType2(true);
        $this->assertTrue($obj->getHNuitType2());
    }

    /**
     * Test setHandicape()
     *
     * @return void
     */
    public function testSetHandicape(): void {

        $obj = new Employes();

        $obj->setHandicape(true);
        $this->assertTrue($obj->getHandicape());
    }

    /**
     * Test setLieuTravailConjoint()
     *
     * @return void
     */
    public function testSetLieuTravailConjoint(): void {

        $obj = new Employes();

        $obj->setLieuTravailConjoint("lieuTravailConjoint");
        $this->assertEquals("lieuTravailConjoint", $obj->getLieuTravailConjoint());
    }

    /**
     * Test setMatricule()
     *
     * @return void
     */
    public function testSetMatricule(): void {

        $obj = new Employes();

        $obj->setMatricule("matricule");
        $this->assertEquals("matricule", $obj->getMatricule());
    }

    /**
     * Test setMensualisationTache()
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Employes();

        $obj->setMensualisationTache("mensualisationTache");
        $this->assertEquals("mensualisationTache", $obj->getMensualisationTache());
    }

    /**
     * Test setMentionCp()
     *
     * @return void
     */
    public function testSetMentionCp(): void {

        $obj = new Employes();

        $obj->setMentionCp(true);
        $this->assertTrue($obj->getMentionCp());
    }

    /**
     * Test setMinGaranti()
     *
     * @return void
     */
    public function testSetMinGaranti(): void {

        $obj = new Employes();

        $obj->setMinGaranti(10.092018);
        $this->assertEquals(10.092018, $obj->getMinGaranti());
    }

    /**
     * Test setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Employes();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Employes();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Employes();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Test setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Employes();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Test setMontant5()
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Employes();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Test setMontantAvantage()
     *
     * @return void
     */
    public function testSetMontantAvantage(): void {

        $obj = new Employes();

        $obj->setMontantAvantage(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantage());
    }

    /**
     * Test setMtBaseAcompte()
     *
     * @return void
     */
    public function testSetMtBaseAcompte(): void {

        $obj = new Employes();

        $obj->setMtBaseAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBaseAcompte());
    }

    /**
     * Test setNationalite()
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new Employes();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Test setNbHeureMois()
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new Employes();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Test setNbHeureSal()
     *
     * @return void
     */
    public function testSetNbHeureSal(): void {

        $obj = new Employes();

        $obj->setNbHeureSal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSal());
    }

    /**
     * Test setNbHeureSup()
     *
     * @return void
     */
    public function testSetNbHeureSup(): void {

        $obj = new Employes();

        $obj->setNbHeureSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSup());
    }

    /**
     * Test setNbHeureTrav()
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new Employes();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Test setNbJourBaseCp()
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Employes();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Test setNbPoints()
     *
     * @return void
     */
    public function testSetNbPoints(): void {

        $obj = new Employes();

        $obj->setNbPoints(10);
        $this->assertEquals(10, $obj->getNbPoints());
    }

    /**
     * Test setNiveauConfidentialite()
     *
     * @return void
     */
    public function testSetNiveauConfidentialite(): void {

        $obj = new Employes();

        $obj->setNiveauConfidentialite("niveauConfidentialite");
        $this->assertEquals("niveauConfidentialite", $obj->getNiveauConfidentialite());
    }

    /**
     * Test setNomConjoint()
     *
     * @return void
     */
    public function testSetNomConjoint(): void {

        $obj = new Employes();

        $obj->setNomConjoint("nomConjoint");
        $this->assertEquals("nomConjoint", $obj->getNomConjoint());
    }

    /**
     * Test setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new Employes();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Test setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new Employes();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Employes();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Employes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNombreEnfants()
     *
     * @return void
     */
    public function testSetNombreEnfants(): void {

        $obj = new Employes();

        $obj->setNombreEnfants("nombreEnfants");
        $this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Employes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Employes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroCarteSejour()
     *
     * @return void
     */
    public function testSetNumeroCarteSejour(): void {

        $obj = new Employes();

        $obj->setNumeroCarteSejour("numeroCarteSejour");
        $this->assertEquals("numeroCarteSejour", $obj->getNumeroCarteSejour());
    }

    /**
     * Test setNumeroCarteTravail()
     *
     * @return void
     */
    public function testSetNumeroCarteTravail(): void {

        $obj = new Employes();

        $obj->setNumeroCarteTravail("numeroCarteTravail");
        $this->assertEquals("numeroCarteTravail", $obj->getNumeroCarteTravail());
    }

    /**
     * Test setNumeroCasPartSecu()
     *
     * @return void
     */
    public function testSetNumeroCasPartSecu(): void {

        $obj = new Employes();

        $obj->setNumeroCasPartSecu(10);
        $this->assertEquals(10, $obj->getNumeroCasPartSecu());
    }

    /**
     * Test setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new Employes();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Test setNumeroInsee()
     *
     * @return void
     */
    public function testSetNumeroInsee(): void {

        $obj = new Employes();

        $obj->setNumeroInsee("numeroInsee");
        $this->assertEquals("numeroInsee", $obj->getNumeroInsee());
    }

    /**
     * Test setNumeroPermis()
     *
     * @return void
     */
    public function testSetNumeroPermis(): void {

        $obj = new Employes();

        $obj->setNumeroPermis("numeroPermis");
        $this->assertEquals("numeroPermis", $obj->getNumeroPermis());
    }

    /**
     * Test setOrphelin()
     *
     * @return void
     */
    public function testSetOrphelin(): void {

        $obj = new Employes();

        $obj->setOrphelin(true);
        $this->assertTrue($obj->getOrphelin());
    }

    /**
     * Test setPasGestionPdp()
     *
     * @return void
     */
    public function testSetPasGestionPdp(): void {

        $obj = new Employes();

        $obj->setPasGestionPdp(true);
        $this->assertTrue($obj->getPasGestionPdp());
    }

    /**
     * Test setPasGestionPdp1()
     *
     * @return void
     */
    public function testSetPasGestionPdp1(): void {

        $obj = new Employes();

        $obj->setPasGestionPdp1(true);
        $this->assertTrue($obj->getPasGestionPdp1());
    }

    /**
     * Test setPension()
     *
     * @return void
     */
    public function testSetPension(): void {

        $obj = new Employes();

        $obj->setPension(true);
        $this->assertTrue($obj->getPension());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Employes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Test setPermisDelivreLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPermisDelivreLe(): void {

        // Set a Date/time mock.
        $permisDelivreLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setPermisDelivreLe($permisDelivreLe);
        $this->assertSame($permisDelivreLe, $obj->getPermisDelivreLe());
    }

    /**
     * Test setPermisDelivrePar()
     *
     * @return void
     */
    public function testSetPermisDelivrePar(): void {

        $obj = new Employes();

        $obj->setPermisDelivrePar("permisDelivrePar");
        $this->assertEquals("permisDelivrePar", $obj->getPermisDelivrePar());
    }

    /**
     * Test setPermisExpireLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPermisExpireLe(): void {

        // Set a Date/time mock.
        $permisExpireLe = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setPermisExpireLe($permisExpireLe);
        $this->assertSame($permisExpireLe, $obj->getPermisExpireLe());
    }

    /**
     * Test setPersonneAPrevenir()
     *
     * @return void
     */
    public function testSetPersonneAPrevenir(): void {

        $obj = new Employes();

        $obj->setPersonneAPrevenir("personneAPrevenir");
        $this->assertEquals("personneAPrevenir", $obj->getPersonneAPrevenir());
    }

    /**
     * Test setPlafondGmp()
     *
     * @return void
     */
    public function testSetPlafondGmp(): void {

        $obj = new Employes();

        $obj->setPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondGmp());
    }

    /**
     * Test setPlafondSs1()
     *
     * @return void
     */
    public function testSetPlafondSs1(): void {

        $obj = new Employes();

        $obj->setPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSs1());
    }

    /**
     * Test setPlafondSs30()
     *
     * @return void
     */
    public function testSetPlafondSs30(): void {

        $obj = new Employes();

        $obj->setPlafondSs30(true);
        $this->assertTrue($obj->getPlafondSs30());
    }

    /**
     * Test setPourcentAbat()
     *
     * @return void
     */
    public function testSetPourcentAbat(): void {

        $obj = new Employes();

        $obj->setPourcentAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAbat());
    }

    /**
     * Test setPourcentAct()
     *
     * @return void
     */
    public function testSetPourcentAct(): void {

        $obj = new Employes();

        $obj->setPourcentAct(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAct());
    }

    /**
     * Test setPourcentEffectifDucs()
     *
     * @return void
     */
    public function testSetPourcentEffectifDucs(): void {

        $obj = new Employes();

        $obj->setPourcentEffectifDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentEffectifDucs());
    }

    /**
     * Test setPourcentRemuHor()
     *
     * @return void
     */
    public function testSetPourcentRemuHor(): void {

        $obj = new Employes();

        $obj->setPourcentRemuHor(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRemuHor());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new Employes();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setPrenomConjoint()
     *
     * @return void
     */
    public function testSetPrenomConjoint(): void {

        $obj = new Employes();

        $obj->setPrenomConjoint("prenomConjoint");
        $this->assertEquals("prenomConjoint", $obj->getPrenomConjoint());
    }

    /**
     * Test setPrime()
     *
     * @return void
     */
    public function testSetPrime(): void {

        $obj = new Employes();

        $obj->setPrime(true);
        $this->assertTrue($obj->getPrime());
    }

    /**
     * Test setPrudCollege()
     *
     * @return void
     */
    public function testSetPrudCollege(): void {

        $obj = new Employes();

        $obj->setPrudCollege("prudCollege");
        $this->assertEquals("prudCollege", $obj->getPrudCollege());
    }

    /**
     * Test setPrudLieuVote()
     *
     * @return void
     */
    public function testSetPrudLieuVote(): void {

        $obj = new Employes();

        $obj->setPrudLieuVote("prudLieuVote");
        $this->assertEquals("prudLieuVote", $obj->getPrudLieuVote());
    }

    /**
     * Test setPrudSection()
     *
     * @return void
     */
    public function testSetPrudSection(): void {

        $obj = new Employes();

        $obj->setPrudSection("prudSection");
        $this->assertEquals("prudSection", $obj->getPrudSection());
    }

    /**
     * Test setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new Employes();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Test setRegleCalcul()
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new Employes();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Test setRegroupVirement()
     *
     * @return void
     */
    public function testSetRegroupVirement(): void {

        $obj = new Employes();

        $obj->setRegroupVirement("regroupVirement");
        $this->assertEquals("regroupVirement", $obj->getRegroupVirement());
    }

    /**
     * Test setRegulTds()
     *
     * @return void
     */
    public function testSetRegulTds(): void {

        $obj = new Employes();

        $obj->setRegulTds(true);
        $this->assertTrue($obj->getRegulTds());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Employes();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setSalaireBase()
     *
     * @return void
     */
    public function testSetSalaireBase(): void {

        $obj = new Employes();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Test setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new Employes();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Test setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new Employes();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Test setSituationFam()
     *
     * @return void
     */
    public function testSetSituationFam(): void {

        $obj = new Employes();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Test setTaux1()
     *
     * @return void
     */
    public function testSetTaux1(): void {

        $obj = new Employes();

        $obj->setTaux1(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux1());
    }

    /**
     * Test setTaux2()
     *
     * @return void
     */
    public function testSetTaux2(): void {

        $obj = new Employes();

        $obj->setTaux2(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux2());
    }

    /**
     * Test setTaux3()
     *
     * @return void
     */
    public function testSetTaux3(): void {

        $obj = new Employes();

        $obj->setTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux3());
    }

    /**
     * Test setTaux4()
     *
     * @return void
     */
    public function testSetTaux4(): void {

        $obj = new Employes();

        $obj->setTaux4(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux4());
    }

    /**
     * Test setTaux5()
     *
     * @return void
     */
    public function testSetTaux5(): void {

        $obj = new Employes();

        $obj->setTaux5(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux5());
    }

    /**
     * Test setTauxAbsence()
     *
     * @return void
     */
    public function testSetTauxAbsence(): void {

        $obj = new Employes();

        $obj->setTauxAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAbsence());
    }

    /**
     * Test setTauxAncien()
     *
     * @return void
     */
    public function testSetTauxAncien(): void {

        $obj = new Employes();

        $obj->setTauxAncien(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAncien());
    }

    /**
     * Test setTauxHSup()
     *
     * @return void
     */
    public function testSetTauxHSup(): void {

        $obj = new Employes();

        $obj->setTauxHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup());
    }

    /**
     * Test setTauxPensionCivile()
     *
     * @return void
     */
    public function testSetTauxPensionCivile(): void {

        $obj = new Employes();

        $obj->setTauxPensionCivile(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionCivile());
    }

    /**
     * Test setTauxPensionMilitaire()
     *
     * @return void
     */
    public function testSetTauxPensionMilitaire(): void {

        $obj = new Employes();

        $obj->setTauxPensionMilitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionMilitaire());
    }

    /**
     * Test setTaxeSalaire()
     *
     * @return void
     */
    public function testSetTaxeSalaire(): void {

        $obj = new Employes();

        $obj->setTaxeSalaire(true);
        $this->assertTrue($obj->getTaxeSalaire());
    }

    /**
     * Test setTds100()
     *
     * @return void
     */
    public function testSetTds100(): void {

        $obj = new Employes();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Test setTds102()
     *
     * @return void
     */
    public function testSetTds102(): void {

        $obj = new Employes();

        $obj->setTds102(10.092018);
        $this->assertEquals(10.092018, $obj->getTds102());
    }

    /**
     * Test setTds103()
     *
     * @return void
     */
    public function testSetTds103(): void {

        $obj = new Employes();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Test setTds105()
     *
     * @return void
     */
    public function testSetTds105(): void {

        $obj = new Employes();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Test setTds107()
     *
     * @return void
     */
    public function testSetTds107(): void {

        $obj = new Employes();

        $obj->setTds107(true);
        $this->assertTrue($obj->getTds107());
    }

    /**
     * Test setTds108()
     *
     * @return void
     */
    public function testSetTds108(): void {

        $obj = new Employes();

        $obj->setTds108(true);
        $this->assertTrue($obj->getTds108());
    }

    /**
     * Test setTds109()
     *
     * @return void
     */
    public function testSetTds109(): void {

        $obj = new Employes();

        $obj->setTds109(true);
        $this->assertTrue($obj->getTds109());
    }

    /**
     * Test setTds110()
     *
     * @return void
     */
    public function testSetTds110(): void {

        $obj = new Employes();

        $obj->setTds110(true);
        $this->assertTrue($obj->getTds110());
    }

    /**
     * Test setTds112()
     *
     * @return void
     */
    public function testSetTds112(): void {

        $obj = new Employes();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Test setTds113()
     *
     * @return void
     */
    public function testSetTds113(): void {

        $obj = new Employes();

        $obj->setTds113(true);
        $this->assertTrue($obj->getTds113());
    }

    /**
     * Test setTds117()
     *
     * @return void
     */
    public function testSetTds117(): void {

        $obj = new Employes();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Test setTds119()
     *
     * @return void
     */
    public function testSetTds119(): void {

        $obj = new Employes();

        $obj->setTds119(true);
        $this->assertTrue($obj->getTds119());
    }

    /**
     * Test setTds120()
     *
     * @return void
     */
    public function testSetTds120(): void {

        $obj = new Employes();

        $obj->setTds120(true);
        $this->assertTrue($obj->getTds120());
    }

    /**
     * Test setTds121()
     *
     * @return void
     */
    public function testSetTds121(): void {

        $obj = new Employes();

        $obj->setTds121(true);
        $this->assertTrue($obj->getTds121());
    }

    /**
     * Test setTds122()
     *
     * @return void
     */
    public function testSetTds122(): void {

        $obj = new Employes();

        $obj->setTds122(true);
        $this->assertTrue($obj->getTds122());
    }

    /**
     * Test setTds125()
     *
     * @return void
     */
    public function testSetTds125(): void {

        $obj = new Employes();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Test setTds127()
     *
     * @return void
     */
    public function testSetTds127(): void {

        $obj = new Employes();

        $obj->setTds127(10.092018);
        $this->assertEquals(10.092018, $obj->getTds127());
    }

    /**
     * Test setTds128()
     *
     * @return void
     */
    public function testSetTds128(): void {

        $obj = new Employes();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Test setTds132()
     *
     * @return void
     */
    public function testSetTds132(): void {

        $obj = new Employes();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Test setTds133()
     *
     * @return void
     */
    public function testSetTds133(): void {

        $obj = new Employes();

        $obj->setTds133("tds133");
        $this->assertEquals("tds133", $obj->getTds133());
    }

    /**
     * Test setTds134()
     *
     * @return void
     */
    public function testSetTds134(): void {

        $obj = new Employes();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Test setTds135()
     *
     * @return void
     */
    public function testSetTds135(): void {

        $obj = new Employes();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Test setTds136()
     *
     * @return void
     */
    public function testSetTds136(): void {

        $obj = new Employes();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Test setTds138()
     *
     * @return void
     */
    public function testSetTds138(): void {

        $obj = new Employes();

        $obj->setTds138("tds138");
        $this->assertEquals("tds138", $obj->getTds138());
    }

    /**
     * Test setTds139()
     *
     * @return void
     */
    public function testSetTds139(): void {

        $obj = new Employes();

        $obj->setTds139("tds139");
        $this->assertEquals("tds139", $obj->getTds139());
    }

    /**
     * Test setTds141()
     *
     * @return void
     */
    public function testSetTds141(): void {

        $obj = new Employes();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Test setTds59()
     *
     * @return void
     */
    public function testSetTds59(): void {

        $obj = new Employes();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }

    /**
     * Test setTds60()
     *
     * @return void
     */
    public function testSetTds60(): void {

        $obj = new Employes();

        $obj->setTds60(true);
        $this->assertTrue($obj->getTds60());
    }

    /**
     * Test setTds61()
     *
     * @return void
     */
    public function testSetTds61(): void {

        $obj = new Employes();

        $obj->setTds61("tds61");
        $this->assertEquals("tds61", $obj->getTds61());
    }

    /**
     * Test setTds75()
     *
     * @return void
     */
    public function testSetTds75(): void {

        $obj = new Employes();

        $obj->setTds75(10);
        $this->assertEquals(10, $obj->getTds75());
    }

    /**
     * Test setTds76()
     *
     * @return void
     */
    public function testSetTds76(): void {

        $obj = new Employes();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }

    /**
     * Test setTds77()
     *
     * @return void
     */
    public function testSetTds77(): void {

        $obj = new Employes();

        $obj->setTds77("tds77");
        $this->assertEquals("tds77", $obj->getTds77());
    }

    /**
     * Test setTds78()
     *
     * @return void
     */
    public function testSetTds78(): void {

        $obj = new Employes();

        $obj->setTds78(true);
        $this->assertTrue($obj->getTds78());
    }

    /**
     * Test setTds81()
     *
     * @return void
     */
    public function testSetTds81(): void {

        $obj = new Employes();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Test setTds82()
     *
     * @return void
     */
    public function testSetTds82(): void {

        $obj = new Employes();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Test setTds84()
     *
     * @return void
     */
    public function testSetTds84(): void {

        $obj = new Employes();

        $obj->setTds84(10.092018);
        $this->assertEquals(10.092018, $obj->getTds84());
    }

    /**
     * Test setTds85()
     *
     * @return void
     */
    public function testSetTds85(): void {

        $obj = new Employes();

        $obj->setTds85(10.092018);
        $this->assertEquals(10.092018, $obj->getTds85());
    }

    /**
     * Test setTds86()
     *
     * @return void
     */
    public function testSetTds86(): void {

        $obj = new Employes();

        $obj->setTds86(10.092018);
        $this->assertEquals(10.092018, $obj->getTds86());
    }

    /**
     * Test setTds87()
     *
     * @return void
     */
    public function testSetTds87(): void {

        $obj = new Employes();

        $obj->setTds87(10.092018);
        $this->assertEquals(10.092018, $obj->getTds87());
    }

    /**
     * Test setTds88()
     *
     * @return void
     */
    public function testSetTds88(): void {

        $obj = new Employes();

        $obj->setTds88(10.092018);
        $this->assertEquals(10.092018, $obj->getTds88());
    }

    /**
     * Test setTds89()
     *
     * @return void
     */
    public function testSetTds89(): void {

        $obj = new Employes();

        $obj->setTds89(10.092018);
        $this->assertEquals(10.092018, $obj->getTds89());
    }

    /**
     * Test setTds90()
     *
     * @return void
     */
    public function testSetTds90(): void {

        $obj = new Employes();

        $obj->setTds90(10.092018);
        $this->assertEquals(10.092018, $obj->getTds90());
    }

    /**
     * Test setTds91()
     *
     * @return void
     */
    public function testSetTds91(): void {

        $obj = new Employes();

        $obj->setTds91(10.092018);
        $this->assertEquals(10.092018, $obj->getTds91());
    }

    /**
     * Test setTds92()
     *
     * @return void
     */
    public function testSetTds92(): void {

        $obj = new Employes();

        $obj->setTds92(10.092018);
        $this->assertEquals(10.092018, $obj->getTds92());
    }

    /**
     * Test setTds93()
     *
     * @return void
     */
    public function testSetTds93(): void {

        $obj = new Employes();

        $obj->setTds93(10.092018);
        $this->assertEquals(10.092018, $obj->getTds93());
    }

    /**
     * Test setTds94()
     *
     * @return void
     */
    public function testSetTds94(): void {

        $obj = new Employes();

        $obj->setTds94(10.092018);
        $this->assertEquals(10.092018, $obj->getTds94());
    }

    /**
     * Test setTds95()
     *
     * @return void
     */
    public function testSetTds95(): void {

        $obj = new Employes();

        $obj->setTds95(10.092018);
        $this->assertEquals(10.092018, $obj->getTds95());
    }

    /**
     * Test setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Employes();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Test setTelConjoint()
     *
     * @return void
     */
    public function testSetTelConjoint(): void {

        $obj = new Employes();

        $obj->setTelConjoint("telConjoint");
        $this->assertEquals("telConjoint", $obj->getTelConjoint());
    }

    /**
     * Test setTelPersAPrevenir()
     *
     * @return void
     */
    public function testSetTelPersAPrevenir(): void {

        $obj = new Employes();

        $obj->setTelPersAPrevenir("telPersAPrevenir");
        $this->assertEquals("telPersAPrevenir", $obj->getTelPersAPrevenir());
    }

    /**
     * Test setTempsPasse()
     *
     * @return void
     */
    public function testSetTempsPasse(): void {

        $obj = new Employes();

        $obj->setTempsPasse(true);
        $this->assertTrue($obj->getTempsPasse());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new Employes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test setTransfertEntree1()
     *
     * @return void
     */
    public function testSetTransfertEntree1(): void {

        $obj = new Employes();

        $obj->setTransfertEntree1(true);
        $this->assertTrue($obj->getTransfertEntree1());
    }

    /**
     * Test setTransfertEntree2()
     *
     * @return void
     */
    public function testSetTransfertEntree2(): void {

        $obj = new Employes();

        $obj->setTransfertEntree2(true);
        $this->assertTrue($obj->getTransfertEntree2());
    }

    /**
     * Test setTransfertSortie1()
     *
     * @return void
     */
    public function testSetTransfertSortie1(): void {

        $obj = new Employes();

        $obj->setTransfertSortie1(true);
        $this->assertTrue($obj->getTransfertSortie1());
    }

    /**
     * Test setTransfertSortie2()
     *
     * @return void
     */
    public function testSetTransfertSortie2(): void {

        $obj = new Employes();

        $obj->setTransfertSortie2(true);
        $this->assertTrue($obj->getTransfertSortie2());
    }

    /**
     * Test setTravailleJf()
     *
     * @return void
     */
    public function testSetTravailleJf(): void {

        $obj = new Employes();

        $obj->setTravailleJf(true);
        $this->assertTrue($obj->getTravailleJf());
    }

    /**
     * Test setTypeContrat()
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new Employes();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Test setTypeNationalite()
     *
     * @return void
     */
    public function testSetTypeNationalite(): void {

        $obj = new Employes();

        $obj->setTypeNationalite("typeNationalite");
        $this->assertEquals("typeNationalite", $obj->getTypeNationalite());
    }

    /**
     * Test setTypePaiement()
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new Employes();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Test setVrpMulticarte()
     *
     * @return void
     */
    public function testSetVrpMulticarte(): void {

        $obj = new Employes();

        $obj->setVrpMulticarte(true);
        $this->assertTrue($obj->getVrpMulticarte());
    }

    /**
     * Test setplafondSs2()
     *
     * @return void
     */
    public function testSetplafondSs2(): void {

        $obj = new Employes();

        $obj->setplafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getplafondSs2());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Employes();

        $this->assertNull($obj->getATransfererEnP());
        $this->assertNull($obj->getAdministratif());
        $this->assertNull($obj->getAllegParticulier());
        $this->assertNull($obj->getAutreAlleg());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCalculParticip());
        $this->assertNull($obj->getCarteSejourDelivreeLe());
        $this->assertNull($obj->getCarteSejourExpireLe());
        $this->assertNull($obj->getCarteTravailDelivreeLe());
        $this->assertNull($obj->getCarteTravailExpireLe());
        $this->assertNull($obj->getCasPartSs());
        $this->assertNull($obj->getCategPopulation());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCategoriePermis());
        $this->assertNull($obj->getClassification());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeCentreUrssaf());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePaysNaissance());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeTypeSal());
        $this->assertNull($obj->getCommuneNaissance());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteTiers());
        $this->assertNull($obj->getCptAccompte());
        $this->assertNull($obj->getCtrlTauxSalBase());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumBaseCsg());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBaseTrA());
        $this->assertNull($obj->getCumBaseTrACaisse1());
        $this->assertNull($obj->getCumBaseTrACaisse2());
        $this->assertNull($obj->getCumBaseTrACaisse3());
        $this->assertNull($obj->getCumBaseTrB());
        $this->assertNull($obj->getCumBaseTrBCaisse1());
        $this->assertNull($obj->getCumBaseTrBCaisse2());
        $this->assertNull($obj->getCumBaseTrBCaisse3());
        $this->assertNull($obj->getCumBaseTrC());
        $this->assertNull($obj->getCumBaseTrCCaisse1());
        $this->assertNull($obj->getCumBaseTrCCaisse2());
        $this->assertNull($obj->getCumBaseTrCCaisse3());
        $this->assertNull($obj->getCumBrutAbatNonLim());
        $this->assertNull($obj->getCumBrutNonAbattu());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumCpDus());
        $this->assertNull($obj->getCumCpDus1());
        $this->assertNull($obj->getCumCpPris());
        $this->assertNull($obj->getCumCpPris1());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumHSup());
        $this->assertNull($obj->getCumHSupRcit());
        $this->assertNull($obj->getCumHeurePaye());
        $this->assertNull($obj->getCumHeureTrav());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumJourPaye());
        $this->assertNull($obj->getCumJourTrav());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumNetImposable());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumPlafondSs1());
        $this->assertNull($obj->getCumPlafondSs2());
        $this->assertNull($obj->getCumProvCp());
        $this->assertNull($obj->getCumProvCp1());
        $this->assertNull($obj->getCumReposComp());
        $this->assertNull($obj->getDateAncien());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateEntree1());
        $this->assertNull($obj->getDateEntree2());
        $this->assertNull($obj->getDateLicenciement());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNaissConjoint());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateSortie1());
        $this->assertNull($obj->getDateSortie2());
        $this->assertNull($obj->getDateVisiteMedicale());
        $this->assertNull($obj->getDateVisiteReprise());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDernNumPrime());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getDirNonSalarie());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEdTauxSalBase());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifDas());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJf());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getGrilleAnc1());
        $this->assertNull($obj->getGrilleAnc2());
        $this->assertNull($obj->getGrilleAnc3());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHandicape());
        $this->assertNull($obj->getLieuTravailConjoint());
        $this->assertNull($obj->getMatricule());
        $this->assertNull($obj->getMensualisationTache());
        $this->assertNull($obj->getMentionCp());
        $this->assertNull($obj->getMinGaranti());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMontantAvantage());
        $this->assertNull($obj->getMtBaseAcompte());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNbHeureSal());
        $this->assertNull($obj->getNbHeureSup());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNbPoints());
        $this->assertNull($obj->getNiveauConfidentialite());
        $this->assertNull($obj->getNomConjoint());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEnfants());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCarteSejour());
        $this->assertNull($obj->getNumeroCarteTravail());
        $this->assertNull($obj->getNumeroCasPartSecu());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getNumeroInsee());
        $this->assertNull($obj->getNumeroPermis());
        $this->assertNull($obj->getOrphelin());
        $this->assertNull($obj->getPasGestionPdp());
        $this->assertNull($obj->getPasGestionPdp1());
        $this->assertNull($obj->getPension());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPermisDelivreLe());
        $this->assertNull($obj->getPermisDelivrePar());
        $this->assertNull($obj->getPermisExpireLe());
        $this->assertNull($obj->getPersonneAPrevenir());
        $this->assertNull($obj->getPlafondGmp());
        $this->assertNull($obj->getPlafondSs1());
        $this->assertNull($obj->getPlafondSs30());
        $this->assertNull($obj->getPourcentAbat());
        $this->assertNull($obj->getPourcentAct());
        $this->assertNull($obj->getPourcentEffectifDucs());
        $this->assertNull($obj->getPourcentRemuHor());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPrenomConjoint());
        $this->assertNull($obj->getPrime());
        $this->assertNull($obj->getPrudCollege());
        $this->assertNull($obj->getPrudLieuVote());
        $this->assertNull($obj->getPrudSection());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegroupVirement());
        $this->assertNull($obj->getRegulTds());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSalaireBase());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTds100());
        $this->assertNull($obj->getTds102());
        $this->assertNull($obj->getTds103());
        $this->assertNull($obj->getTds105());
        $this->assertNull($obj->getTds107());
        $this->assertNull($obj->getTds108());
        $this->assertNull($obj->getTds109());
        $this->assertNull($obj->getTds110());
        $this->assertNull($obj->getTds112());
        $this->assertNull($obj->getTds113());
        $this->assertNull($obj->getTds117());
        $this->assertNull($obj->getTds119());
        $this->assertNull($obj->getTds120());
        $this->assertNull($obj->getTds121());
        $this->assertNull($obj->getTds122());
        $this->assertNull($obj->getTds125());
        $this->assertNull($obj->getTds127());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds132());
        $this->assertNull($obj->getTds133());
        $this->assertNull($obj->getTds134());
        $this->assertNull($obj->getTds135());
        $this->assertNull($obj->getTds136());
        $this->assertNull($obj->getTds138());
        $this->assertNull($obj->getTds139());
        $this->assertNull($obj->getTds141());
        $this->assertNull($obj->getTds59());
        $this->assertNull($obj->getTds60());
        $this->assertNull($obj->getTds61());
        $this->assertNull($obj->getTds75());
        $this->assertNull($obj->getTds76());
        $this->assertNull($obj->getTds77());
        $this->assertNull($obj->getTds78());
        $this->assertNull($obj->getTds81());
        $this->assertNull($obj->getTds82());
        $this->assertNull($obj->getTds84());
        $this->assertNull($obj->getTds85());
        $this->assertNull($obj->getTds86());
        $this->assertNull($obj->getTds87());
        $this->assertNull($obj->getTds88());
        $this->assertNull($obj->getTds89());
        $this->assertNull($obj->getTds90());
        $this->assertNull($obj->getTds91());
        $this->assertNull($obj->getTds92());
        $this->assertNull($obj->getTds93());
        $this->assertNull($obj->getTds94());
        $this->assertNull($obj->getTds95());
        $this->assertNull($obj->getTaux1());
        $this->assertNull($obj->getTaux2());
        $this->assertNull($obj->getTaux3());
        $this->assertNull($obj->getTaux4());
        $this->assertNull($obj->getTaux5());
        $this->assertNull($obj->getTauxAbsence());
        $this->assertNull($obj->getTauxAncien());
        $this->assertNull($obj->getTauxHSup());
        $this->assertNull($obj->getTauxPensionCivile());
        $this->assertNull($obj->getTauxPensionMilitaire());
        $this->assertNull($obj->getTaxeSalaire());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTelConjoint());
        $this->assertNull($obj->getTelPersAPrevenir());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTransfertEntree1());
        $this->assertNull($obj->getTransfertEntree2());
        $this->assertNull($obj->getTransfertSortie1());
        $this->assertNull($obj->getTransfertSortie2());
        $this->assertNull($obj->getTravailleJf());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeNationalite());
        $this->assertNull($obj->getTypePaiement());
        $this->assertNull($obj->getVrpMulticarte());
        $this->assertNull($obj->getplafondSs2());
    }
}
