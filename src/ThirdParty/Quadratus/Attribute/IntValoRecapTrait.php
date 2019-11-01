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
 * Valo recap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntValoRecapTrait {

    /**
     * Valo recap.
     *
     * @var int
     */
    private $valoRecap;

    /**
     * Get the valo recap.
     *
     * @return int Returns the valo recap.
     */
    public function getValoRecap() {
        return $this->valoRecap;
    }

    /**
     * Set the valo recap.
     *
     * @param int $valoRecap The valo recap.
     */
    public function setValoRecap($valoRecap) {
        $this->valoRecap = $valoRecap;
        return $this;
    }
}
