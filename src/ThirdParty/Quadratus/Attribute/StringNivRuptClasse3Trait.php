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
 * Niv rupt classe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivRuptClasse3Trait {

    /**
     * Niv rupt classe3.
     *
     * @var string
     */
    private $nivRuptClasse3;

    /**
     * Get the niv rupt classe3.
     *
     * @return string Returns the niv rupt classe3.
     */
    public function getNivRuptClasse3() {
        return $this->nivRuptClasse3;
    }

    /**
     * Set the niv rupt classe3.
     *
     * @param string $nivRuptClasse3 The niv rupt classe3.
     */
    public function setNivRuptClasse3($nivRuptClasse3) {
        $this->nivRuptClasse3 = $nivRuptClasse3;
        return $this;
    }
}
