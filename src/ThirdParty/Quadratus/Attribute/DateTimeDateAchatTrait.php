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
 * Date achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAchatTrait {

    /**
     * Date achat.
     *
     * @var DateTime|null
     */
    private $dateAchat;

    /**
     * Get the date achat.
     *
     * @return DateTime|null Returns the date achat.
     */
    public function getDateAchat() {
        return $this->dateAchat;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime|null $dateAchat The date achat.
     */
    public function setDateAchat(DateTime $dateAchat = null) {
        $this->dateAchat = $dateAchat;
        return $this;
    }
}
