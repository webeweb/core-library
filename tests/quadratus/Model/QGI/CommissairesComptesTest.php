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
use WBW\Library\Quadratus\Model\QGI\CommissairesComptes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Commissaires comptes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CommissairesComptesTest extends AbstractTestCase {

    /**
     * Tests setCodeCac()
     *
     * @return void
     */
    public function testSetCodeCac(): void {

        $obj = new CommissairesComptes();

        $obj->setCodeCac("codeCac");
        $this->assertEquals("codeCac", $obj->getCodeCac());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CommissairesComptes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
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

        $obj = new CommissairesComptes();

        $obj->setDateNomination($dateNomination);
        $this->assertSame($dateNomination, $obj->getDateNomination());
    }

    /**
     * Tests setDureeMandat()
     *
     * @return void
     */
    public function testSetDureeMandat(): void {

        $obj = new CommissairesComptes();

        $obj->setDureeMandat(10);
        $this->assertEquals(10, $obj->getDureeMandat());
    }

    /**
     * Tests setObservations()
     *
     * @return void
     */
    public function testSetObservations(): void {

        $obj = new CommissairesComptes();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new CommissairesComptes();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests setTitulaire()
     *
     * @return void
     */
    public function testSetTitulaire(): void {

        $obj = new CommissairesComptes();

        $obj->setTitulaire(true);
        $this->assertEquals(true, $obj->getTitulaire());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CommissairesComptes();

        $this->assertNull($obj->getCodeCac());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDureeMandat());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getTitulaire());
    }
}
