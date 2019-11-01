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
 * Id pointeuse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdPointeuseTrait {

    /**
     * Id pointeuse.
     *
     * @var int
     */
    private $idPointeuse;

    /**
     * Get the id pointeuse.
     *
     * @return int Returns the id pointeuse.
     */
    public function getIdPointeuse() {
        return $this->idPointeuse;
    }

    /**
     * Set the id pointeuse.
     *
     * @param int $idPointeuse The id pointeuse.
     */
    public function setIdPointeuse($idPointeuse) {
        $this->idPointeuse = $idPointeuse;
        return $this;
    }
}
