<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Model;

use DateTime;
use Exception;
use WBW\Library\SkiData\Model\Card;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Card test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SkiData\Tests\Model
 */
class CardTest extends AbstractTestCase {

    /**
     * Tests the setArticleNumber() method.
     *
     * @return void
     */
    public function testSetArticleNumber(): void {

        $obj = new Card();

        $obj->setArticleNumber(1);
        $this->assertEquals(1, $obj->getArticleNumber());
    }

    /**
     * Tests the setCurrencyResidualValue() method.
     *
     * @return void
     */
    public function testSetCurrencyResidualValue(): void {

        $obj = new Card();

        $obj->setCurrencyResidualValue("currencyResidualValue");
        $this->assertEquals("currencyResidualValue", $obj->getCurrencyResidualValue());
    }

    /**
     * Tests the setDisplayText() method.
     *
     * @return void
     */
    public function testSetDisplayText(): void {

        $obj = new Card();

        $obj->setDisplayText(true);
        $this->assertTrue($obj->getDisplayText());
    }

    /**
     * Tests the setDisplayText1() method.
     *
     * @return void
     */
    public function testSetDisplayText1(): void {

        $obj = new Card();

        $obj->setDisplayText1("displayText1");
        $this->assertEquals("displayText1", $obj->getDisplayText1());
    }

    /**
     * Tests the setDisplayText2() method.
     *
     * @return void
     */
    public function testSetDisplayText2(): void {

        $obj = new Card();

        $obj->setDisplayText2("displayText2");
        $this->assertEquals("displayText2", $obj->getDisplayText2());
    }

    /**
     * Tests the setEntryBarrierClosed() method.
     *
     * @return void
     */
    public function testSetEntryBarrierClosed(): void {

        $obj = new Card();

        $obj->setEntryBarrierClosed(true);
        $this->assertTrue($obj->getEntryBarrierClosed());
    }

    /**
     * Tests the setExitBarrierClosed() method.
     *
     * @return void
     */
    public function testSetExitBarrierClosed(): void {

        $obj = new Card();

        $obj->setExitBarrierClosed(true);
        $this->assertTrue($obj->getExitBarrierClosed());
    }

    /**
     * Tests the setExpires() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetExpires(): void {

        $obj = new Card();

        $obj->setExpires(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getExpires()->format("Y-m-d"));
    }

    /**
     * Tests the setIsNeutral() method.
     *
     * @return void
     */
    public function testSetIsNeutral(): void {

        $obj = new Card();

        $obj->setIsNeutral(true);
        $this->assertTrue($obj->getIsNeutral());
    }

    /**
     * Tests the setPersonnalNo() method.
     *
     * @return void
     */
    public function testSetPersonnalNo(): void {

        $obj = new Card();

        $obj->setPersonalNo(1);
        $this->assertEquals(1, $obj->getPersonalNo());
    }

    /**
     * Tests the setProductionCounter() method.
     *
     * @return void
     */
    public function testSetProductionCounter(): void {

        $obj = new Card();

        $obj->setProductionCounter(1);
        $this->assertEquals(1, $obj->getProductionCounter());
    }

    /**
     * Tests the setProductionFacilityNumber() method.
     *
     * @return void
     */
    public function testSetProductionFacilityNumber(): void {

        $obj = new Card();

        $obj->setProductionFacilityNumber(1);
        $this->assertEquals(1, $obj->getProductionFacilityNumber());
    }

    /**
     * Tests the setProductionState() method.
     *
     * @return void
     */
    public function testSetProductionState(): void {

        $obj = new Card();

        $obj->setProductionState(1);
        $this->assertEquals(1, $obj->getProductionState());
    }

    /**
     * Tests the setReasonProduction() method.
     *
     * @return void
     */
    public function testSetReasonProduction(): void {

        $obj = new Card();

        $obj->setReasonProduction(1);
        $this->assertEquals(1, $obj->getReasonProduction());
    }

    /**
     * Tests the setResidualValue() method.
     *
     * @return void
     */
    public function testSetResidualValue(): void {

        $obj = new Card();

        $obj->setResidualValue(1);
        $this->assertEquals(1, $obj->getResidualValue());
    }

    /**
     * Tests the setRetainTicketEntry() method.
     *
     * @return void
     */
    public function testSetRetainTicketEntry(): void {

        $obj = new Card();

        $obj->setRetainTicketEntry(true);
        $this->assertTrue($obj->getRetainTicketEntry());
    }

    /**
     * Tests the setRetainTicketExit() method.
     *
     * @return void
     */
    public function testSetRetainTicketExit(): void {

        $obj = new Card();

        $obj->setRetainTicketExit(true);
        $this->assertTrue($obj->getRetainTicketExit());
    }

    /**
     * Tests the setSerialNo() method.
     *
     * @return void
     */
    public function testSetSerialNo(): void {

        $obj = new Card();

        $obj->setSerialNo("serialNo");
        $this->assertEquals("serialNo", $obj->getSerialNo());
    }

    /**
     * Tests the setSerialNumberKeyCardSwatch() method.
     *
     * @return void
     */
    public function testSetSerialNumberKeyCardSwatch(): void {

        $obj = new Card();

        $obj->setSerialNumberKeyCardSwatch("serialNumberKeyCardSwatch");
        $this->assertEquals("serialNumberKeyCardSwatch", $obj->getSerialNumberKeyCardSwatch());
    }

    /**
     * Tests the setSuspendPeriodFrom() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSuspendPeriodFrom(): void {

        $obj = new Card();

        $obj->setSuspendPeriodFrom(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getSuspendPeriodFrom()->format("Y-m-d"));
    }

    /**
     * Tests the setSuspendPeriodUntil() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSuspendPeriodUntil(): void {

        $obj = new Card();

        $obj->setSuspendPeriodUntil(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getSuspendPeriodUntil()->format("Y-m-d"));
    }

    /**
     * Tests the setTicketNumber() method.
     *
     * @return void
     */
    public function testSetTicketNumber(): void {

        $obj = new Card();

        $obj->setTicketNumber("ticketNumber");
        $this->assertEquals("ticketNumber", $obj->getTicketNumber());
    }

    /**
     * Tests the setTicketSubType() method.
     *
     * @return void
     */
    public function testSetTicketSubType(): void {

        $obj = new Card();

        $obj->setTicketSubType("ticketSubType");
        $this->assertEquals("ticketSubType", $obj->getTicketSubType());
    }

    /**
     * Tests the setTicketType() method.
     *
     * @return void
     */
    public function testSetTicketType(): void {

        $obj = new Card();

        $obj->setTicketType(1);
        $this->assertEquals(1, $obj->getTicketType());
    }

    /**
     * Tests the setUseValidCarParks() method.
     *
     * @return void
     */
    public function testSetUseValidCarParks(): void {

        $obj = new Card();

        $obj->setUseValidCarParks(true);
        $this->assertTrue($obj->getUseValidCarParks());
    }

    /**
     * Tests the setUserNumber() method.
     *
     * @return void
     */
    public function testSetUserNumber(): void {

        $obj = new Card();

        $obj->setUserNumber(1);
        $this->assertEquals(1, $obj->getUserNumber());
    }

    /**
     * Tests the setValidFrom() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetValidFrom(): void {

        $obj = new Card();

        $obj->setValidFrom(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getValidFrom()->format("Y-m-d"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new Card();

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
        $this->assertNull($obj->getIsNeutral());
        $this->assertNull($obj->getPersonalNo());
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
}
