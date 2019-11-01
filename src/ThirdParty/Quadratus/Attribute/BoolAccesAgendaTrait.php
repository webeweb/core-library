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
 * Acces agenda trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesAgendaTrait {

    /**
     * Acces agenda.
     *
     * @var bool
     */
    private $accesAgenda;

    /**
     * Get the acces agenda.
     *
     * @return bool Returns the acces agenda.
     */
    public function getAccesAgenda() {
        return $this->accesAgenda;
    }

    /**
     * Set the acces agenda.
     *
     * @param bool $accesAgenda The acces agenda.
     */
    public function setAccesAgenda($accesAgenda) {
        $this->accesAgenda = $accesAgenda;
        return $this;
    }
}
