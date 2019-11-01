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
 * Etbl adresse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAdresse2Trait {

    /**
     * Etbl adresse2.
     *
     * @var string
     */
    private $etblAdresse2;

    /**
     * Get the etbl adresse2.
     *
     * @return string Returns the etbl adresse2.
     */
    public function getEtblAdresse2() {
        return $this->etblAdresse2;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string $etblAdresse2 The etbl adresse2.
     */
    public function setEtblAdresse2($etblAdresse2) {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }
}
