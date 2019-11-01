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
 * Pays trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPaysTrait {

    /**
     * Pays.
     *
     * @var string
     */
    private $pays;

    /**
     * Get the pays.
     *
     * @return string Returns the pays.
     */
    public function getPays() {
        return $this->pays;
    }

    /**
     * Set the pays.
     *
     * @param string $pays The pays.
     */
    public function setPays($pays) {
        $this->pays = $pays;
        return $this;
    }
}
