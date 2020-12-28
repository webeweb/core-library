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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelAvanceFavoris;

/**
 * Clients sel avance favoris test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelAvanceFavorisTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeListe() method.
     *
     * @return void
     */
    public function testSetCodeListe(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setCodeListe("codeListe");
        $this->assertEquals("codeListe", $obj->getCodeListe());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setOrdre() method.
     *
     * @return void
     */
    public function testSetOrdre(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Tests the setOrigine() method.
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsSelAvanceFavoris();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeListe());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getOrigine());
    }
}
