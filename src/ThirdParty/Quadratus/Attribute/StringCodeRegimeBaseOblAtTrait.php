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
 * Code regime base obl at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBaseOblAtTrait {

    /**
     * Code regime base obl at.
     *
     * @var string
     */
    private $codeRegimeBaseOblAt;

    /**
     * Get the code regime base obl at.
     *
     * @return string Returns the code regime base obl at.
     */
    public function getCodeRegimeBaseOblAt() {
        return $this->codeRegimeBaseOblAt;
    }

    /**
     * Set the code regime base obl at.
     *
     * @param string $codeRegimeBaseOblAt The code regime base obl at.
     */
    public function setCodeRegimeBaseOblAt($codeRegimeBaseOblAt) {
        $this->codeRegimeBaseOblAt = $codeRegimeBaseOblAt;
        return $this;
    }
}
