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
 * Intitule rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleRtfTrait {

    /**
     * Intitule rtf.
     *
     * @var string
     */
    private $intituleRtf;

    /**
     * Get the intitule rtf.
     *
     * @return string Returns the intitule rtf.
     */
    public function getIntituleRtf() {
        return $this->intituleRtf;
    }

    /**
     * Set the intitule rtf.
     *
     * @param string $intituleRtf The intitule rtf.
     */
    public function setIntituleRtf($intituleRtf) {
        $this->intituleRtf = $intituleRtf;
        return $this;
    }
}
