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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\StatsPersoSuiviClientCols;

/**
 * Stats perso suivi client cols test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientColsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new StatsPersoSuiviClientCols();

        $this->assertNull($obj->getAnN());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getRegleAutres());
        $this->assertNull($obj->getRegleBarn());
        $this->assertNull($obj->getRegleBars());
        $this->assertNull($obj->getRegleBicrn());
        $this->assertNull($obj->getRegleBicrs());
        $this->assertNull($obj->getRegleBnc());
        $this->assertNull($obj->getRegleSci());
        $this->assertNull($obj->getRegleScm());
        $this->assertNull($obj->getRegleTous());
    }

    /**
     * Tests the setAnN() method.
     *
     * @return void
     */
    public function testSetAnN() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setAnN("anN");
        $this->assertEquals("anN", $obj->getAnN());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setRegleAutres() method.
     *
     * @return void
     */
    public function testSetRegleAutres() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleAutres("regleAutres");
        $this->assertEquals("regleAutres", $obj->getRegleAutres());
    }

    /**
     * Tests the setRegleBarn() method.
     *
     * @return void
     */
    public function testSetRegleBarn() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBarn("regleBarn");
        $this->assertEquals("regleBarn", $obj->getRegleBarn());
    }

    /**
     * Tests the setRegleBars() method.
     *
     * @return void
     */
    public function testSetRegleBars() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBars("regleBars");
        $this->assertEquals("regleBars", $obj->getRegleBars());
    }

    /**
     * Tests the setRegleBicrn() method.
     *
     * @return void
     */
    public function testSetRegleBicrn() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBicrn("regleBicrn");
        $this->assertEquals("regleBicrn", $obj->getRegleBicrn());
    }

    /**
     * Tests the setRegleBicrs() method.
     *
     * @return void
     */
    public function testSetRegleBicrs() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBicrs("regleBicrs");
        $this->assertEquals("regleBicrs", $obj->getRegleBicrs());
    }

    /**
     * Tests the setRegleBnc() method.
     *
     * @return void
     */
    public function testSetRegleBnc() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBnc("regleBnc");
        $this->assertEquals("regleBnc", $obj->getRegleBnc());
    }

    /**
     * Tests the setRegleSci() method.
     *
     * @return void
     */
    public function testSetRegleSci() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleSci("regleSci");
        $this->assertEquals("regleSci", $obj->getRegleSci());
    }

    /**
     * Tests the setRegleScm() method.
     *
     * @return void
     */
    public function testSetRegleScm() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleScm("regleScm");
        $this->assertEquals("regleScm", $obj->getRegleScm());
    }

    /**
     * Tests the setRegleTous() method.
     *
     * @return void
     */
    public function testSetRegleTous() {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleTous("regleTous");
        $this->assertEquals("regleTous", $obj->getRegleTous());
    }
}
