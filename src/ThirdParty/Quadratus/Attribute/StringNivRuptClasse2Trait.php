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
 * Niv rupt classe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivRuptClasse2Trait {

    /**
     * Niv rupt classe2.
     *
     * @var string
     */
    private $nivRuptClasse2;

    /**
     * Get the niv rupt classe2.
     *
     * @return string Returns the niv rupt classe2.
     */
    public function getNivRuptClasse2() {
        return $this->nivRuptClasse2;
    }

    /**
     * Set the niv rupt classe2.
     *
     * @param string $nivRuptClasse2 The niv rupt classe2.
     */
    public function setNivRuptClasse2($nivRuptClasse2) {
        $this->nivRuptClasse2 = $nivRuptClasse2;
        return $this;
    }
}
