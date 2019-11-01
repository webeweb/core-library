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
 * Code risque7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque7Trait {

    /**
     * Code risque7.
     *
     * @var string
     */
    private $codeRisque7;

    /**
     * Get the code risque7.
     *
     * @return string Returns the code risque7.
     */
    public function getCodeRisque7() {
        return $this->codeRisque7;
    }

    /**
     * Set the code risque7.
     *
     * @param string $codeRisque7 The code risque7.
     */
    public function setCodeRisque7($codeRisque7) {
        $this->codeRisque7 = $codeRisque7;
        return $this;
    }
}
