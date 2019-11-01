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
 * Nom signataire dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSignataireDnaeTrait {

    /**
     * Nom signataire dnae.
     *
     * @var string
     */
    private $nomSignataireDnae;

    /**
     * Get the nom signataire dnae.
     *
     * @return string Returns the nom signataire dnae.
     */
    public function getNomSignataireDnae() {
        return $this->nomSignataireDnae;
    }

    /**
     * Set the nom signataire dnae.
     *
     * @param string $nomSignataireDnae The nom signataire dnae.
     */
    public function setNomSignataireDnae($nomSignataireDnae) {
        $this->nomSignataireDnae = $nomSignataireDnae;
        return $this;
    }
}
