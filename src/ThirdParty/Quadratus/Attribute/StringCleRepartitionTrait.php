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
 * Cle repartition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleRepartitionTrait {

    /**
     * Cle repartition.
     *
     * @var string
     */
    private $cleRepartition;

    /**
     * Get the cle repartition.
     *
     * @return string Returns the cle repartition.
     */
    public function getCleRepartition() {
        return $this->cleRepartition;
    }

    /**
     * Set the cle repartition.
     *
     * @param string $cleRepartition The cle repartition.
     */
    public function setCleRepartition($cleRepartition) {
        $this->cleRepartition = $cleRepartition;
        return $this;
    }
}
