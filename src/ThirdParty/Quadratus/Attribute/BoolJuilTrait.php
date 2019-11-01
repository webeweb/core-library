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
 * Juil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJuilTrait {

    /**
     * Juil.
     *
     * @var bool
     */
    private $juil;

    /**
     * Get the juil.
     *
     * @return bool Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Set the juil.
     *
     * @param bool $juil The juil.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }
}
