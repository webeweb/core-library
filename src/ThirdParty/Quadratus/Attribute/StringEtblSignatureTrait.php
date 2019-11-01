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
 * Etbl signature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblSignatureTrait {

    /**
     * Etbl signature.
     *
     * @var string
     */
    private $etblSignature;

    /**
     * Get the etbl signature.
     *
     * @return string Returns the etbl signature.
     */
    public function getEtblSignature() {
        return $this->etblSignature;
    }

    /**
     * Set the etbl signature.
     *
     * @param string $etblSignature The etbl signature.
     */
    public function setEtblSignature($etblSignature) {
        $this->etblSignature = $etblSignature;
        return $this;
    }
}
