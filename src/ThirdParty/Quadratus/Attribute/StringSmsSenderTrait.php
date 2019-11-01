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
 * Sms sender trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSmsSenderTrait {

    /**
     * Sms sender.
     *
     * @var string
     */
    private $smsSender;

    /**
     * Get the sms sender.
     *
     * @return string Returns the sms sender.
     */
    public function getSmsSender() {
        return $this->smsSender;
    }

    /**
     * Set the sms sender.
     *
     * @param string $smsSender The sms sender.
     */
    public function setSmsSender($smsSender) {
        $this->smsSender = $smsSender;
        return $this;
    }
}
