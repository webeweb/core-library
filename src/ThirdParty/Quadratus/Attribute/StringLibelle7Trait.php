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
 * Libelle7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelle7Trait {

    /**
     * Libelle7.
     *
     * @var string
     */
    private $libelle7;

    /**
     * Get the libelle7.
     *
     * @return string Returns the libelle7.
     */
    public function getLibelle7() {
        return $this->libelle7;
    }

    /**
     * Set the libelle7.
     *
     * @param string $libelle7 The libelle7.
     */
    public function setLibelle7($libelle7) {
        $this->libelle7 = $libelle7;
        return $this;
    }
}
