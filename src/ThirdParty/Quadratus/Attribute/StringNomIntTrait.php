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
 * Nom int trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomIntTrait {

    /**
     * Nom int.
     *
     * @var string
     */
    private $nomInt;

    /**
     * Get the nom int.
     *
     * @return string Returns the nom int.
     */
    public function getNomInt() {
        return $this->nomInt;
    }

    /**
     * Set the nom int.
     *
     * @param string $nomInt The nom int.
     */
    public function setNomInt($nomInt) {
        $this->nomInt = $nomInt;
        return $this;
    }
}
