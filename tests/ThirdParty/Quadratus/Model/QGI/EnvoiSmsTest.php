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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\EnvoiSms;

/**
 * Envoi sms test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class EnvoiSmsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EnvoiSms();

        $this->assertNull($obj->getAccesCollaborateur());
        $this->assertNull($obj->getAccesIntervenants());
        $this->assertNull($obj->getAccesTotal());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNbSms());
    }

    /**
     * Tests the setAccesCollaborateur() method.
     *
     * @return void
     */
    public function testSetAccesCollaborateur() {

        $obj = new EnvoiSms();

        $obj->setAccesCollaborateur(true);
        $this->assertEquals(true, $obj->getAccesCollaborateur());
    }

    /**
     * Tests the setAccesIntervenants() method.
     *
     * @return void
     */
    public function testSetAccesIntervenants() {

        $obj = new EnvoiSms();

        $obj->setAccesIntervenants(true);
        $this->assertEquals(true, $obj->getAccesIntervenants());
    }

    /**
     * Tests the setAccesTotal() method.
     *
     * @return void
     */
    public function testSetAccesTotal() {

        $obj = new EnvoiSms();

        $obj->setAccesTotal(true);
        $this->assertEquals(true, $obj->getAccesTotal());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new EnvoiSms();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setNbSms() method.
     *
     * @return void
     */
    public function testSetNbSms() {

        $obj = new EnvoiSms();

        $obj->setNbSms(10);
        $this->assertEquals(10, $obj->getNbSms());
    }
}
