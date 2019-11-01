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
 * Descriptif rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDescriptifRtfTrait {

    /**
     * Descriptif rtf.
     *
     * @var string
     */
    private $descriptifRtf;

    /**
     * Get the descriptif rtf.
     *
     * @return string Returns the descriptif rtf.
     */
    public function getDescriptifRtf() {
        return $this->descriptifRtf;
    }

    /**
     * Set the descriptif rtf.
     *
     * @param string $descriptifRtf The descriptif rtf.
     */
    public function setDescriptifRtf($descriptifRtf) {
        $this->descriptifRtf = $descriptifRtf;
        return $this;
    }
}
