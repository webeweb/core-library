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

use WBW\Library\Quadratus\Model\QGI\SousRepertoiresAppels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous repertoires appels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class SousRepertoiresAppelsTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNiveauLigne()
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setNiveauLigne(10);
        $this->assertEquals(10, $obj->getNiveauLigne());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setProprietes()
     *
     * @return void
     */
    public function testSetProprietes(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setProprietes("proprietes");
        $this->assertEquals("proprietes", $obj->getProprietes());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousRepertoiresAppels();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getProprietes());
        $this->assertNull($obj->getUniqId());
    }
}
