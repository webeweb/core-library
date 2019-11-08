<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Interets;

/**
 * Interets test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class InteretsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Interets();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getTypeCpt());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Interets();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Interets();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setTaux() method.
     *
     * @return void
     */
    public function testSetTaux() {

        $obj = new Interets();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests the setTypeCpt() method.
     *
     * @return void
     */
    public function testSetTypeCpt() {

        $obj = new Interets();

        $obj->setTypeCpt("typeCpt");
        $this->assertEquals("typeCpt", $obj->getTypeCpt());
    }
}
