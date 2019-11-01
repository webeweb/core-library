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
 * Brut cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCpTrait {

    /**
     * Brut cp.
     *
     * @var float
     */
    private $brutCp;

    /**
     * Get the brut cp.
     *
     * @return float Returns the brut cp.
     */
    public function getBrutCp() {
        return $this->brutCp;
    }

    /**
     * Set the brut cp.
     *
     * @param float $brutCp The brut cp.
     */
    public function setBrutCp($brutCp) {
        $this->brutCp = $brutCp;
        return $this;
    }
}
