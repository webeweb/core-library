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
 * Suivi par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviParTrait {

    /**
     * Suivi par.
     *
     * @var string
     */
    private $suiviPar;

    /**
     * Get the suivi par.
     *
     * @return string Returns the suivi par.
     */
    public function getSuiviPar() {
        return $this->suiviPar;
    }

    /**
     * Set the suivi par.
     *
     * @param string $suiviPar The suivi par.
     */
    public function setSuiviPar($suiviPar) {
        $this->suiviPar = $suiviPar;
        return $this;
    }
}
