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
 * Pas traiter edi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasTraiterEdiTrait {

    /**
     * Pas traiter edi.
     *
     * @var bool
     */
    private $pasTraiterEdi;

    /**
     * Get the pas traiter edi.
     *
     * @return bool Returns the pas traiter edi.
     */
    public function getPasTraiterEdi() {
        return $this->pasTraiterEdi;
    }

    /**
     * Set the pas traiter edi.
     *
     * @param bool $pasTraiterEdi The pas traiter edi.
     */
    public function setPasTraiterEdi($pasTraiterEdi) {
        $this->pasTraiterEdi = $pasTraiterEdi;
        return $this;
    }
}
