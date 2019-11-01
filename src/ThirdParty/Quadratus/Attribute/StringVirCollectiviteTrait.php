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
 * Vir collectivite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirCollectiviteTrait {

    /**
     * Vir collectivite.
     *
     * @var string
     */
    private $virCollectivite;

    /**
     * Get the vir collectivite.
     *
     * @return string Returns the vir collectivite.
     */
    public function getVirCollectivite() {
        return $this->virCollectivite;
    }

    /**
     * Set the vir collectivite.
     *
     * @param string $virCollectivite The vir collectivite.
     */
    public function setVirCollectivite($virCollectivite) {
        $this->virCollectivite = $virCollectivite;
        return $this;
    }
}
