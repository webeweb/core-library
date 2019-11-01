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
 * Code risque4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque4Trait {

    /**
     * Code risque4.
     *
     * @var string
     */
    private $codeRisque4;

    /**
     * Get the code risque4.
     *
     * @return string Returns the code risque4.
     */
    public function getCodeRisque4() {
        return $this->codeRisque4;
    }

    /**
     * Set the code risque4.
     *
     * @param string $codeRisque4 The code risque4.
     */
    public function setCodeRisque4($codeRisque4) {
        $this->codeRisque4 = $codeRisque4;
        return $this;
    }
}
