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
 * Cdi code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiCodePostalTrait {

    /**
     * Cdi code postal.
     *
     * @var string
     */
    private $cdiCodePostal;

    /**
     * Get the cdi code postal.
     *
     * @return string Returns the cdi code postal.
     */
    public function getCdiCodePostal() {
        return $this->cdiCodePostal;
    }

    /**
     * Set the cdi code postal.
     *
     * @param string $cdiCodePostal The cdi code postal.
     */
    public function setCdiCodePostal($cdiCodePostal) {
        $this->cdiCodePostal = $cdiCodePostal;
        return $this;
    }
}
