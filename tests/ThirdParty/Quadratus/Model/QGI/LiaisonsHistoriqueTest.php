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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsHistorique;

/**
 * Liaisons historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsHistoriqueTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new LiaisonsHistorique();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setDateLiaison() method.
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
     * Tests the setDateRetourPrevue() method.
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
     * Tests the setDestinataire() method.
     *
     * @return void
     */
    public function testSetDestinataire(): void {

        $obj = new LiaisonsHistorique();

        $obj->setDestinataire("destinataire");
        $this->assertEquals("destinataire", $obj->getDestinataire());
    }

    /**
     * Tests the setModules() method.
     *
     * @return void
     */
    public function testSetModules(): void {

        $obj = new LiaisonsHistorique();

        $obj->setModules("modules");
        $this->assertEquals("modules", $obj->getModules());
    }

    /**
     * Tests the setModulesBloques() method.
     *
     * @return void
     */
    public function testSetModulesBloques(): void {

        $obj = new LiaisonsHistorique();

        $obj->setModulesBloques("modulesBloques");
        $this->assertEquals("modulesBloques", $obj->getModulesBloques());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new LiaisonsHistorique();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroDossier() method.
     *
     * @return void
     */
    public function testSetNumeroDossier(): void {

        $obj = new LiaisonsHistorique();

        $obj->setNumeroDossier("numeroDossier");
        $this->assertEquals("numeroDossier", $obj->getNumeroDossier());
    }

    /**
     * Tests the setSens() method.
     *
     * @return void
     */
    public function testSetSens(): void {

        $obj = new LiaisonsHistorique();

        $obj->setSens("sens");
        $this->assertEquals("sens", $obj->getSens());
    }

    /**
     * Tests the setTypeLiaison() method.
     *
     * @return void
     */
    public function testSetTypeLiaison(): void {

        $obj = new LiaisonsHistorique();

        $obj->setTypeLiaison("typeLiaison");
        $this->assertEquals("typeLiaison", $obj->getTypeLiaison());
    }

    /**
     * Tests the __construct() method.
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
