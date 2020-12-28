<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AvenantsContrats;

/**
 * Avenants contrats test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContratsTest extends AbstractTestCase {

    /**
     * Tests the setChrono() method.
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new AvenantsContrats();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AvenantsContrats();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateAvenant() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAvenant(): void {

        // Set a Date/time mock.
        $dateAvenant = new DateTime("2018-09-10");

        $obj = new AvenantsContrats();

        $obj->setDateAvenant($dateAvenant);
        $this->assertSame($dateAvenant, $obj->getDateAvenant());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AvenantsContrats();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setNumAvenantSaisi() method.
     *
     * @return void
     */
    public function testSetNumAvenantSaisi(): void {

        $obj = new AvenantsContrats();

        $obj->setNumAvenantSaisi(10);
        $this->assertEquals(10, $obj->getNumAvenantSaisi());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new AvenantsContrats();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setObservation() method.
     *
     * @return void
     */
    public function testSetObservation(): void {

        $obj = new AvenantsContrats();

        $obj->setObservation("observation");
        $this->assertEquals("observation", $obj->getObservation());
    }

    /**
     * Tests the setPeriodeAvenant() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeAvenant(): void {

        // Set a Date/time mock.
        $periodeAvenant = new DateTime("2018-09-10");

        $obj = new AvenantsContrats();

        $obj->setPeriodeAvenant($periodeAvenant);
        $this->assertSame($periodeAvenant, $obj->getPeriodeAvenant());
    }

    /**
     * Tests the setSignatureEmploye() method.
     *
     * @return void
     */
    public function testSetSignatureEmploye(): void {

        $obj = new AvenantsContrats();

        $obj->setSignatureEmploye(true);
        $this->assertEquals(true, $obj->getSignatureEmploye());
    }

    /**
     * Tests the setTypeAvenant() method.
     *
     * @return void
     */
    public function testSetTypeAvenant(): void {

        $obj = new AvenantsContrats();

        $obj->setTypeAvenant("typeAvenant");
        $this->assertEquals("typeAvenant", $obj->getTypeAvenant());
    }

    /**
     * Tests the setTypeDocument() method.
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new AvenantsContrats();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AvenantsContrats();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateAvenant());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumAvenantSaisi());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getObservation());
        $this->assertNull($obj->getPeriodeAvenant());
        $this->assertNull($obj->getSignatureEmploye());
        $this->assertNull($obj->getTypeAvenant());
        $this->assertNull($obj->getTypeDocument());
    }
}
