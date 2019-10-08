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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Statistiques;

/**
 * Statistiques model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class StatistiquesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Statistiques();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRubrique());
        $this->assertNull($obj->getInfoCellule());
        $this->assertNull($obj->getMillesime());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new Statistiques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRubrique() method.
     *
     * @return void
     */
    public function testSetCodeRubrique() {

        $obj = new Statistiques();

        $obj->setCodeRubrique("codeRubrique");
        $this->assertEquals("codeRubrique", $obj->getCodeRubrique());
    }

    /**
     * Tests the setInfoCellule() method.
     *
     * @return void
     */
    public function testSetInfoCellule() {

        $obj = new Statistiques();

        $obj->setInfoCellule(10.092018);
        $this->assertEquals(10.092018, $obj->getInfoCellule());
    }

    /**
     * Tests the setMillesime() method.
     *
     * @return void
     */
    public function testSetMillesime() {

        $obj = new Statistiques();

        $obj->setMillesime("millesime");
        $this->assertEquals("millesime", $obj->getMillesime());
    }
}
