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
 * Code risque10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque10Trait {

    /**
     * Code risque10.
     *
     * @var string
     */
    private $codeRisque10;

    /**
     * Get the code risque10.
     *
     * @return string Returns the code risque10.
     */
    public function getCodeRisque10() {
        return $this->codeRisque10;
    }

    /**
     * Set the code risque10.
     *
     * @param string $codeRisque10 The code risque10.
     */
    public function setCodeRisque10($codeRisque10) {
        $this->codeRisque10 = $codeRisque10;
        return $this;
    }
}
