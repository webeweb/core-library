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
 * Tds alloc chom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsAllocChomTrait {

    /**
     * Tds alloc chom.
     *
     * @var float
     */
    private $tdsAllocChom;

    /**
     * Get the tds alloc chom.
     *
     * @return float Returns the tds alloc chom.
     */
    public function getTdsAllocChom() {
        return $this->tdsAllocChom;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float $tdsAllocChom The tds alloc chom.
     */
    public function setTdsAllocChom($tdsAllocChom) {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }
}
