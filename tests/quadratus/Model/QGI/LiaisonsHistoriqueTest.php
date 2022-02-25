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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\LiaisonsHistorique;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons historique test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsHistoriqueTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new LiaisonsHistorique();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setDateLiaison()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLiaison(): void {

        // Set a Date/time mock.
        $dateLiaison = new DateTime("2018-09-10");

        $obj = new LiaisonsHistorique();

        $obj->setDateLiaison($dateLiaison);
        $this->assertSame($dateLiaison, $obj->getDateLiaison());
    }

    /**
     * Tests setDateRetourPrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRetourPrevue(): void {

        // Set a Date/time mock.
        $dateRetourPrevue = new DateTime("2018-09-10");

        $obj = new LiaisonsHistorique();

        $obj->setDateRetourPrevue($dateRetourPrevue);
        $this->assertSame($dateRetourPrevue, $obj->getDateRetourPrevue());
    }

    /**
     * Tests setDestinataire()
     *
     * @return void
     */
    public function testSetDestinataire(): void {

        $obj = new LiaisonsHistorique();

        $obj->setDestinataire("destinataire");
        $this->assertEquals("destinataire", $obj->getDestinataire());
    }

    /**
     * Tests setModules()
     *
     * @return void
     */
    public function testSetModules(): void {

        $obj = new LiaisonsHistorique();

        $obj->setModules("modules");
        $this->assertEquals("modules", $obj->getModules());
    }

    /**
     * Tests setModulesBloques()
     *
     * @return void
     */
    public function testSetModulesBloques(): void {

        $obj = new LiaisonsHistorique();

        $obj->setModulesBloques("modulesBloques");
        $this->assertEquals("modulesBloques", $obj->getModulesBloques());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new LiaisonsHistorique();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setNumeroDossier()
     *
     * @return void
     */
    public function testSetNumeroDossier(): void {

        $obj = new LiaisonsHistorique();

        $obj->setNumeroDossier("numeroDossier");
        $this->assertEquals("numeroDossier", $obj->getNumeroDossier());
    }

    /**
     * Tests setSens()
     *
     * @return void
     */
    public function testSetSens(): void {

        $obj = new LiaisonsHistorique();

        $obj->setSens("sens");
        $this->assertEquals("sens", $obj->getSens());
    }

    /**
     * Tests setTypeLiaison()
     *
     * @return void
     */
    public function testSetTypeLiaison(): void {

        $obj = new LiaisonsHistorique();

        $obj->setTypeLiaison("typeLiaison");
        $this->assertEquals("typeLiaison", $obj->getTypeLiaison());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LiaisonsHistorique();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateLiaison());
        $this->assertNull($obj->getDateRetourPrevue());
        $this->assertNull($obj->getDestinataire());
        $this->assertNull($obj->getModules());
        $this->assertNull($obj->getModulesBloques());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroDossier());
        $this->assertNull($obj->getSens());
        $this->assertNull($obj->getTypeLiaison());
    }
}
