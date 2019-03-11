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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaFichiers;

/**
 * Agenda fichiers model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaFichiersTest extends AbstractFrameworkTestCase {

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
        $this->assertNull($obj->getRefGUID());
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

        $obj = new AgendaFichiers();

        $obj->setDateAjout(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAjout());
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
     * Tests the setRefGUID() method.
     *
     * @return void
     */
    public function testSetRefGUID() {

        $obj = new AgendaFichiers();

        $obj->setRefGUID("refGUID");
        $this->assertEquals("refGUID", $obj->getRefGUID());
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
