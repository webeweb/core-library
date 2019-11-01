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
 * Tresorerie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTresorerieTrait {

    /**
     * Tresorerie.
     *
     * @var string
     */
    private $tresorerie;

    /**
     * Get the tresorerie.
     *
     * @return string Returns the tresorerie.
     */
    public function getTresorerie() {
        return $this->tresorerie;
    }

    /**
     * Set the tresorerie.
     *
     * @param string $tresorerie The tresorerie.
     */
    public function setTresorerie($tresorerie) {
        $this->tresorerie = $tresorerie;
        return $this;
    }
}
