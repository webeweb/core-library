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
 * Smic maf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicMafTrait {

    /**
     * Smic maf.
     *
     * @var float
     */
    private $smicMaf;

    /**
     * Get the smic maf.
     *
     * @return float Returns the smic maf.
     */
    public function getSmicMaf() {
        return $this->smicMaf;
    }

    /**
     * Set the smic maf.
     *
     * @param float $smicMaf The smic maf.
     */
    public function setSmicMaf($smicMaf) {
        $this->smicMaf = $smicMaf;
        return $this;
    }
}
