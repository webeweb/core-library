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
 * Libelle3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle3Trait {

    /**
     * Libelle3.
     *
     * @var string
     */
    private $libelle3;

    /**
     * Get the libelle3.
     *
     * @return string Returns the libelle3.
     */
    public function getLibelle3() {
        return $this->libelle3;
    }

    /**
     * Set the libelle3.
     *
     * @param string $libelle3 The libelle3.
     */
    public function setLibelle3($libelle3) {
        $this->libelle3 = $libelle3;
        return $this;
    }
}
