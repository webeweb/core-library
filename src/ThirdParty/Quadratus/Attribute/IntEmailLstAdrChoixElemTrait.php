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
 * Email lst adr choix elem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmailLstAdrChoixElemTrait {

    /**
     * Email lst adr choix elem.
     *
     * @var int
     */
    private $emailLstAdrChoixElem;

    /**
     * Get the email lst adr choix elem.
     *
     * @return int Returns the email lst adr choix elem.
     */
    public function getEmailLstAdrChoixElem() {
        return $this->emailLstAdrChoixElem;
    }

    /**
     * Set the email lst adr choix elem.
     *
     * @param int $emailLstAdrChoixElem The email lst adr choix elem.
     */
    public function setEmailLstAdrChoixElem($emailLstAdrChoixElem) {
        $this->emailLstAdrChoixElem = $emailLstAdrChoixElem;
        return $this;
    }
}
