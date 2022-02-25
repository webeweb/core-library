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

use WBW\Library\Quadratus\Model\QGI\AgendaGroupes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda groupes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaGroupesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new AgendaGroupes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeColl()
     *
     * @return void
     */
    public function testSetCodeColl(): void {

        $obj = new AgendaGroupes();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new AgendaGroupes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaGroupes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getLibelle());
    }
}
