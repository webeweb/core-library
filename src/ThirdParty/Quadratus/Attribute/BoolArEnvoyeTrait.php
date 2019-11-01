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
 * Ar envoye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArEnvoyeTrait {

    /**
     * Ar envoye.
     *
     * @var bool
     */
    private $arEnvoye;

    /**
     * Get the ar envoye.
     *
     * @return bool Returns the ar envoye.
     */
    public function getArEnvoye() {
        return $this->arEnvoye;
    }

    /**
     * Set the ar envoye.
     *
     * @param bool $arEnvoye The ar envoye.
     */
    public function setArEnvoye($arEnvoye) {
        $this->arEnvoye = $arEnvoye;
        return $this;
    }
}
