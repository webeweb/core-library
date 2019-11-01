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
 * Creation bons travaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationBonsTravauxTrait {

    /**
     * Creation bons travaux.
     *
     * @var bool
     */
    private $creationBonsTravaux;

    /**
     * Get the creation bons travaux.
     *
     * @return bool Returns the creation bons travaux.
     */
    public function getCreationBonsTravaux() {
        return $this->creationBonsTravaux;
    }

    /**
     * Set the creation bons travaux.
     *
     * @param bool $creationBonsTravaux The creation bons travaux.
     */
    public function setCreationBonsTravaux($creationBonsTravaux) {
        $this->creationBonsTravaux = $creationBonsTravaux;
        return $this;
    }
}
