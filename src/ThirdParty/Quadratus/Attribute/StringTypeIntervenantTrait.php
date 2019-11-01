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
 * Type intervenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeIntervenantTrait {

    /**
     * Type intervenant.
     *
     * @var string
     */
    private $typeIntervenant;

    /**
     * Get the type intervenant.
     *
     * @return string Returns the type intervenant.
     */
    public function getTypeIntervenant() {
        return $this->typeIntervenant;
    }

    /**
     * Set the type intervenant.
     *
     * @param string $typeIntervenant The type intervenant.
     */
    public function setTypeIntervenant($typeIntervenant) {
        $this->typeIntervenant = $typeIntervenant;
        return $this;
    }
}
