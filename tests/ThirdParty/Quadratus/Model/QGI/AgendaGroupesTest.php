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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaGroupes;

/**
 * Agenda groupes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaGroupesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaGroupes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getLibelle());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new AgendaGroupes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeColl() method.
     *
     * @return void
     */
    public function testSetCodeColl() {

        $obj = new AgendaGroupes();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new AgendaGroupes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }
}
