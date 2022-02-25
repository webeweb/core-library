<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\Documents;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Documents test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DocumentsTest extends AbstractTestCase {

    /**
     * Tests setChrono()
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new Documents();

        $obj->setChrono(10);
        $this->assertEquals(10, $obj->getChrono());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Documents();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new Documents();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setDateHeureSys()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSys(): void {

        // Set a Date/time mock.
        $dateHeureSys = new DateTime("2018-09-10");

        $obj = new Documents();

        $obj->setDateHeureSys($dateHeureSys);
        $this->assertSame($dateHeureSys, $obj->getDateHeureSys());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Documents();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Documents();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Documents();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getDateHeureSys());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
    }
}
