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
 * H effectives trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHEffectivesTrait {

    /**
     * H effectives.
     *
     * @var float
     */
    private $hEffectives;

    /**
     * Get the h effectives.
     *
     * @return float Returns the h effectives.
     */
    public function getHEffectives() {
        return $this->hEffectives;
    }

    /**
     * Set the h effectives.
     *
     * @param float $hEffectives The h effectives.
     */
    public function setHEffectives($hEffectives) {
        $this->hEffectives = $hEffectives;
        return $this;
    }
}
