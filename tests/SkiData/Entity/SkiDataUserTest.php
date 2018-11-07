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
use WBW\Library\Core\SkiData\Entity\SkiDataUser;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * SkiData user entity test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 */
class SkiDataUserTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SkiDataUser();

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

    /**
     * Tests the setCheckLicensePlate() method.
     *
     * @return void
     */
    public function testSetCheckLicensePlate() {

        $obj = new SkiDataUser();

        $obj->setCheckLicensePlate(true);
        $this->assertTrue($obj->getCheckLicensePlate());
    }

    /**
     * Tests the setCreditCardNumber() method.
     *
     * @return void
     */
    public function testSetCreditCardNumber() {

        $obj = new SkiDataUser();

        $obj->setCreditCardNumber("creditCardNumber");
        $this->assertEquals("creditCardNumber", $obj->getCreditCardNumber());
    }

    /**
     * Tests the setCustomerNumber() method.
     *
     * @return void
     */
    public function testSetCustomerNumber() {

        $obj = new SkiDataUser();

        $obj->setCustomerNumber(1);
        $this->assertEquals(1, $obj->getCustomerNumber());
    }

    /**
     * Tests the setDateBirth() method.
     *
     * @return void
     */
    public function testSetDateBirth() {

        $obj = new SkiDataUser();

        $obj->setDateBirth(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDateBirth()->format("Y-m-d"));
    }

    /**
     * Tests the setDatetimeLastModification() method.
     *
     * @return void
     */
    public function testSetDatetimeLastModification() {

        $obj = new SkiDataUser();

        $obj->setDatetimeLastModification(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDatetimeLastModification()->format("Y-m-d"));
    }

    /**
     * Tests the setDeletedRecord() method.
     *
     * @return void
     */
    public function testSetDeletedRecord() {

        $obj = new SkiDataUser();

        $obj->setDeletedRecord(true);
        $this->assertTrue($obj->getDeletedRecord());
    }

    /**
     * Tests the setDivision() method.
     *
     * @return void
     */
    public function testSetDivision() {

        $obj = new SkiDataUser();

        $obj->setDivision("division");
        $this->assertEquals("division", $obj->getDivision());
    }

    /**
     * Tests the setETicketAuthentication() method.
     *
     * @return void
     */
    public function testSetETicketAuthentication() {

        $obj = new SkiDataUser();

        $obj->setETicketAuthentication(1);
        $this->assertEquals(1, $obj->getETicketAuthentication());
    }

    /**
     * Tests the setETicketEmailTelephone() method.
     *
     * @return void
     */
    public function testSetETicketEmailTelephone() {

        $obj = new SkiDataUser();

        $obj->setETicketEmailTelephone("eTicketEmailTelephone");
        $this->assertEquals("eTicketEmailTelephone", $obj->getETicketEmailTelephone());
    }

    /**
     * Tests the setETicketServiceArt() method.
     *
     * @return void
     */
    public function testSetETicketServiceArt() {

        $obj = new SkiDataUser();

        $obj->setETicketServiceArt(1);
        $this->assertEquals(1, $obj->getETicketServiceArt());
    }

    /**
     * Tests the setETicketServiceTyp() method.
     *
     * @return void
     */
    public function testSetETicketServiceTyp() {

        $obj = new SkiDataUser();

        $obj->setETicketServiceTyp(1);
        $this->assertEquals(1, $obj->getETicketServiceTyp());
    }

    /**
     * Tests the setETicketTypeP() method.
     *
     * @return void
     */
    public function testSetETicketTypeP() {

        $obj = new SkiDataUser();

        $obj->setETicketTypeP(1);
        $this->assertEquals(1, $obj->getETicketTypeP());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new SkiDataUser();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setExcessTimesCreditCard() method.
     *
     * @return void
     */
    public function testSetExcessTimesCreditCard() {

        $obj = new SkiDataUser();

        $obj->setExcessTimesCreditCard(true);
        $this->assertTrue($obj->getExcessTimesCreditCard());
    }

    /**
     * Tests the setExpiryDate() method.
     *
     * @return void
     */
    public function testSetExpiryDate() {

        $obj = new SkiDataUser();

        $obj->setExpiryDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getExpiryDate()->format("Y-m-d"));
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname() {

        $obj = new SkiDataUser();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }

    /**
     * Tests the setGroupCounting() method.
     *
     * @return void
     */
    public function testSetGroupCounting() {

        $obj = new SkiDataUser();

        $obj->setGroupCounting(true);
        $this->assertTrue($obj->getGroupCounting());
    }

    /**
     * Tests the setIdentificationNumber() method.
     *
     * @return void
     */
    public function testSetIdentificationNumber() {

        $obj = new SkiDataUser();

        $obj->setIdentificationNumber("identificationNumber");
        $this->assertEquals("identificationNumber", $obj->getIdentificationNumber());
    }

    /**
     * Tests the setParkingSpace() method.
     *
     * @return void
     */
    public function testSetParkingSpace() {

        $obj = new SkiDataUser();

        $obj->setParkingSpace("parkingSpace");
        $this->assertEquals("parkingSpace", $obj->getParkingSpace());
    }

    /**
     * Tests the setPassageLicensePlatePermitted() method.
     *
     * @return void
     */
    public function testSetPassageLicensePlatePermitted() {

        $obj = new SkiDataUser();

        $obj->setPassageLicensePlatePermitted(true);
        $this->assertTrue($obj->getPassageLicensePlatePermitted());
    }

    /**
     * Tests the setRemarks() method.
     *
     * @return void
     */
    public function testSetRemarks() {

        $obj = new SkiDataUser();

        $obj->setRemarks("remarks");
        $this->assertEquals("remarks", $obj->getRemarks());
    }

    /**
     * Tests the setRemarks2() method.
     *
     * @return void
     */
    public function testSetRemarks2() {

        $obj = new SkiDataUser();

        $obj->setRemarks2("remarks2");
        $this->assertEquals("remarks2", $obj->getRemarks2());
    }

    /**
     * Tests the setRemarks3() method.
     *
     * @return void
     */
    public function testSetRemarks3() {

        $obj = new SkiDataUser();

        $obj->setRemarks3("remarks3");
        $this->assertEquals("remarks3", $obj->getRemarks3());
    }

    /**
     * Tests the setSurname() method.
     *
     * @return void
     */
    public function testSetSurname() {

        $obj = new SkiDataUser();

        $obj->setSurname("surname");
        $this->assertEquals("surname", $obj->getSurname());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new SkiDataUser();

        $obj->setTitle("Title");
        $this->assertEquals("Title", $obj->getTitle());
    }

    /**
     * Tests the setUserNumber() method.
     *
     * @return void
     */public function testSetUserNumber() {

        $obj = new SkiDataUser();

        $obj->setUserNumber(1);
        $this->assertEquals(1, $obj->getUserNumber());
    }

}
