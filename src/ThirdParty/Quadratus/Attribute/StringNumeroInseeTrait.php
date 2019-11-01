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
 * Numero insee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroInseeTrait {

    /**
     * Numero insee.
     *
     * @var string
     */
    private $numeroInsee;

    /**
     * Get the numero insee.
     *
     * @return string Returns the numero insee.
     */
    public function getNumeroInsee() {
        return $this->numeroInsee;
    }

    /**
     * Set the numero insee.
     *
     * @param string $numeroInsee The numero insee.
     */
    public function setNumeroInsee($numeroInsee) {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }
}
