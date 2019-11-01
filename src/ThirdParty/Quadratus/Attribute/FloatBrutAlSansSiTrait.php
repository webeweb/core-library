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
 * Brut al sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAlSansSiTrait {

    /**
     * Brut al sans si.
     *
     * @var float
     */
    private $brutAlSansSi;

    /**
     * Get the brut al sans si.
     *
     * @return float Returns the brut al sans si.
     */
    public function getBrutAlSansSi() {
        return $this->brutAlSansSi;
    }

    /**
     * Set the brut al sans si.
     *
     * @param float $brutAlSansSi The brut al sans si.
     */
    public function setBrutAlSansSi($brutAlSansSi) {
        $this->brutAlSansSi = $brutAlSansSi;
        return $this;
    }
}
