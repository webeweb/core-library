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
 * Niv rupt classe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivRuptClasse5Trait {

    /**
     * Niv rupt classe5.
     *
     * @var string
     */
    private $nivRuptClasse5;

    /**
     * Get the niv rupt classe5.
     *
     * @return string Returns the niv rupt classe5.
     */
    public function getNivRuptClasse5() {
        return $this->nivRuptClasse5;
    }

    /**
     * Set the niv rupt classe5.
     *
     * @param string $nivRuptClasse5 The niv rupt classe5.
     */
    public function setNivRuptClasse5($nivRuptClasse5) {
        $this->nivRuptClasse5 = $nivRuptClasse5;
        return $this;
    }
}
