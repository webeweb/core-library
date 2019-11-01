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
 * Mt regul lodeom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtRegulLodeomTrait {

    /**
     * Mt regul lodeom.
     *
     * @var float
     */
    private $mtRegulLodeom;

    /**
     * Get the mt regul lodeom.
     *
     * @return float Returns the mt regul lodeom.
     */
    public function getMtRegulLodeom() {
        return $this->mtRegulLodeom;
    }

    /**
     * Set the mt regul lodeom.
     *
     * @param float $mtRegulLodeom The mt regul lodeom.
     */
    public function setMtRegulLodeom($mtRegulLodeom) {
        $this->mtRegulLodeom = $mtRegulLodeom;
        return $this;
    }
}
