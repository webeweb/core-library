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
 * Personne contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPersonneContactTrait {

    /**
     * Personne contact.
     *
     * @var string
     */
    private $personneContact;

    /**
     * Get the personne contact.
     *
     * @return string Returns the personne contact.
     */
    public function getPersonneContact() {
        return $this->personneContact;
    }

    /**
     * Set the personne contact.
     *
     * @param string $personneContact The personne contact.
     */
    public function setPersonneContact($personneContact) {
        $this->personneContact = $personneContact;
        return $this;
    }
}
