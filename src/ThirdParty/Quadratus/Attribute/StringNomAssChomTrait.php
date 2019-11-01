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
 * Nom ass chom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomAssChomTrait {

    /**
     * Nom ass chom.
     *
     * @var string
     */
    private $nomAssChom;

    /**
     * Get the nom ass chom.
     *
     * @return string Returns the nom ass chom.
     */
    public function getNomAssChom() {
        return $this->nomAssChom;
    }

    /**
     * Set the nom ass chom.
     *
     * @param string $nomAssChom The nom ass chom.
     */
    public function setNomAssChom($nomAssChom) {
        $this->nomAssChom = $nomAssChom;
        return $this;
    }
}
