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
 * Fin exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinExoTrait {

    /**
     * Fin exo.
     *
     * @var DateTime|null
     */
    private $finExo;

    /**
     * Get the fin exo.
     *
     * @return DateTime|null Returns the fin exo.
     */
    public function getFinExo() {
        return $this->finExo;
    }

    /**
     * Set the fin exo.
     *
     * @param DateTime|null $finExo The fin exo.
     */
    public function setFinExo(DateTime $finExo = null) {
        $this->finExo = $finExo;
        return $this;
    }
}
