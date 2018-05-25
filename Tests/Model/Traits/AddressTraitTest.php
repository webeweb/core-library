<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Traits;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Model\Traits\AddressTrait;

/**
 * Address trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Traits
 * @final
 */
final class AddressTraitTest extends PHPUnit_Framework_TestCase {

    /**
     * Address.
     *
     * @var AddressTrait
     */
    private $address;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $this->address = $this->getObjectForTrait(AddressTrait::class);
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertNull($this->address->getAddress());
        $this->assertNull($this->address->getCity());
        $this->assertNull($this->address->getCompany());
        $this->assertNull($this->address->getCountry());
        $this->assertNull($this->address->getFirstname());
        $this->assertNull($this->address->getLastname());
        $this->assertNull($this->address->getPostalCode());
    }

    /**
     * Tests the setAddress() method.
     *
     * @return void
     */
    public function testSetAddress() {

        $this->address->setAddress("address");
        $this->assertEquals("address", $this->address->getAddress());
    }

    /**
     * Tests the setCity() method.
     *
     * @return void
     */
    public function testSetCity() {

        $this->address->setCity("city");
        $this->assertEquals("city", $this->address->getCity());
    }

    /**
     * Tests the setCompany() method.
     *
     * @return void
     */
    public function testSetCompany() {

        $this->address->setCompany("company");
        $this->assertEquals("company", $this->address->getCompany());
    }

    /**
     * Tests the setCountry() method.
     *
     * @return void
     */
    public function testSetCountry() {

        $this->address->setCountry("country");
        $this->assertEquals("country", $this->address->getCountry());
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname() {

        $this->address->setFirstname("firstname");
        $this->assertEquals("firstname", $this->address->getFirstname());
    }

    /**
     * Tests the setLastname() method.
     *
     * @return void
     */
    public function testSetLastname() {

        $this->address->setLastname("lastname");
        $this->assertEquals("lastname", $this->address->getLastname());
    }

    /**
     * Tests the setPostalCode() method.
     *
     * @return void
     */
    public function testSetPostalCode() {

        $this->address->setPostalCode("postalCode");
        $this->assertEquals("postalCode", $this->address->getPostalCode());
    }

}
