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
 * Lib zone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibZoneTrait {

    /**
     * Lib zone.
     *
     * @var string
     */
    private $libZone;

    /**
     * Get the lib zone.
     *
     * @return string Returns the lib zone.
     */
    public function getLibZone() {
        return $this->libZone;
    }

    /**
     * Set the lib zone.
     *
     * @param string $libZone The lib zone.
     */
    public function setLibZone($libZone) {
        $this->libZone = $libZone;
        return $this;
    }
}
