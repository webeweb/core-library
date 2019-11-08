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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TranchesHSup;

/**
 * Tranches h sup test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesHSupTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setAComptabiliserRc() method.
     *
     * @return void
     */
    public function testSetAComptabiliserRc() {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRc(true);
        $this->assertEquals(true, $obj->getAComptabiliserRc());
    }

    /**
     * Tests the setAComptabiliserRcit() method.
     *
     * @return void
     */
    public function testSetAComptabiliserRcit() {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRcit(true);
        $this->assertEquals(true, $obj->getAComptabiliserRcit());
    }

    /**
     * Tests the setAppliquerHSup() method.
     *
     * @return void
     */
    public function testSetAppliquerHSup() {

        $obj = new TranchesHSup();

        $obj->setAppliquerHSup(true);
        $this->assertEquals(true, $obj->getAppliquerHSup());
    }

    /**
     * Tests the setAppliquerReposRemplace() method.
     *
     * @return void
     */
    public function testSetAppliquerReposRemplace() {

        $obj = new TranchesHSup();

        $obj->setAppliquerReposRemplace(true);
        $this->assertEquals(true, $obj->getAppliquerReposRemplace());
    }

    /**
     * Tests the setCodeLibHs() method.
     *
     * @return void
     */
    public function testSetCodeLibHs() {

        $obj = new TranchesHSup();

        $obj->setCodeLibHs("codeLibHs");
        $this->assertEquals("codeLibHs", $obj->getCodeLibHs());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new TranchesHSup();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests the setDeclencheRcSemaine() method.
     *
     * @return void
     */
    public function testSetDeclencheRcSemaine() {

        $obj = new TranchesHSup();

        $obj->setDeclencheRcSemaine(true);
        $this->assertEquals(true, $obj->getDeclencheRcSemaine());
    }

    /**
     * Tests the setHoraireDepassement() method.
     *
     * @return void
     */
    public function testSetHoraireDepassement() {

        $obj = new TranchesHSup();

        $obj->setHoraireDepassement(10.092018);
        $this->assertEquals(10.092018, $obj->getHoraireDepassement());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new TranchesHSup();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setPourcentHSup() method.
     *
     * @return void
     */
    public function testSetPourcentHSup() {

        $obj = new TranchesHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }

    /**
     * Tests the setPourcentRc() method.
     *
     * @return void
     */
    public function testSetPourcentRc() {

        $obj = new TranchesHSup();

        $obj->setPourcentRc(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRc());
    }

    /**
     * Tests the setPourcentReposRemplace() method.
     *
     * @return void
     */
    public function testSetPourcentReposRemplace() {

        $obj = new TranchesHSup();

        $obj->setPourcentReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentReposRemplace());
    }

    /**
     * Tests the setTypePaiement() method.
     *
     * @return void
     */
    public function testSetTypePaiement() {

        $obj = new TranchesHSup();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }
}
