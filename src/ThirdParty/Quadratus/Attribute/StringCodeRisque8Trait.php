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
 * Code risque8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisque8Trait {

    /**
     * Code risque8.
     *
     * @var string
     */
    private $codeRisque8;

    /**
     * Get the code risque8.
     *
     * @return string Returns the code risque8.
     */
    public function getCodeRisque8() {
        return $this->codeRisque8;
    }

    /**
     * Set the code risque8.
     *
     * @param string $codeRisque8 The code risque8.
     */
    public function setCodeRisque8($codeRisque8) {
        $this->codeRisque8 = $codeRisque8;
        return $this;
    }
}
