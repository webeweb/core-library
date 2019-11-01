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
 * Libelle5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle5Trait {

    /**
     * Libelle5.
     *
     * @var string
     */
    private $libelle5;

    /**
     * Get the libelle5.
     *
     * @return string Returns the libelle5.
     */
    public function getLibelle5() {
        return $this->libelle5;
    }

    /**
     * Set the libelle5.
     *
     * @param string $libelle5 The libelle5.
     */
    public function setLibelle5($libelle5) {
        $this->libelle5 = $libelle5;
        return $this;
    }
}
