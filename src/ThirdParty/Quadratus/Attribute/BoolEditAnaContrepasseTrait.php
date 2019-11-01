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
 * Edit ana contrepasse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditAnaContrepasseTrait {

    /**
     * Edit ana contrepasse.
     *
     * @var bool
     */
    private $editAnaContrepasse;

    /**
     * Get the edit ana contrepasse.
     *
     * @return bool Returns the edit ana contrepasse.
     */
    public function getEditAnaContrepasse() {
        return $this->editAnaContrepasse;
    }

    /**
     * Set the edit ana contrepasse.
     *
     * @param bool $editAnaContrepasse The edit ana contrepasse.
     */
    public function setEditAnaContrepasse($editAnaContrepasse) {
        $this->editAnaContrepasse = $editAnaContrepasse;
        return $this;
    }
}
