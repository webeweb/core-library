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
 * Controle ref tire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControleRefTireTrait {

    /**
     * Controle ref tire.
     *
     * @var bool
     */
    private $controleRefTire;

    /**
     * Get the controle ref tire.
     *
     * @return bool Returns the controle ref tire.
     */
    public function getControleRefTire() {
        return $this->controleRefTire;
    }

    /**
     * Set the controle ref tire.
     *
     * @param bool $controleRefTire The controle ref tire.
     */
    public function setControleRefTire($controleRefTire) {
        $this->controleRefTire = $controleRefTire;
        return $this;
    }
}
