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
 * Numero deux cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroDeuxCbTrait {

    /**
     * Numero deux cb.
     *
     * @var int
     */
    private $numeroDeuxCb;

    /**
     * Get the numero deux cb.
     *
     * @return int Returns the numero deux cb.
     */
    public function getNumeroDeuxCb() {
        return $this->numeroDeuxCb;
    }

    /**
     * Set the numero deux cb.
     *
     * @param int $numeroDeuxCb The numero deux cb.
     */
    public function setNumeroDeuxCb($numeroDeuxCb) {
        $this->numeroDeuxCb = $numeroDeuxCb;
        return $this;
    }
}
