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
 * Contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContactTrait {

    /**
     * Contact.
     *
     * @var string
     */
    private $contact;

    /**
     * Get the contact.
     *
     * @return string Returns the contact.
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Set the contact.
     *
     * @param string $contact The contact.
     */
    public function setContact($contact) {
        $this->contact = $contact;
        return $this;
    }
}
