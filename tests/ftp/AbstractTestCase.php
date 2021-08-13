<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests;

use PHPUnit\Framework\TestCase;
use WBW\Library\Security\Authenticator;
use WBW\Library\Security\PasswordAuthentication;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Ftp\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    protected $authenticator;

    /**
     * Local directory.
     *
     * @var string
     */
    protected $localDir;

    /**
     * Local file.
     *
     * @var string
     */
    protected $localFile;

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    protected $passwordAuthentication;

    /**
     * Remote directory.
     *
     * @var string
     */
    protected $remoteDir;

    /**
     * Remote file.
     *
     * @var string
     */
    protected $remoteFile;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        //
        $this->remoteDir  = "/pub";
        $this->remoteFile = "/readme.txt";

        $this->localDir  = realpath(__DIR__ . "/..");
        $this->localFile = implode("", [$this->localDir, $this->remoteFile]);

        if (true === file_exists($this->localFile)) {
            unlink($this->localFile);
        }

        // Set a Password authentication mock.
        $this->passwordAuthentication = new PasswordAuthentication("demo", "password");

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("test.rebex.net", $this->passwordAuthentication);
        $this->authenticator->setPort(null);
    }
}
