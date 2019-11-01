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
 * Vir comptable sub trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirComptableSubTrait {

    /**
     * Vir comptable sub.
     *
     * @var string
     */
    private $virComptableSub;

    /**
     * Get the vir comptable sub.
     *
     * @return string Returns the vir comptable sub.
     */
    public function getVirComptableSub() {
        return $this->virComptableSub;
    }

    /**
     * Set the vir comptable sub.
     *
     * @param string $virComptableSub The vir comptable sub.
     */
    public function setVirComptableSub($virComptableSub) {
        $this->virComptableSub = $virComptableSub;
        return $this;
    }
}
