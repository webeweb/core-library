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
 * Type agrement aem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAgrementAemTrait {

    /**
     * Type agrement aem.
     *
     * @var string
     */
    private $typeAgrementAem;

    /**
     * Get the type agrement aem.
     *
     * @return string Returns the type agrement aem.
     */
    public function getTypeAgrementAem() {
        return $this->typeAgrementAem;
    }

    /**
     * Set the type agrement aem.
     *
     * @param string $typeAgrementAem The type agrement aem.
     */
    public function setTypeAgrementAem($typeAgrementAem) {
        $this->typeAgrementAem = $typeAgrementAem;
        return $this;
    }
}
