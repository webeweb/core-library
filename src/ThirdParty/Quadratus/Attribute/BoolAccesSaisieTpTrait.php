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
 * Acces saisie tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesSaisieTpTrait {

    /**
     * Acces saisie tp.
     *
     * @var bool
     */
    private $accesSaisieTp;

    /**
     * Get the acces saisie tp.
     *
     * @return bool Returns the acces saisie tp.
     */
    public function getAccesSaisieTp() {
        return $this->accesSaisieTp;
    }

    /**
     * Set the acces saisie tp.
     *
     * @param bool $accesSaisieTp The acces saisie tp.
     */
    public function setAccesSaisieTp($accesSaisieTp) {
        $this->accesSaisieTp = $accesSaisieTp;
        return $this;
    }
}
