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
 * Code calc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCalcTrait {

    /**
     * Code calc.
     *
     * @var string
     */
    private $codeCalc;

    /**
     * Get the code calc.
     *
     * @return string Returns the code calc.
     */
    public function getCodeCalc() {
        return $this->codeCalc;
    }

    /**
     * Set the code calc.
     *
     * @param string $codeCalc The code calc.
     */
    public function setCodeCalc($codeCalc) {
        $this->codeCalc = $codeCalc;
        return $this;
    }
}
