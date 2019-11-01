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
 * Signature ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureVilleTrait {

    /**
     * Signature ville.
     *
     * @var string
     */
    private $signatureVille;

    /**
     * Get the signature ville.
     *
     * @return string Returns the signature ville.
     */
    public function getSignatureVille() {
        return $this->signatureVille;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }
}
