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
 * Is taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsTauxTrait {

    /**
     * Is taux.
     *
     * @var bool
     */
    private $isTaux;

    /**
     * Get the is taux.
     *
     * @return bool Returns the is taux.
     */
    public function getIsTaux() {
        return $this->isTaux;
    }

    /**
     * Set the is taux.
     *
     * @param bool $isTaux The is taux.
     */
    public function setIsTaux($isTaux) {
        $this->isTaux = $isTaux;
        return $this;
    }
}
