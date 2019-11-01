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
 * Saisie tp onglet unique tn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTpOngletUniqueTnTrait {

    /**
     * Saisie tp onglet unique tn.
     *
     * @var bool
     */
    private $saisieTpOngletUniqueTn;

    /**
     * Get the saisie tp onglet unique tn.
     *
     * @return bool Returns the saisie tp onglet unique tn.
     */
    public function getSaisieTpOngletUniqueTn() {
        return $this->saisieTpOngletUniqueTn;
    }

    /**
     * Set the saisie tp onglet unique tn.
     *
     * @param bool $saisieTpOngletUniqueTn The saisie tp onglet unique tn.
     */
    public function setSaisieTpOngletUniqueTn($saisieTpOngletUniqueTn) {
        $this->saisieTpOngletUniqueTn = $saisieTpOngletUniqueTn;
        return $this;
    }
}
