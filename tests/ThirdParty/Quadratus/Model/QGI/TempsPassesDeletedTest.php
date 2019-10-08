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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TempsPassesDeleted;

/**
 * Temps passes deleted model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TempsPassesDeletedTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TempsPassesDeleted();

        $this->assertNull($obj->getContexte());
        $this->assertNull($obj->getDateSuppression());
        $this->assertNull($obj->getGUniqID());
        $this->assertNull($obj->getUser());
    }

    /**
     * Tests the setContexte() method.
     *
     * @return void
     */
    public function testSetContexte() {

        $obj = new TempsPassesDeleted();

        $obj->setContexte("contexte");
        $this->assertEquals("contexte", $obj->getContexte());
    }

    /**
     * Tests the setDateSuppression() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSuppression() {

        $obj = new TempsPassesDeleted();

        $obj->setDateSuppression(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSuppression());
    }

    /**
     * Tests the setGUniqID() method.
     *
     * @return void
     */
    public function testSetGUniqID() {

        $obj = new TempsPassesDeleted();

        $obj->setGUniqID("gUniqID");
        $this->assertEquals("gUniqID", $obj->getGUniqID());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        $obj = new TempsPassesDeleted();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }
}
