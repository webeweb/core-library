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

use DateTime;

/**
 * Permis expire le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePermisExpireLeTrait {

    /**
     * Permis expire le.
     *
     * @var DateTime|null
     */
    private $permisExpireLe;

    /**
     * Get the permis expire le.
     *
     * @return DateTime|null Returns the permis expire le.
     */
    public function getPermisExpireLe() {
        return $this->permisExpireLe;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime|null $permisExpireLe The permis expire le.
     */
    public function setPermisExpireLe(DateTime $permisExpireLe = null) {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }
}
