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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iCollaborateurs;

/**
 * i collaborateurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateursTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new iCollaborateurs();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setNumiKey() method.
     *
     * @return void
     */
    public function testSetNumiKey() {

        $obj = new iCollaborateurs();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new iCollaborateurs();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setValideA() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValideA() {

        // Set a Date/time mock.
        $valideA = new DateTime("2018-09-10");

        $obj = new iCollaborateurs();

        $obj->setValideA($valideA);
        $this->assertSame($valideA, $obj->getValideA());
    }

    /**
     * Tests the setValideDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValideDe() {

        // Set a Date/time mock.
        $valideDe = new DateTime("2018-09-10");

        $obj = new iCollaborateurs();

        $obj->setValideDe($valideDe);
        $this->assertSame($valideDe, $obj->getValideDe());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new iCollaborateurs();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getValideA());
        $this->assertNull($obj->getValideDe());
    }
}
