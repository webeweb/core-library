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
 * Mini date achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMiniDateAchatTrait {

    /**
     * Mini date achat.
     *
     * @var DateTime|null
     */
    private $miniDateAchat;

    /**
     * Get the mini date achat.
     *
     * @return DateTime|null Returns the mini date achat.
     */
    public function getMiniDateAchat() {
        return $this->miniDateAchat;
    }

    /**
     * Set the mini date achat.
     *
     * @param DateTime|null $miniDateAchat The mini date achat.
     */
    public function setMiniDateAchat(DateTime $miniDateAchat = null) {
        $this->miniDateAchat = $miniDateAchat;
        return $this;
    }
}
