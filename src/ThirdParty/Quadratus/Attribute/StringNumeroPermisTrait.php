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
 * Numero permis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroPermisTrait {

    /**
     * Numero permis.
     *
     * @var string
     */
    private $numeroPermis;

    /**
     * Get the numero permis.
     *
     * @return string Returns the numero permis.
     */
    public function getNumeroPermis() {
        return $this->numeroPermis;
    }

    /**
     * Set the numero permis.
     *
     * @param string $numeroPermis The numero permis.
     */
    public function setNumeroPermis($numeroPermis) {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }
}
