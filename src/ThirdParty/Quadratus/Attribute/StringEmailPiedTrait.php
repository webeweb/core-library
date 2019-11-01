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
 * Email pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmailPiedTrait {

    /**
     * Email pied.
     *
     * @var string
     */
    private $emailPied;

    /**
     * Get the email pied.
     *
     * @return string Returns the email pied.
     */
    public function getEmailPied() {
        return $this->emailPied;
    }

    /**
     * Set the email pied.
     *
     * @param string $emailPied The email pied.
     */
    public function setEmailPied($emailPied) {
        $this->emailPied = $emailPied;
        return $this;
    }
}
