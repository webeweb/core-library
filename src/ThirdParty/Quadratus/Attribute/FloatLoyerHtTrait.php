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
 * Loyer ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatLoyerHtTrait {

    /**
     * Loyer ht.
     *
     * @var float
     */
    private $loyerHt;

    /**
     * Get the loyer ht.
     *
     * @return float Returns the loyer ht.
     */
    public function getLoyerHt() {
        return $this->loyerHt;
    }

    /**
     * Set the loyer ht.
     *
     * @param float $loyerHt The loyer ht.
     */
    public function setLoyerHt($loyerHt) {
        $this->loyerHt = $loyerHt;
        return $this;
    }
}
