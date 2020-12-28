<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\SkiData\Traits;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\SkiData\Traits\TestCustomerTrait;

/**
 * Customer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\SkiData\Traits
 */
class CustomerTraitTest extends AbstractTestCase {

    /**
     * Tests the setCustomerNumber() method.
     *
     * @return void
     */
    public function testSetCustomerNumber(): void {

        $obj = new TestCustomerTrait();

        $obj->setCustomerNumber(1);
        $this->assertEquals(1, $obj->getCustomerNumber());
    }

    /**
     * Tests the setDatetimeLastModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatetimeLastModification(): void {

        $obj = new TestCustomerTrait();

        $obj->setDatetimeLastModification(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDatetimeLastModification()->format("Y-m-d"));
    }

    /**
     * Tests the setDeletedRecord() method.
     *
     * @return void
     */
    public function testSetDeletedRecord(): void {

        $obj = new TestCustomerTrait();

        $obj->setDeletedRecord(true);
        $this->assertTrue($obj->getDeletedRecord());
    }

    /**
     * Tests the setDivision() method.
     *
     * @return void
     */
    public function testSetDivision(): void {

        $obj = new TestCustomerTrait();

        $obj->setDivision("division");
        $this->assertEquals("division", $obj->getDivision());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new TestCustomerTrait();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname(): void {

        $obj = new TestCustomerTrait();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }

    /**
     * Tests the setGroupCounting() method.
     *
     * @return void
     */
    public function testSetGroupCounting(): void {

        $obj = new TestCustomerTrait();

        $obj->setGroupCounting(true);
        $this->assertTrue($obj->getGroupCounting());
    }

    /**
     * Tests the setRemarks() method.
     *
     * @return void
     */
    public function testSetRemarks(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks("remarks");
        $this->assertEquals("remarks", $obj->getRemarks());
    }

    /**
     * Tests the setRemarks2() method.
     *
     * @return void
     */
    public function testSetRemarks2(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks2("remarks2");
        $this->assertEquals("remarks2", $obj->getRemarks2());
    }

    /**
     * Tests the setRemarks3() method.
     *
     * @return void
     */
    public function testSetRemarks3(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks3("remarks3");
        $this->assertEquals("remarks3", $obj->getRemarks3());
    }

    /**
     * Tests the setSurname() method.
     *
     * @return void
     */
    public function testSetSurname(): void {

        $obj = new TestCustomerTrait();

        $obj->setSurname("surname");
        $this->assertEquals("surname", $obj->getSurname());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new TestCustomerTrait();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestCustomerTrait();

        $this->assertNull($obj->getCustomerNumber());
        $this->assertNull($obj->getDatetimeLastModification());
        $this->assertNull($obj->getDeletedRecord());
        $this->assertNull($obj->getDivision());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFirstname());
        $this->assertNull($obj->getGroupCounting());
        $this->assertNull($obj->getRemarks());
        $this->assertNull($obj->getRemarks2());
        $this->assertNull($obj->getRemarks3());
        $this->assertNull($obj->getSurname());
        $this->assertNull($obj->getTitle());
    }
}
