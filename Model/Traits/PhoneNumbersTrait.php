<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Traits;

/**
 * Phone numbers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Traits
 */
trait PhoneNumbersTrait {

    /**
     * Mobile number.
     *
     * @var string
     */
    private $mobileNumber;

    /**
     * Phone number.
     *
     * @var string
     */
    private $phoneNumber;

    /**
     * Get the mobile number.
     *
     * @return string Returns the mobile number.
     */
    public function getMobileNumber() {
        return $this->mobileNumber;
    }

    /**
     * Get the phone number.
     *
     * @return string Returns the phone number.
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * Set the mobile number.
     *
     * @param string $mobileNumber
     * @return mixed Returns the class using this trait.
     */
    public function setMobileNumber($mobileNumber) {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * Set the phone number.
     *
     * @param string $phoneNumber The phone number.
     * @return mixed Returns the class using this trait.
     */
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

}
