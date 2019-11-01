<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Sms user login trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSmsUserLoginTrait {

    /**
     * Sms user login.
     *
     * @var string
     */
    private $smsUserLogin;

    /**
     * Get the sms user login.
     *
     * @return string Returns the sms user login.
     */
    public function getSmsUserLogin() {
        return $this->smsUserLogin;
    }

    /**
     * Set the sms user login.
     *
     * @param string $smsUserLogin The sms user login.
     */
    public function setSmsUserLogin($smsUserLogin) {
        $this->smsUserLogin = $smsUserLogin;
        return $this;
    }
}
