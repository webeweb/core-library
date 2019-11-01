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
 * Tp pas intervenants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasIntervenantsTrait {

    /**
     * Tp pas intervenants.
     *
     * @var bool
     */
    private $tpPasIntervenants;

    /**
     * Get the tp pas intervenants.
     *
     * @return bool Returns the tp pas intervenants.
     */
    public function getTpPasIntervenants() {
        return $this->tpPasIntervenants;
    }

    /**
     * Set the tp pas intervenants.
     *
     * @param bool $tpPasIntervenants The tp pas intervenants.
     */
    public function setTpPasIntervenants($tpPasIntervenants) {
        $this->tpPasIntervenants = $tpPasIntervenants;
        return $this;
    }
}
