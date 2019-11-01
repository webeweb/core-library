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
 * Id action trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdActionTrait {

    /**
     * Id action.
     *
     * @var int
     */
    private $idAction;

    /**
     * Get the id action.
     *
     * @return int Returns the id action.
     */
    public function getIdAction() {
        return $this->idAction;
    }

    /**
     * Set the id action.
     *
     * @param int $idAction The id action.
     */
    public function setIdAction($idAction) {
        $this->idAction = $idAction;
        return $this;
    }
}
