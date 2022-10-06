<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

/**
 * Stylesheet manager trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
trait StylesheetManagerTrait {

    /**
     * Stylesheet manager.
     *
     * @var StylesheetManager|null
     */
    private $stylesheetManager;

    /**
     * Get the stylesheet manager.
     *
     * @return StylesheetManager|null Returns the stylesheet manager.
     */
    public function getStylesheetManager(): ?StylesheetManager {
        return $this->stylesheetManager;
    }

    /**
     * Set the stylesheet manager.
     *
     * @param StylesheetManager|null $stylesheetManager The stylesheet manager.
     * @return self Returns this instance.
     */
    protected function setStylesheetManager(?StylesheetManager $stylesheetManager): self {
        $this->stylesheetManager = $stylesheetManager;
        return $this;
    }
}
