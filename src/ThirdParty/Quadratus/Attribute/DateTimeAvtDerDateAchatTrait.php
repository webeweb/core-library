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

use DateTime;

/**
 * Avt der date achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeAvtDerDateAchatTrait {

    /**
     * Avt der date achat.
     *
     * @var DateTime|null
     */
    private $avtDerDateAchat;

    /**
     * Get the avt der date achat.
     *
     * @return DateTime|null Returns the avt der date achat.
     */
    public function getAvtDerDateAchat() {
        return $this->avtDerDateAchat;
    }

    /**
     * Set the avt der date achat.
     *
     * @param DateTime|null $avtDerDateAchat The avt der date achat.
     */
    public function setAvtDerDateAchat(DateTime $avtDerDateAchat = null) {
        $this->avtDerDateAchat = $avtDerDateAchat;
        return $this;
    }
}
