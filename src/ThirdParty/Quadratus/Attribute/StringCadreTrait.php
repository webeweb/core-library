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
 * Cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCadreTrait {

    /**
     * Cadre.
     *
     * @var string
     */
    private $cadre;

    /**
     * Get the cadre.
     *
     * @return string Returns the cadre.
     */
    public function getCadre() {
        return $this->cadre;
    }

    /**
     * Set the cadre.
     *
     * @param string $cadre The cadre.
     */
    public function setCadre($cadre) {
        $this->cadre = $cadre;
        return $this;
    }
}
