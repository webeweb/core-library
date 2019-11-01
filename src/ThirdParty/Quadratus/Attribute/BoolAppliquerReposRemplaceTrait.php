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
 * Appliquer repos remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAppliquerReposRemplaceTrait {

    /**
     * Appliquer repos remplace.
     *
     * @var bool
     */
    private $appliquerReposRemplace;

    /**
     * Get the appliquer repos remplace.
     *
     * @return bool Returns the appliquer repos remplace.
     */
    public function getAppliquerReposRemplace() {
        return $this->appliquerReposRemplace;
    }

    /**
     * Set the appliquer repos remplace.
     *
     * @param bool $appliquerReposRemplace The appliquer repos remplace.
     */
    public function setAppliquerReposRemplace($appliquerReposRemplace) {
        $this->appliquerReposRemplace = $appliquerReposRemplace;
        return $this;
    }
}
