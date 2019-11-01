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
 * Cataloguee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCatalogueeTrait {

    /**
     * Cataloguee.
     *
     * @var bool
     */
    private $cataloguee;

    /**
     * Get the cataloguee.
     *
     * @return bool Returns the cataloguee.
     */
    public function getCataloguee() {
        return $this->cataloguee;
    }

    /**
     * Set the cataloguee.
     *
     * @param bool $cataloguee The cataloguee.
     */
    public function setCataloguee($cataloguee) {
        $this->cataloguee = $cataloguee;
        return $this;
    }
}
