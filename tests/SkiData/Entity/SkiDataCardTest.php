<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\SkiData\Entity;

use DateTime;
use WBW\Library\Core\SkiData\Entity\SkiDataCard;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * SkiData card entity test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 * @final
 */
final class SkiDataCardTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new SkiDataCard();

        $this->assertNull($obj->getArticleNumber());
        $this->assertNull($obj->getBlocked());
        $this->assertNull($obj->getBlockedDate());
        $this->assertNull($obj->getCurrencyResidualValue());
        $this->assertNull($obj->getDisplayText());
        $this->assertNull($obj->getDisplayText1());
        $this->assertNull($obj->getDisplayText2());
        $this->assertNull($obj->getEntryBarrierClosed());
        $this->assertNull($obj->getExitBarrierClosed());
        $this->assertNull($obj->getExpires());
        $this->assertNull($obj->getNeutral());
        $this->assertNull($obj->getPersonnalNo());
        $this->assertNull($obj->getProductionCounter());
        $this->assertNull($obj->getProductionFacilityNumber());
        $this->assertNull($obj->getProductionState());
        $this->assertNull($obj->getReasonProduction());
        $this->assertNull($obj->getResidualValue());
        $this->assertNull($obj->getRetainTicketEntry());
        $this->assertNull($obj->getRetainTicketExit());
        $this->assertNull($obj->getSerialNo());
        $this->assertNull($obj->getSerialNumberKeyCardSwatch());
        $this->assertNull($obj->getSuspendPeriodFrom());
        $this->assertNull($obj->getSuspendPeriodUntil());
        $this->assertNull($obj->getTicketNumber());
        $this->assertNull($obj->getTicketSubType());
        $this->assertNull($obj->getTicketType());
        $this->assertNull($obj->getUseValidCarParks());
        $this->assertNull($obj->getUserNumber());
        $this->assertNull($obj->getValidFrom());
    }

    /**
     * Tests the setArticleNumber() method.
     *
     * @return void
     */
    public function testSetArticleNumber() {

        $obj = new SkiDataCard();

        $obj->setArticleNumber(1);
        $this->assertEquals(1, $obj->getArticleNumber());
    }

    /**
     * Tests the setBlocked() method.
     *
     * @return void
     */
    public function testSetBlocked() {

        $obj = new SkiDataCard();

        $obj->setBlocked(true);
        $this->assertTrue($obj->getBlocked());
    }

    /**
     * Tests the setBlockedDate() method.
     *
     * @return void
     */
    public function testSetBlockedDate() {

        $obj = new SkiDataCard();

        $obj->setBlockedDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBlockedDate()->format("2018-08-30"));
    }

    /**
     * Tests the setCurrencyResidualValue() method.
     *
     * @return void
     */
    public function testSetCurrencyResidualValue() {

        $obj = new SkiDataCard();

        $obj->setCurrencyResidualValue("currencyResidualValue");
        $this->assertEquals("currencyResidualValue", $obj->getCurrencyResidualValue());
    }

    /**
     * Tests the setDisplayText() method.
     *
     * @return void
     */
    public function testSetDisplayText() {

        $obj = new SkiDataCard();

        $obj->setDisplayText("displayText");
        $this->assertEquals("displayText", $obj->getDisplayText());
    }

    /**
     * Tests the setDisplayText1() method.
     *
     * @return void
     */
    public function testSetDisplayText1() {

        $obj = new SkiDataCard();

        $obj->setDisplayText1("displayText1");
        $this->assertEquals("displayText1", $obj->getDisplayText1());
    }

    /**
     * Tests the setDisplayText2() method.
     *
     * @return void
     */
    public function testSetDisplayText2() {

        $obj = new SkiDataCard();

        $obj->setDisplayText2("displayText2");
        $this->assertEquals("displayText2", $obj->getDisplayText2());
    }

    /**
     * Tests the setEntryBarrierClosed() method.
     *
     * @return void
     */
    public function testSetEntryBarrierClosed() {

        $obj = new SkiDataCard();

        $obj->setEntryBarrierClosed(true);
        $this->assertTrue($obj->getEntryBarrierClosed());
    }

    /**
     * Tests the setExitBarrierClosed() method.
     *
     * @return void
     */
    public function testSetExitBarrierClosed() {

        $obj = new SkiDataCard();

        $obj->setExitBarrierClosed(true);
        $this->assertTrue($obj->getExitBarrierClosed());
    }

    /**
     * Tests the setExpires() method.
     *
     * @return void
     */
    public function testSetExpires() {

        $obj = new SkiDataCard();

        $obj->setExpires(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getExpires()->format("Y-m-d"));
    }

    /**
     * Tests the setNeutral() method.
     *
     * @return void
     */
    public function testSetNeutral() {

        $obj = new SkiDataCard();

        $obj->setNeutral(true);
        $this->assertTrue($obj->getNeutral());
    }

    /**
     * Tests the setPersonnalNo() method.
     *
     * @return void
     */
    public function testSetPersonnalNo() {

        $obj = new SkiDataCard();

        $obj->setPersonnalNo(1);
        $this->assertEquals(1, $obj->getPersonnalNo());
    }

    /**
     * Tests the setProductionCounter() method.
     *
     * @return void
     */
    public function testSetProductionCounter() {

        $obj = new SkiDataCard();

        $obj->setProductionCounter(1);
        $this->assertEquals(1, $obj->getProductionCounter());
    }

    /**
     * Tests the setProductionFacilityNumber() method.
     *
     * @return void
     */
    public function testSetProductionFacilityNumber() {

        $obj = new SkiDataCard();

        $obj->setProductionFacilityNumber(1);
        $this->assertEquals(1, $obj->getProductionFacilityNumber());
    }

    /**
     * Tests the setProductionState() method.
     *
     * @return void
     */
    public function testSetProductionState() {

        $obj = new SkiDataCard();

        $obj->setProductionState(1);
        $this->assertEquals(1, $obj->getProductionState());
    }

    /**
     * Tests the setReasonProduction() method.
     *
     * @return void
     */
    public function testSetReasonProduction() {

        $obj = new SkiDataCard();

        $obj->setReasonProduction(1);
        $this->assertEquals(1, $obj->getReasonProduction());
    }

    /**
     * Tests the setResidualValue() method.
     *
     * @return void
     */
    public function testSetResidualValue() {

        $obj = new SkiDataCard();

        $obj->setResidualValue(1);
        $this->assertEquals(1, $obj->getResidualValue());
    }

    /**
     * Tests the setRetainTicketEntry() method.
     *
     * @return void
     */
    public function testSetRetainTicketEntry() {

        $obj = new SkiDataCard();

        $obj->setRetainTicketEntry(true);
        $this->assertTrue($obj->getRetainTicketEntry());
    }

    /**
     * Tests the setRetainTicketExit() method.
     *
     * @return void
     */
    public function testSetRetainTicketExit() {

        $obj = new SkiDataCard();

        $obj->setRetainTicketExit(true);
        $this->assertTrue($obj->getRetainTicketExit());
    }

    /**
     * Tests the setSerialNo() method.
     *
     * @return void
     */
    public function testSetSerialNo() {

        $obj = new SkiDataCard();

        $obj->setSerialNo("serialNo");
        $this->assertEquals("serialNo", $obj->getSerialNo());
    }

    /**
     * Tests the setSerialNumberKeyCardSwatch() method.
     *
     * @return void
     */
    public function testSetSerialNumberKeyCardSwatch() {

        $obj = new SkiDataCard();

        $obj->setSerialNumberKeyCardSwatch("serialNumberKeyCardSwatch");
        $this->assertEquals("serialNumberKeyCardSwatch", $obj->getSerialNumberKeyCardSwatch());
    }

    /**
     * Tests the setSuspendPeriodFrom() method.
     *
     * @return void
     */
    public function testSetSuspendPeriodFrom() {

        $obj = new SkiDataCard();

        $obj->setSuspendPeriodFrom(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getSuspendPeriodFrom()->format("Y-m-d"));
    }

    /**
     * Tests the setSuspendPeriodUntil() method.
     *
     * @return void
     */
    public function testSetSuspendPeriodUntil() {

        $obj = new SkiDataCard();

        $obj->setSuspendPeriodUntil(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getSuspendPeriodUntil()->format("Y-m-d"));
    }

    /**
     * Tests the setTicketNumber() method.
     *
     * @return void
     */
    public function testSetTicketNumber() {

        $obj = new SkiDataCard();

        $obj->setTicketNumber("ticketNumber");
        $this->assertEquals("ticketNumber", $obj->getTicketNumber());
    }

    /**
     * Tests the setTicketSubType() method.
     *
     * @return void
     */
    public function testSetTicketSubType() {

        $obj = new SkiDataCard();

        $obj->setTicketSubType("ticketSubType");
        $this->assertEquals("ticketSubType", $obj->getTicketSubType());
    }

    /**
     * Tests the setTicketType() method.
     *
     * @return void
     */
    public function testSetTicketType() {

        $obj = new SkiDataCard();

        $obj->setTicketType(1);
        $this->assertEquals(1, $obj->getTicketType());
    }

    /**
     * Tests the setUseValidCarParks() method.
     *
     * @return void
     */
    public function testSetUseValidCarParks() {

        $obj = new SkiDataCard();

        $obj->setUseValidCarParks(true);
        $this->assertTrue($obj->getUseValidCarParks());
    }

    /**
     * Tests the setUserNumber() method.
     *
     * @return void
     */
    public function testSetUserNumber() {

        $obj = new SkiDataCard();

        $obj->setUserNumber(1);
        $this->assertEquals(1, $obj->getUserNumber());
    }

    /**
     * Tests the setValidFrom() method.
     *
     * @return void
     */
    public function testSetValidFrom() {

        $obj = new SkiDataCard();

        $obj->setValidFrom(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getValidFrom()->format("Y-m-d"));
    }

}
