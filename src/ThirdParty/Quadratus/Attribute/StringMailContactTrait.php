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
 * Mail contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailContactTrait {

    /**
     * Mail contact.
     *
     * @var string
     */
    private $mailContact;

    /**
     * Get the mail contact.
     *
     * @return string Returns the mail contact.
     */
    public function getMailContact() {
        return $this->mailContact;
    }

    /**
     * Set the mail contact.
     *
     * @param string $mailContact The mail contact.
     */
    public function setMailContact($mailContact) {
        $this->mailContact = $mailContact;
        return $this;
    }
}
