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
 * Delai nombre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiNombreTrait {

    /**
     * Delai nombre.
     *
     * @var int
     */
    private $delaiNombre;

    /**
     * Get the delai nombre.
     *
     * @return int Returns the delai nombre.
     */
    public function getDelaiNombre() {
        return $this->delaiNombre;
    }

    /**
     * Set the delai nombre.
     *
     * @param int $delaiNombre The delai nombre.
     */
    public function setDelaiNombre($delaiNombre) {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }
}
