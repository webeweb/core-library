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
 * V numero ini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVNumeroIniTrait {

    /**
     * V numero ini.
     *
     * @var int
     */
    private $vNumeroIni;

    /**
     * Get the v numero ini.
     *
     * @return int Returns the v numero ini.
     */
    public function getVNumeroIni() {
        return $this->vNumeroIni;
    }

    /**
     * Set the v numero ini.
     *
     * @param int $vNumeroIni The v numero ini.
     */
    public function setVNumeroIni($vNumeroIni) {
        $this->vNumeroIni = $vNumeroIni;
        return $this;
    }
}
