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
 * Val filtre liste emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntValFiltreListeEmpTrait {

    /**
     * Val filtre liste emp.
     *
     * @var int
     */
    private $valFiltreListeEmp;

    /**
     * Get the val filtre liste emp.
     *
     * @return int Returns the val filtre liste emp.
     */
    public function getValFiltreListeEmp() {
        return $this->valFiltreListeEmp;
    }

    /**
     * Set the val filtre liste emp.
     *
     * @param int $valFiltreListeEmp The val filtre liste emp.
     */
    public function setValFiltreListeEmp($valFiltreListeEmp) {
        $this->valFiltreListeEmp = $valFiltreListeEmp;
        return $this;
    }
}
