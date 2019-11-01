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
 * Cpt tva assu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptTvaAssuTrait {

    /**
     * Cpt tva assu.
     *
     * @var string
     */
    private $cptTvaAssu;

    /**
     * Get the cpt tva assu.
     *
     * @return string Returns the cpt tva assu.
     */
    public function getCptTvaAssu() {
        return $this->cptTvaAssu;
    }

    /**
     * Set the cpt tva assu.
     *
     * @param string $cptTvaAssu The cpt tva assu.
     */
    public function setCptTvaAssu($cptTvaAssu) {
        $this->cptTvaAssu = $cptTvaAssu;
        return $this;
    }
}
