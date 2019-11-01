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
 * Type activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeActiviteTrait {

    /**
     * Type activite.
     *
     * @var string
     */
    private $typeActivite;

    /**
     * Get the type activite.
     *
     * @return string Returns the type activite.
     */
    public function getTypeActivite() {
        return $this->typeActivite;
    }

    /**
     * Set the type activite.
     *
     * @param string $typeActivite The type activite.
     */
    public function setTypeActivite($typeActivite) {
        $this->typeActivite = $typeActivite;
        return $this;
    }
}
