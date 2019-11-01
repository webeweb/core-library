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
 * Code risque3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque3Trait {

    /**
     * Code risque3.
     *
     * @var string
     */
    private $codeRisque3;

    /**
     * Get the code risque3.
     *
     * @return string Returns the code risque3.
     */
    public function getCodeRisque3() {
        return $this->codeRisque3;
    }

    /**
     * Set the code risque3.
     *
     * @param string $codeRisque3 The code risque3.
     */
    public function setCodeRisque3($codeRisque3) {
        $this->codeRisque3 = $codeRisque3;
        return $this;
    }
}
