<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\SemaineType;

/**
 * Semaine type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class SemaineTypeTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new SemaineType();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new SemaineType();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNbreH() method.
     *
     * @return void
     */
    public function testSetNbreH(): void {

        $obj = new SemaineType();

        $obj->setNbreH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreH());
    }

    /**
     * Tests the setNbreHDimanche() method.
     *
     * @return void
     */
    public function testSetNbreHDimanche(): void {

        $obj = new SemaineType();

        $obj->setNbreHDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHDimanche());
    }

    /**
     * Tests the setNbreHJeudi() method.
     *
     * @return void
     */
    public function testSetNbreHJeudi(): void {

        $obj = new SemaineType();

        $obj->setNbreHJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHJeudi());
    }

    /**
     * Tests the setNbreHLundi() method.
     *
     * @return void
     */
    public function testSetNbreHLundi(): void {

        $obj = new SemaineType();

        $obj->setNbreHLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHLundi());
    }

    /**
     * Tests the setNbreHMardi() method.
     *
     * @return void
     */
    public function testSetNbreHMardi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMardi());
    }

    /**
     * Tests the setNbreHMax() method.
     *
     * @return void
     */
    public function testSetNbreHMax(): void {

        $obj = new SemaineType();

        $obj->setNbreHMax(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMax());
    }

    /**
     * Tests the setNbreHMaxiDimanche() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiDimanche(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiDimanche());
    }

    /**
     * Tests the setNbreHMaxiJeudi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiJeudi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiJeudi());
    }

    /**
     * Tests the setNbreHMaxiLundi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiLundi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiLundi());
    }

    /**
     * Tests the setNbreHMaxiMardi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiMardi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMardi());
    }

    /**
     * Tests the setNbreHMaxiMercredi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiMercredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMercredi());
    }

    /**
     * Tests the setNbreHMaxiSamedi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiSamedi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiSamedi());
    }

    /**
     * Tests the setNbreHMaxiVendredi() method.
     *
     * @return void
     */
    public function testSetNbreHMaxiVendredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMaxiVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiVendredi());
    }

    /**
     * Tests the setNbreHMercredi() method.
     *
     * @return void
     */
    public function testSetNbreHMercredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMercredi());
    }

    /**
     * Tests the setNbreHMini() method.
     *
     * @return void
     */
    public function testSetNbreHMini(): void {

        $obj = new SemaineType();

        $obj->setNbreHMini(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMini());
    }

    /**
     * Tests the setNbreHMiniDimanche() method.
     *
     * @return void
     */
    public function testSetNbreHMiniDimanche(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniDimanche());
    }

    /**
     * Tests the setNbreHMiniJeudi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniJeudi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniJeudi());
    }

    /**
     * Tests the setNbreHMiniLundi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniLundi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniLundi());
    }

    /**
     * Tests the setNbreHMiniMardi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniMardi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMardi());
    }

    /**
     * Tests the setNbreHMiniMercredi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniMercredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMercredi());
    }

    /**
     * Tests the setNbreHMiniSamedi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniSamedi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniSamedi());
    }

    /**
     * Tests the setNbreHMiniVendredi() method.
     *
     * @return void
     */
    public function testSetNbreHMiniVendredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHMiniVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniVendredi());
    }

    /**
     * Tests the setNbreHSamedi() method.
     *
     * @return void
     */
    public function testSetNbreHSamedi(): void {

        $obj = new SemaineType();

        $obj->setNbreHSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHSamedi());
    }

    /**
     * Tests the setNbreHVendredi() method.
     *
     * @return void
     */
    public function testSetNbreHVendredi(): void {

        $obj = new SemaineType();

        $obj->setNbreHVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHVendredi());
    }

    /**
     * Tests the setTDimanche() method.
     *
     * @return void
     */
    public function testSetTDimanche(): void {

        $obj = new SemaineType();

        $obj->setTDimanche(true);
        $this->assertEquals(true, $obj->getTDimanche());
    }

    /**
     * Tests the setTJeudi() method.
     *
     * @return void
     */
    public function testSetTJeudi(): void {

        $obj = new SemaineType();

        $obj->setTJeudi(true);
        $this->assertEquals(true, $obj->getTJeudi());
    }

    /**
     * Tests the setTLundi() method.
     *
     * @return void
     */
    public function testSetTLundi(): void {

        $obj = new SemaineType();

        $obj->setTLundi(true);
        $this->assertEquals(true, $obj->getTLundi());
    }

    /**
     * Tests the setTMardi() method.
     *
     * @return void
     */
    public function testSetTMardi(): void {

        $obj = new SemaineType();

        $obj->setTMardi(true);
        $this->assertEquals(true, $obj->getTMardi());
    }

    /**
     * Tests the setTMercredi() method.
     *
     * @return void
     */
    public function testSetTMercredi(): void {

        $obj = new SemaineType();

        $obj->setTMercredi(true);
        $this->assertEquals(true, $obj->getTMercredi());
    }

    /**
     * Tests the setTSamedi() method.
     *
     * @return void
     */
    public function testSetTSamedi(): void {

        $obj = new SemaineType();

        $obj->setTSamedi(true);
        $this->assertEquals(true, $obj->getTSamedi());
    }

    /**
     * Tests the setTVendredi() method.
     *
     * @return void
     */
    public function testSetTVendredi(): void {

        $obj = new SemaineType();

        $obj->setTVendredi(true);
        $this->assertEquals(true, $obj->getTVendredi());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SemaineType();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNbreH());
        $this->assertNull($obj->getNbreHDimanche());
        $this->assertNull($obj->getNbreHJeudi());
        $this->assertNull($obj->getNbreHLundi());
        $this->assertNull($obj->getNbreHMardi());
        $this->assertNull($obj->getNbreHMax());
        $this->assertNull($obj->getNbreHMaxiDimanche());
        $this->assertNull($obj->getNbreHMaxiJeudi());
        $this->assertNull($obj->getNbreHMaxiLundi());
        $this->assertNull($obj->getNbreHMaxiMardi());
        $this->assertNull($obj->getNbreHMaxiMercredi());
        $this->assertNull($obj->getNbreHMaxiSamedi());
        $this->assertNull($obj->getNbreHMaxiVendredi());
        $this->assertNull($obj->getNbreHMercredi());
        $this->assertNull($obj->getNbreHMini());
        $this->assertNull($obj->getNbreHMiniDimanche());
        $this->assertNull($obj->getNbreHMiniJeudi());
        $this->assertNull($obj->getNbreHMiniLundi());
        $this->assertNull($obj->getNbreHMiniMardi());
        $this->assertNull($obj->getNbreHMiniMercredi());
        $this->assertNull($obj->getNbreHMiniSamedi());
        $this->assertNull($obj->getNbreHMiniVendredi());
        $this->assertNull($obj->getNbreHSamedi());
        $this->assertNull($obj->getNbreHVendredi());
        $this->assertNull($obj->getTDimanche());
        $this->assertNull($obj->getTJeudi());
        $this->assertNull($obj->getTLundi());
        $this->assertNull($obj->getTMardi());
        $this->assertNull($obj->getTMercredi());
        $this->assertNull($obj->getTSamedi());
        $this->assertNull($obj->getTVendredi());
    }
}
