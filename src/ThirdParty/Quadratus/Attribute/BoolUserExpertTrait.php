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
 * User expert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUserExpertTrait {

    /**
     * User expert.
     *
     * @var bool
     */
    private $userExpert;

    /**
     * Get the user expert.
     *
     * @return bool Returns the user expert.
     */
    public function getUserExpert() {
        return $this->userExpert;
    }

    /**
     * Set the user expert.
     *
     * @param bool $userExpert The user expert.
     */
    public function setUserExpert($userExpert) {
        $this->userExpert = $userExpert;
        return $this;
    }
}
