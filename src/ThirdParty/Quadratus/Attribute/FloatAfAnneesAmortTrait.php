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
 * Af annees amort trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfAnneesAmortTrait {

    /**
     * Af annees amort.
     *
     * @var float
     */
    private $afAnneesAmort;

    /**
     * Get the af annees amort.
     *
     * @return float Returns the af annees amort.
     */
    public function getAfAnneesAmort() {
        return $this->afAnneesAmort;
    }

    /**
     * Set the af annees amort.
     *
     * @param float $afAnneesAmort The af annees amort.
     */
    public function setAfAnneesAmort($afAnneesAmort) {
        $this->afAnneesAmort = $afAnneesAmort;
        return $this;
    }
}
