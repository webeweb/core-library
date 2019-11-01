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
 * Op invitation masse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpInvitationMasseTrait {

    /**
     * Op invitation masse.
     *
     * @var bool
     */
    private $opInvitationMasse;

    /**
     * Get the op invitation masse.
     *
     * @return bool Returns the op invitation masse.
     */
    public function getOpInvitationMasse() {
        return $this->opInvitationMasse;
    }

    /**
     * Set the op invitation masse.
     *
     * @param bool $opInvitationMasse The op invitation masse.
     */
    public function setOpInvitationMasse($opInvitationMasse) {
        $this->opInvitationMasse = $opInvitationMasse;
        return $this;
    }
}
