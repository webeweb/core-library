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
 * Code distribution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDistributionTrait {

    /**
     * Code distribution.
     *
     * @var string
     */
    private $codeDistribution;

    /**
     * Get the code distribution.
     *
     * @return string Returns the code distribution.
     */
    public function getCodeDistribution() {
        return $this->codeDistribution;
    }

    /**
     * Set the code distribution.
     *
     * @param string $codeDistribution The code distribution.
     */
    public function setCodeDistribution($codeDistribution) {
        $this->codeDistribution = $codeDistribution;
        return $this;
    }
}
