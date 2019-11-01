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
 * Email agenda dmd confirm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailAgendaDmdConfirmTrait {

    /**
     * Email agenda dmd confirm.
     *
     * @var string
     */
    private $emailAgendaDmdConfirm;

    /**
     * Get the email agenda dmd confirm.
     *
     * @return string Returns the email agenda dmd confirm.
     */
    public function getEmailAgendaDmdConfirm() {
        return $this->emailAgendaDmdConfirm;
    }

    /**
     * Set the email agenda dmd confirm.
     *
     * @param string $emailAgendaDmdConfirm The email agenda dmd confirm.
     */
    public function setEmailAgendaDmdConfirm($emailAgendaDmdConfirm) {
        $this->emailAgendaDmdConfirm = $emailAgendaDmdConfirm;
        return $this;
    }
}
