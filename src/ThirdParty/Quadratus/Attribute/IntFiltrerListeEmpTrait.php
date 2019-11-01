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
 * Filtrer liste emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFiltrerListeEmpTrait {

    /**
     * Filtrer liste emp.
     *
     * @var int
     */
    private $filtrerListeEmp;

    /**
     * Get the filtrer liste emp.
     *
     * @return int Returns the filtrer liste emp.
     */
    public function getFiltrerListeEmp() {
        return $this->filtrerListeEmp;
    }

    /**
     * Set the filtrer liste emp.
     *
     * @param int $filtrerListeEmp The filtrer liste emp.
     */
    public function setFiltrerListeEmp($filtrerListeEmp) {
        $this->filtrerListeEmp = $filtrerListeEmp;
        return $this;
    }
}
