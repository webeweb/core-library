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
 * Edit date echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditDateEcheanceTrait {

    /**
     * Edit date echeance.
     *
     * @var bool
     */
    private $editDateEcheance;

    /**
     * Get the edit date echeance.
     *
     * @return bool Returns the edit date echeance.
     */
    public function getEditDateEcheance() {
        return $this->editDateEcheance;
    }

    /**
     * Set the edit date echeance.
     *
     * @param bool $editDateEcheance The edit date echeance.
     */
    public function setEditDateEcheance($editDateEcheance) {
        $this->editDateEcheance = $editDateEcheance;
        return $this;
    }
}
