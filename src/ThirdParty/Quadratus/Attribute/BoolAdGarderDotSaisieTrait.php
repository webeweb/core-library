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
 * Ad garder dot saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdGarderDotSaisieTrait {

    /**
     * Ad garder dot saisie.
     *
     * @var bool
     */
    private $adGarderDotSaisie;

    /**
     * Get the ad garder dot saisie.
     *
     * @return bool Returns the ad garder dot saisie.
     */
    public function getAdGarderDotSaisie() {
        return $this->adGarderDotSaisie;
    }

    /**
     * Set the ad garder dot saisie.
     *
     * @param bool $adGarderDotSaisie The ad garder dot saisie.
     */
    public function setAdGarderDotSaisie($adGarderDotSaisie) {
        $this->adGarderDotSaisie = $adGarderDotSaisie;
        return $this;
    }
}
