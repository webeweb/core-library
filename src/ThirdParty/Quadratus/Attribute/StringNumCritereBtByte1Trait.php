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
 * Num critere bt byte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtByte1Trait {

    /**
     * Num critere bt byte1.
     *
     * @var string
     */
    private $numCritereBtByte1;

    /**
     * Get the num critere bt byte1.
     *
     * @return string Returns the num critere bt byte1.
     */
    public function getNumCritereBtByte1() {
        return $this->numCritereBtByte1;
    }

    /**
     * Set the num critere bt byte1.
     *
     * @param string $numCritereBtByte1 The num critere bt byte1.
     */
    public function setNumCritereBtByte1($numCritereBtByte1) {
        $this->numCritereBtByte1 = $numCritereBtByte1;
        return $this;
    }
}
