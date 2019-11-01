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
 * Ttc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTtcTrait {

    /**
     * Ttc.
     *
     * @var float
     */
    private $ttc;

    /**
     * Get the ttc.
     *
     * @return float Returns the ttc.
     */
    public function getTtc() {
        return $this->ttc;
    }

    /**
     * Set the ttc.
     *
     * @param float $ttc The ttc.
     */
    public function setTtc($ttc) {
        $this->ttc = $ttc;
        return $this;
    }
}
