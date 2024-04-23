<?php

declare(strict_types = 1);

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
     * Test setAvecEntete()
     *
     * @return void
     */
    public function testSetAvecEntete(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecEntete(true);
        $this->assertTrue($obj->getAvecEntete());
    }

    /**
     * Test setAvecPied()
     *
     * @return void
     */
    public function testSetAvecPied(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setAvecPied(true);
        $this->assertTrue($obj->getAvecPied());
    }

    /**
     * Test setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Test setCodeModule()
     *
     * @return void
     */
    public function testSetCodeModule(): void {

        $obj = new OptionsEnvoiMails();

        $obj->setCodeModule("codeModule");
        $this->assertEquals("codeModule", $obj->getCodeModule());
    }

    /**
     * Test __construct()
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
