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
 * Etbl a adresse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAAdresse1Trait {

    /**
     * Etbl a adresse1.
     *
     * @var string
     */
    private $etblAAdresse1;

    /**
     * Get the etbl a adresse1.
     *
     * @return string Returns the etbl a adresse1.
     */
    public function getEtblAAdresse1() {
        return $this->etblAAdresse1;
    }

    /**
     * Set the etbl a adresse1.
     *
     * @param string $etblAAdresse1 The etbl a adresse1.
     */
    public function setEtblAAdresse1($etblAAdresse1) {
        $this->etblAAdresse1 = $etblAAdresse1;
        return $this;
    }
}
