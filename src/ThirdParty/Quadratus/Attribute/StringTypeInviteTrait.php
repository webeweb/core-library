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
 * Type invite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeInviteTrait {

    /**
     * Type invite.
     *
     * @var string
     */
    private $typeInvite;

    /**
     * Get the type invite.
     *
     * @return string Returns the type invite.
     */
    public function getTypeInvite() {
        return $this->typeInvite;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
