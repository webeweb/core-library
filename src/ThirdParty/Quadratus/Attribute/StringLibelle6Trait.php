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
 * Libelle6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle6Trait {

    /**
     * Libelle6.
     *
     * @var string
     */
    private $libelle6;

    /**
     * Get the libelle6.
     *
     * @return string Returns the libelle6.
     */
    public function getLibelle6() {
        return $this->libelle6;
    }

    /**
     * Set the libelle6.
     *
     * @param string $libelle6 The libelle6.
     */
    public function setLibelle6($libelle6) {
        $this->libelle6 = $libelle6;
        return $this;
    }
}
