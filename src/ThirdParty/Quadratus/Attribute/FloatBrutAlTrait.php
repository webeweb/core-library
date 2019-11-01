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
 * Brut al trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAlTrait {

    /**
     * Brut al.
     *
     * @var float
     */
    private $brutAl;

    /**
     * Get the brut al.
     *
     * @return float Returns the brut al.
     */
    public function getBrutAl() {
        return $this->brutAl;
    }

    /**
     * Set the brut al.
     *
     * @param float $brutAl The brut al.
     */
    public function setBrutAl($brutAl) {
        $this->brutAl = $brutAl;
        return $this;
    }
}
