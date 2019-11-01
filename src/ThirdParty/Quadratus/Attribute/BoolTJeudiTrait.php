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
 * T jeudi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTJeudiTrait {

    /**
     * T jeudi.
     *
     * @var bool
     */
    private $tJeudi;

    /**
     * Get the t jeudi.
     *
     * @return bool Returns the t jeudi.
     */
    public function getTJeudi() {
        return $this->tJeudi;
    }

    /**
     * Set the t jeudi.
     *
     * @param bool $tJeudi The t jeudi.
     */
    public function setTJeudi($tJeudi) {
        $this->tJeudi = $tJeudi;
        return $this;
    }
}
