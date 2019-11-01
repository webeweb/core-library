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
 * Contrat part autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContratPartAutreTrait {

    /**
     * Contrat part autre.
     *
     * @var string
     */
    private $contratPartAutre;

    /**
     * Get the contrat part autre.
     *
     * @return string Returns the contrat part autre.
     */
    public function getContratPartAutre() {
        return $this->contratPartAutre;
    }

    /**
     * Set the contrat part autre.
     *
     * @param string $contratPartAutre The contrat part autre.
     */
    public function setContratPartAutre($contratPartAutre) {
        $this->contratPartAutre = $contratPartAutre;
        return $this;
    }
}
