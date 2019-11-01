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
 * Cdi nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiNomTrait {

    /**
     * Cdi nom.
     *
     * @var string
     */
    private $cdiNom;

    /**
     * Get the cdi nom.
     *
     * @return string Returns the cdi nom.
     */
    public function getCdiNom() {
        return $this->cdiNom;
    }

    /**
     * Set the cdi nom.
     *
     * @param string $cdiNom The cdi nom.
     */
    public function setCdiNom($cdiNom) {
        $this->cdiNom = $cdiNom;
        return $this;
    }
}
