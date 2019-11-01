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
 * Cum30 ss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCum30SsTrait {

    /**
     * Cum30 ss.
     *
     * @var float
     */
    private $cum30Ss;

    /**
     * Get the cum30 ss.
     *
     * @return float Returns the cum30 ss.
     */
    public function getCum30Ss() {
        return $this->cum30Ss;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float $cum30Ss The cum30 ss.
     */
    public function setCum30Ss($cum30Ss) {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }
}
