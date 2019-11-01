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
 * Inactif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInactifTrait {

    /**
     * Inactif.
     *
     * @var bool
     */
    private $inactif;

    /**
     * Get the inactif.
     *
     * @return bool Returns the inactif.
     */
    public function getInactif() {
        return $this->inactif;
    }

    /**
     * Set the inactif.
     *
     * @param bool $inactif The inactif.
     */
    public function setInactif($inactif) {
        $this->inactif = $inactif;
        return $this;
    }
}
