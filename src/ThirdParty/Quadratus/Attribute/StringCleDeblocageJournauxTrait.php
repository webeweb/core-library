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
 * Cle deblocage journaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleDeblocageJournauxTrait {

    /**
     * Cle deblocage journaux.
     *
     * @var string
     */
    private $cleDeblocageJournaux;

    /**
     * Get the cle deblocage journaux.
     *
     * @return string Returns the cle deblocage journaux.
     */
    public function getCleDeblocageJournaux() {
        return $this->cleDeblocageJournaux;
    }

    /**
     * Set the cle deblocage journaux.
     *
     * @param string $cleDeblocageJournaux The cle deblocage journaux.
     */
    public function setCleDeblocageJournaux($cleDeblocageJournaux) {
        $this->cleDeblocageJournaux = $cleDeblocageJournaux;
        return $this;
    }
}
