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
 * Saut page trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSautPageTrait {

    /**
     * Saut page.
     *
     * @var bool
     */
    private $sautPage;

    /**
     * Get the saut page.
     *
     * @return bool Returns the saut page.
     */
    public function getSautPage() {
        return $this->sautPage;
    }

    /**
     * Set the saut page.
     *
     * @param bool $sautPage The saut page.
     */
    public function setSautPage($sautPage) {
        $this->sautPage = $sautPage;
        return $this;
    }
}
