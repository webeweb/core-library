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
 * Lib critere num4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereNum4Trait {

    /**
     * Lib critere num4.
     *
     * @var string
     */
    private $libCritereNum4;

    /**
     * Get the lib critere num4.
     *
     * @return string Returns the lib critere num4.
     */
    public function getLibCritereNum4() {
        return $this->libCritereNum4;
    }

    /**
     * Set the lib critere num4.
     *
     * @param string $libCritereNum4 The lib critere num4.
     */
    public function setLibCritereNum4($libCritereNum4) {
        $this->libCritereNum4 = $libCritereNum4;
        return $this;
    }
}
