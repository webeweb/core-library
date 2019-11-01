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
 * Type saisie chom intemp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSaisieChomIntempTrait {

    /**
     * Type saisie chom intemp.
     *
     * @var string
     */
    private $typeSaisieChomIntemp;

    /**
     * Get the type saisie chom intemp.
     *
     * @return string Returns the type saisie chom intemp.
     */
    public function getTypeSaisieChomIntemp() {
        return $this->typeSaisieChomIntemp;
    }

    /**
     * Set the type saisie chom intemp.
     *
     * @param string $typeSaisieChomIntemp The type saisie chom intemp.
     */
    public function setTypeSaisieChomIntemp($typeSaisieChomIntemp) {
        $this->typeSaisieChomIntemp = $typeSaisieChomIntemp;
        return $this;
    }
}
