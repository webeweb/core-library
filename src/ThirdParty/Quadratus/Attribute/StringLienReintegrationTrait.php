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
 * Lien reintegration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLienReintegrationTrait {

    /**
     * Lien reintegration.
     *
     * @var string
     */
    private $lienReintegration;

    /**
     * Get the lien reintegration.
     *
     * @return string Returns the lien reintegration.
     */
    public function getLienReintegration() {
        return $this->lienReintegration;
    }

    /**
     * Set the lien reintegration.
     *
     * @param string $lienReintegration The lien reintegration.
     */
    public function setLienReintegration($lienReintegration) {
        $this->lienReintegration = $lienReintegration;
        return $this;
    }
}
