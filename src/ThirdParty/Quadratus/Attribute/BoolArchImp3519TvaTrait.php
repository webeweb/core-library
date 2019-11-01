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
 * Arch imp3519 tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchImp3519TvaTrait {

    /**
     * Arch imp3519 tva.
     *
     * @var bool
     */
    private $archImp3519Tva;

    /**
     * Get the arch imp3519 tva.
     *
     * @return bool Returns the arch imp3519 tva.
     */
    public function getArchImp3519Tva() {
        return $this->archImp3519Tva;
    }

    /**
     * Set the arch imp3519 tva.
     *
     * @param bool $archImp3519Tva The arch imp3519 tva.
     */
    public function setArchImp3519Tva($archImp3519Tva) {
        $this->archImp3519Tva = $archImp3519Tva;
        return $this;
    }
}
