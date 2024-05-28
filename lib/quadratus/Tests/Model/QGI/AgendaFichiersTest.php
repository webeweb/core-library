<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\AgendaFichiers;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda fichiers test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaFichiersTest extends AbstractTestCase {

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AgendaFichiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setDateAjout()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAjout(): void {

        // Set a Date/time mock.
        $dateAjout = new DateTime("2018-09-10");

        $obj = new AgendaFichiers();

        $obj->setDateAjout($dateAjout);
        $this->assertSame($dateAjout, $obj->getDateAjout());
    }

    /**
     * Test setNomFichier()
     *
     * @return void
     */
    public function testSetNomFichier(): void {

        $obj = new AgendaFichiers();

        $obj->setNomFichier("nomFichier");
        $this->assertEquals("nomFichier", $obj->getNomFichier());
    }

    /**
     * Test setOrigineFichier()
     *
     * @return void
     */
    public function testSetOrigineFichier(): void {

        $obj = new AgendaFichiers();

        $obj->setOrigineFichier("origineFichier");
        $this->assertEquals("origineFichier", $obj->getOrigineFichier());
    }

    /**
     * Test setRefGuid()
     *
     * @return void
     */
    public function testSetRefGuid(): void {

        $obj = new AgendaFichiers();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new AgendaFichiers();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaFichiers();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateAjout());
        $this->assertNull($obj->getNomFichier());
        $this->assertNull($obj->getOrigineFichier());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getTitre());
    }
}
