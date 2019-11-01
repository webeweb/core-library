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
 * H realisees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHRealiseesTrait {

    /**
     * H realisees.
     *
     * @var float
     */
    private $hRealisees;

    /**
     * Get the h realisees.
     *
     * @return float Returns the h realisees.
     */
    public function getHRealisees() {
        return $this->hRealisees;
    }

    /**
     * Set the h realisees.
     *
     * @param float $hRealisees The h realisees.
     */
    public function setHRealisees($hRealisees) {
        $this->hRealisees = $hRealisees;
        return $this;
    }
}
