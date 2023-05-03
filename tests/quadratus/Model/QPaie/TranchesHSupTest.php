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
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\TranchesHSup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tranches h sup test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TranchesHSupTest extends AbstractTestCase {

    /**
     * Test setAComptabiliserRc()
     *
     * @return void
     */
    public function testSetAComptabiliserRc(): void {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRc(true);
        $this->assertTrue($obj->getAComptabiliserRc());
    }

    /**
     * Test setAComptabiliserRcit()
     *
     * @return void
     */
    public function testSetAComptabiliserRcit(): void {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRcit(true);
        $this->assertTrue($obj->getAComptabiliserRcit());
    }

    /**
     * Test setAppliquerHSup()
     *
     * @return void
     */
    public function testSetAppliquerHSup(): void {

        $obj = new TranchesHSup();

        $obj->setAppliquerHSup(true);
        $this->assertTrue($obj->getAppliquerHSup());
    }

    /**
     * Test setAppliquerReposRemplace()
     *
     * @return void
     */
    public function testSetAppliquerReposRemplace(): void {

        $obj = new TranchesHSup();

        $obj->setAppliquerReposRemplace(true);
        $this->assertTrue($obj->getAppliquerReposRemplace());
    }

    /**
     * Test setCodeLibHs()
     *
     * @return void
     */
    public function testSetCodeLibHs(): void {

        $obj = new TranchesHSup();

        $obj->setCodeLibHs("codeLibHs");
        $this->assertEquals("codeLibHs", $obj->getCodeLibHs());
    }

    /**
     * Test setDateApplication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new TranchesHSup();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Test setDeclencheRcSemaine()
     *
     * @return void
     */
    public function testSetDeclencheRcSemaine(): void {

        $obj = new TranchesHSup();

        $obj->setDeclencheRcSemaine(true);
        $this->assertTrue($obj->getDeclencheRcSemaine());
    }

    /**
     * Test setHoraireDepassement()
     *
     * @return void
     */
    public function testSetHoraireDepassement(): void {

        $obj = new TranchesHSup();

        $obj->setHoraireDepassement(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireDepassement());
    }

    /**
     * Test setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new TranchesHSup();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Test setPourcentHSup()
     *
     * @return void
     */
    public function testSetPourcentHSup(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }

    /**
     * Test setPourcentRc()
     *
     * @return void
     */
    public function testSetPourcentRc(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentRc(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRc());
    }

    /**
     * Test setPourcentReposRemplace()
     *
     * @return void
     */
    public function testSetPourcentReposRemplace(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentReposRemplace());
    }

    /**
     * Test setTypePaiement()
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new TranchesHSup();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TranchesHSup();

        $this->assertNull($obj->getAComptabiliserRc());
        $this->assertNull($obj->getAComptabiliserRcit());
        $this->assertNull($obj->getAppliquerHSup());
        $this->assertNull($obj->getAppliquerReposRemplace());
        $this->assertNull($obj->getCodeLibHs());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDeclencheRcSemaine());
        $this->assertNull($obj->getHoraireDepassement());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getPourcentHSup());
        $this->assertNull($obj->getPourcentRc());
        $this->assertNull($obj->getPourcentReposRemplace());
        $this->assertNull($obj->getTypePaiement());
    }
}
