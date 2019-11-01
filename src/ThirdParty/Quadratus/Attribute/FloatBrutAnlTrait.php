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
 * Brut anl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAnlTrait {

    /**
     * Brut anl.
     *
     * @var float
     */
    private $brutAnl;

    /**
     * Get the brut anl.
     *
     * @return float Returns the brut anl.
     */
    public function getBrutAnl() {
        return $this->brutAnl;
    }

    /**
     * Set the brut anl.
     *
     * @param float $brutAnl The brut anl.
     */
    public function setBrutAnl($brutAnl) {
        $this->brutAnl = $brutAnl;
        return $this;
    }
}
