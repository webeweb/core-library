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
 * Cum brut al trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutAlTrait {

    /**
     * Cum brut al.
     *
     * @var float
     */
    private $cumBrutAl;

    /**
     * Get the cum brut al.
     *
     * @return float Returns the cum brut al.
     */
    public function getCumBrutAl() {
        return $this->cumBrutAl;
    }

    /**
     * Set the cum brut al.
     *
     * @param float $cumBrutAl The cum brut al.
     */
    public function setCumBrutAl($cumBrutAl) {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }
}
