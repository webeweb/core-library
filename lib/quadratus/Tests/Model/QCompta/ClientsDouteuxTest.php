<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\ClientsDouteux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients douteux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ClientsDouteuxTest extends AbstractTestCase {

    /**
     * Test setDateDoute()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDoute(): void {

        // Set a Date/time mock.
        $dateDoute = new DateTime("2018-09-10");

        $obj = new ClientsDouteux();

        $obj->setDateDoute($dateDoute);
        $this->assertSame($dateDoute, $obj->getDateDoute());
    }

    /**
     * Test setMention()
     *
     * @return void
     */
    public function testSetMention(): void {

        $obj = new ClientsDouteux();

        $obj->setMention("mention");
        $this->assertEquals("mention", $obj->getMention());
    }

    /**
     * Test setMtCreanceBaseHt()
     *
     * @return void
     */
    public function testSetMtCreanceBaseHt(): void {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceBaseHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceBaseHt());
    }

    /**
     * Test setMtCreanceTtcDebExo()
     *
     * @return void
     */
    public function testSetMtCreanceTtcDebExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcDebExo());
    }

    /**
     * Test setMtCreanceTtcDevDoutExo()
     *
     * @return void
     */
    public function testSetMtCreanceTtcDevDoutExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcDevDoutExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcDevDoutExo());
    }

    /**
     * Test setMtCreanceTtcIrrecExo()
     *
     * @return void
     */
    public function testSetMtCreanceTtcIrrecExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcIrrecExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcIrrecExo());
    }

    /**
     * Test setMtCreanceTtcReglExo()
     *
     * @return void
     */
    public function testSetMtCreanceTtcReglExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtCreanceTtcReglExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreanceTtcReglExo());
    }

    /**
     * Test setMtProvisionDebExo()
     *
     * @return void
     */
    public function testSetMtProvisionDebExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtProvisionDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtProvisionDebExo());
    }

    /**
     * Test setMtProvisionDotExo()
     *
     * @return void
     */
    public function testSetMtProvisionDotExo(): void {

        $obj = new ClientsDouteux();

        $obj->setMtProvisionDotExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtProvisionDotExo());
    }

    /**
     * Test setMtRepProvisionIrrec()
     *
     * @return void
     */
    public function testSetMtRepProvisionIrrec(): void {

        $obj = new ClientsDouteux();

        $obj->setMtRepProvisionIrrec(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRepProvisionIrrec());
    }

    /**
     * Test setMtRepProvisionRegl()
     *
     * @return void
     */
    public function testSetMtRepProvisionRegl(): void {

        $obj = new ClientsDouteux();

        $obj->setMtRepProvisionRegl(10.092018);
        $this->assertEquals(10.092018, $obj->getMtRepProvisionRegl());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ClientsDouteux();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setObservations()
     *
     * @return void
     */
    public function testSetObservations(): void {

        $obj = new ClientsDouteux();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new ClientsDouteux();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setTauxDouteDebExo()
     *
     * @return void
     */
    public function testSetTauxDouteDebExo(): void {

        $obj = new ClientsDouteux();

        $obj->setTauxDouteDebExo(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDouteDebExo());
    }

    /**
     * Test setTauxDouteExo()
     *
     * @return void
     */
    public function testSetTauxDouteExo(): void {

        $obj = new ClientsDouteux();

        $obj->setTauxDouteExo(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDouteExo());
    }

    /**
     * Test setTxTvaCreance()
     *
     * @return void
     */
    public function testSetTxTvaCreance(): void {

        $obj = new ClientsDouteux();

        $obj->setTxTvaCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTvaCreance());
    }

    /**
     * Test setTxTvaCreanceForce()
     *
     * @return void
     */
    public function testSetTxTvaCreanceForce(): void {

        $obj = new ClientsDouteux();

        $obj->setTxTvaCreanceForce(true);
        $this->assertTrue($obj->getTxTvaCreanceForce());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
