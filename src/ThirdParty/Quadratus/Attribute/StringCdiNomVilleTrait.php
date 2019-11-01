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
 * Cdi nom ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiNomVilleTrait {

    /**
     * Cdi nom ville.
     *
     * @var string
     */
    private $cdiNomVille;

    /**
     * Get the cdi nom ville.
     *
     * @return string Returns the cdi nom ville.
     */
    public function getCdiNomVille() {
        return $this->cdiNomVille;
    }

    /**
     * Set the cdi nom ville.
     *
     * @param string $cdiNomVille The cdi nom ville.
     */
    public function setCdiNomVille($cdiNomVille) {
        $this->cdiNomVille = $cdiNomVille;
        return $this;
    }
}
