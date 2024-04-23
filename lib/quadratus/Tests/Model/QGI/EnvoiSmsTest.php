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

use WBW\Library\Quadratus\Model\QGI\EnvoiSms;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Envoi sms test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class EnvoiSmsTest extends AbstractTestCase {

    /**
     * Test setAccesCollaborateur()
     *
     * @return void
     */
    public function testSetAccesCollaborateur(): void {

        $obj = new EnvoiSms();

        $obj->setAccesCollaborateur(true);
        $this->assertTrue($obj->getAccesCollaborateur());
    }

    /**
     * Test setAccesIntervenants()
     *
     * @return void
     */
    public function testSetAccesIntervenants(): void {

        $obj = new EnvoiSms();

        $obj->setAccesIntervenants(true);
        $this->assertTrue($obj->getAccesIntervenants());
    }

    /**
     * Test setAccesTotal()
     *
     * @return void
     */
    public function testSetAccesTotal(): void {

        $obj = new EnvoiSms();

        $obj->setAccesTotal(true);
        $this->assertTrue($obj->getAccesTotal());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EnvoiSms();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setNbSms()
     *
     * @return void
     */
    public function testSetNbSms(): void {

        $obj = new EnvoiSms();

        $obj->setNbSms(10);
        $this->assertEquals(10, $obj->getNbSms());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EnvoiSms();

        $this->assertNull($obj->getAccesCollaborateur());
        $this->assertNull($obj->getAccesIntervenants());
        $this->assertNull($obj->getAccesTotal());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNbSms());
    }
}
