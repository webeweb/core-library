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
 * Contact cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContactCgaTrait {

    /**
     * Contact cga.
     *
     * @var string
     */
    private $contactCga;

    /**
     * Get the contact cga.
     *
     * @return string Returns the contact cga.
     */
    public function getContactCga() {
        return $this->contactCga;
    }

    /**
     * Set the contact cga.
     *
     * @param string $contactCga The contact cga.
     */
    public function setContactCga($contactCga) {
        $this->contactCga = $contactCga;
        return $this;
    }
}
