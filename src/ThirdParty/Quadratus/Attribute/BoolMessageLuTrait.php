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
 * Message lu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMessageLuTrait {

    /**
     * Message lu.
     *
     * @var bool
     */
    private $messageLu;

    /**
     * Get the message lu.
     *
     * @return bool Returns the message lu.
     */
    public function getMessageLu() {
        return $this->messageLu;
    }

    /**
     * Set the message lu.
     *
     * @param bool $messageLu The message lu.
     */
    public function setMessageLu($messageLu) {
        $this->messageLu = $messageLu;
        return $this;
    }
}
