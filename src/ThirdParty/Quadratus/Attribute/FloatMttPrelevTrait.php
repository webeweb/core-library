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
 * Mtt prelev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttPrelevTrait {

    /**
     * Mtt prelev.
     *
     * @var float
     */
    private $mttPrelev;

    /**
     * Get the mtt prelev.
     *
     * @return float Returns the mtt prelev.
     */
    public function getMttPrelev() {
        return $this->mttPrelev;
    }

    /**
     * Set the mtt prelev.
     *
     * @param float $mttPrelev The mtt prelev.
     */
    public function setMttPrelev($mttPrelev) {
        $this->mttPrelev = $mttPrelev;
        return $this;
    }
}
