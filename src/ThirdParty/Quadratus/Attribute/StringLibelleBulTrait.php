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
 * Libelle bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleBulTrait {

    /**
     * Libelle bul.
     *
     * @var string
     */
    private $libelleBul;

    /**
     * Get the libelle bul.
     *
     * @return string Returns the libelle bul.
     */
    public function getLibelleBul() {
        return $this->libelleBul;
    }

    /**
     * Set the libelle bul.
     *
     * @param string $libelleBul The libelle bul.
     */
    public function setLibelleBul($libelleBul) {
        $this->libelleBul = $libelleBul;
        return $this;
    }
}
