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
 * Tp saisie dos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpSaisieDosTrait {

    /**
     * Tp saisie dos.
     *
     * @var bool
     */
    private $tpSaisieDos;

    /**
     * Get the tp saisie dos.
     *
     * @return bool Returns the tp saisie dos.
     */
    public function getTpSaisieDos() {
        return $this->tpSaisieDos;
    }

    /**
     * Set the tp saisie dos.
     *
     * @param bool $tpSaisieDos The tp saisie dos.
     */
    public function setTpSaisieDos($tpSaisieDos) {
        $this->tpSaisieDos = $tpSaisieDos;
        return $this;
    }
}
