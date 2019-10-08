<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\SkiData\Entity;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\SkiData\Model\Customer;

/**
 * Customer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\SkiData\Entity
 */
class CustomerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new Customer();

        $this->assertNull($obj->getAccountingNumber());
        $this->assertNull($obj->getBeginDate());
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

        $obj = new Customer();

        $obj->setAccountingNumber("accountingNumber");
        $this->assertEquals("accountingNumber", $obj->getAccountingNumber());
    }

    /**
     * Tests the setBeginDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBeginDate() {

        $obj = new Customer();

        $obj->setBeginDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBeginDate()->format("Y-m-d"));
    }

    /**
     * Tests the setCity() method.
     *
     * @return void
     */
    public function testSetCity() {

        $obj = new Customer();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Tests the setCountingNeutralCards() method.
     *
     * @return void
     */
    public function testSetCountingNeutralCards() {

        $obj = new Customer();

        $obj->setCountingNeutralCards(true);
        $this->assertTrue($obj->getCountingNeutralCards());
    }

    /**
     * Tests the setCountry() method.
     *
     * @return void
     */
    public function testSetCountry() {

        $obj = new Customer();

        $obj->setCountry("country");
        $this->assertEquals("country", $obj->getCountry());
    }

    /**
     * Tests the setDeposit() method.
     *
     * @return void
     */
    public function testSetDeposit() {

        $obj = new Customer();

        $obj->setDeposit(1);
        $this->assertEquals(1, $obj->getDeposit());
    }

    /**
     * Tests the setEntryMaxLevelAllowed() method.
     *
     * @return void
     */
    public function testSetEntryMaxLevelAllowed() {

        $obj = new Customer();

        $obj->setEntryMaxLevelAllowed(true);
        $this->assertTrue($obj->getEntryMaxLevelAllowed());
    }

    /**
     * Tests the setIdDocumentNo() method.
     *
     * @return void
     */
    public function testSetIdDocumentNo() {

        $obj = new Customer();

        $obj->setIdDocumentNo("idDocumentNo");
        $this->assertEquals("idDocumentNo", $obj->getIdDocumentNo());
    }

    /**
     * Tests the setMaxLevelCarPark() method.
     *
     * @return void
     */
    public function testSetMaxLevelCarPark() {

        $obj = new Customer();

        $obj->setMaxLevelCarPark(true);
        $this->assertTrue($obj->getMaxLevelCarPark());
    }

    /**
     * Tests the setMaximumLevel() method.
     *
     * @return void
     */
    public function testSetMaximumLevel() {

        $obj = new Customer();

        $obj->setMaximumLevel(1);
        $this->assertEquals(1, $obj->getMaximumLevel());
    }

    /**
     * Tests the setNationality() method.
     *
     * @return void
     */
    public function testSetNationality() {

        $obj = new Customer();

        $obj->setNationality("nationality");
        $this->assertEquals("nationality", $obj->getNationality());
    }

    /**
     * Tests the setPCode() method.
     *
     * @return void
     */
    public function testSetPCode() {

        $obj = new Customer();

        $obj->setPCode("pCode");
        $this->assertEquals("pCode", $obj->getPCode());
    }

    /**
     * Tests the setRentalAgreementNo() method.
     *
     * @return void
     */
    public function testSetRentalAgreementNo() {

        $obj = new Customer();

        $obj->setRentalAgreementNo("rentalAgreementNo");
        $this->assertEquals("rentalAgreementNo", $obj->getRentalAgreementNo());
    }

    /**
     * Tests the setStreet() method.
     *
     * @return void
     */
    public function testSetStreet() {

        $obj = new Customer();

        $obj->setStreet("street");
        $this->assertEquals("street", $obj->getStreet());
    }

    /**
     * Tests the setTaxCode() method.
     *
     * @return void
     */
    public function testSetTaxCode() {

        $obj = new Customer();

        $obj->setTaxCode("taxCode");
        $this->assertEquals("taxCode", $obj->getTaxCode());
    }

    /**
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone() {

        $obj = new Customer();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests the setTerminationDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTerminationDate() {

        $obj = new Customer();

        $obj->setTerminationDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getTerminationDate()->format("Y-m-d"));
    }

    /**
     * Tests the setTicketReturnAllowed() method.
     *
     * @return void
     */
    public function testSetTicketReturnAllowed() {

        $obj = new Customer();

        $obj->setTicketReturnAllowed(true);
        $this->assertTrue($obj->getTicketReturnAllowed());
    }
}
