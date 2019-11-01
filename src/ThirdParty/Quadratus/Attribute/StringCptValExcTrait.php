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
 * Cpt val exc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptValExcTrait {

    /**
     * Cpt val exc.
     *
     * @var string
     */
    private $cptValExc;

    /**
     * Get the cpt val exc.
     *
     * @return string Returns the cpt val exc.
     */
    public function getCptValExc() {
        return $this->cptValExc;
    }

    /**
     * Set the cpt val exc.
     *
     * @param string $cptValExc The cpt val exc.
     */
    public function setCptValExc($cptValExc) {
        $this->cptValExc = $cptValExc;
        return $this;
    }
}
