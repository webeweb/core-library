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
 * Signature tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignatureTelTrait {

    /**
     * Signature tel.
     *
     * @var string
     */
    private $signatureTel;

    /**
     * Get the signature tel.
     *
     * @return string Returns the signature tel.
     */
    public function getSignatureTel() {
        return $this->signatureTel;
    }

    /**
     * Set the signature tel.
     *
     * @param string $signatureTel The signature tel.
     */
    public function setSignatureTel($signatureTel) {
        $this->signatureTel = $signatureTel;
        return $this;
    }
}
