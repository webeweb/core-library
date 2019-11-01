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
 * Tp pas tps valide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasTpsValideTrait {

    /**
     * Tp pas tps valide.
     *
     * @var bool
     */
    private $tpPasTpsValide;

    /**
     * Get the tp pas tps valide.
     *
     * @return bool Returns the tp pas tps valide.
     */
    public function getTpPasTpsValide() {
        return $this->tpPasTpsValide;
    }

    /**
     * Set the tp pas tps valide.
     *
     * @param bool $tpPasTpsValide The tp pas tps valide.
     */
    public function setTpPasTpsValide($tpPasTpsValide) {
        $this->tpPasTpsValide = $tpPasTpsValide;
        return $this;
    }
}
