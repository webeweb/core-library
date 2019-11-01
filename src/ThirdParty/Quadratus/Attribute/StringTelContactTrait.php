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
 * Tel contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelContactTrait {

    /**
     * Tel contact.
     *
     * @var string
     */
    private $telContact;

    /**
     * Get the tel contact.
     *
     * @return string Returns the tel contact.
     */
    public function getTelContact() {
        return $this->telContact;
    }

    /**
     * Set the tel contact.
     *
     * @param string $telContact The tel contact.
     */
    public function setTelContact($telContact) {
        $this->telContact = $telContact;
        return $this;
    }
}
