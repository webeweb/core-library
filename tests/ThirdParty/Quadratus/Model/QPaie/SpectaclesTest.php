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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Spectacles;

/**
 * Spectacles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SpectaclesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Spectacles();

        $this->assertNull($obj->getDtDebut());
        $this->assertNull($obj->getDtFin());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumObjet());
    }

    /**
     * Tests the setDtDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebut() {

        $obj = new Spectacles();

        $obj->setDtDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebut());
    }

    /**
     * Tests the setDtFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFin() {

        $obj = new Spectacles();

        $obj->setDtFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFin());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Spectacles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumObjet() method.
     *
     * @return void
     */
    public function testSetNumObjet() {

        $obj = new Spectacles();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }
}
