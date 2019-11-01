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
 * Sous total caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSousTotalCaisseTrait {

    /**
     * Sous total caisse.
     *
     * @var bool
     */
    private $sousTotalCaisse;

    /**
     * Get the sous total caisse.
     *
     * @return bool Returns the sous total caisse.
     */
    public function getSousTotalCaisse() {
        return $this->sousTotalCaisse;
    }

    /**
     * Set the sous total caisse.
     *
     * @param bool $sousTotalCaisse The sous total caisse.
     */
    public function setSousTotalCaisse($sousTotalCaisse) {
        $this->sousTotalCaisse = $sousTotalCaisse;
        return $this;
    }
}
