<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\JournauxRapproch;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Journaux rapproch model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class JournauxRapprochTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new JournauxRapproch();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getMethode());
        $this->assertNull($obj->getNePasSaisirSoldeFin());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSoldeFin());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new JournauxRapproch();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setMethode() method.
     *
     * @return void
     */
    public function testSetMethode() {

        $obj = new JournauxRapproch();

        $obj->setMethode("methode");
        $this->assertEquals("methode", $obj->getMethode());
    }

    /**
     * Tests the setNePasSaisirSoldeFin() method.
     *
     * @return void
     */
    public function testSetNePasSaisirSoldeFin() {

        $obj = new JournauxRapproch();

        $obj->setNePasSaisirSoldeFin(true);
        $this->assertEquals(true, $obj->getNePasSaisirSoldeFin());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new JournauxRapproch();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setSoldeFin() method.
     *
     * @return void
     */
    public function testSetSoldeFin() {

        $obj = new JournauxRapproch();

        $obj->setSoldeFin(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeFin());
    }
}
