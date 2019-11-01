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
 * Code temps arret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTempsArretTrait {

    /**
     * Code temps arret.
     *
     * @var string
     */
    private $codeTempsArret;

    /**
     * Get the code temps arret.
     *
     * @return string Returns the code temps arret.
     */
    public function getCodeTempsArret() {
        return $this->codeTempsArret;
    }

    /**
     * Set the code temps arret.
     *
     * @param string $codeTempsArret The code temps arret.
     */
    public function setCodeTempsArret($codeTempsArret) {
        $this->codeTempsArret = $codeTempsArret;
        return $this;
    }
}
