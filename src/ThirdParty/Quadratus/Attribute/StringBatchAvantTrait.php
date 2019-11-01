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
 * Batch avant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBatchAvantTrait {

    /**
     * Batch avant.
     *
     * @var string
     */
    private $batchAvant;

    /**
     * Get the batch avant.
     *
     * @return string Returns the batch avant.
     */
    public function getBatchAvant() {
        return $this->batchAvant;
    }

    /**
     * Set the batch avant.
     *
     * @param string $batchAvant The batch avant.
     */
    public function setBatchAvant($batchAvant) {
        $this->batchAvant = $batchAvant;
        return $this;
    }
}
