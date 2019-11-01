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
 * Code risque9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque9Trait {

    /**
     * Code risque9.
     *
     * @var string
     */
    private $codeRisque9;

    /**
     * Get the code risque9.
     *
     * @return string Returns the code risque9.
     */
    public function getCodeRisque9() {
        return $this->codeRisque9;
    }

    /**
     * Set the code risque9.
     *
     * @param string $codeRisque9 The code risque9.
     */
    public function setCodeRisque9($codeRisque9) {
        $this->codeRisque9 = $codeRisque9;
        return $this;
    }
}
