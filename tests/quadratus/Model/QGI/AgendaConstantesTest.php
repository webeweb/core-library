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

use WBW\Library\Quadratus\Model\QGI\AgendaConstantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda constantes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaConstantesTest extends AbstractTestCase {

    /**
     * Tests setArchivagePermanent()
     *
     * @return void
     */
    public function testSetArchivagePermanent(): void {

        $obj = new AgendaConstantes();

        $obj->setArchivagePermanent(true);
        $this->assertEquals(true, $obj->getArchivagePermanent());
    }

    /**
     * Tests setCodeActivite7()
     *
     * @return void
     */
    public function testSetCodeActivite7(): void {

        $obj = new AgendaConstantes();

        $obj->setCodeActivite7("codeActivite7");
        $this->assertEquals("codeActivite7", $obj->getCodeActivite7());
    }

    /**
     * Tests setCodeActivite8()
     *
     * @return void
     */
    public function testSetCodeActivite8(): void {

        $obj = new AgendaConstantes();

        $obj->setCodeActivite8("codeActivite8");
        $this->assertEquals("codeActivite8", $obj->getCodeActivite8());
    }

    /**
     * Tests setCodeActivite9()
     *
     * @return void
     */
    public function testSetCodeActivite9(): void {

        $obj = new AgendaConstantes();

        $obj->setCodeActivite9("codeActivite9");
        $this->assertEquals("codeActivite9", $obj->getCodeActivite9());
    }

    /**
     * Tests setCouleurActivite1()
     *
     * @return void
     */
    public function testSetCouleurActivite1(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite1(10);
        $this->assertEquals(10, $obj->getCouleurActivite1());
    }

    /**
     * Tests setCouleurActivite10()
     *
     * @return void
     */
    public function testSetCouleurActivite10(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite10(10);
        $this->assertEquals(10, $obj->getCouleurActivite10());
    }

    /**
     * Tests setCouleurActivite11()
     *
     * @return void
     */
    public function testSetCouleurActivite11(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite11(10);
        $this->assertEquals(10, $obj->getCouleurActivite11());
    }

    /**
     * Tests setCouleurActivite2()
     *
     * @return void
     */
    public function testSetCouleurActivite2(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite2(10);
        $this->assertEquals(10, $obj->getCouleurActivite2());
    }

    /**
     * Tests setCouleurActivite3()
     *
     * @return void
     */
    public function testSetCouleurActivite3(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite3(10);
        $this->assertEquals(10, $obj->getCouleurActivite3());
    }

    /**
     * Tests setCouleurActivite4()
     *
     * @return void
     */
    public function testSetCouleurActivite4(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite4(10);
        $this->assertEquals(10, $obj->getCouleurActivite4());
    }

    /**
     * Tests setCouleurActivite5()
     *
     * @return void
     */
    public function testSetCouleurActivite5(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite5(10);
        $this->assertEquals(10, $obj->getCouleurActivite5());
    }

    /**
     * Tests setCouleurActivite6()
     *
     * @return void
     */
    public function testSetCouleurActivite6(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite6(10);
        $this->assertEquals(10, $obj->getCouleurActivite6());
    }

    /**
     * Tests setCouleurActivite7()
     *
     * @return void
     */
    public function testSetCouleurActivite7(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite7(10);
        $this->assertEquals(10, $obj->getCouleurActivite7());
    }

    /**
     * Tests setCouleurActivite8()
     *
     * @return void
     */
    public function testSetCouleurActivite8(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite8(10);
        $this->assertEquals(10, $obj->getCouleurActivite8());
    }

    /**
     * Tests setCouleurActivite9()
     *
     * @return void
     */
    public function testSetCouleurActivite9(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurActivite9(10);
        $this->assertEquals(10, $obj->getCouleurActivite9());
    }

    /**
     * Tests setCouleurCalendrier()
     *
     * @return void
     */
    public function testSetCouleurCalendrier(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurCalendrier(10);
        $this->assertEquals(10, $obj->getCouleurCalendrier());
    }

    /**
     * Tests setCouleurDimJFeries()
     *
     * @return void
     */
    public function testSetCouleurDimJFeries(): void {

        $obj = new AgendaConstantes();

        $obj->setCouleurDimJFeries(10);
        $this->assertEquals(10, $obj->getCouleurDimJFeries());
    }

    /**
     * Tests setDisabledActivityLabelOnFirstRow()
     *
     * @return void
     */
    public function testSetDisabledActivityLabelOnFirstRow(): void {

        $obj = new AgendaConstantes();

        $obj->setDisabledActivityLabelOnFirstRow(true);
        $this->assertEquals(true, $obj->getDisabledActivityLabelOnFirstRow());
    }

    /**
     * Tests setDossierFactPme()
     *
     * @return void
     */
    public function testSetDossierFactPme(): void {

        $obj = new AgendaConstantes();

        $obj->setDossierFactPme("dossierFactPme");
        $this->assertEquals("dossierFactPme", $obj->getDossierFactPme());
    }

    /**
     * Tests setHeureDebut()
     *
     * @return void
     */
    public function testSetHeureDebut(): void {

        $obj = new AgendaConstantes();

        $obj->setHeureDebut("heureDebut");
        $this->assertEquals("heureDebut", $obj->getHeureDebut());
    }

    /**
     * Tests setHeureFin()
     *
     * @return void
     */
    public function testSetHeureFin(): void {

        $obj = new AgendaConstantes();

        $obj->setHeureFin("heureFin");
        $this->assertEquals("heureFin", $obj->getHeureFin());
    }

    /**
     * Tests setLibelleActivite7()
     *
     * @return void
     */
    public function testSetLibelleActivite7(): void {

        $obj = new AgendaConstantes();

        $obj->setLibelleActivite7("libelleActivite7");
        $this->assertEquals("libelleActivite7", $obj->getLibelleActivite7());
    }

    /**
     * Tests setLibelleActivite8()
     *
     * @return void
     */
    public function testSetLibelleActivite8(): void {

        $obj = new AgendaConstantes();

        $obj->setLibelleActivite8("libelleActivite8");
        $this->assertEquals("libelleActivite8", $obj->getLibelleActivite8());
    }

    /**
     * Tests setLibelleActivite9()
     *
     * @return void
     */
    public function testSetLibelleActivite9(): void {

        $obj = new AgendaConstantes();

        $obj->setLibelleActivite9("libelleActivite9");
        $this->assertEquals("libelleActivite9", $obj->getLibelleActivite9());
    }

    /**
     * Tests setMultiDossiers()
     *
     * @return void
     */
    public function testSetMultiDossiers(): void {

        $obj = new AgendaConstantes();

        $obj->setMultiDossiers(true);
        $this->assertEquals(true, $obj->getMultiDossiers());
    }

    /**
     * Tests setTextColorActivite1()
     *
     * @return void
     */
    public function testSetTextColorActivite1(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite1(10);
        $this->assertEquals(10, $obj->getTextColorActivite1());
    }

    /**
     * Tests setTextColorActivite10()
     *
     * @return void
     */
    public function testSetTextColorActivite10(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite10(10);
        $this->assertEquals(10, $obj->getTextColorActivite10());
    }

    /**
     * Tests setTextColorActivite11()
     *
     * @return void
     */
    public function testSetTextColorActivite11(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite11(10);
        $this->assertEquals(10, $obj->getTextColorActivite11());
    }

    /**
     * Tests setTextColorActivite2()
     *
     * @return void
     */
    public function testSetTextColorActivite2(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite2(10);
        $this->assertEquals(10, $obj->getTextColorActivite2());
    }

    /**
     * Tests setTextColorActivite3()
     *
     * @return void
     */
    public function testSetTextColorActivite3(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite3(10);
        $this->assertEquals(10, $obj->getTextColorActivite3());
    }

    /**
     * Tests setTextColorActivite4()
     *
     * @return void
     */
    public function testSetTextColorActivite4(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite4(10);
        $this->assertEquals(10, $obj->getTextColorActivite4());
    }

    /**
     * Tests setTextColorActivite5()
     *
     * @return void
     */
    public function testSetTextColorActivite5(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite5(10);
        $this->assertEquals(10, $obj->getTextColorActivite5());
    }

    /**
     * Tests setTextColorActivite6()
     *
     * @return void
     */
    public function testSetTextColorActivite6(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite6(10);
        $this->assertEquals(10, $obj->getTextColorActivite6());
    }

    /**
     * Tests setTextColorActivite7()
     *
     * @return void
     */
    public function testSetTextColorActivite7(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite7(10);
        $this->assertEquals(10, $obj->getTextColorActivite7());
    }

    /**
     * Tests setTextColorActivite8()
     *
     * @return void
     */
    public function testSetTextColorActivite8(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite8(10);
        $this->assertEquals(10, $obj->getTextColorActivite8());
    }

    /**
     * Tests setTextColorActivite9()
     *
     * @return void
     */
    public function testSetTextColorActivite9(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorActivite9(10);
        $this->assertEquals(10, $obj->getTextColorActivite9());
    }

    /**
     * Tests setTextColorDimJFeries()
     *
     * @return void
     */
    public function testSetTextColorDimJFeries(): void {

        $obj = new AgendaConstantes();

        $obj->setTextColorDimJFeries(10);
        $this->assertEquals(10, $obj->getTextColorDimJFeries());
    }

    /**
     * Tests setUseNewGpeParam()
     *
     * @return void
     */
    public function testSetUseNewGpeParam(): void {

        $obj = new AgendaConstantes();

        $obj->setUseNewGpeParam(true);
        $this->assertEquals(true, $obj->getUseNewGpeParam());
    }

    /**
     * Tests setWeekMode()
     *
     * @return void
     */
    public function testSetWeekMode(): void {

        $obj = new AgendaConstantes();

        $obj->setWeekMode("weekMode");
        $this->assertEquals("weekMode", $obj->getWeekMode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaConstantes();

        $this->assertNull($obj->getArchivagePermanent());
        $this->assertNull($obj->getCodeActivite7());
        $this->assertNull($obj->getCodeActivite8());
        $this->assertNull($obj->getCodeActivite9());
        $this->assertNull($obj->getCouleurActivite1());
        $this->assertNull($obj->getCouleurActivite10());
        $this->assertNull($obj->getCouleurActivite11());
        $this->assertNull($obj->getCouleurActivite2());
        $this->assertNull($obj->getCouleurActivite3());
        $this->assertNull($obj->getCouleurActivite4());
        $this->assertNull($obj->getCouleurActivite5());
        $this->assertNull($obj->getCouleurActivite6());
        $this->assertNull($obj->getCouleurActivite7());
        $this->assertNull($obj->getCouleurActivite8());
        $this->assertNull($obj->getCouleurActivite9());
        $this->assertNull($obj->getCouleurCalendrier());
        $this->assertNull($obj->getCouleurDimJFeries());
        $this->assertNull($obj->getDisabledActivityLabelOnFirstRow());
        $this->assertNull($obj->getDossierFactPme());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelleActivite7());
        $this->assertNull($obj->getLibelleActivite8());
        $this->assertNull($obj->getLibelleActivite9());
        $this->assertNull($obj->getMultiDossiers());
        $this->assertNull($obj->getTextColorActivite1());
        $this->assertNull($obj->getTextColorActivite10());
        $this->assertNull($obj->getTextColorActivite11());
        $this->assertNull($obj->getTextColorActivite2());
        $this->assertNull($obj->getTextColorActivite3());
        $this->assertNull($obj->getTextColorActivite4());
        $this->assertNull($obj->getTextColorActivite5());
        $this->assertNull($obj->getTextColorActivite6());
        $this->assertNull($obj->getTextColorActivite7());
        $this->assertNull($obj->getTextColorActivite8());
        $this->assertNull($obj->getTextColorActivite9());
        $this->assertNull($obj->getTextColorDimJFeries());
        $this->assertNull($obj->getUseNewGpeParam());
        $this->assertNull($obj->getWeekMode());
    }
}
