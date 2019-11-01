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
 * Code regime base obl maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBaseOblMaladieTrait {

    /**
     * Code regime base obl maladie.
     *
     * @var string
     */
    private $codeRegimeBaseOblMaladie;

    /**
     * Get the code regime base obl maladie.
     *
     * @return string Returns the code regime base obl maladie.
     */
    public function getCodeRegimeBaseOblMaladie() {
        return $this->codeRegimeBaseOblMaladie;
    }

    /**
     * Set the code regime base obl maladie.
     *
     * @param string $codeRegimeBaseOblMaladie The code regime base obl maladie.
     */
    public function setCodeRegimeBaseOblMaladie($codeRegimeBaseOblMaladie) {
        $this->codeRegimeBaseOblMaladie = $codeRegimeBaseOblMaladie;
        return $this;
    }
}
