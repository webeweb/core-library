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
 * A cumuler base cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACumulerBaseCpTrait {

    /**
     * A cumuler base cp.
     *
     * @var bool
     */
    private $aCumulerBaseCp;

    /**
     * Get the a cumuler base cp.
     *
     * @return bool Returns the a cumuler base cp.
     */
    public function getACumulerBaseCp() {
        return $this->aCumulerBaseCp;
    }

    /**
     * Set the a cumuler base cp.
     *
     * @param bool $aCumulerBaseCp The a cumuler base cp.
     */
    public function setACumulerBaseCp($aCumulerBaseCp) {
        $this->aCumulerBaseCp = $aCumulerBaseCp;
        return $this;
    }
}
