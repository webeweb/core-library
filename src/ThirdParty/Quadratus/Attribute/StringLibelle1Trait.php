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
 * Libelle1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle1Trait {

    /**
     * Libelle1.
     *
     * @var string
     */
    private $libelle1;

    /**
     * Get the libelle1.
     *
     * @return string Returns the libelle1.
     */
    public function getLibelle1() {
        return $this->libelle1;
    }

    /**
     * Set the libelle1.
     *
     * @param string $libelle1 The libelle1.
     */
    public function setLibelle1($libelle1) {
        $this->libelle1 = $libelle1;
        return $this;
    }
}
