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
 * Mt jcp arbitrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMtJcpArbitrageTrait {

    /**
     * Mt jcp arbitrage.
     *
     * @var bool
     */
    private $mtJcpArbitrage;

    /**
     * Get the mt jcp arbitrage.
     *
     * @return bool Returns the mt jcp arbitrage.
     */
    public function getMtJcpArbitrage() {
        return $this->mtJcpArbitrage;
    }

    /**
     * Set the mt jcp arbitrage.
     *
     * @param bool $mtJcpArbitrage The mt jcp arbitrage.
     */
    public function setMtJcpArbitrage($mtJcpArbitrage) {
        $this->mtJcpArbitrage = $mtJcpArbitrage;
        return $this;
    }
}
