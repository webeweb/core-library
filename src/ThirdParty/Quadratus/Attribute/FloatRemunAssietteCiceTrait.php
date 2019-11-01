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
 * Remun assiette cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemunAssietteCiceTrait {

    /**
     * Remun assiette cice.
     *
     * @var float
     */
    private $remunAssietteCice;

    /**
     * Get the remun assiette cice.
     *
     * @return float Returns the remun assiette cice.
     */
    public function getRemunAssietteCice() {
        return $this->remunAssietteCice;
    }

    /**
     * Set the remun assiette cice.
     *
     * @param float $remunAssietteCice The remun assiette cice.
     */
    public function setRemunAssietteCice($remunAssietteCice) {
        $this->remunAssietteCice = $remunAssietteCice;
        return $this;
    }
}
