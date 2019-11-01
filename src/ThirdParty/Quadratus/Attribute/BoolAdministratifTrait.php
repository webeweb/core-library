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
 * Administratif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdministratifTrait {

    /**
     * Administratif.
     *
     * @var bool
     */
    private $administratif;

    /**
     * Get the administratif.
     *
     * @return bool Returns the administratif.
     */
    public function getAdministratif() {
        return $this->administratif;
    }

    /**
     * Set the administratif.
     *
     * @param bool $administratif The administratif.
     */
    public function setAdministratif($administratif) {
        $this->administratif = $administratif;
        return $this;
    }
}
