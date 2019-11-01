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
 * Type invitation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeInvitationTrait {

    /**
     * Type invitation.
     *
     * @var int
     */
    private $typeInvitation;

    /**
     * Get the type invitation.
     *
     * @return int Returns the type invitation.
     */
    public function getTypeInvitation() {
        return $this->typeInvitation;
    }

    /**
     * Set the type invitation.
     *
     * @param int $typeInvitation The type invitation.
     */
    public function setTypeInvitation($typeInvitation) {
        $this->typeInvitation = $typeInvitation;
        return $this;
    }
}
