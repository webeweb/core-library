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
 * Gestion ducs2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionDucs2Trait {

    /**
     * Gestion ducs2.
     *
     * @var string
     */
    private $gestionDucs2;

    /**
     * Get the gestion ducs2.
     *
     * @return string Returns the gestion ducs2.
     */
    public function getGestionDucs2() {
        return $this->gestionDucs2;
    }

    /**
     * Set the gestion ducs2.
     *
     * @param string $gestionDucs2 The gestion ducs2.
     */
    public function setGestionDucs2($gestionDucs2) {
        $this->gestionDucs2 = $gestionDucs2;
        return $this;
    }
}
