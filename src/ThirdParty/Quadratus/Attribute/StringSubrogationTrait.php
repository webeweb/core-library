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
 * Subrogation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSubrogationTrait {

    /**
     * Subrogation.
     *
     * @var string
     */
    private $subrogation;

    /**
     * Get the subrogation.
     *
     * @return string Returns the subrogation.
     */
    public function getSubrogation() {
        return $this->subrogation;
    }

    /**
     * Set the subrogation.
     *
     * @param string $subrogation The subrogation.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }
}
