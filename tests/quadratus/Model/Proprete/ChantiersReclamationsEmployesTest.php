<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\ChantiersReclamationsEmployes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers reclamations employes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersReclamationsEmployesTest extends AbstractTestCase {

    /**
     * Tests setAlerte()
     *
     * @return void
     */
    public function testSetAlerte(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setAlerte(true);
        $this->assertEquals(true, $obj->getAlerte());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setDateAlertePaie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAlertePaie(): void {

        // Set a Date/time mock.
        $dateAlertePaie = new DateTime("2018-09-10");

        $obj = new ChantiersReclamationsEmployes();

        $obj->setDateAlertePaie($dateAlertePaie);
        $this->assertSame($dateAlertePaie, $obj->getDateAlertePaie());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests setNumeroReclam()
     *
     * @return void
     */
    public function testSetNumeroReclam(): void {

        $obj = new ChantiersReclamationsEmployes();

        $obj->setNumeroReclam(10);
        $this->assertEquals(10, $obj->getNumeroReclam());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersReclamationsEmployes();

        $this->assertNull($obj->getAlerte());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateAlertePaie());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNumeroReclam());
    }
}
