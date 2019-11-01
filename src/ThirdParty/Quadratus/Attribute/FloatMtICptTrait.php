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
 * Mt i cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtICptTrait {

    /**
     * Mt i cpt.
     *
     * @var float
     */
    private $mtICpt;

    /**
     * Get the mt i cpt.
     *
     * @return float Returns the mt i cpt.
     */
    public function getMtICpt() {
        return $this->mtICpt;
    }

    /**
     * Set the mt i cpt.
     *
     * @param float $mtICpt The mt i cpt.
     */
    public function setMtICpt($mtICpt) {
        $this->mtICpt = $mtICpt;
        return $this;
    }
}
