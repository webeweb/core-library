<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Traits;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Model\Traits\PhoneNumbersTrait;

/**
 * Phone numbers trait test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Traits
 * @final
 */
final class PhoneNumbersTraitTest extends PHPUnit_Framework_TestCase {

    /**
     * Phone numbers.
     *
     * @var PhoneNumbersTrait
     */
    private $phoneNumbers;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $this->phoneNumbers = $this->getObjectForTrait(PhoneNumbersTrait::class);
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals(null, $this->phoneNumbers->getMobileNumber());
        $this->assertEquals(null, $this->phoneNumbers->getPhoneNumber());
    }

    /**
     * Tests the setMobileNumber() method.
     *
     * @return void
     */
    public function testSetMobileNumber() {

        $this->phoneNumbers->setMobileNumber("mobileNumber");
        $this->assertEquals("mobileNumber", $this->phoneNumbers->getMobileNumber());
    }

    /**
     * Tests the setPhoneNumber() method.
     *
     * @return void
     */
    public function testSetCity() {

        $this->phoneNumbers->setPhoneNumber("phoneNumber");
        $this->assertEquals("phoneNumber", $this->phoneNumbers->getPhoneNumber());
    }

}
