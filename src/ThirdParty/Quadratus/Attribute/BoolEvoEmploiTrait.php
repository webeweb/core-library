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
 * Evo emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoEmploiTrait {

    /**
     * Evo emploi.
     *
     * @var bool
     */
    private $evoEmploi;

    /**
     * Get the evo emploi.
     *
     * @return bool Returns the evo emploi.
     */
    public function getEvoEmploi() {
        return $this->evoEmploi;
    }

    /**
     * Set the evo emploi.
     *
     * @param bool $evoEmploi The evo emploi.
     */
    public function setEvoEmploi($evoEmploi) {
        $this->evoEmploi = $evoEmploi;
        return $this;
    }
}
