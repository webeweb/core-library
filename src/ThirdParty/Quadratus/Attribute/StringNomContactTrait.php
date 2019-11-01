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
 * Nom contact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomContactTrait {

    /**
     * Nom contact.
     *
     * @var string
     */
    private $nomContact;

    /**
     * Get the nom contact.
     *
     * @return string Returns the nom contact.
     */
    public function getNomContact() {
        return $this->nomContact;
    }

    /**
     * Set the nom contact.
     *
     * @param string $nomContact The nom contact.
     */
    public function setNomContact($nomContact) {
        $this->nomContact = $nomContact;
        return $this;
    }
}
