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
 * Mt j rtt2007 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtJRtt2007Trait {

    /**
     * Mt j rtt2007.
     *
     * @var float
     */
    private $mtJRtt2007;

    /**
     * Get the mt j rtt2007.
     *
     * @return float Returns the mt j rtt2007.
     */
    public function getMtJRtt2007() {
        return $this->mtJRtt2007;
    }

    /**
     * Set the mt j rtt2007.
     *
     * @param float $mtJRtt2007 The mt j rtt2007.
     */
    public function setMtJRtt2007($mtJRtt2007) {
        $this->mtJRtt2007 = $mtJRtt2007;
        return $this;
    }
}
