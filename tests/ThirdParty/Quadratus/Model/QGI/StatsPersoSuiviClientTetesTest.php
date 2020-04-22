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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\StatsPersoSuiviClientTetes;

/**
 * Stats perso suivi client tetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientTetesTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCollCreat() method.
     *
     * @return void
     */
    public function testSetCollCreat() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCollCreat("collCreat");
        $this->assertEquals("collCreat", $obj->getCollCreat());
    }

    /**
     * Tests the setCollModif() method.
     *
     * @return void
     */
    public function testSetCollModif() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat() {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLstCollab() method.
     *
     * @return void
     */
    public function testSetLstCollab() {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setLstCollab("lstCollab");
        $this->assertEquals("lstCollab", $obj->getLstCollab());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new StatsPersoSuiviClientTetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCollCreat());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLstCollab());
    }
}
