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
 * Code prime h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeHComplTrait {

    /**
     * Code prime h compl.
     *
     * @var string
     */
    private $codePrimeHCompl;

    /**
     * Get the code prime h compl.
     *
     * @return string Returns the code prime h compl.
     */
    public function getCodePrimeHCompl() {
        return $this->codePrimeHCompl;
    }

    /**
     * Set the code prime h compl.
     *
     * @param string $codePrimeHCompl The code prime h compl.
     */
    public function setCodePrimeHCompl($codePrimeHCompl) {
        $this->codePrimeHCompl = $codePrimeHCompl;
        return $this;
    }
}
