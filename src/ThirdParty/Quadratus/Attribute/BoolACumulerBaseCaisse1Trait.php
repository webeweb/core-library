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
 * A cumuler base caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACumulerBaseCaisse1Trait {

    /**
     * A cumuler base caisse1.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse1;

    /**
     * Get the a cumuler base caisse1.
     *
     * @return bool Returns the a cumuler base caisse1.
     */
    public function getACumulerBaseCaisse1() {
        return $this->aCumulerBaseCaisse1;
    }

    /**
     * Set the a cumuler base caisse1.
     *
     * @param bool $aCumulerBaseCaisse1 The a cumuler base caisse1.
     */
    public function setACumulerBaseCaisse1($aCumulerBaseCaisse1) {
        $this->aCumulerBaseCaisse1 = $aCumulerBaseCaisse1;
        return $this;
    }
}
