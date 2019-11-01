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
 * Numero carte sejour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCarteSejourTrait {

    /**
     * Numero carte sejour.
     *
     * @var string
     */
    private $numeroCarteSejour;

    /**
     * Get the numero carte sejour.
     *
     * @return string Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour() {
        return $this->numeroCarteSejour;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string $numeroCarteSejour The numero carte sejour.
     */
    public function setNumeroCarteSejour($numeroCarteSejour) {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }
}
