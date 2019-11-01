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
 * Type abs cp corr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsCpCorrTrait {

    /**
     * Type abs cp corr.
     *
     * @var string
     */
    private $typeAbsCpCorr;

    /**
     * Get the type abs cp corr.
     *
     * @return string Returns the type abs cp corr.
     */
    public function getTypeAbsCpCorr() {
        return $this->typeAbsCpCorr;
    }

    /**
     * Set the type abs cp corr.
     *
     * @param string $typeAbsCpCorr The type abs cp corr.
     */
    public function setTypeAbsCpCorr($typeAbsCpCorr) {
        $this->typeAbsCpCorr = $typeAbsCpCorr;
        return $this;
    }
}
