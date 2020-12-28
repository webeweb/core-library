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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EmployesModules;

/**
 * Employes modules test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesModulesTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new EmployesModules();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDebutModulation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutModulation(): void {

        // Set a Date/time mock.
        $debutModulation = new DateTime("2018-09-10");

        $obj = new EmployesModules();

        $obj->setDebutModulation($debutModulation);
        $this->assertSame($debutModulation, $obj->getDebutModulation());
    }

    /**
     * Tests the setEcartCumuleInit() method.
     *
     * @return void
     */
    public function testSetEcartCumuleInit(): void {

        $obj = new EmployesModules();

        $obj->setEcartCumuleInit(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumuleInit());
    }

    /**
     * Tests the setFinModulation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinModulation(): void {

        // Set a Date/time mock.
        $finModulation = new DateTime("2018-09-10");

        $obj = new EmployesModules();

        $obj->setFinModulation($finModulation);
        $this->assertSame($finModulation, $obj->getFinModulation());
    }

    /**
     * Tests the setPeriodeEcartCumule() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcartCumule(): void {

        // Set a Date/time mock.
        $periodeEcartCumule = new DateTime("2018-09-10");

        $obj = new EmployesModules();

        $obj->setPeriodeEcartCumule($periodeEcartCumule);
        $this->assertSame($periodeEcartCumule, $obj->getPeriodeEcartCumule());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmployesModules();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDebutModulation());
        $this->assertNull($obj->getEcartCumuleInit());
        $this->assertNull($obj->getFinModulation());
        $this->assertNull($obj->getPeriodeEcartCumule());
    }
}
