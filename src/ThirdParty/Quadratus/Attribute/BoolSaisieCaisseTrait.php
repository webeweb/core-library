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
 * Saisie caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieCaisseTrait {

    /**
     * Saisie caisse.
     *
     * @var bool
     */
    private $saisieCaisse;

    /**
     * Get the saisie caisse.
     *
     * @return bool Returns the saisie caisse.
     */
    public function getSaisieCaisse() {
        return $this->saisieCaisse;
    }

    /**
     * Set the saisie caisse.
     *
     * @param bool $saisieCaisse The saisie caisse.
     */
    public function setSaisieCaisse($saisieCaisse) {
        $this->saisieCaisse = $saisieCaisse;
        return $this;
    }
}
