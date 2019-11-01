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
 * Pas acces qws trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasAccesQwsTrait {

    /**
     * Pas acces qws.
     *
     * @var bool
     */
    private $pasAccesQws;

    /**
     * Get the pas acces qws.
     *
     * @return bool Returns the pas acces qws.
     */
    public function getPasAccesQws() {
        return $this->pasAccesQws;
    }

    /**
     * Set the pas acces qws.
     *
     * @param bool $pasAccesQws The pas acces qws.
     */
    public function setPasAccesQws($pasAccesQws) {
        $this->pasAccesQws = $pasAccesQws;
        return $this;
    }
}
