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
 * Type actionnaires associes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeActionnairesAssociesTrait {

    /**
     * Type actionnaires associes.
     *
     * @var string
     */
    private $typeActionnairesAssocies;

    /**
     * Get the type actionnaires associes.
     *
     * @return string Returns the type actionnaires associes.
     */
    public function getTypeActionnairesAssocies() {
        return $this->typeActionnairesAssocies;
    }

    /**
     * Set the type actionnaires associes.
     *
     * @param string $typeActionnairesAssocies The type actionnaires associes.
     */
    public function setTypeActionnairesAssocies($typeActionnairesAssocies) {
        $this->typeActionnairesAssocies = $typeActionnairesAssocies;
        return $this;
    }
}
