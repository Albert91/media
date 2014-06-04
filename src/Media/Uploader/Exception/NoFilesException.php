<?php
/**
 * This file is part of Vegas package
 *
 * @author Adrian Malik <adrian.malik.89@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vegas\Media\Uploader\Exception;

use Vegas\Media\Uploader\Exception as VegasMediaUploaderException;

class NoFilesException extends VegasMediaUploaderException
{
    protected $message = 'No files in uploader set';
}
