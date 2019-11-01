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
 * Restr cli expert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliExpertTrait {

    /**
     * Restr cli expert.
     *
     * @var string
     */
    private $restrCliExpert;

    /**
     * Get the restr cli expert.
     *
     * @return string Returns the restr cli expert.
     */
    public function getRestrCliExpert() {
        return $this->restrCliExpert;
    }

    /**
     * Set the restr cli expert.
     *
     * @param string $restrCliExpert The restr cli expert.
     */
    public function setRestrCliExpert($restrCliExpert) {
        $this->restrCliExpert = $restrCliExpert;
        return $this;
    }
}
