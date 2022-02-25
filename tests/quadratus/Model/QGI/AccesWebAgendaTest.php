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

use WBW\Library\Quadratus\Model\QGI\AccesWebAgenda;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Acces web agenda test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AccesWebAgendaTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new AccesWebAgenda();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AccesWebAgenda();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setDroitModif()
     *
     * @return void
     */
    public function testSetDroitModif(): void {

        $obj = new AccesWebAgenda();

        $obj->setDroitModif(true);
        $this->assertEquals(true, $obj->getDroitModif());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AccesWebAgenda();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccesWebAgenda();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDroitModif());
        $this->assertNull($obj->getType());
    }
}
