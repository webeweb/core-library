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
 * Imputation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImputationTrait {

    /**
     * Imputation.
     *
     * @var bool
     */
    private $imputation;

    /**
     * Get the imputation.
     *
     * @return bool Returns the imputation.
     */
    public function getImputation() {
        return $this->imputation;
    }

    /**
     * Set the imputation.
     *
     * @param bool $imputation The imputation.
     */
    public function setImputation($imputation) {
        $this->imputation = $imputation;
        return $this;
    }
}
