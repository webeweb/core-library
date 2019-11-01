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
 * Code regime base obl vieil pat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBaseOblVieilPatTrait {

    /**
     * Code regime base obl vieil pat.
     *
     * @var string
     */
    private $codeRegimeBaseOblVieilPat;

    /**
     * Get the code regime base obl vieil pat.
     *
     * @return string Returns the code regime base obl vieil pat.
     */
    public function getCodeRegimeBaseOblVieilPat() {
        return $this->codeRegimeBaseOblVieilPat;
    }

    /**
     * Set the code regime base obl vieil pat.
     *
     * @param string $codeRegimeBaseOblVieilPat The code regime base obl vieil pat.
     */
    public function setCodeRegimeBaseOblVieilPat($codeRegimeBaseOblVieilPat) {
        $this->codeRegimeBaseOblVieilPat = $codeRegimeBaseOblVieilPat;
        return $this;
    }
}
