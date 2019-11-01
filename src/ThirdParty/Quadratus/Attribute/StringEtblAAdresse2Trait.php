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
 * Etbl a adresse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAAdresse2Trait {

    /**
     * Etbl a adresse2.
     *
     * @var string
     */
    private $etblAAdresse2;

    /**
     * Get the etbl a adresse2.
     *
     * @return string Returns the etbl a adresse2.
     */
    public function getEtblAAdresse2() {
        return $this->etblAAdresse2;
    }

    /**
     * Set the etbl a adresse2.
     *
     * @param string $etblAAdresse2 The etbl a adresse2.
     */
    public function setEtblAAdresse2($etblAAdresse2) {
        $this->etblAAdresse2 = $etblAAdresse2;
        return $this;
    }
}
