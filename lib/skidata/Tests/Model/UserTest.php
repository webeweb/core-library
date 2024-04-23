<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\SkiData\Model\User;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * User test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Model
 */
class UserTest extends AbstractTestCase {

    /**
     * Test setCheckLicensePlate()
     *
     * @return void
     */
    public function testSetCheckLicensePlate(): void {

        $obj = new User();

        $obj->setCheckLicensePlate(true);
        $this->assertTrue($obj->getCheckLicensePlate());
    }

    /**
     * Test setCreditCardNumber()
     *
     * @return void
     */
    public function testSetCreditCardNumber(): void {

        $obj = new User();

        $obj->setCreditCardNumber("creditCardNumber");
        $this->assertEquals("creditCardNumber", $obj->getCreditCardNumber());
    }

    /**
     * Test setDateBirth()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateBirth(): void {

        $obj = new User();

        $obj->setDateBirth(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDateBirth()->format("Y-m-d"));
    }

    /**
     * Test setETicketAuthentication()
     *
     * @return void
     */
    public function testSetETicketAuthentication(): void {

        $obj = new User();

        $obj->setETicketAuthentication(1);
        $this->assertEquals(1, $obj->getETicketAuthentication());
    }

    /**
     * Test setETicketEmailTelephone()
     *
     * @return void
     */
    public function testSetETicketEmailTelephone(): void {

        $obj = new User();

        $obj->setETicketEmailTelephone("eTicketEmailTelephone");
        $this->assertEquals("eTicketEmailTelephone", $obj->getETicketEmailTelephone());
    }

    /**
     * Test setETicketServiceArt()
     *
     * @return void
     */
    public function testSetETicketServiceArt(): void {

        $obj = new User();

        $obj->setETicketServiceArt(1);
        $this->assertEquals(1, $obj->getETicketServiceArt());
    }

    /**
     * Test setETicketServiceTyp()
     *
     * @return void
     */
    public function testSetETicketServiceTyp(): void {

        $obj = new User();

        $obj->setETicketServiceTyp(1);
        $this->assertEquals(1, $obj->getETicketServiceTyp());
    }

    /**
     * Test setETicketTypeP()
     *
     * @return void
     */
    public function testSetETicketTypeP(): void {

        $obj = new User();

        $obj->setETicketTypeP(1);
        $this->assertEquals(1, $obj->getETicketTypeP());
    }

    /**
     * Test setExcessTimesCreditCard()
     *
     * @return void
     */
    public function testSetExcessTimesCreditCard(): void {

        $obj = new User();

        $obj->setExcessTimesCreditCard(true);
        $this->assertTrue($obj->getExcessTimesCreditCard());
    }

    /**
     * Test setExpiryDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetExpiryDate(): void {

        $obj = new User();

        $obj->setExpiryDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getExpiryDate()->format("Y-m-d"));
    }

    /**
     * Test setIdentificationNumber()
     *
     * @return void
     */
    public function testSetIdentificationNumber(): void {

        $obj = new User();

        $obj->setIdentificationNumber("identificationNumber");
        $this->assertEquals("identificationNumber", $obj->getIdentificationNumber());
    }

    /**
     * Test setParkingSpace()
     *
     * @return void
     */
    public function testSetParkingSpace(): void {

        $obj = new User();

        $obj->setParkingSpace("parkingSpace");
        $this->assertEquals("parkingSpace", $obj->getParkingSpace());
    }

    /**
     * Test setPassageLicensePlatePermitted()
     *
     * @return void
     */
    public function testSetPassageLicensePlatePermitted(): void {

        $obj = new User();

        $obj->setPassageLicensePlatePermitted(true);
        $this->assertTrue($obj->getPassageLicensePlatePermitted());
    }

    /**
     * Test setUserNumber()
     *
     * @return void
     */
    public function testSetUserNumber(): void {

        $obj = new User();

        $obj->setUserNumber(1);
        $this->assertEquals(1, $obj->getUserNumber());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new User();

        $this->assertNull($obj->getCheckLicensePlate());
        $this->assertNull($obj->getCreditCardNumber());
        $this->assertNull($obj->getCustomerNumber());
        $this->assertNull($obj->getDateBirth());
        $this->assertNull($obj->getDatetimeLastModification());
        $this->assertNull($obj->getDeletedRecord());
        $this->assertNull($obj->getDivision());
        $this->assertNull($obj->getETicketAuthentication());
        $this->assertNull($obj->getETicketEmailTelephone());
        $this->assertNull($obj->getETicketServiceArt());
        $this->assertNull($obj->getETicketServiceTyp());
        $this->assertNull($obj->getETicketTypeP());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getExcessTimesCreditCard());
        $this->assertNull($obj->getExpiryDate());
        $this->assertNull($obj->getFirstname());
        $this->assertNull($obj->getGroupCounting());
        $this->assertNull($obj->getIdentificationNumber());
        $this->assertNull($obj->getParkingSpace());
        $this->assertNull($obj->getPassageLicensePlatePermitted());
        $this->assertNull($obj->getRemarks());
        $this->assertNull($obj->getRemarks2());
        $this->assertNull($obj->getRemarks3());
        $this->assertNull($obj->getSurname());
        $this->assertNull($obj->getTitle());
        $this->assertNull($obj->getUserNumber());
    }
}
