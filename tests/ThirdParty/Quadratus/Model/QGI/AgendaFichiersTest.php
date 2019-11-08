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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaFichiers;

/**
 * Agenda fichiers test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaFichiersTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaFichiers();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateAjout());
        $this->assertNull($obj->getNomFichier());
        $this->assertNull($obj->getOrigineFichier());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getTitre());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AgendaFichiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDateAjout() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAjout() {

        // Set a Date/time mock.
        $dateAjout = new DateTime("2018-09-10");

        $obj = new AgendaFichiers();

        $obj->setDateAjout($dateAjout);
        $this->assertSame($dateAjout, $obj->getDateAjout());
    }

    /**
     * Tests the setNomFichier() method.
     *
     * @return void
     */
    public function testSetNomFichier() {

        $obj = new AgendaFichiers();

        $obj->setNomFichier("nomFichier");
        $this->assertEquals("nomFichier", $obj->getNomFichier());
    }

    /**
     * Tests the setOrigineFichier() method.
     *
     * @return void
     */
    public function testSetOrigineFichier() {

        $obj = new AgendaFichiers();

        $obj->setOrigineFichier("origineFichier");
        $this->assertEquals("origineFichier", $obj->getOrigineFichier());
    }

    /**
     * Tests the setRefGuid() method.
     *
     * @return void
     */
    public function testSetRefGuid() {

        $obj = new AgendaFichiers();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new AgendaFichiers();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }
}
