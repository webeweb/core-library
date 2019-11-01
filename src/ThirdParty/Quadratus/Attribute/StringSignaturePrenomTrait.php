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
 * Signature prenom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignaturePrenomTrait {

    /**
     * Signature prenom.
     *
     * @var string
     */
    private $signaturePrenom;

    /**
     * Get the signature prenom.
     *
     * @return string Returns the signature prenom.
     */
    public function getSignaturePrenom() {
        return $this->signaturePrenom;
    }

    /**
     * Set the signature prenom.
     *
     * @param string $signaturePrenom The signature prenom.
     */
    public function setSignaturePrenom($signaturePrenom) {
        $this->signaturePrenom = $signaturePrenom;
        return $this;
    }
}
