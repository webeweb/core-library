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
 * Code postal rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalRcTrait {

    /**
     * Code postal rc.
     *
     * @var string
     */
    private $codePostalRc;

    /**
     * Get the code postal rc.
     *
     * @return string Returns the code postal rc.
     */
    public function getCodePostalRc() {
        return $this->codePostalRc;
    }

    /**
     * Set the code postal rc.
     *
     * @param string $codePostalRc The code postal rc.
     */
    public function setCodePostalRc($codePostalRc) {
        $this->codePostalRc = $codePostalRc;
        return $this;
    }
}
