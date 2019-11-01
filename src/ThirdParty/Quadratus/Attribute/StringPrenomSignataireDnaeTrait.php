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
 * Prenom signataire dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrenomSignataireDnaeTrait {

    /**
     * Prenom signataire dnae.
     *
     * @var string
     */
    private $prenomSignataireDnae;

    /**
     * Get the prenom signataire dnae.
     *
     * @return string Returns the prenom signataire dnae.
     */
    public function getPrenomSignataireDnae() {
        return $this->prenomSignataireDnae;
    }

    /**
     * Set the prenom signataire dnae.
     *
     * @param string $prenomSignataireDnae The prenom signataire dnae.
     */
    public function setPrenomSignataireDnae($prenomSignataireDnae) {
        $this->prenomSignataireDnae = $prenomSignataireDnae;
        return $this;
    }
}
