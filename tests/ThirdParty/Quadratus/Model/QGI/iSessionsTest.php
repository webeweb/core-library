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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iSessions;

/**
 * i sessions model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iSessionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iSessions();

        $this->assertNull($obj->getAdresseIP());
        $this->assertNull($obj->getAppli());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateActive());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getID());
    }

    /**
     * Tests the setAdresseIP() method.
     *
     * @return void
     */
    public function testSetAdresseIP() {

        $obj = new iSessions();

        $obj->setAdresseIP("adresseIP");
        $this->assertEquals("adresseIP", $obj->getAdresseIP());
    }

    /**
     * Tests the setAppli() method.
     *
     * @return void
     */
    public function testSetAppli() {

        $obj = new iSessions();

        $obj->setAppli("appli");
        $this->assertEquals("appli", $obj->getAppli());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new iSessions();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setDateActive() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateActive() {

        $obj = new iSessions();

        $obj->setDateActive(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateActive());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded() {

        $obj = new iSessions();

        $obj->setDateAdded(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdded());
    }

    /**
     * Tests the setDossier() method.
     *
     * @return void
     */
    public function testSetDossier() {

        $obj = new iSessions();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new iSessions();

        $obj->setID(10);
        $this->assertEquals(10, $obj->getID());
    }
}
