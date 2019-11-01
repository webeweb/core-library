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
 * Code risque1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque1Trait {

    /**
     * Code risque1.
     *
     * @var string
     */
    private $codeRisque1;

    /**
     * Get the code risque1.
     *
     * @return string Returns the code risque1.
     */
    public function getCodeRisque1() {
        return $this->codeRisque1;
    }

    /**
     * Set the code risque1.
     *
     * @param string $codeRisque1 The code risque1.
     */
    public function setCodeRisque1($codeRisque1) {
        $this->codeRisque1 = $codeRisque1;
        return $this;
    }
}
