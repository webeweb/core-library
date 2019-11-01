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
 * Code postal rm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalRmTrait {

    /**
     * Code postal rm.
     *
     * @var string
     */
    private $codePostalRm;

    /**
     * Get the code postal rm.
     *
     * @return string Returns the code postal rm.
     */
    public function getCodePostalRm() {
        return $this->codePostalRm;
    }

    /**
     * Set the code postal rm.
     *
     * @param string $codePostalRm The code postal rm.
     */
    public function setCodePostalRm($codePostalRm) {
        $this->codePostalRm = $codePostalRm;
        return $this;
    }
}
