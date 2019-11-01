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
 * Smic m fillon sans hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicMFillonSansHsTrait {

    /**
     * Smic m fillon sans hs.
     *
     * @var float
     */
    private $smicMFillonSansHs;

    /**
     * Get the smic m fillon sans hs.
     *
     * @return float Returns the smic m fillon sans hs.
     */
    public function getSmicMFillonSansHs() {
        return $this->smicMFillonSansHs;
    }

    /**
     * Set the smic m fillon sans hs.
     *
     * @param float $smicMFillonSansHs The smic m fillon sans hs.
     */
    public function setSmicMFillonSansHs($smicMFillonSansHs) {
        $this->smicMFillonSansHs = $smicMFillonSansHs;
        return $this;
    }
}
