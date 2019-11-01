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
 * Message vu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMessageVuTrait {

    /**
     * Message vu.
     *
     * @var bool
     */
    private $messageVu;

    /**
     * Get the message vu.
     *
     * @return bool Returns the message vu.
     */
    public function getMessageVu() {
        return $this->messageVu;
    }

    /**
     * Set the message vu.
     *
     * @param bool $messageVu The message vu.
     */
    public function setMessageVu($messageVu) {
        $this->messageVu = $messageVu;
        return $this;
    }
}
