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
 * Lib critere interloc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereInterlocTrait {

    /**
     * Lib critere interloc.
     *
     * @var string
     */
    private $libCritereInterloc;

    /**
     * Get the lib critere interloc.
     *
     * @return string Returns the lib critere interloc.
     */
    public function getLibCritereInterloc() {
        return $this->libCritereInterloc;
    }

    /**
     * Set the lib critere interloc.
     *
     * @param string $libCritereInterloc The lib critere interloc.
     */
    public function setLibCritereInterloc($libCritereInterloc) {
        $this->libCritereInterloc = $libCritereInterloc;
        return $this;
    }
}
