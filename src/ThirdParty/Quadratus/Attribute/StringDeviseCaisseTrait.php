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
 * Devise caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeviseCaisseTrait {

    /**
     * Devise caisse.
     *
     * @var string
     */
    private $deviseCaisse;

    /**
     * Get the devise caisse.
     *
     * @return string Returns the devise caisse.
     */
    public function getDeviseCaisse() {
        return $this->deviseCaisse;
    }

    /**
     * Set the devise caisse.
     *
     * @param string $deviseCaisse The devise caisse.
     */
    public function setDeviseCaisse($deviseCaisse) {
        $this->deviseCaisse = $deviseCaisse;
        return $this;
    }
}
