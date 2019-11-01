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
 * Code risque5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque5Trait {

    /**
     * Code risque5.
     *
     * @var string
     */
    private $codeRisque5;

    /**
     * Get the code risque5.
     *
     * @return string Returns the code risque5.
     */
    public function getCodeRisque5() {
        return $this->codeRisque5;
    }

    /**
     * Set the code risque5.
     *
     * @param string $codeRisque5 The code risque5.
     */
    public function setCodeRisque5($codeRisque5) {
        $this->codeRisque5 = $codeRisque5;
        return $this;
    }
}
