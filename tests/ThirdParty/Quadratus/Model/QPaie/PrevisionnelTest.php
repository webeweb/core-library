<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Previsionnel;

/**
 * Previsionnel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PrevisionnelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Previsionnel();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDebutSemaine());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getNumeroSemaine());
    }

    /**
     * Tests the setAnnee() method.
     *
     * @return void
     */
    public function testSetAnnee() {

        $obj = new Previsionnel();

        $obj->setAnnee(10);
        $this->assertEquals(10, $obj->getAnnee());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        $obj = new Previsionnel();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setDebutSemaine() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutSemaine() {

        $obj = new Previsionnel();

        $obj->setDebutSemaine(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutSemaine());
    }

    /**
     * Tests the setHorairePrevu() method.
     *
     * @return void
     */
    public function testSetHorairePrevu() {

        $obj = new Previsionnel();

        $obj->setHorairePrevu(10.092018);
        $this->assertEquals(10.092018, $obj->getHorairePrevu());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new Previsionnel();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setNumeroSemaine() method.
     *
     * @return void
     */
    public function testSetNumeroSemaine() {

        $obj = new Previsionnel();

        $obj->setNumeroSemaine("numeroSemaine");
        $this->assertEquals("numeroSemaine", $obj->getNumeroSemaine());
    }
}
