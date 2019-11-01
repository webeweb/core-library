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
 * Etbl a adresse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAAdresse3Trait {

    /**
     * Etbl a adresse3.
     *
     * @var string
     */
    private $etblAAdresse3;

    /**
     * Get the etbl a adresse3.
     *
     * @return string Returns the etbl a adresse3.
     */
    public function getEtblAAdresse3() {
        return $this->etblAAdresse3;
    }

    /**
     * Set the etbl a adresse3.
     *
     * @param string $etblAAdresse3 The etbl a adresse3.
     */
    public function setEtblAAdresse3($etblAAdresse3) {
        $this->etblAAdresse3 = $etblAAdresse3;
        return $this;
    }
}
