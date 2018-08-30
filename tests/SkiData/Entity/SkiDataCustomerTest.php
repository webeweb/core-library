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
use WBW\Library\Core\SkiData\Entity\SkiDataCustomer;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * SkiData customer entity test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 * @final
 */
final class SkiDataCustomerTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new SkiDataCustomer();

        $this->assertNull($obj->getAccountingNumber());
        $this->assertNull($obj->getBeginDate());
        $this->assertNull($obj->getBlocked());
        $this->assertNull($obj->getBlockedDate());
        $this->assertNull($obj->getCity());
        $this->assertNull($obj->getCountingNeutralCards());
        $this->assertNull($obj->getCountry());
        $this->assertNull($obj->getCustomerNumber());
        $this->assertNull($obj->getDatetimeLastModification());
        $this->assertNull($obj->getDeletedRecord());
        $this->assertNull($obj->getDeposit());
        $this->assertNull($obj->getDivision());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEntryMaxLevelAllowed());
        $this->assertNull($obj->getFirstname());
        $this->assertNull($obj->getGroupCounting());
        $this->assertNull($obj->getIdDocumentNo());
        $this->assertNull($obj->getMaxLevelCarPark());
        $this->assertNull($obj->getMaximumLevel());
        $this->assertNull($obj->getNationality());
        $this->assertNull($obj->getPCode());
        $this->assertNull($obj->getRemarks());
        $this->assertNull($obj->getRemarks2());
        $this->assertNull($obj->getRemarks3());
        $this->assertNull($obj->getRentalAgreementNo());
        $this->assertNull($obj->getStreet());
        $this->assertNull($obj->getSurname());
        $this->assertNull($obj->getTaxCode());
        $this->assertNull($obj->getTelephone());
        $this->assertNull($obj->getTerminationDate());
        $this->assertNull($obj->getTicketReturnAllowed());
        $this->assertNull($obj->getTitle());
    }

    /**
     * Tests the setAccountingNumber() method.
     *
     * @return void
     */
    public function testSetAccountingNumber() {

        $obj = new SkiDataCustomer();

        $obj->setAccountingNumber("accountingNumber");
        $this->assertEquals("accountingNumber", $obj->getAccountingNumber());
    }

    /**
     * Tests the setBeginDate() method.
     *
     * @return void
     */
    public function testSetBeginDate() {

        $obj = new SkiDataCustomer();

        $obj->setBeginDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBeginDate()->format("Y-m-d"));
    }

    /**
     * Tests the setBlocked() method.
     *
     * @return void
     */
    public function testSetBlocked() {

        $obj = new SkiDataCustomer();

        $obj->setBlocked(true);
        $this->assertTrue($obj->getBlocked());
    }

    /**
     * Tests the setBlockedDate() method.
     *
     * @return void
     */
    public function testSetBlockedDate() {

        $obj = new SkiDataCustomer();

        $obj->setBlockedDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBlockedDate()->format("Y-m-d"));
    }

    /**
     * Tests the setCity() method.
     *
     * @return void
     */
    public function testSetCity() {

        $obj = new SkiDataCustomer();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Tests the setCountingNeutralCards() method.
     *
     * @return void
     */
    public function testSetCountingNeutralCards() {

        $obj = new SkiDataCustomer();

        $obj->setCountingNeutralCards(true);
        $this->assertTrue($obj->getCountingNeutralCards());
    }

    /**
     * Tests the setCountry() method.
     *
     * @return void
     */
    public function testSetCountry() {

        $obj = new SkiDataCustomer();

        $obj->setCountry("country");
        $this->assertEquals("country", $obj->getCountry());
    }

    /**
     * Tests the setCustomerNumber() method.
     *
     * @return void
     */
    public function testSetCustomerNumber() {

        $obj = new SkiDataCustomer();

        $obj->setCustomerNumber(1);
        $this->assertEquals(1, $obj->getCustomerNumber());
    }

    /**
     * Tests the setDatetimeLastModification() method.
     *
     * @return void
     */
    public function testSetDatetimeLastModification() {

        $obj = new SkiDataCustomer();

        $obj->setDatetimeLastModification(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDatetimeLastModification()->format("Y-m-d"));
    }

    /**
     * Tests the setDeletedRecord() method.
     *
     * @return void
     */
    public function testSetDeletedRecord() {

        $obj = new SkiDataCustomer();

        $obj->setDeletedRecord(true);
        $this->assertTrue($obj->getDeletedRecord());
    }

    /**
     * Tests the setDeposit() method.
     *
     * @return void
     */
    public function testSetDeposit() {

        $obj = new SkiDataCustomer();

        $obj->setDeposit(1);
        $this->assertEquals(1, $obj->getDeposit());
    }

    /**
     * Tests the setDivision() method.
     *
     * @return void
     */
    public function testSetDivision() {

        $obj = new SkiDataCustomer();

        $obj->setDivision("division");
        $this->assertEquals("division", $obj->getDivision());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new SkiDataCustomer();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEntryMaxLevelAllowed() method.
     *
     * @return void
     */
    public function testSetEntryMaxLevelAllowed() {

        $obj = new SkiDataCustomer();

        $obj->setEntryMaxLevelAllowed(true);
        $this->assertTrue($obj->getEntryMaxLevelAllowed());
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname() {

        $obj = new SkiDataCustomer();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }

    /**
     * Tests the setGroupCounting() method.
     *
     * @return void
     */
    public function testSetGroupCounting() {

        $obj = new SkiDataCustomer();

        $obj->setGroupCounting(true);
        $this->assertTrue($obj->getGroupCounting());
    }

    /**
     * Tests the setIdDocumentNo() method.
     *
     * @return void
     */
    public function testSetIdDocumentNo() {

        $obj = new SkiDataCustomer();

        $obj->setIdDocumentNo("idDocumentNo");
        $this->assertEquals("idDocumentNo", $obj->getIdDocumentNo());
    }

    /**
     * Tests the setMaxLevelCarPark() method.
     *
     * @return void
     */
    public function testSetMaxLevelCarPark() {

        $obj = new SkiDataCustomer();

        $obj->setMaxLevelCarPark(true);
        $this->assertTrue($obj->getMaxLevelCarPark());
    }

    /**
     * Tests the setMaximumLevel() method.
     *
     * @return void
     */
    public function testSetMaximumLevel() {

        $obj = new SkiDataCustomer();

        $obj->setMaximumLevel(1);
        $this->assertEquals(1, $obj->getMaximumLevel());
    }

    /**
     * Tests the setNationality() method.
     *
     * @return void
     */
    public function testSetNationality() {

        $obj = new SkiDataCustomer();

        $obj->setNationality("nationality");
        $this->assertEquals("nationality", $obj->getNationality());
    }

    /**
     * Tests the setPCode() method.
     *
     * @return void
     */
    public function testSetPCode() {

        $obj = new SkiDataCustomer();

        $obj->setPCode("pCode");
        $this->assertEquals("pCode", $obj->getPCode());
    }

    /**
     * Tests the setRemarks() method.
     *
     * @return void
     */
    public function testSetRemarks() {

        $obj = new SkiDataCustomer();

        $obj->setRemarks("remarks");
        $this->assertEquals("remarks", $obj->getRemarks());
    }

    /**
     * Tests the setRemarks2() method.
     *
     * @return void
     */
    public function testSetRemarks2() {

        $obj = new SkiDataCustomer();

        $obj->setRemarks2("remarks2");
        $this->assertEquals("remarks2", $obj->getRemarks2());
    }

    /**
     * Tests the setRemarks3() method.
     *
     * @return void
     */
    public function testSetRemarks3() {

        $obj = new SkiDataCustomer();

        $obj->setRemarks3("remarks3");
        $this->assertEquals("remarks3", $obj->getRemarks3());
    }

    /**
     * Tests the setRentalAgreementNo() method.
     *
     * @return void
     */
    public function testSetRentalAgreementNo() {

        $obj = new SkiDataCustomer();

        $obj->setRentalAgreementNo("rentalAgreementNo");
        $this->assertEquals("rentalAgreementNo", $obj->getRentalAgreementNo());
    }

    /**
     * Tests the setStreet() method.
     *
     * @return void
     */
    public function testSetStreet() {

        $obj = new SkiDataCustomer();

        $obj->setStreet("street");
        $this->assertEquals("street", $obj->getStreet());
    }

    /**
     * Tests the setSurname() method.
     *
     * @return void
     */
    public function testSetSurname() {

        $obj = new SkiDataCustomer();

        $obj->setSurname("surname");
        $this->assertEquals("surname", $obj->getSurname());
    }

    /**
     * Tests the setTaxCode() method.
     *
     * @return void
     */
    public function testSetTaxCode() {

        $obj = new SkiDataCustomer();

        $obj->setTaxCode("taxCode");
        $this->assertEquals("taxCode", $obj->getTaxCode());
    }

    /**
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone() {

        $obj = new SkiDataCustomer();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests the setTerminationDate() method.
     *
     * @return void
     */
    public function testSetTerminationDate() {

        $obj = new SkiDataCustomer();

        $obj->setTerminationDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getTerminationDate()->format("Y-m-d"));
    }

    /**
     * Tests the setTicketReturnAllowed() method.
     *
     * @return void
     */
    public function testSetTicketReturnAllowed() {

        $obj = new SkiDataCustomer();

        $obj->setTicketReturnAllowed(true);
        $this->assertTrue($obj->getTicketReturnAllowed());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new SkiDataCustomer();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

}
