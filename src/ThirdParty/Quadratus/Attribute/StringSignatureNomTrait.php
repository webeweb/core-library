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
 * Signature nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureNomTrait {

    /**
     * Signature nom.
     *
     * @var string
     */
    private $signatureNom;

    /**
     * Get the signature nom.
     *
     * @return string Returns the signature nom.
     */
    public function getSignatureNom() {
        return $this->signatureNom;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }
}
