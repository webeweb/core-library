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
 * Num critere bt bool2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtBool2Trait {

    /**
     * Num critere bt bool2.
     *
     * @var string
     */
    private $numCritereBtBool2;

    /**
     * Get the num critere bt bool2.
     *
     * @return string Returns the num critere bt bool2.
     */
    public function getNumCritereBtBool2() {
        return $this->numCritereBtBool2;
    }

    /**
     * Set the num critere bt bool2.
     *
     * @param string $numCritereBtBool2 The num critere bt bool2.
     */
    public function setNumCritereBtBool2($numCritereBtBool2) {
        $this->numCritereBtBool2 = $numCritereBtBool2;
        return $this;
    }
}
