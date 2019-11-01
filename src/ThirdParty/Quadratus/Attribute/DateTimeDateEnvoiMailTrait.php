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
 * Date envoi mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEnvoiMailTrait {

    /**
     * Date envoi mail.
     *
     * @var DateTime|null
     */
    private $dateEnvoiMail;

    /**
     * Get the date envoi mail.
     *
     * @return DateTime|null Returns the date envoi mail.
     */
    public function getDateEnvoiMail() {
        return $this->dateEnvoiMail;
    }

    /**
     * Set the date envoi mail.
     *
     * @param DateTime|null $dateEnvoiMail The date envoi mail.
     */
    public function setDateEnvoiMail(DateTime $dateEnvoiMail = null) {
        $this->dateEnvoiMail = $dateEnvoiMail;
        return $this;
    }
}
