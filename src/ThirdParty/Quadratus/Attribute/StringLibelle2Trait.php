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
 * Libelle2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle2Trait {

    /**
     * Libelle2.
     *
     * @var string
     */
    private $libelle2;

    /**
     * Get the libelle2.
     *
     * @return string Returns the libelle2.
     */
    public function getLibelle2() {
        return $this->libelle2;
    }

    /**
     * Set the libelle2.
     *
     * @param string $libelle2 The libelle2.
     */
    public function setLibelle2($libelle2) {
        $this->libelle2 = $libelle2;
        return $this;
    }
}
