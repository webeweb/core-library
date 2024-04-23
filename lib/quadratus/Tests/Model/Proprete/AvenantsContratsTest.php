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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\AvenantsContrats;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Avenants contrats test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AvenantsContratsTest extends AbstractTestCase {

    /**
     * Test setChrono()
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new AvenantsContrats();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AvenantsContrats();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setDateAvenant()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAvenant(): void {

        // Set a Date/time mock.
        $dateAvenant = new DateTime("2018-09-10");

        $obj = new AvenantsContrats();

        $obj->setDateAvenant($dateAvenant);
        $this->assertSame($dateAvenant, $obj->getDateAvenant());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AvenantsContrats();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setNumAvenantSaisi()
     *
     * @return void
     */
    public function testSetNumAvenantSaisi(): void {

        $obj = new AvenantsContrats();

        $obj->setNumAvenantSaisi(10);
        $this->assertEquals(10, $obj->getNumAvenantSaisi());
    }

    /**
     * Test setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new AvenantsContrats();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Test setObservation()
     *
     * @return void
     */
    public function testSetObservation(): void {

        $obj = new AvenantsContrats();

        $obj->setObservation("observation");
        $this->assertEquals("observation", $obj->getObservation());
    }

    /**
     * Test setPeriodeAvenant()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeAvenant(): void {

        // Set a Date/time mock.
        $periodeAvenant = new DateTime("2018-09-10");

        $obj = new AvenantsContrats();

        $obj->setPeriodeAvenant($periodeAvenant);
        $this->assertSame($periodeAvenant, $obj->getPeriodeAvenant());
    }

    /**
     * Test setSignatureEmploye()
     *
     * @return void
     */
    public function testSetSignatureEmploye(): void {

        $obj = new AvenantsContrats();

        $obj->setSignatureEmploye(true);
        $this->assertTrue($obj->getSignatureEmploye());
    }

    /**
     * Test setTypeAvenant()
     *
     * @return void
     */
    public function testSetTypeAvenant(): void {

        $obj = new AvenantsContrats();

        $obj->setTypeAvenant("typeAvenant");
        $this->assertEquals("typeAvenant", $obj->getTypeAvenant());
    }

    /**
     * Test setTypeDocument()
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new AvenantsContrats();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Test __construct()
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
