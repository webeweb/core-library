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
 * Libelle4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle4Trait {

    /**
     * Libelle4.
     *
     * @var string
     */
    private $libelle4;

    /**
     * Get the libelle4.
     *
     * @return string Returns the libelle4.
     */
    public function getLibelle4() {
        return $this->libelle4;
    }

    /**
     * Set the libelle4.
     *
     * @param string $libelle4 The libelle4.
     */
    public function setLibelle4($libelle4) {
        $this->libelle4 = $libelle4;
        return $this;
    }
}
