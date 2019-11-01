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
 * Honoraires uniquement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHonorairesUniquementTrait {

    /**
     * Honoraires uniquement.
     *
     * @var bool
     */
    private $honorairesUniquement;

    /**
     * Get the honoraires uniquement.
     *
     * @return bool Returns the honoraires uniquement.
     */
    public function getHonorairesUniquement() {
        return $this->honorairesUniquement;
    }

    /**
     * Set the honoraires uniquement.
     *
     * @param bool $honorairesUniquement The honoraires uniquement.
     */
    public function setHonorairesUniquement($honorairesUniquement) {
        $this->honorairesUniquement = $honorairesUniquement;
        return $this;
    }
}
