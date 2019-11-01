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
 * A cumuler base caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACumulerBaseCaisse2Trait {

    /**
     * A cumuler base caisse2.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse2;

    /**
     * Get the a cumuler base caisse2.
     *
     * @return bool Returns the a cumuler base caisse2.
     */
    public function getACumulerBaseCaisse2() {
        return $this->aCumulerBaseCaisse2;
    }

    /**
     * Set the a cumuler base caisse2.
     *
     * @param bool $aCumulerBaseCaisse2 The a cumuler base caisse2.
     */
    public function setACumulerBaseCaisse2($aCumulerBaseCaisse2) {
        $this->aCumulerBaseCaisse2 = $aCumulerBaseCaisse2;
        return $this;
    }
}
