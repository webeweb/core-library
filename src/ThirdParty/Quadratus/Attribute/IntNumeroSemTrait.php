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
 * Numero sem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroSemTrait {

    /**
     * Numero sem.
     *
     * @var int
     */
    private $numeroSem;

    /**
     * Get the numero sem.
     *
     * @return int Returns the numero sem.
     */
    public function getNumeroSem() {
        return $this->numeroSem;
    }

    /**
     * Set the numero sem.
     *
     * @param int $numeroSem The numero sem.
     */
    public function setNumeroSem($numeroSem) {
        $this->numeroSem = $numeroSem;
        return $this;
    }
}
