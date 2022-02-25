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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Dirigeants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dirigeants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class DirigeantsTest extends AbstractTestCase {

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Dirigeants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeDirigeant()
     *
     * @return void
     */
    public function testSetCodeDirigeant(): void {

        $obj = new Dirigeants();

        $obj->setCodeDirigeant("codeDirigeant");
        $this->assertEquals("codeDirigeant", $obj->getCodeDirigeant());
    }

    /**
     * Tests setCodeFonction()
     *
     * @return void
     */
    public function testSetCodeFonction(): void {

        $obj = new Dirigeants();

        $obj->setCodeFonction("codeFonction");
        $this->assertEquals("codeFonction", $obj->getCodeFonction());
    }

    /**
     * Tests setDateNomination()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNomination(): void {

        // Set a Date/time mock.
        $dateNomination = new DateTime("2018-09-10");

        $obj = new Dirigeants();

        $obj->setDateNomination($dateNomination);
        $this->assertSame($dateNomination, $obj->getDateNomination());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Dirigeants();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Dirigeants();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Tests setObservations()
     *
     * @return void
     */
    public function testSetObservations(): void {

        $obj = new Dirigeants();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dirigeants();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDirigeant());
        $this->assertNull($obj->getCodeFonction());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getObservations());
    }
}
