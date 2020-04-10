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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ClientsDouteux;

/**
 * Clients douteux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ClientsDouteuxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ClientsDouteux();

        $this->assertNull($obj->getDateDoute());
        $this->assertNull($obj->getMention());
        $this->assertNull($obj->getMtCreanceBaseHt());
        $this->assertNull($obj->getMtCreanceTtcDebExo());
        $this->assertNull($obj->getMtCreanceTtcDevDoutExo());
        $this->assertNull($obj->getMtCreanceTtcIrrecExo());
        $this->assertNull($obj->getMtCreanceTtcReglExo());
        $this->assertNull($obj->getMtProvisionDebExo());
        $this->assertNull($obj->getMtProvisionDotExo());
        $this->assertNull($obj->getMtRepProvisionIrrec());
        $this->assertNull($obj->getMtRepProvisionRegl());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTauxDouteDebExo());
        $this->assertNull($obj->getTauxDouteExo());
        $this->assertNull($obj->getTxTvaCreance());
        $this->assertNull($obj->getTxTvaCreanceForce());
    }

    /**
     * Tests the setDateDoute() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDoute() {

        // Set a Date/time mock.
        $dateDoute = new DateTime("2018-09-10");

        $obj = new ClientsDouteux();

        $obj->setDateDoute($dateDoute);
        $this->assertSame($dateDoute, $obj->getDateDoute());
    }

    /**
     * Tests the setMention() method.
     *
     * @return void
     */
    public function testSetMention() {

        $obj = new ClientsDouteux();

        $obj->setMention("mention");
        $this->assertEquals("mention", $obj->getMention());
    }

    /**
     * Tests the setMtCreanceBaseHt() method.
     *
     * @return void
     */
    public function testSetMtCreanceBaseHt() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceBaseHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceBaseHt());
    }

    /**
     * Tests the setMtCreanceTtcDebExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTtcDebExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcDebExo());
    }

    /**
     * Tests the setMtCreanceTtcDevDoutExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTtcDevDoutExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcDevDoutExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcDevDoutExo());
    }

    /**
     * Tests the setMtCreanceTtcIrrecExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTtcIrrecExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcIrrecExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcIrrecExo());
    }

    /**
     * Tests the setMtCreanceTtcReglExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTtcReglExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcReglExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcReglExo());
    }

    /**
     * Tests the setMtProvisionDebExo() method.
     *
     * @return void
     */
    public function testSetMtProvisionDebExo() {

        $obj = new ClientsDouteux();

        $obj->setMtProvisionDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtProvisionDebExo());
    }

    /**
     * Tests the setMtProvisionDotExo() method.
     *
     * @return void
     */
    public function testSetMtProvisionDotExo() {

        $obj = new ClientsDouteux();

        $obj->setMtProvisionDotExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtProvisionDotExo());
    }

    /**
     * Tests the setMtRepProvisionIrrec() method.
     *
     * @return void
     */
    public function testSetMtRepProvisionIrrec() {

        $obj = new ClientsDouteux();

        $obj->setMtRepProvisionIrrec(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRepProvisionIrrec());
    }

    /**
     * Tests the setMtRepProvisionRegl() method.
     *
     * @return void
     */
    public function testSetMtRepProvisionRegl() {

        $obj = new ClientsDouteux();

        $obj->setMtRepProvisionRegl(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRepProvisionRegl());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new ClientsDouteux();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setObservations() method.
     *
     * @return void
     */
    public function testSetObservations() {

        $obj = new ClientsDouteux();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new ClientsDouteux();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setTauxDouteDebExo() method.
     *
     * @return void
     */
    public function testSetTauxDouteDebExo() {

        $obj = new ClientsDouteux();

        $obj->setTauxDouteDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDouteDebExo());
    }

    /**
     * Tests the setTauxDouteExo() method.
     *
     * @return void
     */
    public function testSetTauxDouteExo() {

        $obj = new ClientsDouteux();

        $obj->setTauxDouteExo(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDouteExo());
    }

    /**
     * Tests the setTxTvaCreance() method.
     *
     * @return void
     */
    public function testSetTxTvaCreance() {

        $obj = new ClientsDouteux();

        $obj->setTxTvaCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTvaCreance());
    }

    /**
     * Tests the setTxTvaCreanceForce() method.
     *
     * @return void
     */
    public function testSetTxTvaCreanceForce() {

        $obj = new ClientsDouteux();

        $obj->setTxTvaCreanceForce(true);
        $this->assertEquals(true, $obj->getTxTvaCreanceForce());
    }
}
