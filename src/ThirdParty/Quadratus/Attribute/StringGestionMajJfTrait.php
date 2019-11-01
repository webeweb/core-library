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
 * Gestion maj jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionMajJfTrait {

    /**
     * Gestion maj jf.
     *
     * @var string
     */
    private $gestionMajJf;

    /**
     * Get the gestion maj jf.
     *
     * @return string Returns the gestion maj jf.
     */
    public function getGestionMajJf() {
        return $this->gestionMajJf;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string $gestionMajJf The gestion maj jf.
     */
    public function setGestionMajJf($gestionMajJf) {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }
}
