<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\HoraireTheorique;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Horaire theorique test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class HoraireTheoriqueTest extends AbstractTestCase {

    /**
     * Test setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new HoraireTheorique();

        $obj->setAnnee(10);
        $this->assertEquals(10, $obj->getAnnee());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new HoraireTheorique();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setNbreH()
     *
     * @return void
     */
    public function testSetNbreH(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreH());
    }

    /**
     * Test setNbreHDimanche()
     *
     * @return void
     */
    public function testSetNbreHDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHDimanche());
    }

    /**
     * Test setNbreHJeudi()
     *
     * @return void
     */
    public function testSetNbreHJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHJeudi());
    }

    /**
     * Test setNbreHLundi()
     *
     * @return void
     */
    public function testSetNbreHLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHLundi());
    }

    /**
     * Test setNbreHMardi()
     *
     * @return void
     */
    public function testSetNbreHMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMardi());
    }

    /**
     * Test setNbreHMax()
     *
     * @return void
     */
    public function testSetNbreHMax(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMax(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMax());
    }

    /**
     * Test setNbreHMaxiDimanche()
     *
     * @return void
     */
    public function testSetNbreHMaxiDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiDimanche());
    }

    /**
     * Test setNbreHMaxiJeudi()
     *
     * @return void
     */
    public function testSetNbreHMaxiJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiJeudi());
    }

    /**
     * Test setNbreHMaxiLundi()
     *
     * @return void
     */
    public function testSetNbreHMaxiLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiLundi());
    }

    /**
     * Test setNbreHMaxiMardi()
     *
     * @return void
     */
    public function testSetNbreHMaxiMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMardi());
    }

    /**
     * Test setNbreHMaxiMercredi()
     *
     * @return void
     */
    public function testSetNbreHMaxiMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMercredi());
    }

    /**
     * Test setNbreHMaxiSamedi()
     *
     * @return void
     */
    public function testSetNbreHMaxiSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiSamedi());
    }

    /**
     * Test setNbreHMaxiVendredi()
     *
     * @return void
     */
    public function testSetNbreHMaxiVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiVendredi());
    }

    /**
     * Test setNbreHMercredi()
     *
     * @return void
     */
    public function testSetNbreHMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMercredi());
    }

    /**
     * Test setNbreHMini()
     *
     * @return void
     */
    public function testSetNbreHMini(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMini(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMini());
    }

    /**
     * Test setNbreHMiniDimanche()
     *
     * @return void
     */
    public function testSetNbreHMiniDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniDimanche());
    }

    /**
     * Test setNbreHMiniJeudi()
     *
     * @return void
     */
    public function testSetNbreHMiniJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniJeudi());
    }

    /**
     * Test setNbreHMiniLundi()
     *
     * @return void
     */
    public function testSetNbreHMiniLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniLundi());
    }

    /**
     * Test setNbreHMiniMardi()
     *
     * @return void
     */
    public function testSetNbreHMiniMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMardi());
    }

    /**
     * Test setNbreHMiniMercredi()
     *
     * @return void
     */
    public function testSetNbreHMiniMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMercredi());
    }

    /**
     * Test setNbreHMiniSamedi()
     *
     * @return void
     */
    public function testSetNbreHMiniSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniSamedi());
    }

    /**
     * Test setNbreHMiniVendredi()
     *
     * @return void
     */
    public function testSetNbreHMiniVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniVendredi());
    }

    /**
     * Test setNbreHSamedi()
     *
     * @return void
     */
    public function testSetNbreHSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHSamedi());
    }

    /**
     * Test setNbreHVendredi()
     *
     * @return void
     */
    public function testSetNbreHVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHVendredi());
    }

    /**
     * Test setNumeroSem()
     *
     * @return void
     */
    public function testSetNumeroSem(): void {

        $obj = new HoraireTheorique();

        $obj->setNumeroSem(10);
        $this->assertEquals(10, $obj->getNumeroSem());
    }

    /**
     * Test setTDimanche()
     *
     * @return void
     */
    public function testSetTDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setTDimanche(true);
        $this->assertTrue($obj->getTDimanche());
    }

    /**
     * Test setTJeudi()
     *
     * @return void
     */
    public function testSetTJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setTJeudi(true);
        $this->assertTrue($obj->getTJeudi());
    }

    /**
     * Test setTLundi()
     *
     * @return void
     */
    public function testSetTLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setTLundi(true);
        $this->assertTrue($obj->getTLundi());
    }

    /**
     * Test setTMardi()
     *
     * @return void
     */
    public function testSetTMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setTMardi(true);
        $this->assertTrue($obj->getTMardi());
    }

    /**
     * Test setTMercredi()
     *
     * @return void
     */
    public function testSetTMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setTMercredi(true);
        $this->assertTrue($obj->getTMercredi());
    }

    /**
     * Test setTSamedi()
     *
     * @return void
     */
    public function testSetTSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setTSamedi(true);
        $this->assertTrue($obj->getTSamedi());
    }

    /**
     * Test setTVendredi()
     *
     * @return void
     */
    public function testSetTVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setTVendredi(true);
        $this->assertTrue($obj->getTVendredi());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HoraireTheorique();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCode());
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
        $this->assertNull($obj->getNumeroSem());
        $this->assertNull($obj->getTDimanche());
        $this->assertNull($obj->getTJeudi());
        $this->assertNull($obj->getTLundi());
        $this->assertNull($obj->getTMardi());
        $this->assertNull($obj->getTMercredi());
        $this->assertNull($obj->getTSamedi());
        $this->assertNull($obj->getTVendredi());
    }
}
