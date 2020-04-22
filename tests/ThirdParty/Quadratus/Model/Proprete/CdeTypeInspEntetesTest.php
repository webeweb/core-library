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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeTypeInspEntetes;

/**
 * Cde type insp entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetesTest extends AbstractTestCase {

    /**
     * Tests the setCodeInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeInspecteur() {

        $obj = new CdeTypeInspEntetes();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests the setDtValiditeDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeDebut() {

        // Set a Date/time mock.
        $dtValiditeDebut = new DateTime("2018-09-10");

        $obj = new CdeTypeInspEntetes();

        $obj->setDtValiditeDebut($dtValiditeDebut);
        $this->assertSame($dtValiditeDebut, $obj->getDtValiditeDebut());
    }

    /**
     * Tests the setDtValiditeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFin() {

        // Set a Date/time mock.
        $dtValiditeFin = new DateTime("2018-09-10");

        $obj = new CdeTypeInspEntetes();

        $obj->setDtValiditeFin($dtValiditeFin);
        $this->assertSame($dtValiditeFin, $obj->getDtValiditeFin());
    }

    /**
     * Tests the setMontantBudget() method.
     *
     * @return void
     */
    public function testSetMontantBudget() {

        $obj = new CdeTypeInspEntetes();

        $obj->setMontantBudget(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBudget());
    }

    /**
     * Tests the setMontantHtCde() method.
     *
     * @return void
     */
    public function testSetMontantHtCde() {

        $obj = new CdeTypeInspEntetes();

        $obj->setMontantHtCde(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtCde());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CdeTypeInspEntetes();

        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getDtValiditeDebut());
        $this->assertNull($obj->getDtValiditeFin());
        $this->assertNull($obj->getMontantBudget());
        $this->assertNull($obj->getMontantHtCde());
    }
}
