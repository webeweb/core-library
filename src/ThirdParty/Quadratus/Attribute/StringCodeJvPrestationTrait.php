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
 * Code jv prestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJvPrestationTrait {

    /**
     * Code jv prestation.
     *
     * @var string
     */
    private $codeJvPrestation;

    /**
     * Get the code jv prestation.
     *
     * @return string Returns the code jv prestation.
     */
    public function getCodeJvPrestation() {
        return $this->codeJvPrestation;
    }

    /**
     * Set the code jv prestation.
     *
     * @param string $codeJvPrestation The code jv prestation.
     */
    public function setCodeJvPrestation($codeJvPrestation) {
        $this->codeJvPrestation = $codeJvPrestation;
        return $this;
    }
}
