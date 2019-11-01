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
 * Edit page garde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditPageGardeTrait {

    /**
     * Edit page garde.
     *
     * @var bool
     */
    private $editPageGarde;

    /**
     * Get the edit page garde.
     *
     * @return bool Returns the edit page garde.
     */
    public function getEditPageGarde() {
        return $this->editPageGarde;
    }

    /**
     * Set the edit page garde.
     *
     * @param bool $editPageGarde The edit page garde.
     */
    public function setEditPageGarde($editPageGarde) {
        $this->editPageGarde = $editPageGarde;
        return $this;
    }
}
