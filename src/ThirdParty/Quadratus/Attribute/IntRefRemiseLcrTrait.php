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
 * Ref remise lcr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefRemiseLcrTrait {

    /**
     * Ref remise lcr.
     *
     * @var int
     */
    private $refRemiseLcr;

    /**
     * Get the ref remise lcr.
     *
     * @return int Returns the ref remise lcr.
     */
    public function getRefRemiseLcr() {
        return $this->refRemiseLcr;
    }

    /**
     * Set the ref remise lcr.
     *
     * @param int $refRemiseLcr The ref remise lcr.
     */
    public function setRefRemiseLcr($refRemiseLcr) {
        $this->refRemiseLcr = $refRemiseLcr;
        return $this;
    }
}
