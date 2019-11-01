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
 * Sms api key trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSmsApiKeyTrait {

    /**
     * Sms api key.
     *
     * @var string
     */
    private $smsApiKey;

    /**
     * Get the sms api key.
     *
     * @return string Returns the sms api key.
     */
    public function getSmsApiKey() {
        return $this->smsApiKey;
    }

    /**
     * Set the sms api key.
     *
     * @param string $smsApiKey The sms api key.
     */
    public function setSmsApiKey($smsApiKey) {
        $this->smsApiKey = $smsApiKey;
        return $this;
    }
}
