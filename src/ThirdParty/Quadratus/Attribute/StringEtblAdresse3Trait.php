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
 * Etbl adresse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAdresse3Trait {

    /**
     * Etbl adresse3.
     *
     * @var string
     */
    private $etblAdresse3;

    /**
     * Get the etbl adresse3.
     *
     * @return string Returns the etbl adresse3.
     */
    public function getEtblAdresse3() {
        return $this->etblAdresse3;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string $etblAdresse3 The etbl adresse3.
     */
    public function setEtblAdresse3($etblAdresse3) {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }
}
