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
 * Etbl responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblResponsableTrait {

    /**
     * Etbl responsable.
     *
     * @var string
     */
    private $etblResponsable;

    /**
     * Get the etbl responsable.
     *
     * @return string Returns the etbl responsable.
     */
    public function getEtblResponsable() {
        return $this->etblResponsable;
    }

    /**
     * Set the etbl responsable.
     *
     * @param string $etblResponsable The etbl responsable.
     */
    public function setEtblResponsable($etblResponsable) {
        $this->etblResponsable = $etblResponsable;
        return $this;
    }
}
