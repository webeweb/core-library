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
use WBW\Library\SkiData\Model\User;
use WBW\Library\SkiData\Parser\UserParser;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * User parser test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Parser
 */
class UserParserTest extends AbstractTestCase {

    /**
     * Tests parseEntity()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseEntity(): void {

        $obj = new User();
        $obj->setUserNumber(987654321);
        $obj->setCustomerNumber(123456789);
        $obj->setTitle("title");
        $obj->setSurname("surname");
        $obj->setFirstname("firstname");
        $obj->setDateBirth(new DateTime("2017-09-20 11:50:00"));
        $obj->setParkingSpace("12345");
        $obj->setRemarks("remarks");
        $obj->setDatetimeLastModification(new DateTime("2017-09-21 11:55:00"));
        $obj->setDeletedRecord(false);
        $obj->setIdentificationNumber("identificationNumber");
        $obj->setCheckLicensePlate(false);
        $obj->setPassageLicensePlatePermitted(true);
        $obj->setExcessTimesCreditCard(true);
        $obj->setCreditCardNumber("creditCardNumber");
        $obj->setExpiryDate(null);
        $obj->setRemarks2("remarks2");
        $obj->setRemarks3("remarks3");
        $obj->setDivision("division");
        $obj->setEmail("email");
        $obj->setGroupCounting(true);
        $obj->setETicketTypeP(1);
        $obj->setETicketEmailTelephone("eTicketEmailTelephone");
        $obj->setETicketAuthentication(1);
        $obj->setETicketServiceTyp(3);
        $obj->setETicketServiceArt(2);

        $exp = '987654321;123456789;"title";"surname";"firstname";20170920;"12345";"remarks";20170921 115500;0;"identificationNumber";0;1;1;"creditCardNumber";;"remarks2";"remarks3";"division";"email";1;1;"eTicketEmailTelephone";1;3;2';

        $this->assertEquals($exp, (new UserParser())->parseEntity($obj));
    }

    /**
     * Tests parseLine()
     *
     * @retrun void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testParseLine(): void {

        $obj = '987654321;123456789;"title";"surname";"firstname";20170920;"12345";"remarks";20170921 115500;0;"identificationNumber";0;1;1;"creditCardNumber";;"remarks2";"remarks3";"division";"email";1;1;"eTicketEmailTelephone";1;3;2';

        $res = (new UserParser())->parseLine($obj);
        $this->assertEquals(987654321, $res->getUserNumber());
        $this->assertEquals(123456789, $res->getCustomerNumber());
        $this->assertEquals("title", $res->getTitle());
        $this->assertEquals("surname", $res->getSurname());
        $this->assertEquals("firstname", $res->getFirstname());
        $this->assertEquals(new DateTime("2017-09-20 00:00:00"), $res->getDateBirth());
        $this->assertEquals("12345", $res->getParkingSpace());
        $this->assertEquals("remarks", $res->getRemarks());
        $this->assertEquals(new DateTime("2017-09-21 11:55:00"), $res->getDatetimeLastModification());
        $this->assertFalse($res->getDeletedRecord());
        $this->assertEquals("identificationNumber", $res->getIdentificationNumber());
        $this->assertFalse($res->getCheckLicensePlate());
        $this->assertTrue($res->getPassageLicensePlatePermitted());
        $this->assertTrue($res->getExcessTimesCreditCard());
        $this->assertEquals("creditCardNumber", $res->getCreditCardNumber());
        $this->assertNull($res->getExpiryDate());
        $this->assertEquals("remarks2", $res->getRemarks2());
        $this->assertEquals("remarks3", $res->getRemarks3());
        $this->assertEquals("division", $res->getDivision());
        $this->assertEquals("email", $res->getEmail());
        $this->assertTrue($res->getGroupCounting());
        $this->assertEquals(1, $res->getETicketTypeP());
        $this->assertEquals("eTicketEmailTelephone", $res->getETicketEmailTelephone());
        $this->assertEquals(1, $res->getETicketAuthentication());
        $this->assertEquals(3, $res->getETicketServiceTyp());
        $this->assertEquals(2, $res->getEticketServiceArt());
    }
}
