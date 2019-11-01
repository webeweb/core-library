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
 * Der date achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDerDateAchatTrait {

    /**
     * Der date achat.
     *
     * @var DateTime|null
     */
    private $derDateAchat;

    /**
     * Get the der date achat.
     *
     * @return DateTime|null Returns the der date achat.
     */
    public function getDerDateAchat() {
        return $this->derDateAchat;
    }

    /**
     * Set the der date achat.
     *
     * @param DateTime|null $derDateAchat The der date achat.
     */
    public function setDerDateAchat(DateTime $derDateAchat = null) {
        $this->derDateAchat = $derDateAchat;
        return $this;
    }
}
