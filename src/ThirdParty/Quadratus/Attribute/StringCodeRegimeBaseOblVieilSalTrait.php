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
 * Code regime base obl vieil sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBaseOblVieilSalTrait {

    /**
     * Code regime base obl vieil sal.
     *
     * @var string
     */
    private $codeRegimeBaseOblVieilSal;

    /**
     * Get the code regime base obl vieil sal.
     *
     * @return string Returns the code regime base obl vieil sal.
     */
    public function getCodeRegimeBaseOblVieilSal() {
        return $this->codeRegimeBaseOblVieilSal;
    }

    /**
     * Set the code regime base obl vieil sal.
     *
     * @param string $codeRegimeBaseOblVieilSal The code regime base obl vieil sal.
     */
    public function setCodeRegimeBaseOblVieilSal($codeRegimeBaseOblVieilSal) {
        $this->codeRegimeBaseOblVieilSal = $codeRegimeBaseOblVieilSal;
        return $this;
    }
}
