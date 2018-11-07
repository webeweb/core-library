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

use WBW\Library\Core\Quadratus\Model\QGI\OptionsEnvoiMails;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Options envoi mails model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class OptionsEnvoiMailsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new OptionsEnvoiMails();

        $this->assertNull($obj->getAvecEntete());
        $this->assertNull($obj->getAvecPied());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeModule());
    }

    /**
     * Tests the setAvecEntete() method.
     *
     * @return void
     */
    public function testSetAvecEntete() {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecEntete(true);
        $this->assertEquals(true, $obj->getAvecEntete());
    }

    /**
     * Tests the setAvecPied() method.
     *
     * @return void
     */
    public function testSetAvecPied() {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecPied(true);
        $this->assertEquals(true, $obj->getAvecPied());
    }

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setCodeModule() method.
     *
     * @return void
     */
    public function testSetCodeModule() {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeModule("codeModule");
        $this->assertEquals("codeModule", $obj->getCodeModule());
    }

}
