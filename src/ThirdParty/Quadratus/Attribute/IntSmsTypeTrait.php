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
 * Sms type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSmsTypeTrait {

    /**
     * Sms type.
     *
     * @var int
     */
    private $smsType;

    /**
     * Get the sms type.
     *
     * @return int Returns the sms type.
     */
    public function getSmsType() {
        return $this->smsType;
    }

    /**
     * Set the sms type.
     *
     * @param int $smsType The sms type.
     */
    public function setSmsType($smsType) {
        $this->smsType = $smsType;
        return $this;
    }
}
