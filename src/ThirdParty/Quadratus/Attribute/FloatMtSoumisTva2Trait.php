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
 * Mt soumis tva2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtSoumisTva2Trait {

    /**
     * Mt soumis tva2.
     *
     * @var float
     */
    private $mtSoumisTva2;

    /**
     * Get the mt soumis tva2.
     *
     * @return float Returns the mt soumis tva2.
     */
    public function getMtSoumisTva2() {
        return $this->mtSoumisTva2;
    }

    /**
     * Set the mt soumis tva2.
     *
     * @param float $mtSoumisTva2 The mt soumis tva2.
     */
    public function setMtSoumisTva2($mtSoumisTva2) {
        $this->mtSoumisTva2 = $mtSoumisTva2;
        return $this;
    }
}
