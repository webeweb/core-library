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
 * Permis delivre par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPermisDelivreParTrait {

    /**
     * Permis delivre par.
     *
     * @var string
     */
    private $permisDelivrePar;

    /**
     * Get the permis delivre par.
     *
     * @return string Returns the permis delivre par.
     */
    public function getPermisDelivrePar() {
        return $this->permisDelivrePar;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string $permisDelivrePar The permis delivre par.
     */
    public function setPermisDelivrePar($permisDelivrePar) {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }
}
