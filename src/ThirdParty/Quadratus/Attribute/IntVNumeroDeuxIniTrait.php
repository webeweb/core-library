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
 * V numero deux ini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVNumeroDeuxIniTrait {

    /**
     * V numero deux ini.
     *
     * @var int
     */
    private $vNumeroDeuxIni;

    /**
     * Get the v numero deux ini.
     *
     * @return int Returns the v numero deux ini.
     */
    public function getVNumeroDeuxIni() {
        return $this->vNumeroDeuxIni;
    }

    /**
     * Set the v numero deux ini.
     *
     * @param int $vNumeroDeuxIni The v numero deux ini.
     */
    public function setVNumeroDeuxIni($vNumeroDeuxIni) {
        $this->vNumeroDeuxIni = $vNumeroDeuxIni;
        return $this;
    }
}
