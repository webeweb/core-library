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
 * Code prestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrestationTrait {

    /**
     * Code prestation.
     *
     * @var string
     */
    private $codePrestation;

    /**
     * Get the code prestation.
     *
     * @return string Returns the code prestation.
     */
    public function getCodePrestation() {
        return $this->codePrestation;
    }

    /**
     * Set the code prestation.
     *
     * @param string $codePrestation The code prestation.
     */
    public function setCodePrestation($codePrestation) {
        $this->codePrestation = $codePrestation;
        return $this;
    }
}
