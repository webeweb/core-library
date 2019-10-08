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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ClientsDouteux;

/**
 * Clients douteux model test.
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
    public function testConstruct() {

        $obj = new ClientsDouteux();

        $this->assertNull($obj->getDateDoute());
        $this->assertNull($obj->getMention());
        $this->assertNull($obj->getMtCreanceBaseHT());
        $this->assertNull($obj->getMtCreanceTTCDebExo());
        $this->assertNull($obj->getMtCreanceTTCDevDoutExo());
        $this->assertNull($obj->getMtCreanceTTCIrrecExo());
        $this->assertNull($obj->getMtCreanceTTCReglExo());
        $this->assertNull($obj->getMtProvisionDebExo());
        $this->assertNull($obj->getMtProvisionDotExo());
        $this->assertNull($obj->getMtRepProvisionIrrec());
        $this->assertNull($obj->getMtRepProvisionRegl());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTauxDouteDebExo());
        $this->assertNull($obj->getTauxDouteExo());
        $this->assertNull($obj->getTxTVACreance());
        $this->assertNull($obj->getTxTVACreanceForce());
    }

    /**
     * Tests the setDateDoute() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDoute() {

        $obj = new ClientsDouteux();

        $obj->setDateDoute(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDoute());
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
     * Tests the setMtCreanceBaseHT() method.
     *
     * @return void
     */
    public function testSetMtCreanceBaseHT() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceBaseHT(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceBaseHT());
    }

    /**
     * Tests the setMtCreanceTTCDebExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTTCDebExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTTCDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTTCDebExo());
    }

    /**
     * Tests the setMtCreanceTTCDevDoutExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTTCDevDoutExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTTCDevDoutExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTTCDevDoutExo());
    }

    /**
     * Tests the setMtCreanceTTCIrrecExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTTCIrrecExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTTCIrrecExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTTCIrrecExo());
    }

    /**
     * Tests the setMtCreanceTTCReglExo() method.
     *
     * @return void
     */
    public function testSetMtCreanceTTCReglExo() {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTTCReglExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTTCReglExo());
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
     * Tests the setTxTVACreance() method.
     *
     * @return void
     */
    public function testSetTxTVACreance() {

        $obj = new ClientsDouteux();

        $obj->setTxTVACreance(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTVACreance());
    }

    /**
     * Tests the setTxTVACreanceForce() method.
     *
     * @return void
     */
    public function testSetTxTVACreanceForce() {

        $obj = new ClientsDouteux();

        $obj->setTxTVACreanceForce(true);
        $this->assertEquals(true, $obj->getTxTVACreanceForce());
    }
}
