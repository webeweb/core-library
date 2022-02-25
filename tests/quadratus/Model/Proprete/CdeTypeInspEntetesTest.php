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
use WBW\Library\Quadratus\Model\Proprete\CdeTypeInspEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cde type insp entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CdeTypeInspEntetesTest extends AbstractTestCase {

    /**
     * Tests setCodeInspecteur()
     *
     * @return void
     */
    public function testSetCodeInspecteur(): void {

        $obj = new CdeTypeInspEntetes();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests setDtValiditeDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeDebut(): void {

        // Set a Date/time mock.
        $dtValiditeDebut = new DateTime("2018-09-10");

        $obj = new CdeTypeInspEntetes();

        $obj->setDtValiditeDebut($dtValiditeDebut);
        $this->assertSame($dtValiditeDebut, $obj->getDtValiditeDebut());
    }

    /**
     * Tests setDtValiditeFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFin(): void {

        // Set a Date/time mock.
        $dtValiditeFin = new DateTime("2018-09-10");

        $obj = new CdeTypeInspEntetes();

        $obj->setDtValiditeFin($dtValiditeFin);
        $this->assertSame($dtValiditeFin, $obj->getDtValiditeFin());
    }

    /**
     * Tests setMontantBudget()
     *
     * @return void
     */
    public function testSetMontantBudget(): void {

        $obj = new CdeTypeInspEntetes();

        $obj->setMontantBudget(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBudget());
    }

    /**
     * Tests setMontantHtCde()
     *
     * @return void
     */
    public function testSetMontantHtCde(): void {

        $obj = new CdeTypeInspEntetes();

        $obj->setMontantHtCde(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtCde());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CdeTypeInspEntetes();

        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getDtValiditeDebut());
        $this->assertNull($obj->getDtValiditeFin());
        $this->assertNull($obj->getMontantBudget());
        $this->assertNull($obj->getMontantHtCde());
    }
}
