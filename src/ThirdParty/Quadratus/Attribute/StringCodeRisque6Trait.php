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
 * Code risque6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque6Trait {

    /**
     * Code risque6.
     *
     * @var string
     */
    private $codeRisque6;

    /**
     * Get the code risque6.
     *
     * @return string Returns the code risque6.
     */
    public function getCodeRisque6() {
        return $this->codeRisque6;
    }

    /**
     * Set the code risque6.
     *
     * @param string $codeRisque6 The code risque6.
     */
    public function setCodeRisque6($codeRisque6) {
        $this->codeRisque6 = $codeRisque6;
        return $this;
    }
}
