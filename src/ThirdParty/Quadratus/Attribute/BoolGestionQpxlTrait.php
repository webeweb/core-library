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
 * Gestion qpxl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionQpxlTrait {

    /**
     * Gestion qpxl.
     *
     * @var bool
     */
    private $gestionQpxl;

    /**
     * Get the gestion qpxl.
     *
     * @return bool Returns the gestion qpxl.
     */
    public function getGestionQpxl() {
        return $this->gestionQpxl;
    }

    /**
     * Set the gestion qpxl.
     *
     * @param bool $gestionQpxl The gestion qpxl.
     */
    public function setGestionQpxl($gestionQpxl) {
        $this->gestionQpxl = $gestionQpxl;
        return $this;
    }
}
