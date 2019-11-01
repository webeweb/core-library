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
 * Soumis csg100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisCsg100Trait {

    /**
     * Soumis csg100.
     *
     * @var bool
     */
    private $soumisCsg100;

    /**
     * Get the soumis csg100.
     *
     * @return bool Returns the soumis csg100.
     */
    public function getSoumisCsg100() {
        return $this->soumisCsg100;
    }

    /**
     * Set the soumis csg100.
     *
     * @param bool $soumisCsg100 The soumis csg100.
     */
    public function setSoumisCsg100($soumisCsg100) {
        $this->soumisCsg100 = $soumisCsg100;
        return $this;
    }
}
