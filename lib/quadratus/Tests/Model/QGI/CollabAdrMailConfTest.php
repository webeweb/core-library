<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\CollabAdrMailConf;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Collab adr mail conf test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CollabAdrMailConfTest extends AbstractTestCase {

    /**
     * Test setAdresseEmail()
     *
     * @return void
     */
    public function testSetAdresseEmail(): void {

        $obj = new CollabAdrMailConf();

        $obj->setAdresseEmail("adresseEmail");
        $this->assertEquals("adresseEmail", $obj->getAdresseEmail());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new CollabAdrMailConf();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new CollabAdrMailConf();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CollabAdrMailConf();

        $this->assertNull($obj->getAdresseEmail());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getIntitule());
    }
}
