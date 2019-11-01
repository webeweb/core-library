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
 * Centre inactif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCentreInactifTrait {

    /**
     * Centre inactif.
     *
     * @var bool
     */
    private $centreInactif;

    /**
     * Get the centre inactif.
     *
     * @return bool Returns the centre inactif.
     */
    public function getCentreInactif() {
        return $this->centreInactif;
    }

    /**
     * Set the centre inactif.
     *
     * @param bool $centreInactif The centre inactif.
     */
    public function setCentreInactif($centreInactif) {
        $this->centreInactif = $centreInactif;
        return $this;
    }
}
