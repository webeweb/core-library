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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CollabAdrMailConf;

/**
 * Collab adr mail conf model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CollabAdrMailConfTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CollabAdrMailConf();

        $this->assertNull($obj->getAdresseEmail());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getIntitule());
    }

    /**
     * Tests the setAdresseEmail() method.
     *
     * @return void
     */
    public function testSetAdresseEmail() {

        $obj = new CollabAdrMailConf();

        $obj->setAdresseEmail("adresseEmail");
        $this->assertEquals("adresseEmail", $obj->getAdresseEmail());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new CollabAdrMailConf();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new CollabAdrMailConf();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }
}
