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
 * Valeur37 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur37Trait {

    /**
     * Valeur37.
     *
     * @var float
     */
    private $valeur37;

    /**
     * Get the valeur37.
     *
     * @return float Returns the valeur37.
     */
    public function getValeur37() {
        return $this->valeur37;
    }

    /**
     * Set the valeur37.
     *
     * @param float $valeur37 The valeur37.
     */
    public function setValeur37($valeur37) {
        $this->valeur37 = $valeur37;
        return $this;
    }
}
