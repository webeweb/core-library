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
 * V numero compte ini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVNumeroCompteIniTrait {

    /**
     * V numero compte ini.
     *
     * @var string
     */
    private $vNumeroCompteIni;

    /**
     * Get the v numero compte ini.
     *
     * @return string Returns the v numero compte ini.
     */
    public function getVNumeroCompteIni() {
        return $this->vNumeroCompteIni;
    }

    /**
     * Set the v numero compte ini.
     *
     * @param string $vNumeroCompteIni The v numero compte ini.
     */
    public function setVNumeroCompteIni($vNumeroCompteIni) {
        $this->vNumeroCompteIni = $vNumeroCompteIni;
        return $this;
    }
}
