<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Parser;

use DateTime;
use Exception;
use WBW\Library\SkiData\Model\Customer;
use WBW\Library\SkiData\Parser\CustomerParser;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Customer parser test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Parser
 */
class CustomerParserTest extends AbstractTestCase {

    /**
     * Tests parseEntity()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseEntity(): void {

        $obj = new Customer();
        $obj->setCustomerNumber(123456789);
        $obj->setTitle("title");
        $obj->setSurname("surname");
        $obj->setFirstname("firstname");
        $obj->setStreet("street");
        $obj->setPCode("pCode");
        $obj->setCity("city");
        $obj->setCountry("abc");
        $obj->setTaxCode("taxCode");
        $obj->setIdDocumentNo("idDocumentNo");
        $obj->setTelephone("telephone");
        $obj->setRentalAgreementNo("rentalAgreementNo");
        $obj->setBeginDate(new DateTime("2017-09-21 10:30:00"));
        $obj->setTerminationDate(new DateTime("2017-09-30 10:30:00"));
        $obj->setDeposit(123456);
        $obj->setMaximumLevel(1234);
        $obj->setRemarks("remarks");
        $obj->setDatetimeLastModification(new DateTime("2017-09-21 10:35:00"));
        $obj->setBlocked(false);
        $obj->setBlockedDate(null);
        $obj->setDeletedRecord(false);
        $obj->setTicketReturnAllowed(true);
        $obj->setGroupCounting(true);
        $obj->setEntryMaxLevelAllowed(false);
        $obj->setMaxLevelCarPark(true);
        $obj->setRemarks2("remarks2");
        $obj->setRemarks3("remarks3");
        $obj->setDivision("division");
        $obj->setEmail("email");
        $obj->setCountingNeutralCards(false);
        $obj->setNationality("abc");
        $obj->setAccountingNumber("accountingNumber");

        $exp = '123456789;"title";"surname";"firstname";"street";"pCode";"city";"abc";"taxCode";"idDocumentNo";"telephone";"rentalAgreementNo";20170921;20170930;000000123456;1234;"remarks";20170921 103500;0;;0;1;1;0;1;"remarks2";"remarks3";"division";"email";0;"abc";"accountingNumber"';

        $this->assertEquals($exp, (new CustomerParser())->parseEntity($obj));
    }

    /**
     * Tests parseLine()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseLine(): void {

        $obj = '123456789;"title";"surname";"firstname";"street";"pCode";"city";"abc";"taxCode";"idDocumentNo";"telephone";"rentalAgreementNo";20170921;20170930;000000123456;1234;"remarks";20170921 103500;0;;0;1;1;0;1;"remarks2";"remarks3";"division";"email";0;"abc";"accountingNumber"';

        $res = (new CustomerParser())->parseLine($obj);
        $this->assertEquals(123456789, $res->getCustomerNumber());
        $this->assertEquals("title", $res->getTitle());
        $this->assertEquals("surname", $res->getSurname());
        $this->assertEquals("firstname", $res->getFirstname());
        $this->assertEquals("street", $res->getStreet());
        $this->assertEquals("pCode", $res->getPCode());
        $this->assertEquals("city", $res->getCity());
        $this->assertEquals("abc", $res->getCountry());
        $this->assertEquals("taxCode", $res->getTaxCode());
        $this->assertEquals("idDocumentNo", $res->getIdDocumentNo());
        $this->assertEquals("telephone", $res->getTelephone());
        $this->assertEquals("rentalAgreementNo", $res->getRentalAgreementNo());
        $this->assertEquals(new DateTime("2017-09-21 00:00:00"), $res->getBeginDate());
        $this->assertEquals(new DateTime("2017-09-30 00:00:00"), $res->getTerminationDate());
        $this->assertEquals(123456, $res->getDeposit());
        $this->assertEquals(1234, $res->getMaximumLevel());
        $this->assertEquals("remarks", $res->getRemarks());
        $this->assertEquals(new DateTime("2017-09-21 10:35:00"), $res->getDatetimeLastModification());
        $this->assertFalse($res->getBlocked());
        $this->assertNull($res->getBlockedDate());
        $this->assertFalse($res->getDeletedRecord());
        $this->assertTrue($res->getTicketReturnAllowed());
        $this->assertTrue($res->getGroupCounting());
        $this->assertFalse($res->getEntryMaxLevelAllowed());
        $this->assertTrue($res->getMaxLevelCarPark());
        $this->assertEquals("remarks2", $res->getRemarks2());
        $this->assertEquals("remarks3", $res->getRemarks3());
        $this->assertEquals("division", $res->getDivision());
        $this->assertEquals("email", $res->getEmail());
        $this->assertFalse($res->getCountingNeutralCards());
        $this->assertEquals("abc", $res->getNationality());
        $this->assertEquals("accountingNumber", $res->getAccountingNumber());
    }
}
