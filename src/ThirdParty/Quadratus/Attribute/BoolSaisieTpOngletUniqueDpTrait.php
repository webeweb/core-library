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
 * Saisie tp onglet unique dp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTpOngletUniqueDpTrait {

    /**
     * Saisie tp onglet unique dp.
     *
     * @var bool
     */
    private $saisieTpOngletUniqueDp;

    /**
     * Get the saisie tp onglet unique dp.
     *
     * @return bool Returns the saisie tp onglet unique dp.
     */
    public function getSaisieTpOngletUniqueDp() {
        return $this->saisieTpOngletUniqueDp;
    }

    /**
     * Set the saisie tp onglet unique dp.
     *
     * @param bool $saisieTpOngletUniqueDp The saisie tp onglet unique dp.
     */
    public function setSaisieTpOngletUniqueDp($saisieTpOngletUniqueDp) {
        $this->saisieTpOngletUniqueDp = $saisieTpOngletUniqueDp;
        return $this;
    }
}
