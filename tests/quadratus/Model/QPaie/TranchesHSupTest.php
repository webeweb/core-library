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
     * Tests setAComptabiliserRc()
     *
     * @return void
     */
    public function testSetAComptabiliserRc(): void {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRc(true);
        $this->assertEquals(true, $obj->getAComptabiliserRc());
    }

    /**
     * Tests setAComptabiliserRcit()
     *
     * @return void
     */
    public function testSetAComptabiliserRcit(): void {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRcit(true);
        $this->assertEquals(true, $obj->getAComptabiliserRcit());
    }

    /**
     * Tests setAppliquerHSup()
     *
     * @return void
     */
    public function testSetAppliquerHSup(): void {

        $obj = new TranchesHSup();

        $obj->setAppliquerHSup(true);
        $this->assertEquals(true, $obj->getAppliquerHSup());
    }

    /**
     * Tests setAppliquerReposRemplace()
     *
     * @return void
     */
    public function testSetAppliquerReposRemplace(): void {

        $obj = new TranchesHSup();

        $obj->setAppliquerReposRemplace(true);
        $this->assertEquals(true, $obj->getAppliquerReposRemplace());
    }

    /**
     * Tests setCodeLibHs()
     *
     * @return void
     */
    public function testSetCodeLibHs(): void {

        $obj = new TranchesHSup();

        $obj->setCodeLibHs("codeLibHs");
        $this->assertEquals("codeLibHs", $obj->getCodeLibHs());
    }

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new TranchesHSup();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setDeclencheRcSemaine()
     *
     * @return void
     */
    public function testSetDeclencheRcSemaine(): void {

        $obj = new TranchesHSup();

        $obj->setDeclencheRcSemaine(true);
        $this->assertEquals(true, $obj->getDeclencheRcSemaine());
    }

    /**
     * Tests setHoraireDepassement()
     *
     * @return void
     */
    public function testSetHoraireDepassement(): void {

        $obj = new TranchesHSup();

        $obj->setHoraireDepassement(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireDepassement());
    }

    /**
     * Tests setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new TranchesHSup();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests setPourcentHSup()
     *
     * @return void
     */
    public function testSetPourcentHSup(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }

    /**
     * Tests setPourcentRc()
     *
     * @return void
     */
    public function testSetPourcentRc(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentRc(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRc());
    }

    /**
     * Tests setPourcentReposRemplace()
     *
     * @return void
     */
    public function testSetPourcentReposRemplace(): void {

        $obj = new TranchesHSup();

        $obj->setPourcentReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentReposRemplace());
    }

    /**
     * Tests setTypePaiement()
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new TranchesHSup();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Tests __construct()
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
