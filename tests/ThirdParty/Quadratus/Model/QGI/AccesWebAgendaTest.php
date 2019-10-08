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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AccesWebAgenda;

/**
 * Acces web agenda model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AccesWebAgendaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AccesWebAgenda();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDroitModif());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new AccesWebAgenda();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AccesWebAgenda();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setDroitModif() method.
     *
     * @return void
     */
    public function testSetDroitModif() {

        $obj = new AccesWebAgenda();

        $obj->setDroitModif(true);
        $this->assertEquals(true, $obj->getDroitModif());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new AccesWebAgenda();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
