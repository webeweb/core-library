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
 * Libelle ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleEcrTrait {

    /**
     * Libelle ecr.
     *
     * @var string
     */
    private $libelleEcr;

    /**
     * Get the libelle ecr.
     *
     * @return string Returns the libelle ecr.
     */
    public function getLibelleEcr() {
        return $this->libelleEcr;
    }

    /**
     * Set the libelle ecr.
     *
     * @param string $libelleEcr The libelle ecr.
     */
    public function setLibelleEcr($libelleEcr) {
        $this->libelleEcr = $libelleEcr;
        return $this;
    }
}
