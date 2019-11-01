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
 * Nbr operations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbrOperationsTrait {

    /**
     * Nbr operations.
     *
     * @var string
     */
    private $nbrOperations;

    /**
     * Get the nbr operations.
     *
     * @return string Returns the nbr operations.
     */
    public function getNbrOperations() {
        return $this->nbrOperations;
    }

    /**
     * Set the nbr operations.
     *
     * @param string $nbrOperations The nbr operations.
     */
    public function setNbrOperations($nbrOperations) {
        $this->nbrOperations = $nbrOperations;
        return $this;
    }
}
