<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

/**
 * Phone numbers interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model
 */
interface PhoneNumbersInterface {

    /**
     * Get the mobile number.
     *
     * @return string Returns the mobile number.
     */
    public function getMobileNumber();

    /**
     * Get the phone number.
     *
     * @return string Returns the phone number.
     */
    public function getPhoneNumber();
}
