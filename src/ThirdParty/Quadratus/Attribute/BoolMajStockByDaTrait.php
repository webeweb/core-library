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
 * Maj stock by da trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajStockByDaTrait {

    /**
     * Maj stock by da.
     *
     * @var bool
     */
    private $majStockByDa;

    /**
     * Get the maj stock by da.
     *
     * @return bool Returns the maj stock by da.
     */
    public function getMajStockByDa() {
        return $this->majStockByDa;
    }

    /**
     * Set the maj stock by da.
     *
     * @param bool $majStockByDa The maj stock by da.
     */
    public function setMajStockByDa($majStockByDa) {
        $this->majStockByDa = $majStockByDa;
        return $this;
    }
}
