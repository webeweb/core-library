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
 * Lib critere num1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereNum1Trait {

    /**
     * Lib critere num1.
     *
     * @var string
     */
    private $libCritereNum1;

    /**
     * Get the lib critere num1.
     *
     * @return string Returns the lib critere num1.
     */
    public function getLibCritereNum1() {
        return $this->libCritereNum1;
    }

    /**
     * Set the lib critere num1.
     *
     * @param string $libCritereNum1 The lib critere num1.
     */
    public function setLibCritereNum1($libCritereNum1) {
        $this->libCritereNum1 = $libCritereNum1;
        return $this;
    }
}
