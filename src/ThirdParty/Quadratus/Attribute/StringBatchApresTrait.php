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
 * Batch apres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBatchApresTrait {

    /**
     * Batch apres.
     *
     * @var string
     */
    private $batchApres;

    /**
     * Get the batch apres.
     *
     * @return string Returns the batch apres.
     */
    public function getBatchApres() {
        return $this->batchApres;
    }

    /**
     * Set the batch apres.
     *
     * @param string $batchApres The batch apres.
     */
    public function setBatchApres($batchApres) {
        $this->batchApres = $batchApres;
        return $this;
    }
}
