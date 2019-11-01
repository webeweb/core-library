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
 * Edit date systeme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditDateSystemeTrait {

    /**
     * Edit date systeme.
     *
     * @var bool
     */
    private $editDateSysteme;

    /**
     * Get the edit date systeme.
     *
     * @return bool Returns the edit date systeme.
     */
    public function getEditDateSysteme() {
        return $this->editDateSysteme;
    }

    /**
     * Set the edit date systeme.
     *
     * @param bool $editDateSysteme The edit date systeme.
     */
    public function setEditDateSysteme($editDateSysteme) {
        $this->editDateSysteme = $editDateSysteme;
        return $this;
    }
}
