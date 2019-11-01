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
 * Chantier ponctuel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChantierPonctuelTrait {

    /**
     * Chantier ponctuel.
     *
     * @var bool
     */
    private $chantierPonctuel;

    /**
     * Get the chantier ponctuel.
     *
     * @return bool Returns the chantier ponctuel.
     */
    public function getChantierPonctuel() {
        return $this->chantierPonctuel;
    }

    /**
     * Set the chantier ponctuel.
     *
     * @param bool $chantierPonctuel The chantier ponctuel.
     */
    public function setChantierPonctuel($chantierPonctuel) {
        $this->chantierPonctuel = $chantierPonctuel;
        return $this;
    }
}
