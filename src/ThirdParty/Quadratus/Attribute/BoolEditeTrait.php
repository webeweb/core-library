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
 * Edite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditeTrait {

    /**
     * Edite.
     *
     * @var bool
     */
    private $edite;

    /**
     * Get the edite.
     *
     * @return bool Returns the edite.
     */
    public function getEdite() {
        return $this->edite;
    }

    /**
     * Set the edite.
     *
     * @param bool $edite The edite.
     */
    public function setEdite($edite) {
        $this->edite = $edite;
        return $this;
    }
}
