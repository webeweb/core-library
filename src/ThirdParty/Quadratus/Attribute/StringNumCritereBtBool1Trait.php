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
 * Num critere bt bool1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtBool1Trait {

    /**
     * Num critere bt bool1.
     *
     * @var string
     */
    private $numCritereBtBool1;

    /**
     * Get the num critere bt bool1.
     *
     * @return string Returns the num critere bt bool1.
     */
    public function getNumCritereBtBool1() {
        return $this->numCritereBtBool1;
    }

    /**
     * Set the num critere bt bool1.
     *
     * @param string $numCritereBtBool1 The num critere bt bool1.
     */
    public function setNumCritereBtBool1($numCritereBtBool1) {
        $this->numCritereBtBool1 = $numCritereBtBool1;
        return $this;
    }
}
