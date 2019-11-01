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
 * Code regime base obl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBaseOblTrait {

    /**
     * Code regime base obl.
     *
     * @var string
     */
    private $codeRegimeBaseObl;

    /**
     * Get the code regime base obl.
     *
     * @return string Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl() {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }
}
