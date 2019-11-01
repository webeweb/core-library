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
 * Code famille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFamilleTrait {

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }
}
