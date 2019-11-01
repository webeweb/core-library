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
 * Code postal naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalNaissanceTrait {

    /**
     * Code postal naissance.
     *
     * @var string
     */
    private $codePostalNaissance;

    /**
     * Get the code postal naissance.
     *
     * @return string Returns the code postal naissance.
     */
    public function getCodePostalNaissance() {
        return $this->codePostalNaissance;
    }

    /**
     * Set the code postal naissance.
     *
     * @param string $codePostalNaissance The code postal naissance.
     */
    public function setCodePostalNaissance($codePostalNaissance) {
        $this->codePostalNaissance = $codePostalNaissance;
        return $this;
    }
}
