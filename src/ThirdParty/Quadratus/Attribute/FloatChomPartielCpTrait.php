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
 * Chom partiel cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChomPartielCpTrait {

    /**
     * Chom partiel cp.
     *
     * @var float
     */
    private $chomPartielCp;

    /**
     * Get the chom partiel cp.
     *
     * @return float Returns the chom partiel cp.
     */
    public function getChomPartielCp() {
        return $this->chomPartielCp;
    }

    /**
     * Set the chom partiel cp.
     *
     * @param float $chomPartielCp The chom partiel cp.
     */
    public function setChomPartielCp($chomPartielCp) {
        $this->chomPartielCp = $chomPartielCp;
        return $this;
    }
}
