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
 * Lib critere num2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereNum2Trait {

    /**
     * Lib critere num2.
     *
     * @var string
     */
    private $libCritereNum2;

    /**
     * Get the lib critere num2.
     *
     * @return string Returns the lib critere num2.
     */
    public function getLibCritereNum2() {
        return $this->libCritereNum2;
    }

    /**
     * Set the lib critere num2.
     *
     * @param string $libCritereNum2 The lib critere num2.
     */
    public function setLibCritereNum2($libCritereNum2) {
        $this->libCritereNum2 = $libCritereNum2;
        return $this;
    }
}
