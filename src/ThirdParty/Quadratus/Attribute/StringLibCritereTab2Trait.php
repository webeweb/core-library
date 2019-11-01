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
 * Lib critere tab2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTab2Trait {

    /**
     * Lib critere tab2.
     *
     * @var string
     */
    private $libCritereTab2;

    /**
     * Get the lib critere tab2.
     *
     * @return string Returns the lib critere tab2.
     */
    public function getLibCritereTab2() {
        return $this->libCritereTab2;
    }

    /**
     * Set the lib critere tab2.
     *
     * @param string $libCritereTab2 The lib critere tab2.
     */
    public function setLibCritereTab2($libCritereTab2) {
        $this->libCritereTab2 = $libCritereTab2;
        return $this;
    }
}
