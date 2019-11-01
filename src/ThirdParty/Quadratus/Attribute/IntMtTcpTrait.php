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
 * Mt tcp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtTcpTrait {

    /**
     * Mt tcp.
     *
     * @var int
     */
    private $mtTcp;

    /**
     * Get the mt tcp.
     *
     * @return int Returns the mt tcp.
     */
    public function getMtTcp() {
        return $this->mtTcp;
    }

    /**
     * Set the mt tcp.
     *
     * @param int $mtTcp The mt tcp.
     */
    public function setMtTcp($mtTcp) {
        $this->mtTcp = $mtTcp;
        return $this;
    }
}
