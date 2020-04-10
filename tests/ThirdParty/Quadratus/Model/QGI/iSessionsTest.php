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
 * i sessions test.
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
    public function test__construct() {

        $obj = new iSessions();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getAppli());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateActive());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getId());
    }

    /**
     * Tests the setAdresseIp() method.
     *
     * @return void
     */
    public function testSetAdresseIp() {

        $obj = new iSessions();

        $obj->setAdresseIp("adresseIp");
        $this->assertEquals("adresseIp", $obj->getAdresseIp());
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

        // Set a Date/time mock.
        $dateActive = new DateTime("2018-09-10");

        $obj = new iSessions();

        $obj->setDateActive($dateActive);
        $this->assertSame($dateActive, $obj->getDateActive());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded() {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new iSessions();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
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
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new iSessions();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }
}
