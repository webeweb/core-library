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
 * Cpt dot exc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDotExcTrait {

    /**
     * Cpt dot exc.
     *
     * @var string
     */
    private $cptDotExc;

    /**
     * Get the cpt dot exc.
     *
     * @return string Returns the cpt dot exc.
     */
    public function getCptDotExc() {
        return $this->cptDotExc;
    }

    /**
     * Set the cpt dot exc.
     *
     * @param string $cptDotExc The cpt dot exc.
     */
    public function setCptDotExc($cptDotExc) {
        $this->cptDotExc = $cptDotExc;
        return $this;
    }
}
