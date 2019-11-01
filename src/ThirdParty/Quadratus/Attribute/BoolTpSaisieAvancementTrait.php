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
 * Tp saisie avancement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpSaisieAvancementTrait {

    /**
     * Tp saisie avancement.
     *
     * @var bool
     */
    private $tpSaisieAvancement;

    /**
     * Get the tp saisie avancement.
     *
     * @return bool Returns the tp saisie avancement.
     */
    public function getTpSaisieAvancement() {
        return $this->tpSaisieAvancement;
    }

    /**
     * Set the tp saisie avancement.
     *
     * @param bool $tpSaisieAvancement The tp saisie avancement.
     */
    public function setTpSaisieAvancement($tpSaisieAvancement) {
        $this->tpSaisieAvancement = $tpSaisieAvancement;
        return $this;
    }
}
