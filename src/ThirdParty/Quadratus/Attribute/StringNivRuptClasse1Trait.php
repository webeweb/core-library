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
 * Niv rupt classe1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivRuptClasse1Trait {

    /**
     * Niv rupt classe1.
     *
     * @var string
     */
    private $nivRuptClasse1;

    /**
     * Get the niv rupt classe1.
     *
     * @return string Returns the niv rupt classe1.
     */
    public function getNivRuptClasse1() {
        return $this->nivRuptClasse1;
    }

    /**
     * Set the niv rupt classe1.
     *
     * @param string $nivRuptClasse1 The niv rupt classe1.
     */
    public function setNivRuptClasse1($nivRuptClasse1) {
        $this->nivRuptClasse1 = $nivRuptClasse1;
        return $this;
    }
}
