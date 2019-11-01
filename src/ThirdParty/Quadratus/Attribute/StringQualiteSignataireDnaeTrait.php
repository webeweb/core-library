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
 * Qualite signataire dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualiteSignataireDnaeTrait {

    /**
     * Qualite signataire dnae.
     *
     * @var string
     */
    private $qualiteSignataireDnae;

    /**
     * Get the qualite signataire dnae.
     *
     * @return string Returns the qualite signataire dnae.
     */
    public function getQualiteSignataireDnae() {
        return $this->qualiteSignataireDnae;
    }

    /**
     * Set the qualite signataire dnae.
     *
     * @param string $qualiteSignataireDnae The qualite signataire dnae.
     */
    public function setQualiteSignataireDnae($qualiteSignataireDnae) {
        $this->qualiteSignataireDnae = $qualiteSignataireDnae;
        return $this;
    }
}
