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
 * lng code article auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntlngCodeArticleAutoTrait {

    /**
     * lng code article auto.
     *
     * @var int
     */
    private $lngCodeArticleAuto;

    /**
     * Get the lng code article auto.
     *
     * @return int Returns the lng code article auto.
     */
    public function getlngCodeArticleAuto() {
        return $this->lngCodeArticleAuto;
    }

    /**
     * Set the lng code article auto.
     *
     * @param int $lngCodeArticleAuto The lng code article auto.
     */
    public function setlngCodeArticleAuto($lngCodeArticleAuto) {
        $this->lngCodeArticleAuto = $lngCodeArticleAuto;
        return $this;
    }
}
