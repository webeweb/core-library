<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\OptionsEnvoiMails;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Options envoi mails test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class OptionsEnvoiMailsTest extends AbstractTestCase {

    /**
     * Tests setAvecEntete()
     *
     * @return void
     */
    public function testSetAvecEntete(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecEntete(true);
        $this->assertEquals(true, $obj->getAvecEntete());
    }

    /**
     * Tests setAvecPied()
     *
     * @return void
     */
    public function testSetAvecPied(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecPied(true);
        $this->assertEquals(true, $obj->getAvecPied());
    }

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setCodeModule()
     *
     * @return void
     */
    public function testSetCodeModule(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeModule("codeModule");
        $this->assertEquals("codeModule", $obj->getCodeModule());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new OptionsEnvoiMails();

        $this->assertNull($obj->getAvecEntete());
        $this->assertNull($obj->getAvecPied());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeModule());
    }
}
