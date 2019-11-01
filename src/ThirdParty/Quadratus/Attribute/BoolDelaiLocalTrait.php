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
 * Delai local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDelaiLocalTrait {

    /**
     * Delai local.
     *
     * @var bool
     */
    private $delaiLocal;

    /**
     * Get the delai local.
     *
     * @return bool Returns the delai local.
     */
    public function getDelaiLocal() {
        return $this->delaiLocal;
    }

    /**
     * Set the delai local.
     *
     * @param bool $delaiLocal The delai local.
     */
    public function setDelaiLocal($delaiLocal) {
        $this->delaiLocal = $delaiLocal;
        return $this;
    }
}
