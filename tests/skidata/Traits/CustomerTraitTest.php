<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Traits;

use DateTime;
use Throwable;
use WBW\Library\SkiData\Tests\AbstractTestCase;
use WBW\Library\SkiData\Tests\Fixtures\Traits\TestCustomerTrait;

/**
 * Customer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Traits
 */
class CustomerTraitTest extends AbstractTestCase {

    /**
     * Test setCustomerNumber()
     *
     * @return void
     */
    public function testSetCustomerNumber(): void {

        $obj = new TestCustomerTrait();

        $obj->setCustomerNumber(1);
        $this->assertEquals(1, $obj->getCustomerNumber());
    }

    /**
     * Test setDatetimeLastModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatetimeLastModification(): void {

        $obj = new TestCustomerTrait();

        $obj->setDatetimeLastModification(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDatetimeLastModification()->format("Y-m-d"));
    }

    /**
     * Test setDeletedRecord()
     *
     * @return void
     */
    public function testSetDeletedRecord(): void {

        $obj = new TestCustomerTrait();

        $obj->setDeletedRecord(true);
        $this->assertTrue($obj->getDeletedRecord());
    }

    /**
     * Test setDivision()
     *
     * @return void
     */
    public function testSetDivision(): void {

        $obj = new TestCustomerTrait();

        $obj->setDivision("division");
        $this->assertEquals("division", $obj->getDivision());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new TestCustomerTrait();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setFirstname()
     *
     * @return void
     */
    public function testSetFirstname(): void {

        $obj = new TestCustomerTrait();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }

    /**
     * Test setGroupCounting()
     *
     * @return void
     */
    public function testSetGroupCounting(): void {

        $obj = new TestCustomerTrait();

        $obj->setGroupCounting(true);
        $this->assertTrue($obj->getGroupCounting());
    }

    /**
     * Test setRemarks()
     *
     * @return void
     */
    public function testSetRemarks(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks("remarks");
        $this->assertEquals("remarks", $obj->getRemarks());
    }

    /**
     * Test setRemarks2()
     *
     * @return void
     */
    public function testSetRemarks2(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks2("remarks2");
        $this->assertEquals("remarks2", $obj->getRemarks2());
    }

    /**
     * Test setRemarks3()
     *
     * @return void
     */
    public function testSetRemarks3(): void {

        $obj = new TestCustomerTrait();

        $obj->setRemarks3("remarks3");
        $this->assertEquals("remarks3", $obj->getRemarks3());
    }

    /**
     * Test setSurname()
     *
     * @return void
     */
    public function testSetSurname(): void {

        $obj = new TestCustomerTrait();

        $obj->setSurname("surname");
        $this->assertEquals("surname", $obj->getSurname());
    }

    /**
     * Test setTitle()
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new TestCustomerTrait();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }
}
