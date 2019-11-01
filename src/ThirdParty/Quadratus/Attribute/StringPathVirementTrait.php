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
 * Path virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPathVirementTrait {

    /**
     * Path virement.
     *
     * @var string
     */
    private $pathVirement;

    /**
     * Get the path virement.
     *
     * @return string Returns the path virement.
     */
    public function getPathVirement() {
        return $this->pathVirement;
    }

    /**
     * Set the path virement.
     *
     * @param string $pathVirement The path virement.
     */
    public function setPathVirement($pathVirement) {
        $this->pathVirement = $pathVirement;
        return $this;
    }
}
