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
 * Autre dom banque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreDomBanqueTrait {

    /**
     * Autre dom banque.
     *
     * @var string
     */
    private $autreDomBanque;

    /**
     * Get the autre dom banque.
     *
     * @return string Returns the autre dom banque.
     */
    public function getAutreDomBanque() {
        return $this->autreDomBanque;
    }

    /**
     * Set the autre dom banque.
     *
     * @param string $autreDomBanque The autre dom banque.
     */
    public function setAutreDomBanque($autreDomBanque) {
        $this->autreDomBanque = $autreDomBanque;
        return $this;
    }
}
