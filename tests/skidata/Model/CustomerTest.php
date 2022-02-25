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
use WBW\Library\SkiData\Model\Customer;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Customer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\SkiData\Model
 */
class CustomerTest extends AbstractTestCase {

    /**
     * Tests setAccountingNumber()
     *
     * @return void
     */
    public function testSetAccountingNumber(): void {

        $obj = new Customer();

        $obj->setAccountingNumber("accountingNumber");
        $this->assertEquals("accountingNumber", $obj->getAccountingNumber());
    }

    /**
     * Tests setBeginDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBeginDate(): void {

        $obj = new Customer();

        $obj->setBeginDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getBeginDate()->format("Y-m-d"));
    }

    /**
     * Tests setCity()
     *
     * @return void
     */
    public function testSetCity(): void {

        $obj = new Customer();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Tests setCountingNeutralCards()
     *
     * @return void
     */
    public function testSetCountingNeutralCards(): void {

        $obj = new Customer();

        $obj->setCountingNeutralCards(true);
        $this->assertTrue($obj->getCountingNeutralCards());
    }

    /**
     * Tests setCountry()
     *
     * @return void
     */
    public function testSetCountry(): void {

        $obj = new Customer();

        $obj->setCountry("country");
        $this->assertEquals("country", $obj->getCountry());
    }

    /**
     * Tests setDeposit()
     *
     * @return void
     */
    public function testSetDeposit(): void {

        $obj = new Customer();

        $obj->setDeposit(1);
        $this->assertEquals(1, $obj->getDeposit());
    }

    /**
     * Tests setEntryMaxLevelAllowed()
     *
     * @return void
     */
    public function testSetEntryMaxLevelAllowed(): void {

        $obj = new Customer();

        $obj->setEntryMaxLevelAllowed(true);
        $this->assertTrue($obj->getEntryMaxLevelAllowed());
    }

    /**
     * Tests setIdDocumentNo()
     *
     * @return void
     */
    public function testSetIdDocumentNo(): void {

        $obj = new Customer();

        $obj->setIdDocumentNo("idDocumentNo");
        $this->assertEquals("idDocumentNo", $obj->getIdDocumentNo());
    }

    /**
     * Tests setMaxLevelCarPark()
     *
     * @return void
     */
    public function testSetMaxLevelCarPark(): void {

        $obj = new Customer();

        $obj->setMaxLevelCarPark(true);
        $this->assertTrue($obj->getMaxLevelCarPark());
    }

    /**
     * Tests setMaximumLevel()
     *
     * @return void
     */
    public function testSetMaximumLevel(): void {

        $obj = new Customer();

        $obj->setMaximumLevel(1);
        $this->assertEquals(1, $obj->getMaximumLevel());
    }

    /**
     * Tests setNationality()
     *
     * @return void
     */
    public function testSetNationality(): void {

        $obj = new Customer();

        $obj->setNationality("nationality");
        $this->assertEquals("nationality", $obj->getNationality());
    }

    /**
     * Tests setPCode()
     *
     * @return void
     */
    public function testSetPCode(): void {

        $obj = new Customer();

        $obj->setPCode("pCode");
        $this->assertEquals("pCode", $obj->getPCode());
    }

    /**
     * Tests setRentalAgreementNo()
     *
     * @return void
     */
    public function testSetRentalAgreementNo(): void {

        $obj = new Customer();

        $obj->setRentalAgreementNo("rentalAgreementNo");
        $this->assertEquals("rentalAgreementNo", $obj->getRentalAgreementNo());
    }

    /**
     * Tests setStreet()
     *
     * @return void
     */
    public function testSetStreet(): void {

        $obj = new Customer();

        $obj->setStreet("street");
        $this->assertEquals("street", $obj->getStreet());
    }

    /**
     * Tests setTaxCode()
     *
     * @return void
     */
    public function testSetTaxCode(): void {

        $obj = new Customer();

        $obj->setTaxCode("taxCode");
        $this->assertEquals("taxCode", $obj->getTaxCode());
    }

    /**
     * Tests setTelephone()
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new Customer();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests setTerminationDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTerminationDate(): void {

        $obj = new Customer();

        $obj->setTerminationDate(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getTerminationDate()->format("Y-m-d"));
    }

    /**
     * Tests setTicketReturnAllowed()
     *
     * @return void
     */
    public function testSetTicketReturnAllowed(): void {

        $obj = new Customer();

        $obj->setTicketReturnAllowed(true);
        $this->assertTrue($obj->getTicketReturnAllowed());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

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
}
