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
 * Contact centre impots trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContactCentreImpotsTrait {

    /**
     * Contact centre impots.
     *
     * @var string
     */
    private $contactCentreImpots;

    /**
     * Get the contact centre impots.
     *
     * @return string Returns the contact centre impots.
     */
    public function getContactCentreImpots() {
        return $this->contactCentreImpots;
    }

    /**
     * Set the contact centre impots.
     *
     * @param string $contactCentreImpots The contact centre impots.
     */
    public function setContactCentreImpots($contactCentreImpots) {
        $this->contactCentreImpots = $contactCentreImpots;
        return $this;
    }
}
