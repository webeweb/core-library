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
 * Variante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVarianteTrait {

    /**
     * Variante.
     *
     * @var bool
     */
    private $variante;

    /**
     * Get the variante.
     *
     * @return bool Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Set the variante.
     *
     * @param bool $variante The variante.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }
}
