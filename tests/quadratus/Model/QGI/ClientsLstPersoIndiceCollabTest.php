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

use WBW\Library\Quadratus\Model\QGI\ClientsLstPersoIndiceCollab;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients lst perso indice collab test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsLstPersoIndiceCollabTest extends AbstractTestCase {

    /**
     * Tests setChapitre()
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setOrigine(10);
        $this->assertEquals(10, $obj->getOrigine());
    }

    /**
     * Tests setRefGuid()
     *
     * @return void
     */
    public function testSetRefGuid(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsLstPersoIndiceCollab();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getRefGuid());
    }
}
