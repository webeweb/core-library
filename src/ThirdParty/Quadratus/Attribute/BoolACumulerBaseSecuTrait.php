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
 * A cumuler base secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACumulerBaseSecuTrait {

    /**
     * A cumuler base secu.
     *
     * @var bool
     */
    private $aCumulerBaseSecu;

    /**
     * Get the a cumuler base secu.
     *
     * @return bool Returns the a cumuler base secu.
     */
    public function getACumulerBaseSecu() {
        return $this->aCumulerBaseSecu;
    }

    /**
     * Set the a cumuler base secu.
     *
     * @param bool $aCumulerBaseSecu The a cumuler base secu.
     */
    public function setACumulerBaseSecu($aCumulerBaseSecu) {
        $this->aCumulerBaseSecu = $aCumulerBaseSecu;
        return $this;
    }
}
