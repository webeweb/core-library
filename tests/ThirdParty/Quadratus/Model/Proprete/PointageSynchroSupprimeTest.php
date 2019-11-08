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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointageSynchroSupprime;

/**
 * Pointage synchro supprime test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointageSynchroSupprimeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointageSynchroSupprime();

        $this->assertNull($obj->getCleEnreg());
        $this->assertNull($obj->getCreeParGenPrev());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getTimeSuppression());
        $this->assertNull($obj->getUniqIdSynchro());
    }

    /**
     * Tests the setCleEnreg() method.
     *
     * @return void
     */
    public function testSetCleEnreg() {

        $obj = new PointageSynchroSupprime();

        $obj->setCleEnreg("cleEnreg");
        $this->assertEquals("cleEnreg", $obj->getCleEnreg());
    }

    /**
     * Tests the setCreeParGenPrev() method.
     *
     * @return void
     */
    public function testSetCreeParGenPrev() {

        $obj = new PointageSynchroSupprime();

        $obj->setCreeParGenPrev(true);
        $this->assertEquals(true, $obj->getCreeParGenPrev());
    }

    /**
     * Tests the setNomTable() method.
     *
     * @return void
     */
    public function testSetNomTable() {

        $obj = new PointageSynchroSupprime();

        $obj->setNomTable("nomTable");
        $this->assertEquals("nomTable", $obj->getNomTable());
    }

    /**
     * Tests the setTimeSuppression() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTimeSuppression() {

        // Set a Date/time mock.
        $timeSuppression = new DateTime("2018-09-10");

        $obj = new PointageSynchroSupprime();

        $obj->setTimeSuppression($timeSuppression);
        $this->assertSame($timeSuppression, $obj->getTimeSuppression());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new PointageSynchroSupprime();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }
}
