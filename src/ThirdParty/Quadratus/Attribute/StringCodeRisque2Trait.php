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
 * Code risque2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque2Trait {

    /**
     * Code risque2.
     *
     * @var string
     */
    private $codeRisque2;

    /**
     * Get the code risque2.
     *
     * @return string Returns the code risque2.
     */
    public function getCodeRisque2() {
        return $this->codeRisque2;
    }

    /**
     * Set the code risque2.
     *
     * @param string $codeRisque2 The code risque2.
     */
    public function setCodeRisque2($codeRisque2) {
        $this->codeRisque2 = $codeRisque2;
        return $this;
    }
}
