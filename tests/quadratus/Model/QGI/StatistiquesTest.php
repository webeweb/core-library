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

use WBW\Library\Quadratus\Model\QGI\Statistiques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Statistiques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class StatistiquesTest extends AbstractTestCase {

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Statistiques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeRubrique()
     *
     * @return void
     */
    public function testSetCodeRubrique(): void {

        $obj = new Statistiques();

        $obj->setCodeRubrique("codeRubrique");
        $this->assertEquals("codeRubrique", $obj->getCodeRubrique());
    }

    /**
     * Tests setInfoCellule()
     *
     * @return void
     */
    public function testSetInfoCellule(): void {

        $obj = new Statistiques();

        $obj->setInfoCellule(10.092018);
        $this->assertEquals(10.092018, $obj->getInfoCellule());
    }

    /**
     * Tests setMillesime()
     *
     * @return void
     */
    public function testSetMillesime(): void {

        $obj = new Statistiques();

        $obj->setMillesime("millesime");
        $this->assertEquals("millesime", $obj->getMillesime());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Statistiques();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRubrique());
        $this->assertNull($obj->getInfoCellule());
        $this->assertNull($obj->getMillesime());
    }
}
