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
 * Lib critere num3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereNum3Trait {

    /**
     * Lib critere num3.
     *
     * @var string
     */
    private $libCritereNum3;

    /**
     * Get the lib critere num3.
     *
     * @return string Returns the lib critere num3.
     */
    public function getLibCritereNum3() {
        return $this->libCritereNum3;
    }

    /**
     * Set the lib critere num3.
     *
     * @param string $libCritereNum3 The lib critere num3.
     */
    public function setLibCritereNum3($libCritereNum3) {
        $this->libCritereNum3 = $libCritereNum3;
        return $this;
    }
}
