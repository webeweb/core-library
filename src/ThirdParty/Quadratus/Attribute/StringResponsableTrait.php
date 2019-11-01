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
 * Responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringResponsableTrait {

    /**
     * Responsable.
     *
     * @var string
     */
    private $responsable;

    /**
     * Get the responsable.
     *
     * @return string Returns the responsable.
     */
    public function getResponsable() {
        return $this->responsable;
    }

    /**
     * Set the responsable.
     *
     * @param string $responsable The responsable.
     */
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
        return $this;
    }
}
