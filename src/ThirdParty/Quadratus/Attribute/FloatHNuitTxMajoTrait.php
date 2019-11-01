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
 * H nuit tx majo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHNuitTxMajoTrait {

    /**
     * H nuit tx majo.
     *
     * @var float
     */
    private $hNuitTxMajo;

    /**
     * Get the h nuit tx majo.
     *
     * @return float Returns the h nuit tx majo.
     */
    public function getHNuitTxMajo() {
        return $this->hNuitTxMajo;
    }

    /**
     * Set the h nuit tx majo.
     *
     * @param float $hNuitTxMajo The h nuit tx majo.
     */
    public function setHNuitTxMajo($hNuitTxMajo) {
        $this->hNuitTxMajo = $hNuitTxMajo;
        return $this;
    }
}
