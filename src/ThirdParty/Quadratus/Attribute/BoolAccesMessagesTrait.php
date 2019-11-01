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
 * Acces messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesMessagesTrait {

    /**
     * Acces messages.
     *
     * @var bool
     */
    private $accesMessages;

    /**
     * Get the acces messages.
     *
     * @return bool Returns the acces messages.
     */
    public function getAccesMessages() {
        return $this->accesMessages;
    }

    /**
     * Set the acces messages.
     *
     * @param bool $accesMessages The acces messages.
     */
    public function setAccesMessages($accesMessages) {
        $this->accesMessages = $accesMessages;
        return $this;
    }
}
