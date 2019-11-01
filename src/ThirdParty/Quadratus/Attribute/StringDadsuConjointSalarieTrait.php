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
 * Dadsu conjoint salarie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsuConjointSalarieTrait {

    /**
     * Dadsu conjoint salarie.
     *
     * @var string
     */
    private $dadsuConjointSalarie;

    /**
     * Get the dadsu conjoint salarie.
     *
     * @return string Returns the dadsu conjoint salarie.
     */
    public function getDadsuConjointSalarie() {
        return $this->dadsuConjointSalarie;
    }

    /**
     * Set the dadsu conjoint salarie.
     *
     * @param string $dadsuConjointSalarie The dadsu conjoint salarie.
     */
    public function setDadsuConjointSalarie($dadsuConjointSalarie) {
        $this->dadsuConjointSalarie = $dadsuConjointSalarie;
        return $this;
    }
}
