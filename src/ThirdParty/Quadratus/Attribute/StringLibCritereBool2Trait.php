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
 * Lib critere bool2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereBool2Trait {

    /**
     * Lib critere bool2.
     *
     * @var string
     */
    private $libCritereBool2;

    /**
     * Get the lib critere bool2.
     *
     * @return string Returns the lib critere bool2.
     */
    public function getLibCritereBool2() {
        return $this->libCritereBool2;
    }

    /**
     * Set the lib critere bool2.
     *
     * @param string $libCritereBool2 The lib critere bool2.
     */
    public function setLibCritereBool2($libCritereBool2) {
        $this->libCritereBool2 = $libCritereBool2;
        return $this;
    }
}
