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
 * Compte caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCaisseTrait {

    /**
     * Compte caisse.
     *
     * @var string
     */
    private $compteCaisse;

    /**
     * Get the compte caisse.
     *
     * @return string Returns the compte caisse.
     */
    public function getCompteCaisse() {
        return $this->compteCaisse;
    }

    /**
     * Set the compte caisse.
     *
     * @param string $compteCaisse The compte caisse.
     */
    public function setCompteCaisse($compteCaisse) {
        $this->compteCaisse = $compteCaisse;
        return $this;
    }
}
