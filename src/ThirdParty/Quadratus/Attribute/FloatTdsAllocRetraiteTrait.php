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
 * Tds alloc retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsAllocRetraiteTrait {

    /**
     * Tds alloc retraite.
     *
     * @var float
     */
    private $tdsAllocRetraite;

    /**
     * Get the tds alloc retraite.
     *
     * @return float Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite() {
        return $this->tdsAllocRetraite;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }
}
