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
 * Gestion maj dim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionMajDimTrait {

    /**
     * Gestion maj dim.
     *
     * @var string
     */
    private $gestionMajDim;

    /**
     * Get the gestion maj dim.
     *
     * @return string Returns the gestion maj dim.
     */
    public function getGestionMajDim() {
        return $this->gestionMajDim;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string $gestionMajDim The gestion maj dim.
     */
    public function setGestionMajDim($gestionMajDim) {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }
}
