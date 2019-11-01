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
 * Gestion dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionDsnTrait {

    /**
     * Gestion dsn.
     *
     * @var bool
     */
    private $gestionDsn;

    /**
     * Get the gestion dsn.
     *
     * @return bool Returns the gestion dsn.
     */
    public function getGestionDsn() {
        return $this->gestionDsn;
    }

    /**
     * Set the gestion dsn.
     *
     * @param bool $gestionDsn The gestion dsn.
     */
    public function setGestionDsn($gestionDsn) {
        $this->gestionDsn = $gestionDsn;
        return $this;
    }
}
