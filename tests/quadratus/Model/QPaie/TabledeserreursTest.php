<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\Tabledeserreurs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tabledeserreurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TabledeserreursTest extends AbstractTestCase {

    /**
     * Tests the setATransfererEnP() method.
     *
     * @return void
     */
    public function testSetATransfererEnP(): void {

        $obj = new Tabledeserreurs();

        $obj->setATransfererEnP(true);
        $this->assertEquals(true, $obj->getATransfererEnP());
    }

    /**
     * Tests the setAdministratif() method.
     *
     * @return void
     */
    public function testSetAdministratif(): void {

        $obj = new Tabledeserreurs();

        $obj->setAdministratif(true);
        $this->assertEquals(true, $obj->getAdministratif());
    }

    /**
     * Tests the setAllegParticulier() method.
     *
     * @return void
     */
    public function testSetAllegParticulier(): void {

        $obj = new Tabledeserreurs();

        $obj->setAllegParticulier(true);
        $this->assertEquals(true, $obj->getAllegParticulier());
    }

    /**
     * Tests the setAutreAlleg() method.
     *
     * @return void
     */
    public function testSetAutreAlleg(): void {

        $obj = new Tabledeserreurs();

        $obj->setAutreAlleg(true);
        $this->assertEquals(true, $obj->getAutreAlleg());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Tabledeserreurs();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Tabledeserreurs();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCalculParticip() method.
     *
     * @return void
     */
    public function testSetCalculParticip(): void {

        $obj = new Tabledeserreurs();

        $obj->setCalculParticip(true);
        $this->assertEquals(true, $obj->getCalculParticip());
    }

    /**
     * Tests the setCarteSejourDelivreeLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteSejourDelivreeLe(): void {

        // Set a Date/time mock.
        $carteSejourDelivreeLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setCarteSejourDelivreeLe($carteSejourDelivreeLe);
        $this->assertSame($carteSejourDelivreeLe, $obj->getCarteSejourDelivreeLe());
    }

    /**
     * Tests the setCarteSejourExpireLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteSejourExpireLe(): void {

        // Set a Date/time mock.
        $carteSejourExpireLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setCarteSejourExpireLe($carteSejourExpireLe);
        $this->assertSame($carteSejourExpireLe, $obj->getCarteSejourExpireLe());
    }

    /**
     * Tests the setCarteTravailDelivreeLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteTravailDelivreeLe(): void {

        // Set a Date/time mock.
        $carteTravailDelivreeLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setCarteTravailDelivreeLe($carteTravailDelivreeLe);
        $this->assertSame($carteTravailDelivreeLe, $obj->getCarteTravailDelivreeLe());
    }

    /**
     * Tests the setCarteTravailExpireLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteTravailExpireLe(): void {

        // Set a Date/time mock.
        $carteTravailExpireLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setCarteTravailExpireLe($carteTravailExpireLe);
        $this->assertSame($carteTravailExpireLe, $obj->getCarteTravailExpireLe());
    }

    /**
     * Tests the setCasPartSs() method.
     *
     * @return void
     */
    public function testSetCasPartSs(): void {

        $obj = new Tabledeserreurs();

        $obj->setCasPartSs(true);
        $this->assertEquals(true, $obj->getCasPartSs());
    }

    /**
     * Tests the setCategPopulation() method.
     *
     * @return void
     */
    public function testSetCategPopulation(): void {

        $obj = new Tabledeserreurs();

        $obj->setCategPopulation("categPopulation");
        $this->assertEquals("categPopulation", $obj->getCategPopulation());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new Tabledeserreurs();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Tests the setCategoriePermis() method.
     *
     * @return void
     */
    public function testSetCategoriePermis(): void {

        $obj = new Tabledeserreurs();

        $obj->setCategoriePermis("categoriePermis");
        $this->assertEquals("categoriePermis", $obj->getCategoriePermis());
    }

    /**
     * Tests the setCddcdi() method.
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new Tabledeserreurs();

        $obj->setCddcdi(true);
        $this->assertEquals(true, $obj->getCddcdi());
    }

    /**
     * Tests the setClassification() method.
     *
     * @return void
     */
    public function testSetClassification(): void {

        $obj = new Tabledeserreurs();

        $obj->setClassification("classification");
        $this->assertEquals("classification", $obj->getClassification());
    }

    /**
     * Tests the setCleDeux() method.
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new Tabledeserreurs();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Tests the setCodeAt() method.
     *
     * @return void
     */
    public function testSetCodeAt(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeAt(10);
        $this->assertEquals(10, $obj->getCodeAt());
    }

    /**
     * Tests the setCodeCentreUrssaf() method.
     *
     * @return void
     */
    public function testSetCodeCentreUrssaf(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeCentreUrssaf("codeCentreUrssaf");
        $this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
    }

    /**
     * Tests the setCodeConvention() method.
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeNaf() method.
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeNaf(10);
        $this->assertEquals(10, $obj->getCodeNaf());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePaysNaissance() method.
     *
     * @return void
     */
    public function testSetCodePaysNaissance(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodePaysNaissance("codePaysNaissance");
        $this->assertEquals("codePaysNaissance", $obj->getCodePaysNaissance());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeTypeSal() method.
     *
     * @return void
     */
    public function testSetCodeTypeSal(): void {

        $obj = new Tabledeserreurs();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Tests the setCoeffConvention() method.
     *
     * @return void
     */
    public function testSetCoeffConvention(): void {

        $obj = new Tabledeserreurs();

        $obj->setCoeffConvention(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffConvention());
    }

    /**
     * Tests the setCommuneNaissance() method.
     *
     * @return void
     */
    public function testSetCommuneNaissance(): void {

        $obj = new Tabledeserreurs();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Tabledeserreurs();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCompteTiers() method.
     *
     * @return void
     */
    public function testSetCompteTiers(): void {

        $obj = new Tabledeserreurs();

        $obj->setCompteTiers("compteTiers");
        $this->assertEquals("compteTiers", $obj->getCompteTiers());
    }

    /**
     * Tests the setCptAccompte() method.
     *
     * @return void
     */
    public function testSetCptAccompte(): void {

        $obj = new Tabledeserreurs();

        $obj->setCptAccompte(10);
        $this->assertEquals(10, $obj->getCptAccompte());
    }

    /**
     * Tests the setCtrlTauxSalBase() method.
     *
     * @return void
     */
    public function testSetCtrlTauxSalBase(): void {

        $obj = new Tabledeserreurs();

        $obj->setCtrlTauxSalBase(true);
        $this->assertEquals(true, $obj->getCtrlTauxSalBase());
    }

    /**
     * Tests the setCum30Ss() method.
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new Tabledeserreurs();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Tests the setCumBaseCsg() method.
     *
     * @return void
     */
    public function testSetCumBaseCsg(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseCsg());
    }

    /**
     * Tests the setCumBaseGmp() method.
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Tests the setCumBaseSs() method.
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Tests the setCumBaseTrA() method.
     *
     * @return void
     */
    public function testSetCumBaseTrA(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrA());
    }

    /**
     * Tests the setCumBaseTrACaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
    }

    /**
     * Tests the setCumBaseTrACaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse2());
    }

    /**
     * Tests the setCumBaseTrACaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse3(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
    }

    /**
     * Tests the setCumBaseTrB() method.
     *
     * @return void
     */
    public function testSetCumBaseTrB(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrB());
    }

    /**
     * Tests the setCumBaseTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
    }

    /**
     * Tests the setCumBaseTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse2());
    }

    /**
     * Tests the setCumBaseTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse3(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse3());
    }

    /**
     * Tests the setCumBaseTrC() method.
     *
     * @return void
     */
    public function testSetCumBaseTrC(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrC());
    }

    /**
     * Tests the setCumBaseTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse1());
    }

    /**
     * Tests the setCumBaseTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
    }

    /**
     * Tests the setCumBaseTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse3(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBaseTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
    }

    /**
     * Tests the setCumBrutAbatNonLim() method.
     *
     * @return void
     */
    public function testSetCumBrutAbatNonLim(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBrutAbatNonLim(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
    }

    /**
     * Tests the setCumBrutAl() method.
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Tests the setCumBrutNonAbattu() method.
     *
     * @return void
     */
    public function testSetCumBrutNonAbattu(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumBrutNonAbattu(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
    }

    /**
     * Tests the setCumCpDus() method.
     *
     * @return void
     */
    public function testSetCumCpDus(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumCpDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus());
    }

    /**
     * Tests the setCumCpDus1() method.
     *
     * @return void
     */
    public function testSetCumCpDus1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }

    /**
     * Tests the setCumCpPris() method.
     *
     * @return void
     */
    public function testSetCumCpPris(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris());
    }

    /**
     * Tests the setCumCpPris1() method.
     *
     * @return void
     */
    public function testSetCumCpPris1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }

    /**
     * Tests the setCumHReposRemplace() method.
     *
     * @return void
     */
    public function testSetCumHReposRemplace(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Tests the setCumHService() method.
     *
     * @return void
     */
    public function testSetCumHService(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Tests the setCumHSup() method.
     *
     * @return void
     */
    public function testSetCumHSup(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSup());
    }

    /**
     * Tests the setCumHSupRcit() method.
     *
     * @return void
     */
    public function testSetCumHSupRcit(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSupRcit());
    }

    /**
     * Tests the setCumHeurePaye() method.
     *
     * @return void
     */
    public function testSetCumHeurePaye(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeurePaye());
    }

    /**
     * Tests the setCumHeureTrav() method.
     *
     * @return void
     */
    public function testSetCumHeureTrav(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeureTrav());
    }

    /**
     * Tests the setCumJReposRecup() method.
     *
     * @return void
     */
    public function testSetCumJReposRecup(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Tests the setCumJourPaye() method.
     *
     * @return void
     */
    public function testSetCumJourPaye(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumJourPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourPaye());
    }

    /**
     * Tests the setCumJourTrav() method.
     *
     * @return void
     */
    public function testSetCumJourTrav(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourTrav());
    }

    /**
     * Tests the setCumMtCpPris() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests the setCumMtCpPris1() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Tests the setCumNetAPayer() method.
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests the setCumNetImposable() method.
     *
     * @return void
     */
    public function testSetCumNetImposable(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumNetImposable(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImposable());
    }

    /**
     * Tests the setCumPlaf1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Tests the setCumPlaf1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Tests the setCumPlaf1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Tests the setCumPlaf2Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Tests the setCumPlaf2Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Tests the setCumPlaf2Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Tests the setCumPlafondGmp() method.
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Tests the setCumPlafondSs1() method.
     *
     * @return void
     */
    public function testSetCumPlafondSs1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs1());
    }

    /**
     * Tests the setCumPlafondSs2() method.
     *
     * @return void
     */
    public function testSetCumPlafondSs2(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }

    /**
     * Tests the setCumProvCp() method.
     *
     * @return void
     */
    public function testSetCumProvCp(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }

    /**
     * Tests the setCumProvCp1() method.
     *
     * @return void
     */
    public function testSetCumProvCp1(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp1());
    }

    /**
     * Tests the setCumReposComp() method.
     *
     * @return void
     */
    public function testSetCumReposComp(): void {

        $obj = new Tabledeserreurs();

        $obj->setCumReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumReposComp());
    }

    /**
     * Tests the setDateAncien() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncien(): void {

        // Set a Date/time mock.
        $dateAncien = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateAncien($dateAncien);
        $this->assertSame($dateAncien, $obj->getDateAncien());
    }

    /**
     * Tests the setDateEmbauche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmbauche(): void {

        // Set a Date/time mock.
        $dateEmbauche = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateEmbauche($dateEmbauche);
        $this->assertSame($dateEmbauche, $obj->getDateEmbauche());
    }

    /**
     * Tests the setDateEntree1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree1(): void {

        // Set a Date/time mock.
        $dateEntree1 = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateEntree1($dateEntree1);
        $this->assertSame($dateEntree1, $obj->getDateEntree1());
    }

    /**
     * Tests the setDateEntree2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree2(): void {

        // Set a Date/time mock.
        $dateEntree2 = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateEntree2($dateEntree2);
        $this->assertSame($dateEntree2, $obj->getDateEntree2());
    }

    /**
     * Tests the setDateLicenciement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLicenciement(): void {

        // Set a Date/time mock.
        $dateLicenciement = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateLicenciement($dateLicenciement);
        $this->assertSame($dateLicenciement, $obj->getDateLicenciement());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDateNaissConjoint() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissConjoint(): void {

        // Set a Date/time mock.
        $dateNaissConjoint = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateNaissConjoint($dateNaissConjoint);
        $this->assertSame($dateNaissConjoint, $obj->getDateNaissConjoint());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setDateSortie1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie1(): void {

        // Set a Date/time mock.
        $dateSortie1 = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateSortie1($dateSortie1);
        $this->assertSame($dateSortie1, $obj->getDateSortie1());
    }

    /**
     * Tests the setDateSortie2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie2(): void {

        // Set a Date/time mock.
        $dateSortie2 = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateSortie2($dateSortie2);
        $this->assertSame($dateSortie2, $obj->getDateSortie2());
    }

    /**
     * Tests the setDateVisiteMedicale() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVisiteMedicale(): void {

        // Set a Date/time mock.
        $dateVisiteMedicale = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateVisiteMedicale($dateVisiteMedicale);
        $this->assertSame($dateVisiteMedicale, $obj->getDateVisiteMedicale());
    }

    /**
     * Tests the setDateVisiteReprise() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVisiteReprise(): void {

        // Set a Date/time mock.
        $dateVisiteReprise = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setDateVisiteReprise($dateVisiteReprise);
        $this->assertSame($dateVisiteReprise, $obj->getDateVisiteReprise());
    }

    /**
     * Tests the setDeptNaissance() method.
     *
     * @return void
     */
    public function testSetDeptNaissance(): void {

        $obj = new Tabledeserreurs();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Tests the setDernNumPrime() method.
     *
     * @return void
     */
    public function testSetDernNumPrime(): void {

        $obj = new Tabledeserreurs();

        $obj->setDernNumPrime(10);
        $this->assertEquals(10, $obj->getDernNumPrime());
    }

    /**
     * Tests the setDimType2() method.
     *
     * @return void
     */
    public function testSetDimType2(): void {

        $obj = new Tabledeserreurs();

        $obj->setDimType2(true);
        $this->assertEquals(true, $obj->getDimType2());
    }

    /**
     * Tests the setDirNonSalarie() method.
     *
     * @return void
     */
    public function testSetDirNonSalarie(): void {

        $obj = new Tabledeserreurs();

        $obj->setDirNonSalarie(true);
        $this->assertEquals(true, $obj->getDirNonSalarie());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Tabledeserreurs();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests the setEdTauxSalBase() method.
     *
     * @return void
     */
    public function testSetEdTauxSalBase(): void {

        $obj = new Tabledeserreurs();

        $obj->setEdTauxSalBase(true);
        $this->assertEquals(true, $obj->getEdTauxSalBase());
    }

    /**
     * Tests the setEffectif() method.
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new Tabledeserreurs();

        $obj->setEffectif(true);
        $this->assertEquals(true, $obj->getEffectif());
    }

    /**
     * Tests the setEffectifDas() method.
     *
     * @return void
     */
    public function testSetEffectifDas(): void {

        $obj = new Tabledeserreurs();

        $obj->setEffectifDas(true);
        $this->assertEquals(true, $obj->getEffectifDas());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new Tabledeserreurs();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setFictif() method.
     *
     * @return void
     */
    public function testSetFictif(): void {

        $obj = new Tabledeserreurs();

        $obj->setFictif(true);
        $this->assertEquals(true, $obj->getFictif());
    }

    /**
     * Tests the setFractionEtab() method.
     *
     * @return void
     */
    public function testSetFractionEtab(): void {

        $obj = new Tabledeserreurs();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Tests the setGestionMajDim() method.
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Tabledeserreurs();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Tests the setGestionMajJf() method.
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Tabledeserreurs();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Tests the setGestionMajNuit() method.
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Tabledeserreurs();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Tests the setGrilleAnc1() method.
     *
     * @return void
     */
    public function testSetGrilleAnc1(): void {

        $obj = new Tabledeserreurs();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }

    /**
     * Tests the setGrilleAnc2() method.
     *
     * @return void
     */
    public function testSetGrilleAnc2(): void {

        $obj = new Tabledeserreurs();

        $obj->setGrilleAnc2("grilleAnc2");
        $this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
    }

    /**
     * Tests the setGrilleAnc3() method.
     *
     * @return void
     */
    public function testSetGrilleAnc3(): void {

        $obj = new Tabledeserreurs();

        $obj->setGrilleAnc3("grilleAnc3");
        $this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
    }

    /**
     * Tests the setHNuitType2() method.
     *
     * @return void
     */
    public function testSetHNuitType2(): void {

        $obj = new Tabledeserreurs();

        $obj->setHNuitType2(true);
        $this->assertEquals(true, $obj->getHNuitType2());
    }

    /**
     * Tests the setHandicape() method.
     *
     * @return void
     */
    public function testSetHandicape(): void {

        $obj = new Tabledeserreurs();

        $obj->setHandicape(true);
        $this->assertEquals(true, $obj->getHandicape());
    }

    /**
     * Tests the setLieuTravailConjoint() method.
     *
     * @return void
     */
    public function testSetLieuTravailConjoint(): void {

        $obj = new Tabledeserreurs();

        $obj->setLieuTravailConjoint("lieuTravailConjoint");
        $this->assertEquals("lieuTravailConjoint", $obj->getLieuTravailConjoint());
    }

    /**
     * Tests the setMatricule() method.
     *
     * @return void
     */
    public function testSetMatricule(): void {

        $obj = new Tabledeserreurs();

        $obj->setMatricule("matricule");
        $this->assertEquals("matricule", $obj->getMatricule());
    }

    /**
     * Tests the setMensualisationTache() method.
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Tabledeserreurs();

        $obj->setMensualisationTache("mensualisationTache");
        $this->assertEquals("mensualisationTache", $obj->getMensualisationTache());
    }

    /**
     * Tests the setMentionCp() method.
     *
     * @return void
     */
    public function testSetMentionCp(): void {

        $obj = new Tabledeserreurs();

        $obj->setMentionCp(true);
        $this->assertEquals(true, $obj->getMentionCp());
    }

    /**
     * Tests the setMinGaranti() method.
     *
     * @return void
     */
    public function testSetMinGaranti(): void {

        $obj = new Tabledeserreurs();

        $obj->setMinGaranti(10.092018);
        $this->assertEquals(10.092018, $obj->getMinGaranti());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontant4() method.
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests the setMontant5() method.
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests the setMontantAvantage() method.
     *
     * @return void
     */
    public function testSetMontantAvantage(): void {

        $obj = new Tabledeserreurs();

        $obj->setMontantAvantage(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantage());
    }

    /**
     * Tests the setMtBaseAcompte() method.
     *
     * @return void
     */
    public function testSetMtBaseAcompte(): void {

        $obj = new Tabledeserreurs();

        $obj->setMtBaseAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBaseAcompte());
    }

    /**
     * Tests the setNationalite() method.
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new Tabledeserreurs();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Tests the setNbHeureMois() method.
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Tests the setNbHeureSal() method.
     *
     * @return void
     */
    public function testSetNbHeureSal(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbHeureSal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSal());
    }

    /**
     * Tests the setNbHeureSup() method.
     *
     * @return void
     */
    public function testSetNbHeureSup(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbHeureSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSup());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNbJourBaseCp() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Tests the setNbPoints() method.
     *
     * @return void
     */
    public function testSetNbPoints(): void {

        $obj = new Tabledeserreurs();

        $obj->setNbPoints(10);
        $this->assertEquals(10, $obj->getNbPoints());
    }

    /**
     * Tests the setNiveauConfidentialite() method.
     *
     * @return void
     */
    public function testSetNiveauConfidentialite(): void {

        $obj = new Tabledeserreurs();

        $obj->setNiveauConfidentialite("niveauConfidentialite");
        $this->assertEquals("niveauConfidentialite", $obj->getNiveauConfidentialite());
    }

    /**
     * Tests the setNomConjoint() method.
     *
     * @return void
     */
    public function testSetNomConjoint(): void {

        $obj = new Tabledeserreurs();

        $obj->setNomConjoint("nomConjoint");
        $this->assertEquals("nomConjoint", $obj->getNomConjoint());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new Tabledeserreurs();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new Tabledeserreurs();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Tabledeserreurs();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Tabledeserreurs();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNombreEnfants() method.
     *
     * @return void
     */
    public function testSetNombreEnfants(): void {

        $obj = new Tabledeserreurs();

        $obj->setNombreEnfants("nombreEnfants");
        $this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroCarteSejour() method.
     *
     * @return void
     */
    public function testSetNumeroCarteSejour(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroCarteSejour("numeroCarteSejour");
        $this->assertEquals("numeroCarteSejour", $obj->getNumeroCarteSejour());
    }

    /**
     * Tests the setNumeroCarteTravail() method.
     *
     * @return void
     */
    public function testSetNumeroCarteTravail(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroCarteTravail("numeroCarteTravail");
        $this->assertEquals("numeroCarteTravail", $obj->getNumeroCarteTravail());
    }

    /**
     * Tests the setNumeroCasPartSecu() method.
     *
     * @return void
     */
    public function testSetNumeroCasPartSecu(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroCasPartSecu(10);
        $this->assertEquals(10, $obj->getNumeroCasPartSecu());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setNumeroInsee() method.
     *
     * @return void
     */
    public function testSetNumeroInsee(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroInsee("numeroInsee");
        $this->assertEquals("numeroInsee", $obj->getNumeroInsee());
    }

    /**
     * Tests the setNumeroPermis() method.
     *
     * @return void
     */
    public function testSetNumeroPermis(): void {

        $obj = new Tabledeserreurs();

        $obj->setNumeroPermis("numeroPermis");
        $this->assertEquals("numeroPermis", $obj->getNumeroPermis());
    }

    /**
     * Tests the setOrphelin() method.
     *
     * @return void
     */
    public function testSetOrphelin(): void {

        $obj = new Tabledeserreurs();

        $obj->setOrphelin(true);
        $this->assertEquals(true, $obj->getOrphelin());
    }

    /**
     * Tests the setPasGestionPdp() method.
     *
     * @return void
     */
    public function testSetPasGestionPdp(): void {

        $obj = new Tabledeserreurs();

        $obj->setPasGestionPdp(true);
        $this->assertEquals(true, $obj->getPasGestionPdp());
    }

    /**
     * Tests the setPension() method.
     *
     * @return void
     */
    public function testSetPension(): void {

        $obj = new Tabledeserreurs();

        $obj->setPension(true);
        $this->assertEquals(true, $obj->getPension());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Tabledeserreurs();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setPermisDelivreLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPermisDelivreLe(): void {

        // Set a Date/time mock.
        $permisDelivreLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setPermisDelivreLe($permisDelivreLe);
        $this->assertSame($permisDelivreLe, $obj->getPermisDelivreLe());
    }

    /**
     * Tests the setPermisDelivrePar() method.
     *
     * @return void
     */
    public function testSetPermisDelivrePar(): void {

        $obj = new Tabledeserreurs();

        $obj->setPermisDelivrePar("permisDelivrePar");
        $this->assertEquals("permisDelivrePar", $obj->getPermisDelivrePar());
    }

    /**
     * Tests the setPermisExpireLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPermisExpireLe(): void {

        // Set a Date/time mock.
        $permisExpireLe = new DateTime("2018-09-10");

        $obj = new Tabledeserreurs();

        $obj->setPermisExpireLe($permisExpireLe);
        $this->assertSame($permisExpireLe, $obj->getPermisExpireLe());
    }

    /**
     * Tests the setPersonneAPrevenir() method.
     *
     * @return void
     */
    public function testSetPersonneAPrevenir(): void {

        $obj = new Tabledeserreurs();

        $obj->setPersonneAPrevenir("personneAPrevenir");
        $this->assertEquals("personneAPrevenir", $obj->getPersonneAPrevenir());
    }

    /**
     * Tests the setPlafondGmp() method.
     *
     * @return void
     */
    public function testSetPlafondGmp(): void {

        $obj = new Tabledeserreurs();

        $obj->setPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondGmp());
    }

    /**
     * Tests the setPlafondSs1() method.
     *
     * @return void
     */
    public function testSetPlafondSs1(): void {

        $obj = new Tabledeserreurs();

        $obj->setPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSs1());
    }

    /**
     * Tests the setPlafondSs30() method.
     *
     * @return void
     */
    public function testSetPlafondSs30(): void {

        $obj = new Tabledeserreurs();

        $obj->setPlafondSs30(true);
        $this->assertEquals(true, $obj->getPlafondSs30());
    }

    /**
     * Tests the setPourcentAbat() method.
     *
     * @return void
     */
    public function testSetPourcentAbat(): void {

        $obj = new Tabledeserreurs();

        $obj->setPourcentAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAbat());
    }

    /**
     * Tests the setPourcentAct() method.
     *
     * @return void
     */
    public function testSetPourcentAct(): void {

        $obj = new Tabledeserreurs();

        $obj->setPourcentAct(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAct());
    }

    /**
     * Tests the setPourcentEffectifDucs() method.
     *
     * @return void
     */
    public function testSetPourcentEffectifDucs(): void {

        $obj = new Tabledeserreurs();

        $obj->setPourcentEffectifDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentEffectifDucs());
    }

    /**
     * Tests the setPourcentRemuHor() method.
     *
     * @return void
     */
    public function testSetPourcentRemuHor(): void {

        $obj = new Tabledeserreurs();

        $obj->setPourcentRemuHor(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRemuHor());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setPrenomConjoint() method.
     *
     * @return void
     */
    public function testSetPrenomConjoint(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrenomConjoint("prenomConjoint");
        $this->assertEquals("prenomConjoint", $obj->getPrenomConjoint());
    }

    /**
     * Tests the setPrime() method.
     *
     * @return void
     */
    public function testSetPrime(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrime(true);
        $this->assertEquals(true, $obj->getPrime());
    }

    /**
     * Tests the setPrudCollege() method.
     *
     * @return void
     */
    public function testSetPrudCollege(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrudCollege("prudCollege");
        $this->assertEquals("prudCollege", $obj->getPrudCollege());
    }

    /**
     * Tests the setPrudLieuVote() method.
     *
     * @return void
     */
    public function testSetPrudLieuVote(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrudLieuVote("prudLieuVote");
        $this->assertEquals("prudLieuVote", $obj->getPrudLieuVote());
    }

    /**
     * Tests the setPrudSection() method.
     *
     * @return void
     */
    public function testSetPrudSection(): void {

        $obj = new Tabledeserreurs();

        $obj->setPrudSection("prudSection");
        $this->assertEquals("prudSection", $obj->getPrudSection());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new Tabledeserreurs();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setRegleCalcul() method.
     *
     * @return void
     */
    public function testSetRegleCalcul(): void {

        $obj = new Tabledeserreurs();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests the setRegroupVirement() method.
     *
     * @return void
     */
    public function testSetRegroupVirement(): void {

        $obj = new Tabledeserreurs();

        $obj->setRegroupVirement("regroupVirement");
        $this->assertEquals("regroupVirement", $obj->getRegroupVirement());
    }

    /**
     * Tests the setRegulTds() method.
     *
     * @return void
     */
    public function testSetRegulTds(): void {

        $obj = new Tabledeserreurs();

        $obj->setRegulTds(true);
        $this->assertEquals(true, $obj->getRegulTds());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Tabledeserreurs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSalaireBase() method.
     *
     * @return void
     */
    public function testSetSalaireBase(): void {

        $obj = new Tabledeserreurs();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new Tabledeserreurs();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setSexe() method.
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new Tabledeserreurs();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Tests the setSituationFam() method.
     *
     * @return void
     */
    public function testSetSituationFam(): void {

        $obj = new Tabledeserreurs();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Tests the setTaux1() method.
     *
     * @return void
     */
    public function testSetTaux1(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaux1(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux1());
    }

    /**
     * Tests the setTaux2() method.
     *
     * @return void
     */
    public function testSetTaux2(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaux2(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux2());
    }

    /**
     * Tests the setTaux3() method.
     *
     * @return void
     */
    public function testSetTaux3(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux3());
    }

    /**
     * Tests the setTaux4() method.
     *
     * @return void
     */
    public function testSetTaux4(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaux4(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux4());
    }

    /**
     * Tests the setTaux5() method.
     *
     * @return void
     */
    public function testSetTaux5(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaux5(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux5());
    }

    /**
     * Tests the setTauxAbsence() method.
     *
     * @return void
     */
    public function testSetTauxAbsence(): void {

        $obj = new Tabledeserreurs();

        $obj->setTauxAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAbsence());
    }

    /**
     * Tests the setTauxAncien() method.
     *
     * @return void
     */
    public function testSetTauxAncien(): void {

        $obj = new Tabledeserreurs();

        $obj->setTauxAncien(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAncien());
    }

    /**
     * Tests the setTauxHSup() method.
     *
     * @return void
     */
    public function testSetTauxHSup(): void {

        $obj = new Tabledeserreurs();

        $obj->setTauxHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup());
    }

    /**
     * Tests the setTauxPensionCivile() method.
     *
     * @return void
     */
    public function testSetTauxPensionCivile(): void {

        $obj = new Tabledeserreurs();

        $obj->setTauxPensionCivile(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionCivile());
    }

    /**
     * Tests the setTauxPensionMilitaire() method.
     *
     * @return void
     */
    public function testSetTauxPensionMilitaire(): void {

        $obj = new Tabledeserreurs();

        $obj->setTauxPensionMilitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionMilitaire());
    }

    /**
     * Tests the setTaxeSalaire() method.
     *
     * @return void
     */
    public function testSetTaxeSalaire(): void {

        $obj = new Tabledeserreurs();

        $obj->setTaxeSalaire(true);
        $this->assertEquals(true, $obj->getTaxeSalaire());
    }

    /**
     * Tests the setTds100() method.
     *
     * @return void
     */
    public function testSetTds100(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Tests the setTds102() method.
     *
     * @return void
     */
    public function testSetTds102(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds102(10.092018);
        $this->assertEquals(10.092018, $obj->getTds102());
    }

    /**
     * Tests the setTds103() method.
     *
     * @return void
     */
    public function testSetTds103(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Tests the setTds105() method.
     *
     * @return void
     */
    public function testSetTds105(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Tests the setTds107() method.
     *
     * @return void
     */
    public function testSetTds107(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds107(true);
        $this->assertEquals(true, $obj->getTds107());
    }

    /**
     * Tests the setTds108() method.
     *
     * @return void
     */
    public function testSetTds108(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds108(true);
        $this->assertEquals(true, $obj->getTds108());
    }

    /**
     * Tests the setTds109() method.
     *
     * @return void
     */
    public function testSetTds109(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds109(true);
        $this->assertEquals(true, $obj->getTds109());
    }

    /**
     * Tests the setTds110() method.
     *
     * @return void
     */
    public function testSetTds110(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds110(true);
        $this->assertEquals(true, $obj->getTds110());
    }

    /**
     * Tests the setTds112() method.
     *
     * @return void
     */
    public function testSetTds112(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Tests the setTds113() method.
     *
     * @return void
     */
    public function testSetTds113(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds113(true);
        $this->assertEquals(true, $obj->getTds113());
    }

    /**
     * Tests the setTds117() method.
     *
     * @return void
     */
    public function testSetTds117(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Tests the setTds119() method.
     *
     * @return void
     */
    public function testSetTds119(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds119(true);
        $this->assertEquals(true, $obj->getTds119());
    }

    /**
     * Tests the setTds120() method.
     *
     * @return void
     */
    public function testSetTds120(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds120(true);
        $this->assertEquals(true, $obj->getTds120());
    }

    /**
     * Tests the setTds121() method.
     *
     * @return void
     */
    public function testSetTds121(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds121(true);
        $this->assertEquals(true, $obj->getTds121());
    }

    /**
     * Tests the setTds122() method.
     *
     * @return void
     */
    public function testSetTds122(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds122(true);
        $this->assertEquals(true, $obj->getTds122());
    }

    /**
     * Tests the setTds125() method.
     *
     * @return void
     */
    public function testSetTds125(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Tests the setTds127() method.
     *
     * @return void
     */
    public function testSetTds127(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds127(10.092018);
        $this->assertEquals(10.092018, $obj->getTds127());
    }

    /**
     * Tests the setTds128() method.
     *
     * @return void
     */
    public function testSetTds128(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Tests the setTds132() method.
     *
     * @return void
     */
    public function testSetTds132(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Tests the setTds133() method.
     *
     * @return void
     */
    public function testSetTds133(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds133("tds133");
        $this->assertEquals("tds133", $obj->getTds133());
    }

    /**
     * Tests the setTds134() method.
     *
     * @return void
     */
    public function testSetTds134(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Tests the setTds135() method.
     *
     * @return void
     */
    public function testSetTds135(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Tests the setTds136() method.
     *
     * @return void
     */
    public function testSetTds136(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Tests the setTds138() method.
     *
     * @return void
     */
    public function testSetTds138(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds138("tds138");
        $this->assertEquals("tds138", $obj->getTds138());
    }

    /**
     * Tests the setTds139() method.
     *
     * @return void
     */
    public function testSetTds139(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds139("tds139");
        $this->assertEquals("tds139", $obj->getTds139());
    }

    /**
     * Tests the setTds141() method.
     *
     * @return void
     */
    public function testSetTds141(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Tests the setTds59() method.
     *
     * @return void
     */
    public function testSetTds59(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }

    /**
     * Tests the setTds60() method.
     *
     * @return void
     */
    public function testSetTds60(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds60(true);
        $this->assertEquals(true, $obj->getTds60());
    }

    /**
     * Tests the setTds61() method.
     *
     * @return void
     */
    public function testSetTds61(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds61("tds61");
        $this->assertEquals("tds61", $obj->getTds61());
    }

    /**
     * Tests the setTds75() method.
     *
     * @return void
     */
    public function testSetTds75(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds75(10);
        $this->assertEquals(10, $obj->getTds75());
    }

    /**
     * Tests the setTds76() method.
     *
     * @return void
     */
    public function testSetTds76(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }

    /**
     * Tests the setTds77() method.
     *
     * @return void
     */
    public function testSetTds77(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds77("tds77");
        $this->assertEquals("tds77", $obj->getTds77());
    }

    /**
     * Tests the setTds78() method.
     *
     * @return void
     */
    public function testSetTds78(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds78(true);
        $this->assertEquals(true, $obj->getTds78());
    }

    /**
     * Tests the setTds81() method.
     *
     * @return void
     */
    public function testSetTds81(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Tests the setTds82() method.
     *
     * @return void
     */
    public function testSetTds82(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Tests the setTds84() method.
     *
     * @return void
     */
    public function testSetTds84(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds84(10.092018);
        $this->assertEquals(10.092018, $obj->getTds84());
    }

    /**
     * Tests the setTds85() method.
     *
     * @return void
     */
    public function testSetTds85(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds85(10.092018);
        $this->assertEquals(10.092018, $obj->getTds85());
    }

    /**
     * Tests the setTds86() method.
     *
     * @return void
     */
    public function testSetTds86(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds86(10.092018);
        $this->assertEquals(10.092018, $obj->getTds86());
    }

    /**
     * Tests the setTds87() method.
     *
     * @return void
     */
    public function testSetTds87(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds87(10.092018);
        $this->assertEquals(10.092018, $obj->getTds87());
    }

    /**
     * Tests the setTds88() method.
     *
     * @return void
     */
    public function testSetTds88(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds88(10.092018);
        $this->assertEquals(10.092018, $obj->getTds88());
    }

    /**
     * Tests the setTds89() method.
     *
     * @return void
     */
    public function testSetTds89(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds89(10.092018);
        $this->assertEquals(10.092018, $obj->getTds89());
    }

    /**
     * Tests the setTds90() method.
     *
     * @return void
     */
    public function testSetTds90(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds90(10.092018);
        $this->assertEquals(10.092018, $obj->getTds90());
    }

    /**
     * Tests the setTds91() method.
     *
     * @return void
     */
    public function testSetTds91(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds91(10.092018);
        $this->assertEquals(10.092018, $obj->getTds91());
    }

    /**
     * Tests the setTds92() method.
     *
     * @return void
     */
    public function testSetTds92(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds92(10.092018);
        $this->assertEquals(10.092018, $obj->getTds92());
    }

    /**
     * Tests the setTds93() method.
     *
     * @return void
     */
    public function testSetTds93(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds93(10.092018);
        $this->assertEquals(10.092018, $obj->getTds93());
    }

    /**
     * Tests the setTds94() method.
     *
     * @return void
     */
    public function testSetTds94(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds94(10.092018);
        $this->assertEquals(10.092018, $obj->getTds94());
    }

    /**
     * Tests the setTds95() method.
     *
     * @return void
     */
    public function testSetTds95(): void {

        $obj = new Tabledeserreurs();

        $obj->setTds95(10.092018);
        $this->assertEquals(10.092018, $obj->getTds95());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Tabledeserreurs();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTelConjoint() method.
     *
     * @return void
     */
    public function testSetTelConjoint(): void {

        $obj = new Tabledeserreurs();

        $obj->setTelConjoint("telConjoint");
        $this->assertEquals("telConjoint", $obj->getTelConjoint());
    }

    /**
     * Tests the setTelPersAPrevenir() method.
     *
     * @return void
     */
    public function testSetTelPersAPrevenir(): void {

        $obj = new Tabledeserreurs();

        $obj->setTelPersAPrevenir("telPersAPrevenir");
        $this->assertEquals("telPersAPrevenir", $obj->getTelPersAPrevenir());
    }

    /**
     * Tests the setTempsPasse() method.
     *
     * @return void
     */
    public function testSetTempsPasse(): void {

        $obj = new Tabledeserreurs();

        $obj->setTempsPasse(true);
        $this->assertEquals(true, $obj->getTempsPasse());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new Tabledeserreurs();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTransfertEntree1() method.
     *
     * @return void
     */
    public function testSetTransfertEntree1(): void {

        $obj = new Tabledeserreurs();

        $obj->setTransfertEntree1(true);
        $this->assertEquals(true, $obj->getTransfertEntree1());
    }

    /**
     * Tests the setTransfertEntree2() method.
     *
     * @return void
     */
    public function testSetTransfertEntree2(): void {

        $obj = new Tabledeserreurs();

        $obj->setTransfertEntree2(true);
        $this->assertEquals(true, $obj->getTransfertEntree2());
    }

    /**
     * Tests the setTransfertSortie1() method.
     *
     * @return void
     */
    public function testSetTransfertSortie1(): void {

        $obj = new Tabledeserreurs();

        $obj->setTransfertSortie1(true);
        $this->assertEquals(true, $obj->getTransfertSortie1());
    }

    /**
     * Tests the setTransfertSortie2() method.
     *
     * @return void
     */
    public function testSetTransfertSortie2(): void {

        $obj = new Tabledeserreurs();

        $obj->setTransfertSortie2(true);
        $this->assertEquals(true, $obj->getTransfertSortie2());
    }

    /**
     * Tests the setTravailleJf() method.
     *
     * @return void
     */
    public function testSetTravailleJf(): void {

        $obj = new Tabledeserreurs();

        $obj->setTravailleJf(true);
        $this->assertEquals(true, $obj->getTravailleJf());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new Tabledeserreurs();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeNationalite() method.
     *
     * @return void
     */
    public function testSetTypeNationalite(): void {

        $obj = new Tabledeserreurs();

        $obj->setTypeNationalite("typeNationalite");
        $this->assertEquals("typeNationalite", $obj->getTypeNationalite());
    }

    /**
     * Tests the setTypePaiement() method.
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new Tabledeserreurs();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Tests the setVrpMulticarte() method.
     *
     * @return void
     */
    public function testSetVrpMulticarte(): void {

        $obj = new Tabledeserreurs();

        $obj->setVrpMulticarte(true);
        $this->assertEquals(true, $obj->getVrpMulticarte());
    }

    /**
     * Tests the setplafondSs2() method.
     *
     * @return void
     */
    public function testSetplafondSs2(): void {

        $obj = new Tabledeserreurs();

        $obj->setplafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getplafondSs2());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Tabledeserreurs();

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
        $this->assertNull($obj->getCoeffConvention());
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
