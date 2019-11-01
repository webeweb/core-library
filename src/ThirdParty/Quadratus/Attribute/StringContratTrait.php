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
 * Contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContratTrait {

    /**
     * Contrat.
     *
     * @var string
     */
    private $contrat;

    /**
     * Get the contrat.
     *
     * @return string Returns the contrat.
     */
    public function getContrat() {
        return $this->contrat;
    }

    /**
     * Set the contrat.
     *
     * @param string $contrat The contrat.
     */
    public function setContrat($contrat) {
        $this->contrat = $contrat;
        return $this;
    }
}
