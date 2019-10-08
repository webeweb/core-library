<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Alertes;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Alertes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class AlertesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Alertes();

        $this->assertNull($obj->getCloturee());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setCloturee() method.
     *
     * @return void
     */
    public function testSetCloturee() {

        $obj = new Alertes();

        $obj->setCloturee(true);
        $this->assertEquals(true, $obj->getCloturee());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new Alertes();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        $obj = new Alertes();

        $obj->setDateDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new Alertes();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }
}
