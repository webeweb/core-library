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
 * Mt indemn autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIndemnAutreTrait {

    /**
     * Mt indemn autre.
     *
     * @var float
     */
    private $mtIndemnAutre;

    /**
     * Get the mt indemn autre.
     *
     * @return float Returns the mt indemn autre.
     */
    public function getMtIndemnAutre() {
        return $this->mtIndemnAutre;
    }

    /**
     * Set the mt indemn autre.
     *
     * @param float $mtIndemnAutre The mt indemn autre.
     */
    public function setMtIndemnAutre($mtIndemnAutre) {
        $this->mtIndemnAutre = $mtIndemnAutre;
        return $this;
    }
}
