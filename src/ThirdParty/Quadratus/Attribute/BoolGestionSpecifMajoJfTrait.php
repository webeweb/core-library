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
 * Gestion specif majo jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionSpecifMajoJfTrait {

    /**
     * Gestion specif majo jf.
     *
     * @var bool
     */
    private $gestionSpecifMajoJf;

    /**
     * Get the gestion specif majo jf.
     *
     * @return bool Returns the gestion specif majo jf.
     */
    public function getGestionSpecifMajoJf() {
        return $this->gestionSpecifMajoJf;
    }

    /**
     * Set the gestion specif majo jf.
     *
     * @param bool $gestionSpecifMajoJf The gestion specif majo jf.
     */
    public function setGestionSpecifMajoJf($gestionSpecifMajoJf) {
        $this->gestionSpecifMajoJf = $gestionSpecifMajoJf;
        return $this;
    }
}
