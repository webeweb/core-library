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
 * Ordinateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrdinateurTrait {

    /**
     * Ordinateur.
     *
     * @var string
     */
    private $ordinateur;

    /**
     * Get the ordinateur.
     *
     * @return string Returns the ordinateur.
     */
    public function getOrdinateur() {
        return $this->ordinateur;
    }

    /**
     * Set the ordinateur.
     *
     * @param string $ordinateur The ordinateur.
     */
    public function setOrdinateur($ordinateur) {
        $this->ordinateur = $ordinateur;
        return $this;
    }
}
