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
 * Implantation entreprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImplantationEntrepriseTrait {

    /**
     * Implantation entreprise.
     *
     * @var string
     */
    private $implantationEntreprise;

    /**
     * Get the implantation entreprise.
     *
     * @return string Returns the implantation entreprise.
     */
    public function getImplantationEntreprise() {
        return $this->implantationEntreprise;
    }

    /**
     * Set the implantation entreprise.
     *
     * @param string $implantationEntreprise The implantation entreprise.
     */
    public function setImplantationEntreprise($implantationEntreprise) {
        $this->implantationEntreprise = $implantationEntreprise;
        return $this;
    }
}
