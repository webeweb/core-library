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
 * Valeur35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur35Trait {

    /**
     * Valeur35.
     *
     * @var float
     */
    private $valeur35;

    /**
     * Get the valeur35.
     *
     * @return float Returns the valeur35.
     */
    public function getValeur35() {
        return $this->valeur35;
    }

    /**
     * Set the valeur35.
     *
     * @param float $valeur35 The valeur35.
     */
    public function setValeur35($valeur35) {
        $this->valeur35 = $valeur35;
        return $this;
    }
}
