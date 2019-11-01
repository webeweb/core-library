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
 * Fichiers move trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFichiersMoveTrait {

    /**
     * Fichiers move.
     *
     * @var string
     */
    private $fichiersMove;

    /**
     * Get the fichiers move.
     *
     * @return string Returns the fichiers move.
     */
    public function getFichiersMove() {
        return $this->fichiersMove;
    }

    /**
     * Set the fichiers move.
     *
     * @param string $fichiersMove The fichiers move.
     */
    public function setFichiersMove($fichiersMove) {
        $this->fichiersMove = $fichiersMove;
        return $this;
    }
}
