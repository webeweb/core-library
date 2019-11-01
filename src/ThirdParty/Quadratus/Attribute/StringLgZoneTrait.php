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
 * Lg zone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLgZoneTrait {

    /**
     * Lg zone.
     *
     * @var string
     */
    private $lgZone;

    /**
     * Get the lg zone.
     *
     * @return string Returns the lg zone.
     */
    public function getLgZone() {
        return $this->lgZone;
    }

    /**
     * Set the lg zone.
     *
     * @param string $lgZone The lg zone.
     */
    public function setLgZone($lgZone) {
        $this->lgZone = $lgZone;
        return $this;
    }
}
