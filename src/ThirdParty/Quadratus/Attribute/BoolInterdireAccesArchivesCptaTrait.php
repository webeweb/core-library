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
 * Interdire acces archives cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireAccesArchivesCptaTrait {

    /**
     * Interdire acces archives cpta.
     *
     * @var bool
     */
    private $interdireAccesArchivesCpta;

    /**
     * Get the interdire acces archives cpta.
     *
     * @return bool Returns the interdire acces archives cpta.
     */
    public function getInterdireAccesArchivesCpta() {
        return $this->interdireAccesArchivesCpta;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool $interdireAccesArchivesCpta The interdire acces archives cpta.
     */
    public function setInterdireAccesArchivesCpta($interdireAccesArchivesCpta) {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }
}
