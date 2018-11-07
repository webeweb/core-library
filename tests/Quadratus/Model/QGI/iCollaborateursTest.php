<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\iCollaborateurs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * i collaborateurs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class iCollaborateursTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iCollaborateurs();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassWord());
        $this->assertNull($obj->getValideA());
        $this->assertNull($obj->getValideDe());
    }

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
     * Tests the setPassWord() method.
     *
     * @return void
     */
    public function testSetPassWord() {

        $obj = new iCollaborateurs();

        $obj->setPassWord("passWord");
        $this->assertEquals("passWord", $obj->getPassWord());
    }

    /**
     * Tests the setValideA() method.
     *
     * @return void
     */
    public function testSetValideA() {

        $obj = new iCollaborateurs();

        $obj->setValideA(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getValideA());
    }

    /**
     * Tests the setValideDe() method.
     *
     * @return void
     */
    public function testSetValideDe() {

        $obj = new iCollaborateurs();

        $obj->setValideDe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getValideDe());
    }

}
