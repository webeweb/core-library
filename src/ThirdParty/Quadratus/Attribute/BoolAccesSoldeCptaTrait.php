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
 * Acces solde cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesSoldeCptaTrait {

    /**
     * Acces solde cpta.
     *
     * @var bool
     */
    private $accesSoldeCpta;

    /**
     * Get the acces solde cpta.
     *
     * @return bool Returns the acces solde cpta.
     */
    public function getAccesSoldeCpta() {
        return $this->accesSoldeCpta;
    }

    /**
     * Set the acces solde cpta.
     *
     * @param bool $accesSoldeCpta The acces solde cpta.
     */
    public function setAccesSoldeCpta($accesSoldeCpta) {
        $this->accesSoldeCpta = $accesSoldeCpta;
        return $this;
    }
}
