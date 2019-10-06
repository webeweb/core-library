<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Scraping\API;

/**
 * Scraping cleaner set interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Scraping\API
 */
interface ScrapingCleanerSetInterface {

    /**
     * Add a cleaner.
     *
     * @param ScrapingCleanerInterface $cleaner The cleaner.
     * @return ScrapingCleanerSetInterface Returns this cleaner set.
     */
    public function addCleaner(ScrapingCleanerInterface $cleaner);

    /**
     * Clean a value.
     *
     * @param string $value The value.
     * @return mixed Return the cleaned value.
     */
    public function clean($value);

    /**
     * Get the cleaners.
     *
     * @return ScrapingCleanerInterface[] Returns the cleaners.
     */
    public function getCleaners();

    /**
     * Remove a cleaner.
     *
     * @param ScrapingCleanerInterface $cleaner The cleaner.
     * @return ScrapingCleanerSetInterface Returns this cleaner set.
     */
    public function removeCleaner(ScrapingCleanerInterface $cleaner);
}
