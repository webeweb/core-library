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
 * Code prime h compl2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeHCompl2Trait {

    /**
     * Code prime h compl2.
     *
     * @var string
     */
    private $codePrimeHCompl2;

    /**
     * Get the code prime h compl2.
     *
     * @return string Returns the code prime h compl2.
     */
    public function getCodePrimeHCompl2() {
        return $this->codePrimeHCompl2;
    }

    /**
     * Set the code prime h compl2.
     *
     * @param string $codePrimeHCompl2 The code prime h compl2.
     */
    public function setCodePrimeHCompl2($codePrimeHCompl2) {
        $this->codePrimeHCompl2 = $codePrimeHCompl2;
        return $this;
    }
}
