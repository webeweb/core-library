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
 * Lib critere bool1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereBool1Trait {

    /**
     * Lib critere bool1.
     *
     * @var string
     */
    private $libCritereBool1;

    /**
     * Get the lib critere bool1.
     *
     * @return string Returns the lib critere bool1.
     */
    public function getLibCritereBool1() {
        return $this->libCritereBool1;
    }

    /**
     * Set the lib critere bool1.
     *
     * @param string $libCritereBool1 The lib critere bool1.
     */
    public function setLibCritereBool1($libCritereBool1) {
        $this->libCritereBool1 = $libCritereBool1;
        return $this;
    }
}
