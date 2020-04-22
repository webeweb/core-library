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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CommissairesComptes;

/**
 * Commissaires comptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CommissairesComptesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCac() method.
     *
     * @return void
     */
    public function testSetCodeCac() {

        $obj = new CommissairesComptes();

        $obj->setCodeCac("codeCac");
        $this->assertEquals("codeCac", $obj->getCodeCac());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CommissairesComptes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDateNomination() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNomination() {

        // Set a Date/time mock.
        $dateNomination = new DateTime("2018-09-10");

        $obj = new CommissairesComptes();

        $obj->setDateNomination($dateNomination);
        $this->assertSame($dateNomination, $obj->getDateNomination());
    }

    /**
     * Tests the setDureeMandat() method.
     *
     * @return void
     */
    public function testSetDureeMandat() {

        $obj = new CommissairesComptes();

        $obj->setDureeMandat(10);
        $this->assertEquals(10, $obj->getDureeMandat());
    }

    /**
     * Tests the setObservations() method.
     *
     * @return void
     */
    public function testSetObservations() {

        $obj = new CommissairesComptes();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new CommissairesComptes();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests the setTitulaire() method.
     *
     * @return void
     */
    public function testSetTitulaire() {

        $obj = new CommissairesComptes();

        $obj->setTitulaire(true);
        $this->assertEquals(true, $obj->getTitulaire());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
