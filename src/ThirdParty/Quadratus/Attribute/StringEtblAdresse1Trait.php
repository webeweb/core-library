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
 * Etbl adresse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAdresse1Trait {

    /**
     * Etbl adresse1.
     *
     * @var string
     */
    private $etblAdresse1;

    /**
     * Get the etbl adresse1.
     *
     * @return string Returns the etbl adresse1.
     */
    public function getEtblAdresse1() {
        return $this->etblAdresse1;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string $etblAdresse1 The etbl adresse1.
     */
    public function setEtblAdresse1($etblAdresse1) {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }
}
