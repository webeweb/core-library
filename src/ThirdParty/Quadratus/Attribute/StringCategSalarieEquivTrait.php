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
 * Categ salarie equiv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategSalarieEquivTrait {

    /**
     * Categ salarie equiv.
     *
     * @var string
     */
    private $categSalarieEquiv;

    /**
     * Get the categ salarie equiv.
     *
     * @return string Returns the categ salarie equiv.
     */
    public function getCategSalarieEquiv() {
        return $this->categSalarieEquiv;
    }

    /**
     * Set the categ salarie equiv.
     *
     * @param string $categSalarieEquiv The categ salarie equiv.
     */
    public function setCategSalarieEquiv($categSalarieEquiv) {
        $this->categSalarieEquiv = $categSalarieEquiv;
        return $this;
    }
}
