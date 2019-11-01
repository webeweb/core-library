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
 * Tresorerie is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTresorerieIsTrait {

    /**
     * Tresorerie is.
     *
     * @var string
     */
    private $tresorerieIs;

    /**
     * Get the tresorerie is.
     *
     * @return string Returns the tresorerie is.
     */
    public function getTresorerieIs() {
        return $this->tresorerieIs;
    }

    /**
     * Set the tresorerie is.
     *
     * @param string $tresorerieIs The tresorerie is.
     */
    public function setTresorerieIs($tresorerieIs) {
        $this->tresorerieIs = $tresorerieIs;
        return $this;
    }
}
