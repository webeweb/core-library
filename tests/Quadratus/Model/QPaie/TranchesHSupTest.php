<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\TranchesHSup;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Tranches h sup model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class TranchesHSupTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesHSup();

        $this->assertNull($obj->getAComptabiliserRC());
        $this->assertNull($obj->getAComptabiliserRCIT());
        $this->assertNull($obj->getAppliquerHSup());
        $this->assertNull($obj->getAppliquerReposRemplace());
        $this->assertNull($obj->getCodeLibHS());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDeclencheRCSemaine());
        $this->assertNull($obj->getHoraireDepassement());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getPourcentHSup());
        $this->assertNull($obj->getPourcentRC());
        $this->assertNull($obj->getPourcentReposRemplace());
        $this->assertNull($obj->getTypePaiement());
    }

    /**
     * Tests the setAComptabiliserRC() method.
     *
     * @return void
     */
    public function testSetAComptabiliserRC() {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRC(true);
        $this->assertEquals(true, $obj->getAComptabiliserRC());
    }

    /**
     * Tests the setAComptabiliserRCIT() method.
     *
     * @return void
     */
    public function testSetAComptabiliserRCIT() {

        $obj = new TranchesHSup();

        $obj->setAComptabiliserRCIT(true);
        $this->assertEquals(true, $obj->getAComptabiliserRCIT());
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
     * Tests the setCodeLibHS() method.
     *
     * @return void
     */
    public function testSetCodeLibHS() {

        $obj = new TranchesHSup();

        $obj->setCodeLibHS("codeLibHS");
        $this->assertEquals("codeLibHS", $obj->getCodeLibHS());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     */
    public function testSetDateApplication() {

        $obj = new TranchesHSup();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setDeclencheRCSemaine() method.
     *
     * @return void
     */
    public function testSetDeclencheRCSemaine() {

        $obj = new TranchesHSup();

        $obj->setDeclencheRCSemaine(true);
        $this->assertEquals(true, $obj->getDeclencheRCSemaine());
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
     * Tests the setPourcentRC() method.
     *
     * @return void
     */
    public function testSetPourcentRC() {

        $obj = new TranchesHSup();

        $obj->setPourcentRC(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRC());
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
