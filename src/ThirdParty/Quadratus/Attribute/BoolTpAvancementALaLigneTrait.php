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
 * Tp avancement a la ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpAvancementALaLigneTrait {

    /**
     * Tp avancement a la ligne.
     *
     * @var bool
     */
    private $tpAvancementALaLigne;

    /**
     * Get the tp avancement a la ligne.
     *
     * @return bool Returns the tp avancement a la ligne.
     */
    public function getTpAvancementALaLigne() {
        return $this->tpAvancementALaLigne;
    }

    /**
     * Set the tp avancement a la ligne.
     *
     * @param bool $tpAvancementALaLigne The tp avancement a la ligne.
     */
    public function setTpAvancementALaLigne($tpAvancementALaLigne) {
        $this->tpAvancementALaLigne = $tpAvancementALaLigne;
        return $this;
    }
}
