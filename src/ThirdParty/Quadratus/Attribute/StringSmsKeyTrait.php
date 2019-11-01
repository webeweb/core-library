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
 * Sms key trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSmsKeyTrait {

    /**
     * Sms key.
     *
     * @var string
     */
    private $smsKey;

    /**
     * Get the sms key.
     *
     * @return string Returns the sms key.
     */
    public function getSmsKey() {
        return $this->smsKey;
    }

    /**
     * Set the sms key.
     *
     * @param string $smsKey The sms key.
     */
    public function setSmsKey($smsKey) {
        $this->smsKey = $smsKey;
        return $this;
    }
}
