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
 * Mt i cp cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtICpCpTrait {

    /**
     * Mt i cp cp.
     *
     * @var float
     */
    private $mtICpCp;

    /**
     * Get the mt i cp cp.
     *
     * @return float Returns the mt i cp cp.
     */
    public function getMtICpCp() {
        return $this->mtICpCp;
    }

    /**
     * Set the mt i cp cp.
     *
     * @param float $mtICpCp The mt i cp cp.
     */
    public function setMtICpCp($mtICpCp) {
        $this->mtICpCp = $mtICpCp;
        return $this;
    }
}
