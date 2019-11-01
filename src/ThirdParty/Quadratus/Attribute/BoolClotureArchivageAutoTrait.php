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
 * Cloture archivage auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolClotureArchivageAutoTrait {

    /**
     * Cloture archivage auto.
     *
     * @var bool
     */
    private $clotureArchivageAuto;

    /**
     * Get the cloture archivage auto.
     *
     * @return bool Returns the cloture archivage auto.
     */
    public function getClotureArchivageAuto() {
        return $this->clotureArchivageAuto;
    }

    /**
     * Set the cloture archivage auto.
     *
     * @param bool $clotureArchivageAuto The cloture archivage auto.
     */
    public function setClotureArchivageAuto($clotureArchivageAuto) {
        $this->clotureArchivageAuto = $clotureArchivageAuto;
        return $this;
    }
}
