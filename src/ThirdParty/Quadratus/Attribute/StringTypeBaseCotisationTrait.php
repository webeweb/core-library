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
 * Type base cotisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBaseCotisationTrait {

    /**
     * Type base cotisation.
     *
     * @var string
     */
    private $typeBaseCotisation;

    /**
     * Get the type base cotisation.
     *
     * @return string Returns the type base cotisation.
     */
    public function getTypeBaseCotisation() {
        return $this->typeBaseCotisation;
    }

    /**
     * Set the type base cotisation.
     *
     * @param string $typeBaseCotisation The type base cotisation.
     */
    public function setTypeBaseCotisation($typeBaseCotisation) {
        $this->typeBaseCotisation = $typeBaseCotisation;
        return $this;
    }
}
