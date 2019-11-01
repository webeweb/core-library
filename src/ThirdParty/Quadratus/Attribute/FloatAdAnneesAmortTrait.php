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
 * Ad annees amort trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdAnneesAmortTrait {

    /**
     * Ad annees amort.
     *
     * @var float
     */
    private $adAnneesAmort;

    /**
     * Get the ad annees amort.
     *
     * @return float Returns the ad annees amort.
     */
    public function getAdAnneesAmort() {
        return $this->adAnneesAmort;
    }

    /**
     * Set the ad annees amort.
     *
     * @param float $adAnneesAmort The ad annees amort.
     */
    public function setAdAnneesAmort($adAnneesAmort) {
        $this->adAnneesAmort = $adAnneesAmort;
        return $this;
    }
}
