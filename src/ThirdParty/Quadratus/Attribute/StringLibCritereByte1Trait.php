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
 * Lib critere byte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereByte1Trait {

    /**
     * Lib critere byte1.
     *
     * @var string
     */
    private $libCritereByte1;

    /**
     * Get the lib critere byte1.
     *
     * @return string Returns the lib critere byte1.
     */
    public function getLibCritereByte1() {
        return $this->libCritereByte1;
    }

    /**
     * Set the lib critere byte1.
     *
     * @param string $libCritereByte1 The lib critere byte1.
     */
    public function setLibCritereByte1($libCritereByte1) {
        $this->libCritereByte1 = $libCritereByte1;
        return $this;
    }
}
