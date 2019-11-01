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
 * Op invitation indiv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpInvitationIndivTrait {

    /**
     * Op invitation indiv.
     *
     * @var bool
     */
    private $opInvitationIndiv;

    /**
     * Get the op invitation indiv.
     *
     * @return bool Returns the op invitation indiv.
     */
    public function getOpInvitationIndiv() {
        return $this->opInvitationIndiv;
    }

    /**
     * Set the op invitation indiv.
     *
     * @param bool $opInvitationIndiv The op invitation indiv.
     */
    public function setOpInvitationIndiv($opInvitationIndiv) {
        $this->opInvitationIndiv = $opInvitationIndiv;
        return $this;
    }
}
