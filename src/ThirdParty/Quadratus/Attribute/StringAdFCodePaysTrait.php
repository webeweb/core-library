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
 * Ad f code pays trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFCodePaysTrait {

    /**
     * Ad f code pays.
     *
     * @var string
     */
    private $adFCodePays;

    /**
     * Get the ad f code pays.
     *
     * @return string Returns the ad f code pays.
     */
    public function getAdFCodePays() {
        return $this->adFCodePays;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string $adFCodePays The ad f code pays.
     */
    public function setAdFCodePays($adFCodePays) {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }
}
