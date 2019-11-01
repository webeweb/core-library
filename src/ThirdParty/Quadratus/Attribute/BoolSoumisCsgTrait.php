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
 * Soumis csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisCsgTrait {

    /**
     * Soumis csg.
     *
     * @var bool
     */
    private $soumisCsg;

    /**
     * Get the soumis csg.
     *
     * @return bool Returns the soumis csg.
     */
    public function getSoumisCsg() {
        return $this->soumisCsg;
    }

    /**
     * Set the soumis csg.
     *
     * @param bool $soumisCsg The soumis csg.
     */
    public function setSoumisCsg($soumisCsg) {
        $this->soumisCsg = $soumisCsg;
        return $this;
    }
}
