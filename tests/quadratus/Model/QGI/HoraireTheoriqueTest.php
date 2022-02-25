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
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new HoraireTheorique();

        $obj->setAnnee(10);
        $this->assertEquals(10, $obj->getAnnee());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new HoraireTheorique();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setNbreH()
     *
     * @return void
     */
    public function testSetNbreH(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreH());
    }

    /**
     * Tests setNbreHDimanche()
     *
     * @return void
     */
    public function testSetNbreHDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHDimanche());
    }

    /**
     * Tests setNbreHJeudi()
     *
     * @return void
     */
    public function testSetNbreHJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHJeudi());
    }

    /**
     * Tests setNbreHLundi()
     *
     * @return void
     */
    public function testSetNbreHLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHLundi());
    }

    /**
     * Tests setNbreHMardi()
     *
     * @return void
     */
    public function testSetNbreHMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMardi());
    }

    /**
     * Tests setNbreHMax()
     *
     * @return void
     */
    public function testSetNbreHMax(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMax(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMax());
    }

    /**
     * Tests setNbreHMaxiDimanche()
     *
     * @return void
     */
    public function testSetNbreHMaxiDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiDimanche());
    }

    /**
     * Tests setNbreHMaxiJeudi()
     *
     * @return void
     */
    public function testSetNbreHMaxiJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiJeudi());
    }

    /**
     * Tests setNbreHMaxiLundi()
     *
     * @return void
     */
    public function testSetNbreHMaxiLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiLundi());
    }

    /**
     * Tests setNbreHMaxiMardi()
     *
     * @return void
     */
    public function testSetNbreHMaxiMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMardi());
    }

    /**
     * Tests setNbreHMaxiMercredi()
     *
     * @return void
     */
    public function testSetNbreHMaxiMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiMercredi());
    }

    /**
     * Tests setNbreHMaxiSamedi()
     *
     * @return void
     */
    public function testSetNbreHMaxiSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiSamedi());
    }

    /**
     * Tests setNbreHMaxiVendredi()
     *
     * @return void
     */
    public function testSetNbreHMaxiVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMaxiVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMaxiVendredi());
    }

    /**
     * Tests setNbreHMercredi()
     *
     * @return void
     */
    public function testSetNbreHMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMercredi());
    }

    /**
     * Tests setNbreHMini()
     *
     * @return void
     */
    public function testSetNbreHMini(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMini(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMini());
    }

    /**
     * Tests setNbreHMiniDimanche()
     *
     * @return void
     */
    public function testSetNbreHMiniDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniDimanche());
    }

    /**
     * Tests setNbreHMiniJeudi()
     *
     * @return void
     */
    public function testSetNbreHMiniJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniJeudi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniJeudi());
    }

    /**
     * Tests setNbreHMiniLundi()
     *
     * @return void
     */
    public function testSetNbreHMiniLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniLundi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniLundi());
    }

    /**
     * Tests setNbreHMiniMardi()
     *
     * @return void
     */
    public function testSetNbreHMiniMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniMardi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMardi());
    }

    /**
     * Tests setNbreHMiniMercredi()
     *
     * @return void
     */
    public function testSetNbreHMiniMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniMercredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniMercredi());
    }

    /**
     * Tests setNbreHMiniSamedi()
     *
     * @return void
     */
    public function testSetNbreHMiniSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniSamedi());
    }

    /**
     * Tests setNbreHMiniVendredi()
     *
     * @return void
     */
    public function testSetNbreHMiniVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHMiniVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHMiniVendredi());
    }

    /**
     * Tests setNbreHSamedi()
     *
     * @return void
     */
    public function testSetNbreHSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHSamedi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHSamedi());
    }

    /**
     * Tests setNbreHVendredi()
     *
     * @return void
     */
    public function testSetNbreHVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setNbreHVendredi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHVendredi());
    }

    /**
     * Tests setNumeroSem()
     *
     * @return void
     */
    public function testSetNumeroSem(): void {

        $obj = new HoraireTheorique();

        $obj->setNumeroSem(10);
        $this->assertEquals(10, $obj->getNumeroSem());
    }

    /**
     * Tests setTDimanche()
     *
     * @return void
     */
    public function testSetTDimanche(): void {

        $obj = new HoraireTheorique();

        $obj->setTDimanche(true);
        $this->assertEquals(true, $obj->getTDimanche());
    }

    /**
     * Tests setTJeudi()
     *
     * @return void
     */
    public function testSetTJeudi(): void {

        $obj = new HoraireTheorique();

        $obj->setTJeudi(true);
        $this->assertEquals(true, $obj->getTJeudi());
    }

    /**
     * Tests setTLundi()
     *
     * @return void
     */
    public function testSetTLundi(): void {

        $obj = new HoraireTheorique();

        $obj->setTLundi(true);
        $this->assertEquals(true, $obj->getTLundi());
    }

    /**
     * Tests setTMardi()
     *
     * @return void
     */
    public function testSetTMardi(): void {

        $obj = new HoraireTheorique();

        $obj->setTMardi(true);
        $this->assertEquals(true, $obj->getTMardi());
    }

    /**
     * Tests setTMercredi()
     *
     * @return void
     */
    public function testSetTMercredi(): void {

        $obj = new HoraireTheorique();

        $obj->setTMercredi(true);
        $this->assertEquals(true, $obj->getTMercredi());
    }

    /**
     * Tests setTSamedi()
     *
     * @return void
     */
    public function testSetTSamedi(): void {

        $obj = new HoraireTheorique();

        $obj->setTSamedi(true);
        $this->assertEquals(true, $obj->getTSamedi());
    }

    /**
     * Tests setTVendredi()
     *
     * @return void
     */
    public function testSetTVendredi(): void {

        $obj = new HoraireTheorique();

        $obj->setTVendredi(true);
        $this->assertEquals(true, $obj->getTVendredi());
    }

    /**
     * Tests __construct()
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
