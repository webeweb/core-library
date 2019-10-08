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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesProfil;

/**
 * Lignes profil model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesProfilTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesProfil();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeProfil());
        $this->assertNull($obj->getDebPerApplication());
        $this->assertNull($obj->getFinPerApplication());
        $this->assertNull($obj->getFreq1());
        $this->assertNull($obj->getFreq10());
        $this->assertNull($obj->getFreq11());
        $this->assertNull($obj->getFreq12());
        $this->assertNull($obj->getFreq2());
        $this->assertNull($obj->getFreq3());
        $this->assertNull($obj->getFreq4());
        $this->assertNull($obj->getFreq5());
        $this->assertNull($obj->getFreq6());
        $this->assertNull($obj->getFreq7());
        $this->assertNull($obj->getFreq8());
        $this->assertNull($obj->getFreq9());
        $this->assertNull($obj->getNumLigneProfil());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new LignesProfil();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeProfil() method.
     *
     * @return void
     */
    public function testSetCodeProfil() {

        $obj = new LignesProfil();

        $obj->setCodeProfil("codeProfil");
        $this->assertEquals("codeProfil", $obj->getCodeProfil());
    }

    /**
     * Tests the setDebPerApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebPerApplication() {

        $obj = new LignesProfil();

        $obj->setDebPerApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebPerApplication());
    }

    /**
     * Tests the setFinPerApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPerApplication() {

        $obj = new LignesProfil();

        $obj->setFinPerApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPerApplication());
    }

    /**
     * Tests the setFreq1() method.
     *
     * @return void
     */
    public function testSetFreq1() {

        $obj = new LignesProfil();

        $obj->setFreq1("freq1");
        $this->assertEquals("freq1", $obj->getFreq1());
    }

    /**
     * Tests the setFreq10() method.
     *
     * @return void
     */
    public function testSetFreq10() {

        $obj = new LignesProfil();

        $obj->setFreq10("freq10");
        $this->assertEquals("freq10", $obj->getFreq10());
    }

    /**
     * Tests the setFreq11() method.
     *
     * @return void
     */
    public function testSetFreq11() {

        $obj = new LignesProfil();

        $obj->setFreq11("freq11");
        $this->assertEquals("freq11", $obj->getFreq11());
    }

    /**
     * Tests the setFreq12() method.
     *
     * @return void
     */
    public function testSetFreq12() {

        $obj = new LignesProfil();

        $obj->setFreq12("freq12");
        $this->assertEquals("freq12", $obj->getFreq12());
    }

    /**
     * Tests the setFreq2() method.
     *
     * @return void
     */
    public function testSetFreq2() {

        $obj = new LignesProfil();

        $obj->setFreq2("freq2");
        $this->assertEquals("freq2", $obj->getFreq2());
    }

    /**
     * Tests the setFreq3() method.
     *
     * @return void
     */
    public function testSetFreq3() {

        $obj = new LignesProfil();

        $obj->setFreq3("freq3");
        $this->assertEquals("freq3", $obj->getFreq3());
    }

    /**
     * Tests the setFreq4() method.
     *
     * @return void
     */
    public function testSetFreq4() {

        $obj = new LignesProfil();

        $obj->setFreq4("freq4");
        $this->assertEquals("freq4", $obj->getFreq4());
    }

    /**
     * Tests the setFreq5() method.
     *
     * @return void
     */
    public function testSetFreq5() {

        $obj = new LignesProfil();

        $obj->setFreq5("freq5");
        $this->assertEquals("freq5", $obj->getFreq5());
    }

    /**
     * Tests the setFreq6() method.
     *
     * @return void
     */
    public function testSetFreq6() {

        $obj = new LignesProfil();

        $obj->setFreq6("freq6");
        $this->assertEquals("freq6", $obj->getFreq6());
    }

    /**
     * Tests the setFreq7() method.
     *
     * @return void
     */
    public function testSetFreq7() {

        $obj = new LignesProfil();

        $obj->setFreq7("freq7");
        $this->assertEquals("freq7", $obj->getFreq7());
    }

    /**
     * Tests the setFreq8() method.
     *
     * @return void
     */
    public function testSetFreq8() {

        $obj = new LignesProfil();

        $obj->setFreq8("freq8");
        $this->assertEquals("freq8", $obj->getFreq8());
    }

    /**
     * Tests the setFreq9() method.
     *
     * @return void
     */
    public function testSetFreq9() {

        $obj = new LignesProfil();

        $obj->setFreq9("freq9");
        $this->assertEquals("freq9", $obj->getFreq9());
    }

    /**
     * Tests the setNumLigneProfil() method.
     *
     * @return void
     */
    public function testSetNumLigneProfil() {

        $obj = new LignesProfil();

        $obj->setNumLigneProfil(10);
        $this->assertEquals(10, $obj->getNumLigneProfil());
    }
}
