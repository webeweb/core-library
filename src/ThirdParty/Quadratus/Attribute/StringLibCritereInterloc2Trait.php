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
 * Lib critere interloc2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereInterloc2Trait {

    /**
     * Lib critere interloc2.
     *
     * @var string
     */
    private $libCritereInterloc2;

    /**
     * Get the lib critere interloc2.
     *
     * @return string Returns the lib critere interloc2.
     */
    public function getLibCritereInterloc2() {
        return $this->libCritereInterloc2;
    }

    /**
     * Set the lib critere interloc2.
     *
     * @param string $libCritereInterloc2 The lib critere interloc2.
     */
    public function setLibCritereInterloc2($libCritereInterloc2) {
        $this->libCritereInterloc2 = $libCritereInterloc2;
        return $this;
    }
}
