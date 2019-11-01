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
 * Date envoi message trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEnvoiMessageTrait {

    /**
     * Date envoi message.
     *
     * @var DateTime|null
     */
    private $dateEnvoiMessage;

    /**
     * Get the date envoi message.
     *
     * @return DateTime|null Returns the date envoi message.
     */
    public function getDateEnvoiMessage() {
        return $this->dateEnvoiMessage;
    }

    /**
     * Set the date envoi message.
     *
     * @param DateTime|null $dateEnvoiMessage The date envoi message.
     */
    public function setDateEnvoiMessage(DateTime $dateEnvoiMessage = null) {
        $this->dateEnvoiMessage = $dateEnvoiMessage;
        return $this;
    }
}
