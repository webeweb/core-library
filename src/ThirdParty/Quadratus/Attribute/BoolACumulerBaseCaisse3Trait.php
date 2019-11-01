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
 * A cumuler base caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACumulerBaseCaisse3Trait {

    /**
     * A cumuler base caisse3.
     *
     * @var bool
     */
    private $aCumulerBaseCaisse3;

    /**
     * Get the a cumuler base caisse3.
     *
     * @return bool Returns the a cumuler base caisse3.
     */
    public function getACumulerBaseCaisse3() {
        return $this->aCumulerBaseCaisse3;
    }

    /**
     * Set the a cumuler base caisse3.
     *
     * @param bool $aCumulerBaseCaisse3 The a cumuler base caisse3.
     */
    public function setACumulerBaseCaisse3($aCumulerBaseCaisse3) {
        $this->aCumulerBaseCaisse3 = $aCumulerBaseCaisse3;
        return $this;
    }
}
