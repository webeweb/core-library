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
 * Cpt dot cor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDotCorTrait {

    /**
     * Cpt dot cor.
     *
     * @var string
     */
    private $cptDotCor;

    /**
     * Get the cpt dot cor.
     *
     * @return string Returns the cpt dot cor.
     */
    public function getCptDotCor() {
        return $this->cptDotCor;
    }

    /**
     * Set the cpt dot cor.
     *
     * @param string $cptDotCor The cpt dot cor.
     */
    public function setCptDotCor($cptDotCor) {
        $this->cptDotCor = $cptDotCor;
        return $this;
    }
}
