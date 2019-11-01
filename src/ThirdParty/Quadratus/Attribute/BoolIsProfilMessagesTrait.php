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
 * Is profil messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsProfilMessagesTrait {

    /**
     * Is profil messages.
     *
     * @var bool
     */
    private $isProfilMessages;

    /**
     * Get the is profil messages.
     *
     * @return bool Returns the is profil messages.
     */
    public function getIsProfilMessages() {
        return $this->isProfilMessages;
    }

    /**
     * Set the is profil messages.
     *
     * @param bool $isProfilMessages The is profil messages.
     */
    public function setIsProfilMessages($isProfilMessages) {
        $this->isProfilMessages = $isProfilMessages;
        return $this;
    }
}
