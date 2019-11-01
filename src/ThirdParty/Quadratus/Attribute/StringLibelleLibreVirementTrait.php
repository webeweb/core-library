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
 * Libelle libre virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleLibreVirementTrait {

    /**
     * Libelle libre virement.
     *
     * @var string
     */
    private $libelleLibreVirement;

    /**
     * Get the libelle libre virement.
     *
     * @return string Returns the libelle libre virement.
     */
    public function getLibelleLibreVirement() {
        return $this->libelleLibreVirement;
    }

    /**
     * Set the libelle libre virement.
     *
     * @param string $libelleLibreVirement The libelle libre virement.
     */
    public function setLibelleLibreVirement($libelleLibreVirement) {
        $this->libelleLibreVirement = $libelleLibreVirement;
        return $this;
    }
}
