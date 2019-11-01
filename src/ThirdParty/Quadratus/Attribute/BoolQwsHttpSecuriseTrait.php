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
 * Qws http securise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQwsHttpSecuriseTrait {

    /**
     * Qws http securise.
     *
     * @var bool
     */
    private $qwsHttpSecurise;

    /**
     * Get the qws http securise.
     *
     * @return bool Returns the qws http securise.
     */
    public function getQwsHttpSecurise() {
        return $this->qwsHttpSecurise;
    }

    /**
     * Set the qws http securise.
     *
     * @param bool $qwsHttpSecurise The qws http securise.
     */
    public function setQwsHttpSecurise($qwsHttpSecurise) {
        $this->qwsHttpSecurise = $qwsHttpSecurise;
        return $this;
    }
}
